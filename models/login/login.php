<?php
require_once('../../configuration/connect.php');

class LoginModel extends Connect {
    function __construct() {
        parent::__construct();
    }

    public function fazerLogin($cpf, $senha) {
        $query = "SELECT senha1, id, nome FROM usuarios WHERE cpf = :cpf";
        $sqlsaldo = "SELECT conta.saldo, conta.credito, conta.possui_cartao, conta.debito FROM usuarios JOIN conta ON usuarios.id = conta.id_usuario WHERE usuarios.id = :ids";
        
        $saldostmt = $this->connection->prepare($sqlsaldo);
        $stmt = $this->connection->prepare($query);

        if (!$saldostmt) {
            die("Erro ao preparar a consulta: " . print_r($this->connection->errorInfo(), true));
        }
        if (!$stmt) {
            die("Erro ao preparar a consulta: " . print_r($this->connection->errorInfo(), true));
        }

        $stmt->bindParam(':cpf', $cpf, PDO::PARAM_STR);

        if ($stmt->execute()) {
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($result) {
                $senhaArmazenada = $result["senha1"];
                $ids = $result["id"];
                $saldostmt->bindParam(':ids', $ids, PDO::PARAM_STR);

                $saldostmt->execute();
                $resultSaldo = $saldostmt->fetch(PDO::FETCH_ASSOC);
                if ($senha === $senhaArmazenada) {
                    $user_id = $result["id"];
                    $nome = $result["nome"];
                    $saldo = floatval($resultSaldo["saldo"]); // Converte o saldo para float
                    $credito = floatval($resultSaldo["credito"]); // Converte o saldo para float
                    $debito = floatval($resultSaldo["debito"]);
                    $cartao = $resultSaldo["possui_cartao"];
                    $stmt->closeCursor();
                    $saldostmt->closeCursor();
                    
                    session_start();
                    $_SESSION['nome'] = $nome;
                    $_SESSION['id'] = $user_id;
                    $_SESSION['saldo'] = $saldo;
                    $_SESSION['credito'] = $credito;
                    $_SESSION['possui_cartao'] = $cartao;
                    $_SESSION['debito'] = $debito;
                    return "Login feito com sucesso";
                    // header("Location: home.php");
                } else {
                    $stmt->closeCursor();
                    $saldostmt->closeCursor();
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