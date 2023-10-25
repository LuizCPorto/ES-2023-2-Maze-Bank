<?php

require_once('../../configuration/connect.php');

class ResetSenhaModel extends Connect {
    public function __construct(){
        parent::__construct();
    }

    public function Resetasenha($cpfUsuario, $senha1, $senha2){
        $query = "UPDATE usuarios SET senha1 = :senha1 , senha2 = :senha2 WHERE cpf = :cpf";

        $stmt = $this->connection->prepare($query);

        if (!$stmt) {
            die("Erro ao preparar a consulta: " . print_r($this->connection->errorInfo(), true));
        }

        $stmt->bindParam(':senha1', $senha1, PDO::PARAM_STR);
        $stmt->bindParam(':senha2', $senha2, PDO::PARAM_STR);
        $stmt->bindParam(':cpf', $cpfUsuario, PDO::PARAM_STR);

        if ($stmt->execute()) {
            if ($stmt->rowCount() > 0) {
                $stmt->closeCursor();
                session_start();
                header("Location: ../../index.html");
            } else {
                $stmt->closeCursor();
                return "CPF não encontrado.";
            }
        } else {
            return "Erro ao executar a consulta: " . print_r($stmt->errorInfo(), true);
        }
    }
}
