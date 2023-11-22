<?php
require_once(__DIR__ . '/../../configuration/connect.php');

class modelSolicitarCartao extends Connect
{

    function __construct()
    {
        parent::__construct();
    }

    public function solicitarCartao($id_usuario, $possui_cartao)
    {
        $query = "UPDATE conta SET possui_cartao = :possui_cartao WHERE id_usuario = :id_usuario";

        $stmt = $this->connection->prepare($query);

        if (!$stmt) {
            die("Erro ao preparar a consulta: " . print_r($this->connection->errorInfo(), true));
        }

        $stmt->bindParam(':id_usuario', $id_usuario, PDO::PARAM_INT);
        $stmt->bindParam(':possui_cartao', $possui_cartao, PDO::PARAM_STR);

        if ($stmt->execute()) {
            if ($stmt->rowCount() > 0) {
                $stmt->closeCursor();
                // header("Location: ../../views/painelCliente.php");
                echo "<script>
                        setTimeout(function() {
                         alert('Solicitação concluída com sucesso!');
                         window.location.href = '../../views/painelCliente.php';
                    }, 1000);
                    </script>";
            } else {
                $stmt->closeCursor();
                return "ID de usuário não encontrado.";
            }
        } else {
            return "Erro ao executar a consulta: " . print_r($stmt->errorInfo(), true);
        }
    }
}
