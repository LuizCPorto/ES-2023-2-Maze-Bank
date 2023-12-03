<?php
require_once __DIR__ . "/../../models/Emprestimo/modelEmprestimo.php";
define("EMPRESTIMO_MAXIMO", 15000.00);


class controllerEmprestimo
{
    function efetuarEmprestimo($valor)
    {
        if (empty($valor)) {
            return "Preencha corretamente o campo!";
        }
        if ($valor > $_SESSION["emprestimo_disponivel"]) {
            return "Valor maior que emprestimo disponivel!";
        } else {
            $model = new modelEmprestimo;
            if ($model->fazerEmprestimo($valor)) {
                $_SESSION["emprestimo_disponivel"] = EMPRESTIMO_MAXIMO - $_SESSION["debito"];
                return "Operação efetuada!";
            }
            return "Erro!!!!";
        }
    }

    function devolverEmprestimo($valor)
    {
        if ($valor > $_SESSION["saldo"]) {
            return "Saldo insuficiente!";
        }

        if (empty($valor)) {
            return "Preencha o campo!";
        }

        $model = new modelEmprestimo;
        if ($model -> pagarEmprestimo($valor)) {
            $_SESSION["emprestimo_disponivel"] = EMPRESTIMO_MAXIMO - $_SESSION["debito"];
            return "Operação efetuada!";
        }

        return "Erro!!!";
    }
}
