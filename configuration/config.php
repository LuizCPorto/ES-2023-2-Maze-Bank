<?php

namespace App\Config;

use mysqli;

class Conexao
{
    function conectarBancoDeDados()
    {
        $dbhost = 'monorail.proxy.rlwy.net';
        $dbUsername = 'root';
        $dbPassword = 'a31BEc6fbFBF3EBb3b1f-6dc32ge-CB5';
        $dbName = 'railway';

        $conexao = new mysqli($dbhost, $dbUsername, $dbPassword, $dbName);

        if ($conexao->connect_errno) {
            die("Erro na conexão com o banco de dados: " . $conexao->connect_error);
        }

        return $conexao;
    }
}
