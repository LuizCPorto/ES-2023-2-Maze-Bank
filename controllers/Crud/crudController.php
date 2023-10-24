<?php
    require_once('../../models/Crud/crudModel.php');

    class CrudController{
        private $model;

        function __construct()
        {
            $this->model = new CrudModel();
        }

        function getAll(){
            $resultData = $this->model->getAll();
            require_once('../../views/crud.php');
        }
    }

?>