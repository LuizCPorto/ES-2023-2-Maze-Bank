<?php

require_once('../../configuration/connect.php');

class EmailLoginModel extends Connect {
    function __construct() {
        parent::__construct();
    }

    public function fazerLogin($email) {
        $query = "SELECT email FROM usuarios WHERE email = :email";

        $stmt = $this->connection->prepare($query);

        if (!$stmt) {
            die("Erro ao preparar a consulta: " . $this->connection->errorInfo());
        }

        $stmt->bindParam(':email', $email, PDO::PARAM_STR);

        if ($stmt->execute()) {
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($result) {
                $stmt->closeCursor();
                session_start();
                header("Location: ../../views/resetSenha/resetSenha.html");
            } else {
                $stmt->closeCursor();
                return "Email não encontrado.";
            }
        } else {
            return "Erro ao executar a consulta: " . print_r($stmt->errorInfo(), true);
        }
    }
}
