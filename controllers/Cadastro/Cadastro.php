<?php

require_once('../../models/Cadastro/Cadastro.php');

class CadastroController{
    private $cadastro;

    function __construct()
    {
        $this->cadastro = new CadastroModel();
    }

    public function inserirDados($nome,$email,$cpf,$senha1,$senha2){
        if(empty($email) || empty($cpf)){
            return "Por favor, preeencha todos os campos.";
        }
        else{
            $resultado = $this->cadastro->cadastrar($nome,$email,$cpf,$senha1,$senha2);
            return $resultado;
        }
    }
}

if($_SERVER["REQUEST_METHOD"] === "POST") {
    $registercontroler = new CadastroController();
    $nome = $_POST['usuarioRegistro'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $senha = $_POST['senha1'];
    $senha2 = $_POST['senha2'];
    $resultadoRegistro = $registercontroler->inserirDados($nome,$email,$cpf,$senha,$senha2);
    echo $resultadoRegistro;
}

?>