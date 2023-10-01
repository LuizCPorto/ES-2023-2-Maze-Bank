<?php
$dbHost = 'Localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'mazebank';
$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    if(!empty($_GET['id']))
    {

        $id = $_GET['id'];

        $sqlSelect = "SELECT * FROM usuarios WHERE id_usuario=$id";

        $result = $conn->query($sqlSelect);

        if($result->num_rows > 0)
        {
            $sqlDelete = "DELETE FROM usuarios WHERE id_usuario=$id";
            $resultDelete = $conn->query($sqlDelete);
        }
    }
    header('Location: crud.php');
?>