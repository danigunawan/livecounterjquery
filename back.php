<?php
require_once('dbconfig.php');

//counter of our real table
$query1 = mysqli_query($con, 'SELECT COUNT(id) AS c FROM users');
$array1 = mysqli_fetch_array($query1);

//value stored in the secondary table
$query2 = mysqli_query($con, 'SELECT currentvalue AS cv FROM counter WHERE currentvalue IS NOT NULL');
$array2 = mysqli_fetch_array($query2);

//compare the two values
if($array1['c'] > $array2['cv']) {
    echo "true";
    $counter = $array1['c'];
    $update=mysqli_query($con, "UPDATE counter SET currentvalue = '$counter' WHERE currentvalue IS NOT NULL;");

}
else {
    echo "false";
}
?>