<! ø !>
<?php
if(!empty($_GET['funk'])) {
if($_GET['funk'] == 'be'){
       $levendor = $_GET['lev']; 
       $id = $_GET['id'];  
       $afd = $_GET['afd']; 
       $bestilt_dato = date('d-m-Y'); 
       $bestilt_int = $_SESSION['uid'];
         mysqli_query($conn, "UPDATE proorder SET bestilt = 'JA', bestilt_dato = '$bestilt_dato', bestilt_int = '$bestilt_int' WHERE id='$id'");

          $result  = mysqli_query($conn, "SELECT * FROM proorder WHERE id='$id'");
          while($row = mysqli_fetch_assoc($result)) {
        $service_report = $row['service_report'];
        $vare_beskrivelse = $row['vare_beskrivelse'];
        $intal = $row['intal'];
        $afd3 = $row['afd'];        
	}
     $result5 = mysqli_query($conn, "SELECT * FROM promed WHERE intal = '$intal'");
     while($row5 = mysqli_fetch_assoc($result5)) {
     $email = $row5['email2'];
     $navn = $row5['navn'];
 }

if ($afd3 == 'LJ'){
$afd2 = 'Viby Sj.';
}
if ($afd3 == 'VJ'){
$afd2 = 'Vejle';
}

//new function  
require_once("class.phpmailer.php"); 

$mail = new PHPMailer(); 
$mail->ISsmtp();
$mail->CharSet = 'UTF-8';
$mail->From = "order@proconsultwebshop.dk";
$mail->FromName = "PROordre";
$mail->AddAddress ($email); 
$mail->AddReplyTo("oa@proconsult.as", "'PROordre");   

 
$mail->Subject  = "ordre $id til rapport $service_report er nu bestilt"; 
$mail->Body    = "Hej $navn. her er en bekræftelse på at order $id på $vare_beskrivelse fra $levendor. er blevet bestilt og leveres i $afd2"; 
$mail->WordWrap = 500; 

if(!$mail->Send()) { 
  echo 'Message was not sent.'; 
  echo 'Mailer error: ' . $mail->ErrorInfo; 

}  
header("Location:index.php?side=order_lister&afd=$_GET[afd]&list=be_li&lev=$_GET[lev]");
} }
?>