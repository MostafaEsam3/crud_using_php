<?php

// $host = "localhost";
// $userName = "root";
// $pass = "";
// $database = "user_register";



// $connection = new mysqli($host, $userName, $pass, $database);



// if ($connection->connect_error) {
//     die("failed: " . $conn->connect_error);
// } else {
//     echo "Connected to database";

// }

// // query 

// $email = $_POST['Department'];
// $password = $_POST['password'];
// $gender = $_POST['gender'];
// $user = $_POST['fname'];
// $address = $_POST['country'];



// $query = "INSERT INTO user (email, name,gender,address) VALUES ('$email', '$user ', '$gender','$address')";


// $connection->query($query);
// // closing
// $connection->close();
// header("Location: list.php");


if (isset($_POST['login'])) {
    try {
        $connection = new PDO("mysql:dbname=user_register;host=localhost", "root", "");
        $stm = $connection->prepare("select * from user where email=?");

        $stm->execute([$_POST['email']]);

        $data = $stm->fetch(PDO::FETCH_ASSOC);

        if ($data) {
            setcookie("email",$data['email']);
            header("Location:view.php?id={$data['id']}");

        } else {
            header("Location:login.php?error=1");
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }


} else if (isset($_POST['register'])) {
    function validate($data)
    {

        $data = trim($data);
        $data = addslashes($data);
        $data = htmlspecialchars($data);
        return $data;

    }

    $gender = validate($_POST['gender']);
    $user = validate($_POST['fname']);
    $address = validate($_POST['country']);
    $email = validate($_POST['Department']);

    $Errors = [];

    // i define error to can put in it errors and use it in form.php and acan use it 
    //and can check if error more than 0 it must be rturbn in thae same page 



    if (!$gender) {

    $Errors['gender'] = "gender must provided";
    }

    if (strlen($user) < 2) {

        $Errors['firstName'] = "first name must not less than 2 char";

    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $Errors['email'] = "email must be valid";
    }

    if (count($Errors) > 0) {
        header("Location:form.php?error=" . json_encode($Errors));
        // i make encode becouse its error array and url it mtake string only 
    } else {


        $img_name = $_FILES['img_reg']['name'];
        $img_from = $_FILES['img_reg']['tmp_name'];
        move_uploaded_file($img_from, "./img/" . $img_name);



        try {
            $connection = new PDO("mysql:dbname=user_register;host=localhost", "root", "");
            $stm = $connection->prepare("INSERT INTO user (email, name,gender,address,img) VALUES(?,?,?,?,?)");

            $stm->execute([$email, $user, $gender, $address, $img_name]);
            header("Location: list.php");
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
?>
