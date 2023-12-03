<?php
session_start();
require_once(__DIR__ . '/../../configuration/connect.php');

class modelEmprestimo extends Connect
{
    function __construct() {
        parent::__construct();
    }

    private function sql($valorDoEmprestimo) {
        $id = $_SESSION["id"];
        $query = "UPDATE conta SET conta.saldo = conta.saldo + $valorDoEmprestimo, conta.debito = conta.debito + $valorDoEmprestimo WHERE conta.id_usuario = $id;";
        return $query;
    }

    public function fazerEmprestimo($valorDoEmprestimo) {
        try {
            $result = $this-> connection -> query($this-> sql($valorDoEmprestimo));
            $_SESSION["saldo"] += $valorDoEmprestimo;
            $_SESSION["debito"] += $valorDoEmprestimo;
            return $result;
        } catch (\PDOException $th) {
            echo "Deu problema: " . $th -> getMessage();
        }
    }


    public function pagarEmprestimo($pagamento) {
        try {
            $result = $this-> connection -> query($this-> sql(-$pagamento));
            $_SESSION["saldo"] -= $pagamento;
            $_SESSION["debito"] -= $pagamento;
            return $result;
        } catch (\PDOException $th) {
            echo "Deu problema: " . $th -> getMessage();
        }
    }

}