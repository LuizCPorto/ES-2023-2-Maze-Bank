<?php

// require __DIR__ . '/../../vendor/autoload.php';
require (__DIR__ . '/../../models/Cadastro/Cadastro.php');

// use Carli\Es20232MazeBank\Cadastro\CadastroModel;
use PHPUnit\Framework\TestCase;



class modelCadastroTest extends TestCase
{

     public function test_if_function_works(): void
     {
        $model = new CadastroModel;

        $nome = "Nome Qualquer";
        $email = "email@qualquer" . strval(rand(0, 100)) . ".com";
        $cpf = strval(rand(0, 99999999999));
        $senha = "1012";

        $this -> assertEquals("Registro feito com sucesso!", $model -> cadastrar($nome, $email, $cpf, $senha, $senha));
     }
    
}
