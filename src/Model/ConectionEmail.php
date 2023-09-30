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
    public function teste($emailUsuario) {
        $query = "SELECT email FROM usuarios WHERE email = '$emailUsuario'";
        $result = $this->conn->query($query);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $emailU = $row["email"];

            if ($emailUsuario === $emailU) {
                $this->conn->close();
                return "Link enviado pelo email ";
            } else {
                $this->conn->close();
                return "email incorreto.";
            }
        } else{
            $this->conn->close();
            return "Email não encontrado.";
        }
    }

    public function fazerEmail ($emailUsuario){
        $query = "SELECT email from usuarios where email = ?";

        $stmt = $this->conn->prepare($query);

        if (!$stmt) {
            die("Erro ao preparar a consulta." . $this->conn->error);
        }

        $stmt->bind_param("s", $emailUsuario);

        if ($stmt->execute()){
            $result = $stmt->get_result();

            if($result->num_rows > 0){
                $row = $result->fetch_assoc();
                $emailU = $row["email"];

                if ($emailUsuario === $emailU){
                    $stmt->close();
                    return "Link enviado pelo email";
                }else{
                    $stmt->close();
                    return "Email incorreto.";
                }

            }else{
                return "Erro ao executar a consulta";
            }
        }
    }
    
}
?>