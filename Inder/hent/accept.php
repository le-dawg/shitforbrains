<?php
   if(!empty($_GET['funk'])) {
if($_GET['funk'] == 'accept'){
   $rapport = $_GET['id'];
     $test = 0;

$vref2 = $_POST['v_ref'];
$revk2 = $_POST['revk'];
$asap2 = $_POST['asap'];
$id2 = $_POST['id'];    
$lev = $_POST['levendor'];
$dato2 = date('d-m-Y');
$dato3 = date('Y-m-d H:i:s');

$result  = mysqli_query($conn,"SELECT * FROM promed WHERE intal='$vref2'");
                while($row = mysqli_fetch_assoc($result)) { 
		$afd = $row['afd']; }


$result  = mysqli_query($conn,"SELECT * FROM prosalg_kom WHERE id2='$id2'");
while($row = mysqli_fetch_assoc($result)) {
if(!isset($nummerflyt)){ $nummerflyt = 0; }
$nummerflyt = $nummerflyt + 1;
   }
if($nummerflyt != 0){
$result  = mysqli_query($conn,"SELECT * FROM prosalg_kom WHERE id2='$id2'");
while($row = mysqli_fetch_assoc($result)) {
$vare_beskrivelse = $row['producent'].' '.$row['type'];

$vare_nr = $row['varenr'];
$valuta = $row['valuta'];
$salg2 = $row['salg'];
$kob = $row['kob'];
$kost = $row['liste'];

	 mysqli_query($conn,"INSERT INTO `proservice_kom` (`dato`, `levendor`, `service_rapport`, `vare_nr`, `vare_beskrivelse`, `intal`, `antal`) VALUES ('$dato2','$lev','$revk2','$vare_nr','$vare_beskrivelse','$vref2','$antal')");
	 if(is_numeric($revk2)) {
         $result2 = mysqli_query($conn,"SELECT * FROM proservice_kom WHERE service_rapport = '$revk2' ORDER BY id DESC LIMIT 1");
         while($row2 = mysqli_fetch_assoc($result2)) { 
         $id22 = $row2['id'];
         include('tiluni.php');
         mysqli_query($conn,"INSERT INTO `proorder` (`id2`, `dato`, `levendor`, `service_report`, `vare_nr`, `vare_beskrivelse`, `asap`, `intal`, `antal`, `afd`) VALUES ('$id22','$dato2','$lev','$revk2','$vare_nr','$vare_beskrivelse','$asap2','$vref2','$antal','$afd')");
	 } } else {
         mysqli_query($conn,"INSERT INTO `proorder` (`dato`, `levendor`, `service_report`, `vare_nr`, `vare_beskrivelse`, `asap`, `intal`, `antal`, `afd`) VALUES ('$dato2','$lev','$revk2','$vare_nr','$vare_beskrivelse','$asap2','$vref2','$antal','$afd')");
         }

$nummerflyt = $nummerflyt - 1;

}}
	mysqli_query($conn,"UPDATE `prosalg` SET `status_kode`='9',`dato3`='$dato3' WHERE id='$rapport'");


require("class.phpmailer.php"); 

$mail = new PHPMailer(); 
 
$mail->IsSMTP();  // telling the class to use SMTP 
$mail->Host    = "192.168.1.132"; // SMTP server 
$mail->setFrom('oa@proconsult.as', 'PROorder'); 
$mail->AddAddress('oa@proconsultwebshop.dk'); 
 
$mail->Subject  = "Prisen på $rapport er godkent sæt igang"; 
$mail->Body    = "Prisen på $rapport er godkent sæt igang"; 

if(!$mail->Send()) { 
  echo 'Message was not sent.'; 
  echo 'Mailer error: ' . $mail->ErrorInfo; 
  }

?>
<div class="top">Du har flytte: <?php echo $rapport; ?> til PROorder under <?php echo $lev; ?></div>

<?php } } ?>