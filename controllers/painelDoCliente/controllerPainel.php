<?php

require __DIR__ . '/../../vendor/autoload.php';
require_once(__DIR__ . "/../../models/Painel/modelPainel.php");
use Firebase\JWT\JWT;
use Firebase\JWT\Key;

class controllerPainel 
{
    private $update;

    function __construct()
    {
        $this->update = new modelPainel();
    }

    public function inserirDados($nome,$email,$cpf,$senha1,$senha2){
        if(empty($email) || empty($cpf)){
            return "Por favor, preeencha todos os campos.";
        }
        elseif ($senha1 != $senha2) {
            return "Senhas sao diferentes.";
        }
        else{
            $resultado = $this->update->atualizarDadosDoUsuario($cpf,$nome,$email,$cpf,$senha1);
            return $resultado;
        }
    }

}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $registercontroler = new controllerPainel();
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $senha = $_POST['senha1'];
    $senha2 = $_POST['senha2'];
    $resultadoRegistro = $registercontroler->inserirDados($nome,$email,$cpf,$senha,$senha2);
    echo $resultadoRegistro;
    header("Location: ./../../index.html");
}