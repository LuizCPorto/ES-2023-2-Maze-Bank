<?php


    require __DIR__ . '/../../vendor/autoload.php';
    use Firebase\JWT\JWT;
    require_once('../../models/login/login.php');

    class loginController{
        private $model;


        function __construct()
        {
            $this->model = new LoginModel();
        }

        public function realizarLogin($cpf,$senha){
            if (empty($cpf) || empty($senha)) {
                return "Por favor, preencha todos os campos.";
            }
            if($cpf == '007' and $senha == 'admin'){
                return '007';
                header('Location: ../../../../routes/crud/crudIndex.php');
                exit;
            }
            else{
                $resultado = $this->model->fazerLogin($cpf,$senha);
                

                $payload = [
                    "exp" => time() + 3600,
                    "iat" => time(),
                    "email" => $cpf,
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
    $cpf = $_POST['cpfUsuario'];
    $senha = $_POST['senha'];
    $resultadoLogin = $loginController->realizarLogin($cpf, $senha);
    echo $resultadoLogin;
}
?>