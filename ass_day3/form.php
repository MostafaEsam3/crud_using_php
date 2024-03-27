<?php
$error = [];
if (isset($_GET['error'])) {
$error = json_decode($_GET['error'], true);
}



?>







<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

  <!-- connect.php -->
  <form action="regController.php" method="post" enctype="multipart/form-data">
    <label for="fname">
      First Name
    </label>
    <input type="text" name="fname" id="fname">
    <?php

    // if (isset($_COOKIE['ff'])) {
    //   echo "first name must not less than 2 char";
    // }
    if (isset($error['firstName'])) {
      echo "first name must not less than 2 char";
    }
    ?>

    <br>
    <label for="lname">
      Last Name
    </label>
    <input type="text" name="lname" id="lname">
    <br>
    <label for="address">Address</label>
    <textarea name="address" id="address" cols="30" rows="10"></textarea>
    <br>
    <label for="country">Country</label>
    <select name="country" id="country">
      <option value="assiut">assiut</option>
      <option value="cairo">cairo</option>
      <option value="alex">alex</option>
    </select>
    <br>
    <label for="">Gender</label>

    <input type="radio" name="gender" value="Female"> <label for="">Female</label>
    <input type="radio" name="gender" value="Male"> <label for="">Male</label>

    <?php

    if (isset($error['gender'])) {
      echo "gender must provided ";

    }
    ?>
    <br>
    <!-- <label for="">Skills</label>
        <input type="checkbox" id="php" name="Skills[]" value="php">
        <label for="php">php</label>
        <input type="checkbox" name="Skills[]" id="MysQl" value="MysQl">
        <label for="php">MysQl</label>
        <br>
        <input type="checkbox" name="Skills[]" id="J2SE" value="J2SE">
        <label for="J2SE">J2SE</label>
        <input type="checkbox" name="Skills[]" id="PostgreeSQL" value="PostgreeSQL">
        <label for="PostgreeSQL">PostgreeSQL</label>
        <br> -->
    <!-- <label for="username">UserName</label>
        <input type="text" name="username" id="username">
        <br> -->
    <!-- <label for="password">password</label>
        <input type="text" name="password" id="password">
        <br> -->
    <!--        
        <label for="Department">Department</label>
            <input type="text"  value="iti_information" name="Department" readonly > -->

    <label for="Department">Department</label>
    <input type="text" value="" name="Department">
    <?php

    if (isset($error['email'])) {
      echo "email must provided ";

    }
    ?>

    <!-- <label for="code">Sh2131a</label>
        <p>please insert the code below box </p>
        <br> -->

    <br>
    <label for="fileUpload">Select a file:</label>
    <input type="file" id="fileUpload" name="img_reg" en>

    <br><br>
    <div style="margin-left: 20px;">
      <!-- <button>submit</button> -->
      <input type="submit" name="register" id="">
    </div>

  </form>



</body>

</html>



























<!-- <link rel="stylesheet" href="css/all.min.css">

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/index.css">
</head>
<body>
<div style="width: 50%; margin: auto;">
  <table class="table" border="2">
  <thead>
    <tr>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <td>mostafa</td>
    <td>kandeel</td>
    <td>mostafa@gmail.com</td>
    </tr>

    <tr>
      <td>mostafa</td>
      <td>kandeel</td>
      <td>mostafa@gmail.cpm</td>
      </tr>

  </tbody>
</table>
</div>




<script src="js/bootstrap.bundle.min.js"></script> -->