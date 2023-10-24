<?php

require_once(__DIR__ . '/../../configuration/connect.php');


class modelPainel extends Connect
{
    function __construct() {
        parent::__construct();
    }

    public function pegarDadosDoUsuario($nome) {
       $cmd = $this ->connection -> prepare("SELECT * FROM usuarios WHERE nome = :nome");
       $cmd -> bindValue(":nome", $nome);
       $cmd -> execute();
       return $cmd->fetch(PDO::FETCH_ASSOC);
    }
}