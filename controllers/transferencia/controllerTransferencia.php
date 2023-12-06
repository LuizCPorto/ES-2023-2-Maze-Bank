<?php

session_start();

require_once __DIR__ . "/../../models/transferencia/modelTransferencia.php";

class controllerTransferencia
{
    function fazerTransferencia($chave, $valor)
    {
        if ($_SESSION['saldo'] < $valor) {
            return "Saldo insuficiente!";
        }

        if ($valor < 0) {
            return "Valor invalido!";
        }


        $model = new modelTransferencia;

        if ($model->emailExiste($chave)) {

            $model->transferir($chave, $valor);
            $_SESSION['saldo'] = $_SESSION['saldo'] - $valor;
            return "Operação efetuada!";
        }
        return "Chave não encontrada.";
    }
}
