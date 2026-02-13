<! ø !>
<?php
if(isset($_POST['send'])) {
     $errormsg = "";
     $dato = $_POST['dato']; 
     $levendor = $_POST['service_report'];
     $asap = $_POST['asap']; 
     $intal = $_POST['intal'];
     $antal = $_POST['antal'];
     $kap = $_POST['kap'];
     $volt = $_POST['volt'];
     $diameter = $_POST['diamenter'];
     $hoj = $_POST['hoj'];
     $kon = $_POST['kon'];
     $vare_nr = $_POST['vare_nr'];
     $antallager = $_POST['antallager'];
     $antalbrugt = $_POST['antalbrugt'];
     $lagertjek = $_POST['lagertjek'];
     $lagertjekto = $_POST['lagertjekto'];
     if ($side == 'LYT'){ $type='LYT'; }
     if ($side == 'CCFL'){ $type='CCFL';}
     $result  = mysqli_query($conn, "SELECT * FROM promed WHERE id='$_SESSION[uid]'");
                while($row = mysqli_fetch_assoc($result)) { 
		$afd = $row['afd']; }
	 mysqli_query($conn, "INSERT INTO `proservice_kom` (`dato`, `levendor`, `service_rapport`, `intal`, `vare_nr`, `vare_beskrivelse`, `antal`) VALUES ('$dato','RS','$levendor','$intal','$type','$kap $volt','$antal')");
        if(is_numeric($levendor)) {
         $result2 = mysqli_query($conn, "SELECT * FROM proservice_kom WHERE service_rapport = '$levendor' ORDER BY id DESC LIMIT 1");
         while($row2 = mysqli_fetch_assoc($result2)) { 
         $id2 = $row2['id'];
         $vare_beskrivelse = 'EL-LYT '.$kap.'u '.$volt.'V ';
	 include("tiluni.php");
         mysqli_query($conn, "INSERT INTO `proorder` (`vare_nr`,`id2`, `dato`, `service_report`, `asap`, `intal`, `antal`,`afd`, `kapacitet`, `volt`, `diameter`, `hojde`, `konstruction`, `flag`) VALUES ('$vare_nr','$id2','$dato','$levendor','$asap','$intal','$antal','$afd','$kap','$volt','$diameter','$hoj','$kon','$type')");
	 } } else {
         mysqli_query($conn, "INSERT INTO `proorder` (`vare_nr`,`dato`, `service_report`, `asap`, `intal`, `antal`,`afd`, `kapacitet`, `volt`, `diameter`, `hojde`, `konstruction`, `flag`) VALUES ('$vare_nr','$dato','$levendor','$asap','$intal','$antal','$afd','$kap','$volt','$diameter','$hoj','$kon','$type')");
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
 
if($lagertjek == 'JA'){
if($lagertjekto == 'JA'){

$mail = new PHPMailer(); 
 
$mail->IsSMTP();  // telling the class to use SMTP 
$mail->Host    = "localhost"; // SMTP server 
$mail->CharSet = 'UTF-8';
$mail->setFrom('teknik@proconsult.as', 'Lager tjek'); 
$mail->AddAddress('order@proconsultwebshop.dk'); 
 
$mail->Subject  = "$navn har lavet en laget tjek af lytter"; 
$mail->Body    = "$navn har tjekket laget og fundet at vi har: \r\n\r\n $antallager stk. Tilbage paa lager af: $kap $volt i $kon\r\n $navn har taget: $antalbrugt \r\nDe er genbestilt paa vare nr: $vare_nr \r\nHos: $service_report \r\n\r\n tjekket sket i $afd"; 
$mail->WordWrap = 300; 

if(!$mail->Send()) { 
  echo 'Message was not sent.'; 
  echo 'Mailer error: ' . $mail->ErrorInfo; 
}}} 

if($asap == 'JA'){
$tekst2 = 'SOM HASTER'; }

$mail = new PHPMailer(); 
 $mail->CharSet = 'ANSI';
$mail->IsSMTP();  // telling the class to use SMTP 
$mail->Host    = "localhost"; // SMTP server 

$mail->setFrom('teknik@proconsult.as', 'Ny bestiling PROorder'); 
$mail->AddAddress('order@proconsultwebshop.dk'); 
 
$mail->Subject  = "$navn har lagt vare paa lyt listen $tekst2"; 
$mail->Body    = "Der i vare paa lyt listen den $dato de er lagt paa af $navn med ordre id $id $tekst2 "; 
$mail->WordWrap = 300; 

if(!$mail->Send()) { 
  echo 'Message was not sent.'; 
  echo 'Mailer error: ' . $mail->ErrorInfo; 
}  

//new function  

$mail = new PHPMailer(); 
 $mail->CharSet = 'ANSI';
$mail->IsSMTP();  // telling the class to use SMTP 
$mail->Host    = "localhost"; // SMTP server 

$mail->setFrom('order@proconsult.as', 'PROordre'); 
$mail->AddAddress ($email) ; 
 
$mail->Subject  = "Bekræftesle af ordre$id til rapport $service_report $tekst2"; 
$mail->Body    = "Hej $navn. her er en bekræftesle af order$id på lyt til $service_report. Når den blever bestilt kommer der en mail på det."; 
$mail->WordWrap = 300; 

if(!$mail->Send()) { 
  echo 'Message was not sent.'; 
  echo 'Mailer error: ' . $mail->ErrorInfo; 
}  
?>
	<div class="top" style="background-color:green; color:#fff;">Mail nu sendt med info om din order</div>
<?php
}
?>