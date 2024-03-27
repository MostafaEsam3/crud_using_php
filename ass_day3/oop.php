<?php

class db
{
    private $host = "localhost";
    private $userName = "root";
    private $pass = "";
    private $database = "user_register";
    private $connection = "";

    function __construct()
    {
        $this->connection = new PDO("mysql:host=$this->host;dbname=$this->database", $this->userName, $this->pass);
    }

    function get_connection()
    {
        return $this->connection;
    }

    function listData($tableName, $cond = 1)
    {
        return $this->connection->query("select * from $tableName where $cond");
    }

    function delete($tableName, $cond = 1)
    {
        return $this->connection->query("delete from $tableName where $cond");
    }  

}




// require("oop.php");
// $connection= new $db;

// $result= $connection->listData("user");




?>



<!-- $host = "localhost";
    $userName = "root";
    $pass = "";
    $database = "user_register";


    $connection = new mysqli($host, $userName, $pass, $database);



    if ($connection->connect_error) {
        die("failed: " . $conn->connect_error);
    } else {

    }


    $result = $connection->query("select * from user");
    $data = $result->fetch_all(); -->