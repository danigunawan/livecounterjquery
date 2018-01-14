<?php
define('HOST','YOUR_HOST_HERE');
define('USER','YOUR_USER_HERE');
define('PASS','YOUR_PASS_HERE');
define('DB','YOUR_DBNAME_HERE');


$con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');
?>