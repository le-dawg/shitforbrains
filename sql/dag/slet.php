<?php if(isset($_POST['slet_line_dagseddel'])) {
     $errormsg = "";
     $id = $_POST['line_id'];
     $service_raport = $_POST['line_service'];
	mysqli_query($conn, "DELETE FROM `proservice_rapport` WHERE id='$id'");
	include('sletuni.php');
	$ip = $_SERVER['REMOTE_ADDR'];
	$funk = 'Slettet line dagseddel';
	$note = "Slettet line $id til service $service_raport";
	include('tillog.php');

 } ?>