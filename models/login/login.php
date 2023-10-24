<?php

require_once('../../configuration/connect.php');

class LoginModel extends Connect {
    function __construct() {
        parent::__construct();
    }

    public function fazerLogin($nome, $senha) {
        $query = "SELECT senha1 FROM usuarios WHERE nome = :nome";

        $stmt = $this->connection->prepare($query);

        if (!$stmt) {
            die("Erro ao preparar a consulta: " . $this->connection->errorInfo());
        }

        $stmt->bindParam(':nome', $nome, PDO::PARAM_STR);

        if ($stmt->execute()) {
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($result) {
                $senhaArmazenada = $result["senha1"];

                if ($senha === $senhaArmazenada) {
                    $stmt->closeCursor();
                    session_start();
                    $_SESSION['nome_do_usuario'] = $nome;
                    return "Login feito com sucesso";
                    header("Location: home.php");
                } else {
                    $stmt->closeCursor();
                    return "Senha incorreta.";
                }
            } else {
                $stmt->closeCursor();
                return "Usuário não encontrado.";
            }
        } else {
            return "Erro ao executar a consulta: " . print_r($stmt->errorInfo(), true);
        }
    }
}
