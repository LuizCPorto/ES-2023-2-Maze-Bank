<?php

require_once("./Connection.php");

class Cadastro
{

    

    function cadastro($username, $email, $cpf, $password): bool
    {
        $Conector = new Connection();
        $conexao = $Conector->getConnection();

        if ($this->usuarioNaoExisteNoBd($cpf, $email, $conexao)) {

            try {
                $conexao->query("INSERT INTO Usuarios (username, email, cpf, password) VALUES ('$username', '$email', '$cpf', '$password')");
                $conexao = null;
                // usuario cadastrado com sucesso
                return true;
            } catch (PDOException $th) {
                echo $th->getMessage();
            }

        } else {
            // email ou cpf ja existem
            $conexao = null;
            return false;
        }
    }

    private function usuarioNaoExisteNoBd($cpf, $email, PDO $conexao): bool
    {

        try {

            $sql = $conexao->query("SELECT * FROM Usuarios WHERE cpf = '$cpf' OR email = '$email';");
            $sql = $sql->fetchAll(PDO::FETCH_ASSOC);

        } catch (PDOException $th) {

            echo $th->getMessage();
        }

        return empty($sql);
    }


}
