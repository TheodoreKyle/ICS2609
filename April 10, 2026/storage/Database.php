<?php
    require_once("config/config.php");
    class Database {
        private $host = DB_HOST; 
        private $user = DB_USER; 
        private $password = DB_PASSWORD;
        private $dbname = DB_NAME; 
        private $connection;
        private $error;
        private $stmt;
        private $dbconnected = false; 

        function __construct() {
            // Set PDO Connection
            $dsn = 'mysql:host='.$this->host.';dbname='.$this->dbname; 
            $option = array(
                PDO::ATTR_PERSISTENT => true,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ); 

            try {
                $this->connection = new PDO($dsn, $this->user, $this->password, $option); 
                $this->dbconnected = true; 
            } catch (PDOException $e) {
                $this->error = $e->getMessage(); 
                $this->dbconnected = false; 
            }
        }

        function getError() {
            return $this->error; 
        }
        function isConnected() {
            return $this->dbconnected; 
        }
    }
?>