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
    public function inserir($email,$usuario,$cpf,$senha1,$senha2){
     $query = "INSERT INTO usuarios (email, usuario, cpf, senha1, senha2) VALUES ('$email', '$usuario', '$cpf', '$senha1', '$senha2')";

     if($senha1 != $senha2){
        return "Senhas nao coincidem.";
     }
     else{
        if ($this->conn->query($query) === TRUE){
            $this->conn->close();
            return "Registro feito com sucesso!";
        }
        else{
            return "Nao foi possivel fazr o Cadastro.";
        }
     }
    }
}
?>