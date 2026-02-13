<! ø !>
<?php
if(isset($_POST['ret_godkend'])) {

     $errormsg = "";
     $dato = $_POST['dato']; 
     $levendor = $_POST['service_report'];
     $service_report = $_POST['levendor']; 
     if($service_report == 'ANDRE') {
     $service_report = $_POST['andre_lev'];
     } 
     $vare_nr = $_POST['vare_nr']; 
     $vare_beskrivelse = $_POST['vare_beskrivelse']; 
     $asap = $_POST['asap']; 
     $intal = $_POST['intal'];
     $antal = $_POST['antal'];
     $id = $_POST['id'];
     $id2 = $_POST['id2'];
         mysqli_query($conn, "UPDATE `proorder` SET `dato`='$dato',`levendor`='$service_report',`service_report`='$levendor',`vare_nr`='$vare_nr',`vare_beskrivelse`='$vare_beskrivelse',`asap`='$asap',`intal`='$intal',`antal`='$antal' WHERE id='$id'"); 
         mysqli_query($conn, "UPDATE `proservice_kom` SET `dato`='$dato',`levendor`='$service_report',`service_rapport`='$levendor',`vare_nr`='$vare_nr',`vare_beskrivelse`='$vare_beskrivelse',`intal`='$intal',`antal`='$antal' WHERE id='$id2'"); 
     $id3 = $levendor;
     $id2 = str_replace(" ","","$id2");
         $result2 = mysqli_query($conn, "SELECT * FROM proservice_kom WHERE id = $id2");
         while($row2 = mysqli_fetch_assoc($result2)) {
         $vare_nr2 = $row2['vare_nr'];
         $service_report2 = $row2['service_rapport'];
         $id3 = $service_report2;
         }
         $id = $id2;
         if($service_report2 == $levendor){
         if($vare_nr2 == $vare_nr){include("upduni.php");}else{include("sletuni.php");include("tiluni.php");}}else{echo $id3; include("sletuni.php");include("tiluni.php");}
         ?>
	<div class="top">Varen er nu rettet</div> 
<?php } echo $service_report; ?>