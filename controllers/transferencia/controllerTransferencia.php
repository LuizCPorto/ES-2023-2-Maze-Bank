<?php

session_start();

require_once __DIR__ . "/../../models/transferencia/modelTransferencia.php";

class controllerTransferencia
{
    function fazerTransferencia($chave, $valor) {
        if ($_SESSION['saldo'] < $valor) {
            echo $_SESSION['saldo'];
            return "Saldo insuficiente!";
        }
        else {
            $model = new modelTransferencia;
            
            if ($model -> emailExiste($chave)) {

                $model -> transferir($chave, $valor);
                $_SESSION['saldo'] = $_SESSION['saldo'] - $valor;
                return "Transferencia efetuada.";
                
            }
            return "Chave não encontrada.";
        }
    }
}




if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $controller = new controllerTransferencia;
    $chave = $_POST["chave"];
    $valor = $_POST["valor"];
    $_SESSION["status_transferencia"] = $controller -> fazerTransferencia($chave, $valor);
    
    echo $_SESSION["status_transferencia"];
}

