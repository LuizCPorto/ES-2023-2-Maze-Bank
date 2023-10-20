<?php

require_once '../Model/ConnectionReset.php';

class resetlogin {
    private $database;

    public function __construct() {
        $this->database = new Database();
    }

    public function trocarsenha($cpfUsuario, $senha1, $senha2) {
        if (empty($senha1)||empty($senha2)) {
            return "Por favor, preencha todos os campos.";
        }
        
        $resultadoReset = $this->database->alterarSenha($cpfUsuario ,$senha1, $senha2);

        
        if (strpos($resultadoReset, "Senha atualizada com sucesso") !== false) {
            
            header("Location: ../View/login.php");
            exit(); // Termina o script após o redirecionamento.
        } else {
            // Em caso de falha, redireciona o usuário de volta para a página de login com uma mensagem de erro.
            echo "erro";
            exit(); // Termina o script após o redirecionamento.
        }
    }
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $resetlogin = new resetlogin();
    $cpfUsuario = $_POST['cpfUsuario'];
    $senha1 = $_POST['senha1'];
    $senha2 = $_POST['senha2'];
    $resultadoReset = $resetlogin->trocarsenha($cpfUsuario,$senha1, $senha2);
    echo $resultadoEmail;
}

?>
