<?php

require __DIR__ . '/../../vendor/autoload.php';
require_once(__DIR__ . "/../../models/Painel/modelPainel.php");
use Firebase\JWT\JWT;
use Firebase\JWT\Key;

// $token = $_COOKIE["jwt_token"];
// $decoded = JWT::decode($token, new Key("62486684269Pp2023", 'HS256'));
// $decoded_Array = (array) $decoded;

// $model = new modelPainel();
// $array = $model -> pegarDadosDoUsuario($decoded_Array["email"]);
// print_r($array);

class controllerPainel 
{
    public function __construct() {
        $this -> checkToken();
    }

    public function extrairDadosDoUsuario() {
        $token = $_COOKIE["jwt_token"];
        $decoded = (array) JWT::decode($token, new Key("62486684269Pp2023", 'HS256'));
        $model = new modelPainel();
        return $model -> pegarDadosDoUsuario($decoded["email"]); //$decoded["email"] == nome do usuario
    }

    private function checkToken() {
        if (!isset($_COOKIE["jwt_token"])) {
            header('Location: ./../index.html');
            exit;
        }
    }
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $cntrl = new controllerPainel();
    $dados = $cntrl ->extrairDadosDoUsuario();
    $antigoCpf = $dados["cpf"];

    $novoNome = $_POST["Usuario"];
    $email = $_POST["email"];
    $cpf = $_POST["cpf"];
    $senha = $_POST["senha"];

    $model = new modelPainel();
    $model ->atualizarDadosDoUsuario($antigoCpf, $novoNome, $email, $cpf, $senha);
    header("Location: ./../../index.html");
}