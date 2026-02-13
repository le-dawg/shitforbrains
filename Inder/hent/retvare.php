<?php
   if(isset($_POST['retvare'])) {
   $id = $_POST['id'];
     $pro = $_POST['producent']; 
     $varenr = $_POST['varenr'];
     $varebe = $_POST['varebe'];
     $type = $_POST['type'];
     $antal = $_POST['antal'];
     $levtid = $_POST['levtid'];
     $liste = $_POST['liste'];
     $rab1 = $_POST['rab1'];
     $kob = $_POST['kob'];
     $adv = $_POST['adv'];
     $rab2= $_POST['rab2'];
     $salg = $_POST['salg'];
     $total = $_POST['total'];
     $lev = $_POST['levrenandor'];
     $db = $_POST['db'];
     $valuta = $_POST['valuta'];
    
$date1 = date('Y-m-d', strtotime("$levtid"));
$date2 = date('Y-m-d');
$diff = strtotime("$date1") - strtotime("$date2");
$diff = (int) $diff;
$diff = $diff / 60;
$diff = $diff / 60;
$diff = round($diff / 24);

    mysqli_query($conn,"UPDATE `prosalg_kom` SET `valuta`='$valuta',`producent`='$pro',`varenr`='$varenr',`varebe`='$varebe',`type`='$type',`antal`='$antal',`leverandor`='$lev',`liste`='$liste',`rab1`='$rab1',`kob`='$kob',`adv`='$adv',`rab2`='$rab2',`salg`='$salg',`total`='$total',`db`='$db' WHERE id='$id'"); 
    mysqli_query($conn,"UPDATE `prosalg` SET `forvente`='$levtid' WHERE id='$_GET[id]'"); 

   header("Location:index.php?side=hentrapport&id=$_GET[id]");
   }
?>