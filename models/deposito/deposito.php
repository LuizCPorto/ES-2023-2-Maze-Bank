<?php
require_once(__DIR__ . '/../../configuration/connect.php');

class modelDeposito extends Connect {

    function __construct() {
        parent::__construct();
    }

    public function fazerDepósito($cpfUsuario, $valorDeposito) {
        $query = "UPDATE usuarios SET saldo = saldo + :valorDeposito WHERE cpf = :cpf";

        $stmt = $this->connection->prepare($query);

        if (!$stmt) {
            die("Erro ao preparar a consulta: " . print_r($this->connection->errorInfo(), true));
        }

        $stmt->bindParam(':cpf', $cpfUsuario, PDO::PARAM_STR);
        $stmt->bindParam(':valorDeposito', $valorDeposito, PDO::PARAM_STR);

        if ($stmt->execute()) {
            if ($stmt->rowCount() > 0) {
                $stmt->closeCursor();
                header("Location: ../../views/deposito.php");
            } else {
                $stmt->closeCursor();
                return "CPF não encontrado.";
            }
        } else {
            return "Erro ao executar a consulta: " . print_r($stmt->errorInfo(), true);
        }
    }
}
?>
