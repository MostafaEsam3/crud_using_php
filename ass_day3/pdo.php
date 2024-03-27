<?php


$host = "localhost";
$userName = "root";
$pass = "";
$database = "user_register";


$dns = 'mysql:dbname=user_register;host=127.0.0.1;port=3306';

$connection = new PDO($dns, $userName, $pass);

$stm = $connection->prepare('select * from user where id=?');

 $data = $stm->execute([4]);

$users = $stm->fetchAll(PDO::FETCH_ASSOC);

var_dump($users);





?>