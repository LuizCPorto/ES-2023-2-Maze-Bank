<?php
require_once('../../models/deposito/deposito.php');

class depositoController {
    private $model;

    public function __construct() {
        $this->model = new modelDeposito;
    }

    public function depositar($cpfUsuario, $valorDeposito) {
        if (empty($cpfUsuario) || empty($valorDeposito)) {
            return "Preencha todos os campos";
        }

        $resultado = $this->model->fazerDepósito($cpfUsuario, $valorDeposito);
        return $resultado;
    }
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $depositoController = new depositoController();
    $cpfUsuario = $_POST['cpfUsuario'];
    $valorDeposito = floatval($_POST['valorDeposito']); // Certifique-se de que o valor seja um número
    $resultadodeposito = $depositoController->depositar($cpfUsuario, $valorDeposito);
    echo $resultadodeposito;
}
?>
