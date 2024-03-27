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

$result = $connection->query("select * from user where id= {$_GET['id']}");

$data = $result->fetch_assoc();

var_dump($data);
// var_dump($data['address']);

?>
<form action="successUpdate.php" method="post">
    <input type="hidden" id="id" name="id" value="<?php echo $data['id']; ?>">
    <label for="name">Name:</label><br>
    <input type="text" id="name" value="<?php echo $data['name']; ?>" name="name" required><br>
    <label for="email">Email:</label><br>
    <input type="email" id="email" value="<?php echo $data['email'] ?>" name="email" required><br>
    <label for="address">Address:</label><br>
    <input id="address" name="address" value="<?php echo $data['address'] ?>" required></input><br>
    <label for="gender">Gender:</label><br>
    <input id="gender" name="gender" value="<?php echo $data['gender'] ?>" required>



    <label for="country">Country</label>
    <select name="country" id="country">
        <option selected value="<?php echo $data['address'] ?> ">
            <?php echo $data['address'] ?>
        </option>

        <option value="assiut">Assiut</option>
        <option value="cairo">Cairo</option>
        <option value="alex">Alexandria</option>
    </select>

    <input type="submit" value="update">
</form>