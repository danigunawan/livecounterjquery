<?php
require_once('dbconfig.php');

//display the counter of the "real" table

$query = mysqli_query($con, 'SELECT COUNT(id) AS c FROM users');
$array = mysqli_fetch_array($query);

echo $array['c'];
?>