<! ø !>
<?php 
$anslog = $_SESSION['uid'];
mysqli_query($conn, "INSERT INTO `log` (`ANS`, `IP`, `FUNKTION`,`NOTE`) VALUES ('$anslog','$ip','$funk','$note')");


 ?>