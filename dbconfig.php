<?php
define('HOST','localhost');
define('USER','phpmyadmin');
define('PASS','root');
define('DB','test2');


$con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');
?>