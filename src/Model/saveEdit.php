<?php 
$dbHost = 'Localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'mazebank';
$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if(isset($_POST['update']))
{
    $id = $_POST['id'];
    $nome = $_POST['usuario'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $senha = $_POST['senha1'];
    $senha2 = $_POST['senha2'];
    $conta = $_POST['tipo'];
    $limite = $_POST['limite'];
    $premium = $_POST['premium'];
    if($senha != $senha2){
        echo "Senhas não coincidem";
    }
    else{
        $sqlUpdate = "UPDATE usuarios SET email='$email',usuario='$nome',cpf='$cpf',senha1='$senha',senha2='$senha2',conta='$conta',limite='$limite',premium='$premium' WHERE id_usuario ='$id'";
        $result = $conn->query($sqlUpdate);
    }
}
header('Location: ../View/crud.php');
?>