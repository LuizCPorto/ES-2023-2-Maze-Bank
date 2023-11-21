<?php

require_once(__DIR__ . '/../../configuration/connect.php');


class modelPainel extends Connect
{
    function __construct() {
        parent::__construct();
    }

    public function atualizarDadosDoUsuario($antigoCpf,$name, $email, $cpf, $senha) {
        echo $name . "<--------";
        $this -> connection -> query("UPDATE usuarios SET nome = '$name', email = '$email', cpf = '$cpf', senha1 = '$senha', senha2 = '$senha' WHERE cpf = '$antigoCpf';");
    }
}