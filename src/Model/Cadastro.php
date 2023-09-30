<?php

class Cadastro{
    private $dbHost = 'Localhost';
    private $dbUsername = 'carecocisk';
    private $dbPassword = '12345678';
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
     $queryBusca = "SELECT cpf,email FROM usuarios WHERE cpf = '$cpf' OR email = '$email'";
    $bucas = $this->conn->query($queryBusca);
    $row = mysqli_num_rows($bucas);

     if($senha1 != $senha2){
        return "Senhas nao coincidem.";
     }
     elseif($row > 0){
        $this->conn->close();
        return "Email ou CPF já cadastrado!";
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