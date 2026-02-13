<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php


session_start();
include_once("config.php");
include("input_cl.php");
include("menu_knapper.php");
include("sqlheader.php");
include('modul/tilbagesystem/sql/tilbage.php'); 
if(isset($_POST['hentrap'])){
$idraprap = $_POST['hentrapid'];
  header("Location:index.php?side=hentrapport&id=$idraprap");
}
?>
<html>
<head>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="scipts/skujl.js"></script>
<script type="text/javascript" src="scipts/soge.js"></script>
<script type="text/javascript" src="scipts/kompont.js"></script>
<script type="text/javascript" src="scipts/searchkomorder.js"></script>
<script type="text/javascript" src="scipts/searchkomlyt.js"></script>
<script type="text/javascript" src="../prosalg/scripts/pris.js"></script>
<meta http-equiv="X-UA-Compatible" content="IE=100" />
<meta name="language" content="danish"/>
<meta http-equiv='Content-Type' content='text/html; charset=ISO-8859-1' />
<link href="css.css" rel="stylesheet" type="text/css"/>
<link rel="icon" type="image/x-icon" href="https://proconsult.as/favicon.ico">

</head>
<body>
<?php
if(!isset($_SESSION['uid'])){
include_once('modul/autologin/autologin.php');
if(!isset($_SESSION['uid'])){
?>
<center>
<p>
Login nedenfor
</p>
<form method="POST" action="login.php">
Brugernavn:<br><input style="width:50%;" type="text" size="20" name="brugernavn" ><br>
Kodeord:<br><input style="width:50%;"type="password" size="20" name="password"><p>
<input class="inputindex" style="width:50%; text-align:center;" type="submit" value="Login" name="login">
</form>
</center>
<?php } }?>
<?php
if(isset($_SESSION['uid'])){
$bruger_id = $_SESSION['uid'];
if(!isset($_SESSION['admin'])){
$_SESSION['admin'] = 'nej'; }
if(!isset($_SESSION['proorder'])){
$_SESSION['proorder'] = 'nej'; }
?>
<?php 	if(isset($_POST['adminom'])) { $_SESSION['admin'] = 'ja'; } ?>

<?php	$result  = mysqli_query($conn,"SELECT * FROM promed WHERE id='$_SESSION[uid]'");
        while($row = mysqli_fetch_assoc($result)) { 
	$afd = $row['afd']; }
        if(isset($_POST['pro3'])) { $_SESSION['proorder'] = 'order'; }
	if(isset($_POST['proteknik'])) { $_SESSION['proorder'] = 'nej'; $_SESSION['admin'] = 'nej';}
?>


<?php             include_once("inder/main_menu2.php");
                  if(isset($_GET['side'])){
                    $sti = $_GET['side'].".php";
                    if(file_exists($sti))
                      include $sti;
else
                    header("Location:index.php?side=velkommen");} else
                    header("Location:index.php?side=velkommen");
          ?>

<?php } ?>
</body>
<title><?php if($_GET['side'] == 'velkommen'){$title = 'PROteknik :: Forside';} echo $title; ?></title>