<?php
require __DIR__ . '/../vendor/autoload.php';
require_once(__DIR__ . "/../models/Painel/modelPainel.php");


//use Firebase\JWT\JWT;
//use Firebase\JWT\Key;

$token = $_COOKIE["jwt_token"];

$decoded = JWT::decode($token, new Key("62486684269Pp2023", 'HS256'));
print_r($decoded);
echo "osh?";
$decoded_Array = (array) $decoded;
echo $decoded_Array["email"];

$model = new modelPainel();
$array = $model -> pegarDadosDoUsuario("fuck");
print_r($array);