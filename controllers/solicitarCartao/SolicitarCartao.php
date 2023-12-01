<?php
require_once('../../models/solicitarCartao/SolicitarCartao.php');

class SolicitarCartaoController {
    private $model;

    public function __construct() {
        $this->model = new modelSolicitarCartao();
    }

    public function solicitarCartao($id_usuario, $possui_cartao) {
        if (empty($id_usuario) || empty($possui_cartao)) {
            return "Preencha todos os campos";
        }

        $resultado = $this->model->solicitarCartao($id_usuario, $possui_cartao);
        return $resultado;
    }
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $solicitarCartaoController = new SolicitarCartaoController();
    $id_usuario = $_POST['id_usuario'];
    $possui_cartao = $_POST['possui_cartao'];
    $resultadoSolicitacao = $solicitarCartaoController->solicitarCartao($id_usuario, $possui_cartao);
    echo $resultadoSolicitacao;
}
?>
