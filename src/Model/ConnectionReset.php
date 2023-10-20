<?php
class Database{
    private $dbHost = 'Localhost';
    private $dbUsername = 'root';
    private $dbPassword = '';
    private $dbName = 'mazebank';
    private $conn;

    public function __construct() {
        $this->conn = new mysqli($this->dbHost, $this->dbUsername, $this->dbPassword, $this->dbName);

        if ($this->conn->connect_error) {
            die("Conexão falhou: " . $this->conn->connect_error);
        }
    }

    public function teste($cpfUsuario) {
        $query = "SELECT cpf FROM usuarios WHERE cpf = ?";
        $stmt = $this->conn->prepare($query);

        if (!$stmt) {
            die("Erro ao preparar a consulta: " . $this->conn->error);
        }

        $stmt->bind_param("s", $cpfUsuario);

        if ($stmt->execute()) {
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                $stmt->close();
                return "Senha atualizada com sucesso";
            } else {
                $stmt->close();
                return "CPF incorreto.";
            }
        } else {
            return "Erro ao executar a consulta";
        }
    }

    public function alterarSenha($cpfUsuario, $senha1, $senha2) {
        $query = "UPDATE usuarios SET senha1 = ? , senha2 = ? WHERE cpf = ?";
        $stmt = $this->conn->prepare($query);

        if (!$stmt) {
            die("Erro ao preparar a consulta: " . $this->conn->error);
        }

        $stmt->bind_param("sss", $senha1, $senha2, $cpfUsuario);

        if ($stmt->execute()) {
            $stmt->close();
            return "Senha atualizada com sucesso";
        } else {
            return "Erro ao atualizar a senha";
        }
    }
}