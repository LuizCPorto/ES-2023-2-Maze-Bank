<?php

include_once('../../configuration/cfg.php');

if(isset($_POST['update']))
{
    $id = $_POST['id'];
    $nome = $_POST['usuario'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $senha = $_POST['senha1'];
    $senha2 = $_POST['senha2'];
    // $conta = $_POST['tipo'];
    // $limite = $_POST['limite'];
    // $premium = $_POST['premium'];
    if($senha != $senha2){
        echo "Senhas não coincidem";
    }
    else{
        $sqlUpdate = "UPDATE usuarios SET email='$email',nome='$nome',cpf='$cpf',senha1='$senha',senha2='$senha2' WHERE id ='$id'";
        $result = $conn->query($sqlUpdate);
    }
}
header('Location: ../../routes/crud/crudIndex.php');
?>
?>