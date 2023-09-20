<?php
require_once '../Model/conectionLogin.php';

class LoginController {
    private $database;

    public function __construct() {
        $this->database = new Database();
    }

    public function realizarLogin($nomeUsuario, $senha) {
        if (empty($nomeUsuario) || empty($senha)) {
            return "Por favor, preencha todos os campos.";
        }

        $resultado = $this->database->fazerLogin($nomeUsuario, $senha);

        return $resultado;
    }
}
?>