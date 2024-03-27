<?php

// $host = "localhost";
// $userName = "root";
// $pass = "";
// $database = "user_register";
// $connection = new mysqli($host, $userName, $pass, $database);
// if ($connection->connect_error) {
//     die("failed: " . $conn->connect_error);
// } else {

// }

// $result = $connection->query("delete from user where id= {$_GET['id']}");

require("oop.php");
$connection = new db();
$result = $connection->delete("user","id={$_GET['id']}");

// $data = $result->fetch(PDO::FETCH_ASSOC);


header("Location:list.php");







?>


















?>