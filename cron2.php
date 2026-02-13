<?php
include_once("config.php");
$dato3 = date('Y-m-d H:i:s');
require("class.phpmailer.php"); 


$html = '';
$html .= '<br>';
$html .= 'Service rapport: ';
$html .= 'ID';
$html .= ' ';
$html .= 'IH';
$html .= ' ';
$html .= 'Firma Navn: ';
$html .= 'TEST';
$html .= '<br>';
$html2 .= 'Varen: ';
$html2 .= 'VARE';
$html2 .= ' ';
$html2 .= 'overskadet med: ';
$html2 .= 'OVER';
$html2 .= ' Dage';
$html2 .= '<br>';

$result  = mysqli_query($conn, "SELECT * FROM proservice WHERE ind_kode = '5' AND id > '182000'");
while($row = mysqli_fetch_assoc($result)) {
$id = $row['id'];
$dato = $row['dato2'];

$result2  = mysqli_query($conn, "SELECT * FROM prosalg WHERE id2 = $id");
while($row2 = mysqli_fetch_assoc($result2)) {
$id2 = $row2['id'];
$name = $row2['firma_navn'];

$body2 = str_replace('TEST', $name, $html);
$body2 = str_replace('ID', $id, $body2);
$body2 = str_replace('IH', $id2, $body2);
$body4 = '';
$test = '0';

$result3  = mysqli_query($conn, "SELECT * FROM prosalg_kom WHERE id2 = $id2 AND leverandor != 'lager' AND leverandor != 'Pro-Consult' AND producent != 'Wenglor' AND varenr != 'FR.K' AND varenr != 'POST5KG' AND varenr != 'Adm' AND flag != 'KOMMET'");
while($row3 = mysqli_fetch_assoc($result3)) {
$varenr = $row3['varenr'];
$levtid = $row3['levtid'];
$levtid = '+'.$levtid.' days';
$dato2 = date('Y-m-d H:i:s', strtotime($dato . "$levtid"));
$diff = strtotime("$dato3") - strtotime("$dato2");
$diff = (int) $diff;
$diff = $diff / 60;
$diff = $diff / 60;
$diff = round($diff / 24);

$dato4 = date('Y-m-d H:i:s', strtotime($dato2 . "-2 days"));

if($dato4 < $dato3){
// Format No Results Output

$body3 = str_replace('VARE', $varenr, $html2);
$body3 = str_replace('OVER', $diff, $body3);
$test = '1';
// Output
$body4 = "$body4 $body3";
 } }
if($test == '1'){
$body = "$body $body2 $body4";
} } }

$body = "Følge vare har overskadet deres leverings tid <br><br> $body";


require_once('class.phpmailer.php'); //where your phpmailer folder is
$mail = new PHPMailer();         

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.office365.com'; 		      // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'tilbud@tdch1027664.onmicrosoft.com'; // SMTP username
$mail->Password = 'P2R0Oc6o0n';                       // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->CharSet = 'UTF-8';             
$mail->From = "oa@proconsult.as";
$mail->FromName = "PROsalg";
$mail->AddAddress("oa@proconsultwebshop.dk");                  
// attach pdf that was saved in a folder

$mail->Subject  = "Vare overskedet leveringstid"; 
$mail->IsHTML(true);
$mail->Body    = "$body"; 
$mail->WordWrap = 500;  

if(!$mail->Send())
{
   echo "Message could not be sent. <p>";
   echo "Mailer Error: " . $mail->ErrorInfo;

}
?>