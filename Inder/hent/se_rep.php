<?php 
session_start();
$id = $_GET['id'];
$_SESSION['uid2'] = $id;
$_SESSION['p_id'] = $_SESSION['p2_id'];
header("Location:../../index.php?side=hentrapport&id=$id&p_id=list");
$_SESSION['p3_id'] = 'index.php?side=hentrapport&id=$id&p_id=list';
?>