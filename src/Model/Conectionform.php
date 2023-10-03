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

    public function teste($cpfUser){
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
                return "Dados atualizados com sucesso";
            } else {
                $stmt->close();
                return "CPF incorreto.";
            }
        } else {
            return "Erro ao executar a consulta";
        } 
    }
    public function configcont($cpfUser, $tipoConta, $limiteCartao, $tipoCliente) {
       $query = "UPDATE usuarios SET conta = ? , limite = ? , premium = ? WHERE cpf = ? ";
       $stmt = $this->conn->prepare($query);

       if (!$stmt){
        die("Erro ao preparar a consulta: " . $this->conn->error);
       }

       $stmt->bind_param("ssss", $cpfUser, $tipoConta, $limiteCartao, $tipoCliente);

       if ($stmt->execute()){
        $stmt->close();
        return "Dados atualizados com sucesso";
       } else{
        return "Erro ao atualizar os dados";
       }
    }
}
?>
