<?php

    define('HOST','monorail.proxy.rlwy.net');
    define('DATABASENAME','railway');
    define('USER','root');
    define('PASSWORD','a31BEc6fbFBF3EBb3b1f-6dc32ge-CB5');
    define('PORT','16613');

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