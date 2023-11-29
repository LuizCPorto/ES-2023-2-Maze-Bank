<?php

    require_once(__DIR__ . '../../../models/login/login.php');

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
            else{
                $resultado = $this->model->fazerLogin($cpf,$senha);
                return $resultado;
            }
        }

        public function test($cpf){
            echo "test";
            return $cpf;
        }

    }
//if ($_SERVER["REQUEST_METHOD"] === "POST") {
//    $loginController = new loginController();
//   $cpf = $_POST['cpfUsuario'];
//   $senha = $_POST['senha'];
//   $resultadoLogin = $loginController->realizarLogin($cpf, $senha);
//  echo $resultadoLogin;
//}
?>