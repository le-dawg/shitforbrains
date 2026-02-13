<! ø !>
<?php
if(isset($_POST['send'])) {
     $errormsg = "";
     $dato = $_POST['dato']; 
     $levendor = $_POST['service_report'];
     $link = $_POST['link'];
     $service_report = $_POST['levendor'];
     if($service_report == 'ANDRE') {
     $service_report = $_POST['andre_lev'];
     if(empty($_POST['andre_lev'])) {
     $service_report = 'div';
     } }
     $vare_nr = $_POST['vare_nr']; 
     $vare_beskrivelse = $_POST['vare_beskrivelse']; 
     $asap = $_POST['asap']; 
     $intal = $_POST['intal'];
     $antal = $_POST['antal'];
     $antallager = $_POST['antallager'];
     $antalbrugt = $_POST['antalbrugt'];
     $lagertjek = $_POST['lagertjek'];
     $lagertjekto = $_POST['lagertjekto'];


     $result  = mysqli_query($conn, "SELECT * FROM promed WHERE id='$_SESSION[uid]'");
                while($row = mysqli_fetch_assoc($result)) { 
		$afd = $row['afd']; }
	 mysqli_query($conn, "INSERT INTO `proservice_kom` (`dato`, `levendor`, `service_rapport`, `vare_nr`, `vare_beskrivelse`, `intal`, `antal`) VALUES ('$dato','$service_report','$levendor','$vare_nr','$vare_beskrivelse','$intal','$antal')");
         if(is_numeric($levendor)) {
         $result2 = mysqli_query($conn, "SELECT * FROM proservice_kom WHERE service_rapport = '$levendor' ORDER BY id DESC LIMIT 1");
         while($row2 = mysqli_fetch_assoc($result2)) { 
         $id2 = $row2['id'];
	 include("tiluni.php");
         mysqli_query($conn, "INSERT INTO `proorder` (`id2`, `dato`, `levendor`, `service_report`, `vare_nr`, `vare_beskrivelse`, `asap`, `intal`, `antal`, `afd`, `link`) VALUES ('$id2','$dato','$service_report','$levendor','$vare_nr','$vare_beskrivelse','$asap','$intal','$antal','$afd','$link')");
	 } } else {
         mysqli_query($conn, "INSERT INTO `proorder` (`dato`, `levendor`, `service_report`, `vare_nr`, `vare_beskrivelse`, `asap`, `intal`, `antal`, `afd`, `link`) VALUES ('$dato','$service_report','$levendor','$vare_nr','$vare_beskrivelse','$asap','$intal','$antal','$afd','$link')");
         $result2 = mysqli_query($conn, "SELECT * FROM proorder WHERE levendor = '$service_report ' ORDER BY id DESC LIMIT 1");
         while($row2 = mysqli_fetch_assoc($result2)) { 
         $id2 = $row2['id'];
}
	 include("tiluni.php");
} 
         $result3 = mysqli_query($conn, "SELECT * FROM proorder ORDER BY id DESC LIMIT 1");
         while($row3 = mysqli_fetch_assoc($result3)) { 
         $id = $row3['id'];
         }
require("class.phpmailer.php"); 
     $result5 = mysqli_query($conn, "SELECT * FROM promed WHERE intal = '$intal'");
     while($row5 = mysqli_fetch_assoc($result5)) {
     $email = $row5['email2'];
     $navn = $row5['navn'];  }
 
if($lagertjekto == 'JA'){

$mail = new PHPMailer(); 
 
$mail->IsSMTP();  // telling the class to use SMTP 
$mail->Host    = "localhost"; // SMTP server 
$mail->CharSet = 'UTF-8';
$mail->setFrom('order@proconsultwenshop.dk', 'Lager tjek'); 
$mail->AddAddress('order@proconsultwebshop.dk'); 
 
$mail->Subject  = "$navn har lavet en laget tjek af $vare_beskrivelse"; 
$mail->Body    = "$navn har tjekket laget og fundet at vi har: \r\n\r\n $antallager stk. Tilbage paa lager af: $vare_beskrivelse\r\n $navn har taget: $antalbrugt \r\nDe er genbestilt paa vare nr: $vare_nr \r\nHos: $service_report \r\n\r\n tjekket sket i $afd"; 
$mail->WordWrap = 300; 


if(!$mail->Send()) { 
  echo 'Message was not sent.'; 
  echo 'Mailer error: ' . $mail->ErrorInfo; 
}}

$mail = new PHPMailer(); 
 
if($asap == 'JA'){
$tekst2 = 'SOM HASTER'; }
$mail = new PHPMailer(); 
 
$mail->IsSMTP();  // telling the class to use SMTP 
$mail->Host    = "localhost"; // SMTP server 
$mail->CharSet = 'UTF-8';
$mail->setFrom('order@proconsultwenshop.dk', 'Ny bestiling PROorder'); 
$mail->AddAddress('order@proconsultwebshop.dk'); 
$mail->AddReplyTo("order@proconsult.as", "'PROordre");   
 
$mail->Subject  = "$navn har lagt vare i kurven til $service_report $tekst2 med id:$id"; 
$mail->Body    = "Der i vare i kuven til $service_report $tekst2 lagt i den $dato de er lagt i af $navn \r\n\r\nOrdre id: $id"; 
$mail->WordWrap = 300; 


if(!$mail->Send()) { 
  echo 'Message was not sent.'; 
  echo 'Mailer error: ' . $mail->ErrorInfo; 
}  

//new function  

$mail = new PHPMailer(); 
$mail->CharSet = 'UTF-8';
$mail->IsSMTP();  // telling the class to use SMTP 
$mail->Host    = "localhost"; // SMTP server 

$mail->setFrom('order@proconsultwebshop.dk', 'PROordre'); 
$mail->AddAddress ($email) ; 
$mail->AddReplyTo("oa@proconsult.as", "'PROordre");   
 
$mail->Subject  = "Bekraeftesle af ordre $id til rapport $levendor $tekst2"; 
$mail->Body    = "Hej $navn. her er en bekraeftesle af order$id på $vare_beskrivelse fra $service_report. \r\n\r\nNår den blever bestilt kommer der en mail på det.\r\nKommer der ikke en mail indefor forvente tid så kontakt Otto"; 
$mail->WordWrap = 300; 

if(!$mail->Send()) { 
  echo 'Message was not sent.'; 
  echo 'Mailer error: ' . $mail->ErrorInfo; 
}  
?>
	<div class="top">Mail nu sendt med info om din order</div>
<?php

}
?>