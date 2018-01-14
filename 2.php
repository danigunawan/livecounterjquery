<?php
require_once('dbconfig.php');

//display the counter of the "real" table

$query = mysqli_query($con, 'SELECT COUNT(id) AS c FROM /*the real table you want to count here*/');
$array = mysqli_fetch_array($query);

echo $array['c'];
?>