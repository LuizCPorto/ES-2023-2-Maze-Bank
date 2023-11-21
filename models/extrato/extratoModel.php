<?php
    require_once('../../configuration/connect.php')

    class ExtratoModel extends Connect{

        private $tabela;

        function __construct(){
            parent::__construct();
            $this->tabela = 'historico';
        }

        function getUser(){
            $select
            $sql = $this->connection->query()
        }
    }


?>