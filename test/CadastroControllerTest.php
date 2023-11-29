<?php
require_once __DIR__ . '../../vendor/autoload.php';

use PHPUnit\Framework\TestCase;


require_once(__DIR__ . '../../controllers/Cadastro/Cadastro.php');
class CadastroControllerTest extends TestCase
{
    public function testInserirDados()
    {
        $controller = new CadastroController();

        // Teste para campos vazios
        $this->assertEquals("Por favor, preeencha todos os campos.", $controller->inserirDados('', '', '', '', ''));

        // Teste com dados válidos
        $nome = 'John Doe';
        $email = 'john.doe@example.com';
        $cpf = '123.456.789-09';
        $senha1 = 'password123';
        $senha2 = 'password123';


        $this->assertEquals("Registro feito com sucesso!", $controller->inserirDados($nome, $email, $cpf, $senha1, $senha2));

    }
}

$unitTest = new CadastroControllerTest();
$results = $unitTest->testInserirDados();
if ($results == '') {
    echo "Teste Campos Vazios [OK]\nTeste Valores Validos [OK]";
}
else { 
    echo $results;
}
?>