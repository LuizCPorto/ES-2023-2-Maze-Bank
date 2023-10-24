<?php
    require_once('../../controllers/Crud/crudController.php');
    $action = !empty($_GET['a']) ? $_GET['a'] : 'getAll';
    
    $controller = new CrudController();
    $controller->{$action}();

?>