<?php
$rapport = $_GET['id'];
include_once('../../modul/mail/mail.php');
echo $rapport;
header("Location: http://192.168.1.132/teknik/uploads/$rapport");
die();
?>