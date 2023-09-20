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

    public function fazerLogin($nomeUsuario, $senha) {
        $query = "SELECT senha1 FROM usuario WHERE nome = '$nomeUsuario'";
        $result = $this->conn->query($query);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $senhaArmazenada = $row["Senha"];

            if ($senha === $senhaArmazenada) {
                $this->conn->close();
                return "Login feito com sucesso";
            } else {
                $this->conn->close();
                return "Senha incorreta.";
            }
        } else {
            $this->conn->close();
            return "Usuário não encontrado.";
        }
    }
}
?>