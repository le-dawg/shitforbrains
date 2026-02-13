<?php
   if(!isset($_SESSION['p_id'])) {
   $_SESSION['p_id'] = 'list'; }
   if(isset($_GET['id'])) {
   $rapport = $_GET['id'];
   $_SESSION['uid2'] = $rapport;
   if(isset($_POST['set_rapp'])) {
   $rapport = $_POST['rapport-nummer'];
   $_SESSION['uid2'] = $rapport;
   } 
   if(isset($_POST['tekst_hent'])) {
   $rapport = $_POST['id'];
   }
   }else {
   $rapport = $_SESSION['uid2'];
   }
   if(isset($_POST['set_rapp'])) {
   $rapport = $_POST['rapport-nummer'];
   $_SESSION['uid2'] = $rapport;
   header("Location:index.php?side=hentrapport&id=$rapport");
   } 
?>