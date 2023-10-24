<?php

    require __DIR__ . '\..\..\vendor\autoload.php';
    use Firebase\JWT\JWT;

    require_once('../../models/login/login.php');

    class loginController{
        private $model;

        function __construct()
        {
            $this->model = new LoginModel();
        }

        public function realizarLogin($nome,$senha){
            if (empty($nome) || empty($senha)) {
                return "Por favor, preencha todos os campos.";
            }
            if($nome == 'admin' and $senha == 'admin'){
                return 'admin';
                header('Location: ../../../../routes/crud/crudIndex.php');
                exit;
            }
            else{
                $resultado = $this->model->fazerLogin($nome,$senha);
                
                $payload = [
                    "exp" => time() + 3600,
                    "iat" => time(),
                    "email" => $nome,
                ];
                
                $jwtKey = "62486684269Pp2023";
                $token = JWT::encode($payload, $jwtKey, "HS256");

                setcookie('jwt_token', $token, time() + 3600, '/');
                echo $resultado;
            }
        }
    }
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $loginController = new loginController();
    $nome = $_POST['nomeUsuario'];
    $senha = $_POST['senha'];
    $resultadoLogin = $loginController->realizarLogin($nome, $senha);
    echo $resultadoLogin;
}
?>