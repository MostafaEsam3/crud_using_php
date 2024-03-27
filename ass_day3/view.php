<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<table class="table" border="2">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">name</th>
            <th scope="col">email</th>
            <th scope="col">address</th>
            <th scope="col">gender</th>


        </tr>
    </thead>





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
    
    // $result = $connection->query("select * from user where id= {$_GET['id']}");
    
    require("oop.php");
    $connection = new db();
    $result = $connection->listData("user","id={$_GET['id']}");
    
    $data = $result->fetch(PDO::FETCH_ASSOC);

    // $data = $result->fetch_assoc();
    echo " <tr>";
    foreach ($data as $oneRow) {
        echo " <td>$oneRow</td>";
    }
    echo "  </tr>";














    ?>
</table>