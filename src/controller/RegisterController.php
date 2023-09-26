<?php
require_once '../Model/Cadastro.php';

class RegisterController{
    private $cadastro;

    public function __construct() {
        $this->cadastro = new Cadastro();
    }   

    public function inserirdados($email,$nome,$cpf,$senha,$senha2){
        if(empty($email) || empty($cpf)){
            return "Por favor, preencha todos os campos.";
        }
        else{
           $result = $this->cadastro->inserir($email,$nome,$cpf,$senha,$senha2);
           return $result;
        }
    }
}
if($_SERVER["REQUEST_METHOD"] === "POST") {
    $registercontroler = new RegisterController();
    $nome = $_POST['usuario'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $senha = $_POST['senha1'];
    $senha2 = $_POST['senha2'];
    $resultadoRegistro = $registercontroler->inserirdados($email,$nome,$cpf,$senha,$senha2);
    echo $resultadoRegistro;
}
?>