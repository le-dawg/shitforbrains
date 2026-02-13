<?php
if (!empty($_GET['side'])) { 
if($_GET['side'] == 'order_bestil') {
$_SESSION['proorder'] = 'order';
} }

if(isset($_GET['retur'])) {
$_SESSION['proorder'] = 'nej';
$_SESSION['admin'] = 'nej';
header("Location:index.php?side=velkommen");
}

if(isset($_POST['afslut'])) {
$id = $_POST['id'];
header("Location:index.php?side=afslut&id=$id");
}

?>