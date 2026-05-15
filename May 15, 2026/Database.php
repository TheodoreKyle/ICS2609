<?php

require_once("config.php");

class Database {

    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASSWORD;
    private $dbname = DB_NAME;

    private $connection;
    private $stmt;

    function __construct()
    {
        $dsn = "mysql:host=".$this->host.";dbname=".$this->dbname;

        $options = array(
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );

        $this->connection = new PDO(
            $dsn,
            $this->user,
            $this->pass,
            $options
        );
    }

    function query($query)
    {
        $this->stmt = $this->connection->prepare($query);
    }

    function bind($param, $value, $type = null)
    {
        if(is_null($type)) {

            switch(true) {

                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;

                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;

                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;

                default:
                    $type = PDO::PARAM_STR;
            }
        }

        $this->stmt->bindValue($param, $value, $type);
    }

    function execute()
    {
        return $this->stmt->execute();
    }

    function resultSet()
    {
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_OBJ);
    }

    function single()
    {
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_OBJ);
    }
}
?>