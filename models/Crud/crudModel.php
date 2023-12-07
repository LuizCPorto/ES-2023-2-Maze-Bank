<?php
    require_once('../../configuration/connect.php');

    class CrudModel extends Connect{ 
        private $table;

        function __construct()
        {
            parent::__construct();
            $this->table = 'usuarios';
        }

        function getAll()
        {
            $sqlSelect = $this->connection->query("SELECT * FROM $this->table");
            $resultQuery = $sqlSelect->fetchAll();
            return $resultQuery;
        }

    }

?>