<?php
require_once __DIR__ . '../../vendor/autoload.php';

use PHPUnit\Framework\TestCase;

require_once(__DIR__ . '../../controllers/login/Login.php');
class LoginControllerTest extends TestCase {
    public function testRealizarLogin() {
        $controller = new LoginController();

        $this->assertEquals("Por favor, preencha todos os campos.", $controller->realizarLogin('', ''));

        $cpf = '616.036.703-01';
        $senha = '123';
        $this->assertEquals("Login feito com sucesso", $controller->realizarLogin($cpf, $senha));
    }
}

$teste = new LoginControllerTest();
$resultado = $teste->testRealizarLogin();
if ($resultado == '') {
    echo "Teste Campos Vazios [OK]\nTeste Valores Validos [OK]";
}
else { 
    echo $resultado;
}
