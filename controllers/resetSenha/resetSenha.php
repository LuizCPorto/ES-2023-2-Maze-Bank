<?php

require_once('../../models/resetSenha/resetSenha.php');

class resetSenhaController{
    
    private $model;
    public function __construct(){  
        $this->model = new ResetSenhaModel;
    }

    public function recSenha($cpfUsuario, $senha1, $senha2){
        if (empty($cpfUsuario) || empty($senha1) || empty($senha2)){
            return "Preencha todos os campos";
        }

        $resultado = $this->model->Resetasenha($cpfUsuario, $senha1, $senha2);
        return $resultado; 
    }
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $resetSenhaController = new resetSenhaController();
    $cpfUsuario = $_POST['cpfUsuario'];
    $senha1 = $_POST['senha1'];
    $senha2 = $_POST['senha2']; 
    $resultadorest = $resetSenhaController->recSenha($cpfUsuario, $senha1, $senha2);    
    echo $resultadorest;
}
?>
