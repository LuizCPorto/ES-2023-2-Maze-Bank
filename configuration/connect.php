<?php

    define('HOST','containers-us-west-96.railway.app');
    define('DATABASENAME','railway');
    define('USER','root');
    define('PASSWORD','rA09CY5wO2Bkxy8FFvZV');
    define('PORT','8044');

    class Connect{
        protected $connection;

        function __construct()
        {
            $this->connectDatabase();
        }

        function connectDatabase()
        {
            try{
                $this->connection = new PDO('mysql:host='.HOST. ';port='. PORT.';dbname='.DATABASENAME,USER,PASSWORD);
            }
            catch(PDOException $e){
                echo "Error!".$e->getMessage();
                die();
            }
        }
    
    }

?>