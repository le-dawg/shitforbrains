<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '002060';
$dbname = 'ooas_dk';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
mysqli_set_charset($conn,"utf8");
?>