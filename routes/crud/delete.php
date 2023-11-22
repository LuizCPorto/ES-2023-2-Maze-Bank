<?php
include_once('../../configuration/cfg.php');

if(!empty($_GET['id']))
{

    $id = $_GET['id'];
    echo $id;

    $sqlSelect = "SELECT * FROM usuarios WHERE id=$id";

    $result = $conn->query($sqlSelect);

    if($result->num_rows > 0)
    {
        $sqlDelete = "DELETE FROM usuarios WHERE id=$id";
        $resultDelete = $conn->query($sqlDelete);
    }
}
header('Location: crudIndex.php');
?>
?>