<?php
   if(isset($_POST['tilfore'])) {
   $rapport = $_POST['id'];
     $pro = $_POST['producent']; 
     $varenr = $_POST['varenr'];
     $varebe = $_POST['varebe'];
     $type = $_POST['type'];
     $antal = $_POST['antal'];
     $lev = $_POST['lev'];
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
    
    mysqli_query($conn,"INSERT INTO `prosalg_kom` (`levtid`,`valuta`,`id2`,`producent`, `varenr`, `varebe` , `type`, `antal`, `leverandor`, `liste`, `rab1`, `kob`, `adv`, `rab2`, `salg`,`total`, `db`, `flag`) VALUES ('$levtid','$valuta','$rapport','$pro','$varenr','$varebe','$type','$antal','$lev','$liste','$rab1','$kob','$adv','$rab2','$salg','$total','$db','LEV')");
    mysqli_query($conn,"UPDATE `prosalg` SET `forvente`='$levtid' WHERE id='$_GET[id]'"); 

   header("Location:index.php?side=hentrapport&id=$rapport");
   }
?>