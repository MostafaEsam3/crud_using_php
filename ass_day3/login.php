

<form action="regController.php" method="post">

email <input type="text" name="email" id="">
<input type="submit" name="login">
<?php
if(isset($_GET['error'])){
  echo "no valid email";
}

?>

</form>