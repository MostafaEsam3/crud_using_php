<?php
$host = "localhost";
$userName = "root";
$pass = "";
$database = "user_register";
$connection = new mysqli($host, $userName, $pass, $database);
if ($connection->connect_error) {
    die("failed: " . $conn->connect_error);
} else {

}

$myupdate = "UPDATE user
        SET name = '{$_POST['name']}',
            address = '{$_POST['country']}',
            gender = '{$_POST['gender']}',
            email = '{$_POST['email']}'
        WHERE id = {$_POST['id']}";
echo $myupdate;

$connection->query($myupdate);





?>