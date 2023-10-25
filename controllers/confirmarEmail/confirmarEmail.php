<?php

require_once('../../models/confirmarEmail/confirmarEmail.php');

class EmailLoginController {
    private $model;

    function __construct() {
        $this->model = new EmailLoginModel();
    }

    public function realizarLogin($email) {
        if (empty($email)) {
            return "Por favor, preencha o campo de email.";
        }
        
        $resultado = $this->model->fazerLogin($email);
        return $resultado;
    }
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $emailLoginController = new EmailLoginController();
    $email = $_POST['emailUsuario']; 
    $resultadoLogin = $emailLoginController->realizarLogin($email);
    echo $resultadoLogin;
}
?>
