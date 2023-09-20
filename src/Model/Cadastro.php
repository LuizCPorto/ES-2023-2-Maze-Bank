<?php

class Cadastro{
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
    public function inserir($email,$username , $cpf, $senha1, $senha2){
        $query = "INSERT INTO usuarios (email, usuario, cpf, senha1, senha2) VALUES ('$email', '$username', '$cpf', '$senha1', '$senha2')";
        // Executar a consulta SQL
        if ($this->conn->query($query) === TRUE) {
            $this->conn->close();
            return true;
        } else {
            return false;
        }  
    }
}
?>