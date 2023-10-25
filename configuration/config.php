<?php

namespace App\Config;

use mysqli;

class Conexao
{
    function conectarBancoDeDados()
    {
        $dbhost = 'containers-us-west-96.railway.app:8044';
        $dbUsername = 'root';
        $dbPassword = 'rA09CY5wO2Bkxy8FFvZV';
        $dbName = 'railway';

        $conexao = new mysqli($dbhost, $dbUsername, $dbPassword, $dbName);

        if ($conexao->connect_errno) {
            die("Erro na conexão com o banco de dados: " . $conexao->connect_error);
        }

        return $conexao;
    }
}
