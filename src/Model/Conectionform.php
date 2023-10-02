<?php
class Database {
    private $dbHost = 'localhost';
    private $dbUsername = 'root';
    private $dbPassword = '';
    private $dbName = 'mazebank';
    private $conn;

    public function __construct() {
        $this->conn = new mysqli($this->dbHost, $this->dbUsername, $this->dbPassword, $this->dbName);

        if ($this->conn->connect_error) {
            die("Conexão falhou: " . $this->conn->connect_error);
        }
        session_start();
    }

    public function configcont($tipoConta, $limiteCartao, $tipoCliente) {
        if (isset($_SESSION['usuario'])) {
            $nomeuser = $_SESSION['usuario'];

            // Verifique se o usuário já possui um registro
            $query = "SELECT usuario FROM usuarios WHERE usuario = ?";
            $stmt = $this->conn->prepare($query);
            $stmt->bind_param("s", $nomeuser);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                return "Usuário já possui um registro.";
            } else {
                // Insira os dados do usuário
                $queryinser = "INSERT INTO usuarios (conta, limite, premium, usuario) VALUES (?, ?, ?, ?)";
                $stmt = $this->conn->prepare($queryinser);
                $stmt->bind_param("ssss", $tipoConta, $limiteCartao, $tipoCliente, $nomeuser);

                if ($stmt->execute()) {
                    return "Registrado";
                } else {
                    return "Erro ao registrar.";
                }
            }
        } else {
            return "Usuário não está logado.";
        }
    }
}
?>
