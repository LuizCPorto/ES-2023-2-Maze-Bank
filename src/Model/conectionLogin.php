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
        // start sessao
        session_start();
    }
    public function fazerLogin($nomeUsuario, $senha) {
        $query = "SELECT senha1 FROM usuarios WHERE usuario = ?";
        
        $stmt = $this->conn->prepare($query);
        
        if (!$stmt) {
            die("Erro ao preparar a consulta." . $this->conn->error);
        }
        
        $stmt->bind_param("s", $nomeUsuario);
        
        // Execute a consulta
        if ($stmt->execute()) {
            // Obtenha o resultado da consulta
            $result = $stmt->get_result();
            
            // Verifique se há algum resultado
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $senhaArmazenada = $row["senha1"];
                
                if ($senha === $senhaArmazenada) {
                    $stmt->close(); // Feche a declaração
                    $_SESSION['usuario'] = $nomeUsuario;
                    return "Login feito com sucesso";
                } else {
                    $stmt->close(); // Feche a declaração
                    return "Senha incorreta.";
                }
            } else {
                $stmt->close(); 
                return "Usuário não encontrado.";
            }
        } else {
            return "Erro ao executar a consulta.";
        }
    }
        // Função para verificar se o usuário está logado
        public function estaLogado() {
            return isset($_SESSION['usuario']);
        }
        
        // Função para fazer logout
        public function fazerLogout() {
            // Encerre a sessão
            session_destroy();
        }
    
}
?>