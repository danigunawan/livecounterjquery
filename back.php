<?php
require_once('dbconfig.php');

$query = mysqli_query($con, 'SELECT COUNT(_id) AS c FROM /*the real table you want to count here*/');
$array1 = mysqli_fetch_array($query);

//the table we used to compare
$query2 = mysqli_query($con, 'SELECT id AS c2 FROM counter2 WHERE id != 0');
$array2 = mysqli_fetch_array($query2);

//compare
if($array1['c'] > $array2['c2']) {
    echo "true";
    $counter = $array1['c'];
    $update=mysqli_query($con, "UPDATE counter2 SET id = '$counter' WHERE id != 0;");

}
else {
    echo "false";
}
?>