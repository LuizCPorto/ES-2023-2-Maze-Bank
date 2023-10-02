<?php

require_once '../Model/Conectionform.php';

class formController{

    private $form;

    public function __construct(){
        $this->form = new Database();
    }

    public function inserirdados($tipoConta, $limiteCartao, $tipoCliente){
        if(empty($tipoConta) || empty($limiteCartao)){
            return "Por favor, preencha todos os campos.";
        } else{
            $result = $this->form->configcont($tipoConta, $limiteCartao, $tipoCliente);
            return $result;
        }
    }

}

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $formController = new formController();
    $tipoConta = $_POST['tipoConta'];
    $limiteCartao = $_POST['limiteCartao'];
    $tipoCliente = $_POST['tipoCliente'];
    $resultdoform = $formController->inserirdados($tipoConta, $limiteCartao, $tipoCliente);
    echo $resultdoform;
}

?>