<?php
session_start();
require_once __DIR__ . "/../../configuration/connect.php";

class modelTransferencia extends Connect 
{
    function __construct() {
        parent::__construct();
    }

    function transferir($chave, $valor) : bool {
        $id = $_SESSION['id'];
        $query1 ="UPDATE conta co INNER JOIN usuarios us ON co.id_usuario = us.id SET co.saldo = co.saldo + $valor WHERE us.email = '$chave';";
        $query2 = "UPDATE conta SET conta.saldo = conta.saldo - $valor WHERE conta.id_usuario = $id;";

        if ($this -> connection -> query($query1) and $this -> connection -> query($query2)) {
            return true;
        }
        else {
            return false;
        }
    }

    function emailExiste($email) : bool {
        $sql = "SELECT email FROM usuarios WHERE email = :email;";
        $cmd = $this->connection -> prepare($sql);
        $cmd -> bindValue(":email", $email);
        $cmd -> execute();
        $result = $cmd -> fetch(PDO::FETCH_ASSOC);
        return !empty($result);
    }
}