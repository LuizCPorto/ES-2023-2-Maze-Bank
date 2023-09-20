<?php

require __DIR__ . '\..\..\vendor\autoload.php';
use Firebase\JWT\JWT;

require_once '../Model/conectionLogin.php';


class LoginController {
    private $database;

    public function __construct() {
        $this->database = new Database();
    }

    public function realizarLogin($nomeUsuario, $senha) {
        if (empty($nomeUsuario) || empty($senha)) {
            return "Por favor, preencha todos os campos.";
        }
        
        $resultado = $this->database->fazerLogin($nomeUsuario, $senha);

        if (strpos($resultado, "Login feito com sucesso") !== false) {
            // Se o login for bem-sucedido, gera um token JWT:
            $payload = [
                "exp" => time() + 3600, // Tempo de expiração do token (por exemplo, 1 hora)
                "iat" => time(), // Tempo de criação do token
                "email" => $nomeUsuario, // Use o nome de usuário como email
            ];

            // Substitua "sua_chave_secreta" pela sua chave real.
            $jwtKey = "62486684269Pp2023";

            $token = JWT::encode($payload, $jwtKey, "HS256");

            // Registre o token em um arquivo de log
            $logFile = fopen("token_log.txt", "a");

            if ($logFile) {
                // Registre o token no arquivo de log
                fwrite($logFile, "Token JWT gerado: " . $token . "\n");

                // Feche o arquivo de log
                fclose($logFile);
            } else {
                echo "Erro ao abrir o arquivo de log.";
            }

            setcookie('jwt_token', $token, time() + 3600, '/');

            // Redireciona para a página inicial após o login bem-sucedido.
            return $resultado;
            header("Location: ../view/home.php");
        } else {
            // Em caso de falha, redireciona o usuário de volta para a página de login com uma mensagem de erro.
            return $resultado;
            header("Location: ../view/Login.php?error=400");
            
        }
    }
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $loginController = new LoginController();
    $nomeUsuario = $_POST['nomeUsuario'];
    $senha = $_POST['senha'];
    $resultadoLogin = $loginController->realizarLogin($nomeUsuario, $senha);
    echo $resultadoLogin;
}
?>
