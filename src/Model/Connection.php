<?php
    class Connection {
        function GetConnection(): PDO {
            $host = "localhost";
            $dbname = "mazebank";
            $userName = "root";
            $password = "";
            
            try {
                $connection = new PDO("mysql:dbname=$dbname;host=$host", $userName, $password);
                return $connection;
            } catch (PDOException $th) {
                echo "Problema na conexão: " . $th->getMessage();
            } catch (Exception $e) {
                echo "Erro: " . $e->getMessage();
            }
        }
    }
?>