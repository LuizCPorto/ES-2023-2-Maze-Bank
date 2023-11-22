<?php

require_once(__DIR__ . '/../../configuration/connect.php');

class modelPainel extends Connect
{
    function __construct() {
        parent::__construct();
    }



    public function pagarEmprestimo() {
        
    }


    public function solicitarEmprestimo() {
        
    }

















    
    public function pegarDadosDoUsuario($nome) {
       $cmd = $this ->connection -> prepare("SELECT * FROM usuarios WHERE nome = :nome");
       $cmd -> bindValue(":nome", $nome);
       $cmd -> execute();
       return $cmd->fetch(PDO::FETCH_ASSOC);
    }

    public function atualizarDadosDoUsuario($antigoCpf,$name, $email, $cpf, $senha) {
        echo $name . "<--------";
        $this -> connection -> query("UPDATE usuarios SET nome = '$name', email = '$email', cpf = '$cpf', senha1 = '$senha', senha2 = '$senha' WHERE cpf = '$antigoCpf';");
    }
}