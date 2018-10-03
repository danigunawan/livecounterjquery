<?php
require_once('dbconfig.php');
$name = $_POST['name'];
if($name != NULL) {
$query = mysqli_query($con, "INSERT INTO users (name) VALUES ('$name')");
}
?>
<form action="" method="post">
  Name:<br>
  <input type="text" name="name"><br>

  <input type="submit" value="Submit">
</form>