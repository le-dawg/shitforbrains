<?php 
include_once("../../config.php");
session_start();
$id = $_SESSION['uid2'];
$rapport = $id;
$ans = $_SESSION['uid']; 
$up_data_date = date('j-m-Y');
$up_data_date2 = date('Y-m-d', strtotime("$up_data_date"));
     $result = mysqli_query($conn,"SELECT * FROM proservice WHERE id=$id");
     while($row = mysqli_fetch_assoc($result)) {
   $ans2 = $row['ans'];
     $result = mysqli_query($conn,"SELECT * FROM promed WHERE id='$ans'");
     while($row = mysqli_fetch_assoc($result)) {
	$navn_sql = $row['navn']; }
         mysqli_query($conn,"UPDATE `proservice` SET `ans`='$ans' WHERE id='$id'"); 
$con2 = odbc_connect("Driver={SQL Server};Server=PROSERVER\BKUPEXEC;Database=C530; CharacterSet => UTF-8", 'proteknik2', 'pro2060');
$sql = "UPDATE ORDKART SET SXLGER='$ans',VORREF='$navn_sql' WHERE DATASET ='DAT' AND NUMMER ='    $id'";
$resultSQL = odbc_exec($con2, $sql);
         mysqli_query($conn,"INSERT INTO `proservice_rapport` (`service_raport`, `timer`, `dato`, `dato2`, `beskivsle`, `ans`) VALUES ('$id','-','$up_data_date','$up_data_date2','$ans Har taget ansvare for opgaven fra $ans2','$ans')");
         $result = mysqli_query($conn,"SELECT * FROM proservice_rapport ORDER BY id DESC LIMIT 1");
         while($row = mysqli_fetch_assoc($result)) { 
 } } 
header("Location:../../index.php?side=hentrapport&id=$id");
?>