<?php


$host = "localhost";
$userName = "root";
$pass = "";
$database = "user_register";


$connection = new mysqli($host, $userName, $pass, $database);



if ($connection->connect_error) {
    die("failed: " . $conn->connect_error);
} else {
    echo "Connected to database";

}

// query 

$email = $_POST['Department'];
$password = $_POST['password'];
$gender = $_POST['gender'];
$user = $_POST['fname'];
$address = $_POST['country'];



$query = "INSERT INTO user (email, name,gender,address) VALUES ('$email', '$user ', '$gender','$address')";


$connection->query($query);
// closing
$connection->close();
header("Location: list.php");


?>