<?php

require_once '../Model/Conectionform.php';

class formController{

    private $database;

    public function __construct(){
        $this->database = new Database();
    }

    public function inserirdados($cpfUser, $tipoConta, $limiteCartao, $tipoCliente){
        if(empty($tipoConta) || empty($limiteCartao) || empty($cpfUser)){
            return "Por favor, preencha todos os campos.";
        }
        
        $result = $this->database->configcont($cpfUser ,$tipoConta, $limiteCartao, $tipoCliente);

        if (strpos($result, "Dados atualizados com sucesso") !== false){

            header("Location: ../View/home.php");
            exit();
        }else{
            echo "erro";
            exit();
        }
           


    }

}

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $formController = new formController();
    $cpfUser = $_POST['cpfUser'];
    $tipoConta = $_POST['tipoConta'];
    $limiteCartao = $_POST['limiteCartao'];
    $tipoCliente = $_POST['tipoCliente'];
    $result = $formController->inserirdados($cpfUser, $tipoConta, $limiteCartao, $tipoCliente);
    echo $result;
}

?>