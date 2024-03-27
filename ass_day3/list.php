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
            <th scope="col">img</th>
            <th scope="col">view</th>
            <th scope="col">update</th>
            <th scope="col">delete</th>


        </tr>
    </thead>


    <?php
    if (!isset($_COOKIE['email'])) {
        header("Location:login.php");
    }


    // $host = "localhost";
    // $userName = "root";
    // $pass = "";
    // $database = "user_register";
    

    // $connection = new mysqli($host, $userName, $pass, $database);
    


    // if ($connection->connect_error) {
    //     die("failed: " . $conn->connect_error);
    // } else {
    
    // }
    

    // $result = $connection->query("select * from user");
    // $data = $result->fetch_all();
    
    require("oop.php");
    $connection = new db();
    $result = $connection->listData("user");

    $data = $result->fetchAll(PDO::FETCH_NUM);




    // echo "<pre>";
    // var_dump($row[5]);
    // echo "</pre>";
    


    foreach ($data as $row) {
        echo "<tr>";

        foreach ($row as $key => $val) {

            if ($key == 5) {

                echo "<td> <img src='./img/$val' width='30px'></td>";
            } else {
                echo "<td>$val</td>";
            }
        }
        echo "<td><a href='view.php?id={$row[0]}'>view</a></td>";
        echo "<td><a href='update.php?id={$row[0]}'>update</a></td>";
        echo "<td><a href='delete.php?id={$row[0]}'>delete</a></td>";

        echo "</tr>";
    }


    ?>




</table>