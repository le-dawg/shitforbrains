 <?php
//============================================================+
// File name   : example_039.php
// Begin       : 2008-10-16
// Last Update : 2010-08-08
//
// Description : Example 039 for TCPDF class
//               HTML justification
//
// Author: Nicola Asuni
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com s.r.l.
//               Via Della Pace, 11
//               09044 Quartucciu (CA)
//               ITALY
//               www.tecnick.com
//               info@tecnick.com
//============================================================+

/**
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Example: HTML justification
 * @author Nicola Asuni
 * @since 2008-10-18
 */
require_once('../configpdf.php');
require_once('../tcpdf/config/lang/eng.php');
require_once('../tcpdf/tcpdf.php');

$result = mysqli_query($conn, "SELECT * FROM proservice_rapport where ans=$_GET[id] AND dato='$_GET[dato_html]'");
   while($row = mysqli_fetch_array($result)) {
$id = $row['service_raport'];
$test = $_GET['dato_html'];
$ans = $row['ans'];
$dato = $row['dato'];
$timer = $row['timer'];
$beskivsle = $row['beskivsle'];
$km = $row['km'];
$bro = $row['bro2'];
$status = $row['bro'];
$result = mysqli_query($conn, "SELECT * FROM promed where id=$_GET[id]");
   while($row = mysqli_fetch_array($result)) {
$navn = $row['navn'];
$day = date('N', strtotime($dato));
if($day == 1){
$day = 'Mandag' ; }
if($day == 2){
$day = 'Tirsdag' ; }
if($day == 3){
$day = 'Onsdag' ; }
if($day == 4){
$day = 'Torsdag' ; }
if($day == 5){
$day = 'Fredag' ; }
if($day == 6){
$day = 'Lørdag' ; }
if($day == 7){
$day = 'Søndag' ; } 
} }

$id = $_GET[id];
$dato_send = $_GET[dato_html];
$result5 = mysqli_query($conn, "SELECT * FROM promed WHERE id = '$id'");
while($row5 = mysqli_fetch_assoc($result5)) {
$email = $row5['email2']; }
 
// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

//set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetMargins(10, 0, 10, 0);

//set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

//set some language-dependent strings
$pdf->setLanguageArray($l);

$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);
$pdf->SetAutoPageBreak(false);

$pdf->SetDisplayMode('fullpage');
// ---------------------------------------------------------

// add a page
$pdf->AddPage();

// set font
$pdf->SetFont('helvetica', 'B', 20);

// create some HTML content
?>
<?php
    // your other script
    ob_start();
?>

<html>
    <head></head>
    <body>
<br>
<table height="100%" border="1" width="100%" CELLPADDING="0" CELLSPACING="0">
<tr>
<td width="100%" height="50px" bgcolor="#eeeeee" valign="middle" style="line-height:200%;"><center><font size="25px"><b> Dagseddel for <?php echo ' '.$navn.' '; ?><br><?php echo ' '.$day.' '; ?> den <?php echo ' '.$dato.' '; ?></font></b><font size="22px"><b></font></b></td>
</tr>
</table>
<p>

<table height="100%" border="1" width="100%" CELLPADDING="0" CELLSPACING="0">
<tr>
<td width="10%" height="20px" bgcolor="#eeeeee"><font size="10px"> <b>Service<br> Rapport</font></b></td>
<td width="49%" height="20px" bgcolor="#eeeeee"><font size="10px"> <b>Firmanavn / Beskrivelse</font></b></td>
<td width="7%" height="20px" bgcolor="#eeeeee"><font size="10px"> <b>Timer</b></font></td>
<td width="6%" height="20px" bgcolor="#eeeeee"><font size="10px"> <b>O.T.<br> 50%</b></font></td>
<td width="6%" height="20px" bgcolor="#eeeeee"><font size="10px"> <b>O.T.<br> 100%</b></font></td>
<td width="9%" height="20px" bgcolor="#eeeeee"><font size="10px"> <b>Km</b></font></td>
<td width="6%" height="20px" bgcolor="#eeeeee"><font size="10px"> <b>bro</b></font></td>
<td width="7%" height="20px" bgcolor="#eeeeee"><font size="10px"> <b>Status</b></font></td>
</tr>
</table>
 <?php          
            $result  = mysqli_query($conn, "SELECT * FROM proservice_rapport WHERE ans = '$ans' AND dato = '$test' AND timer !='-' ORDER BY id ASC ");
            while($row = mysqli_fetch_assoc($result)) {
            $service_raport = $row['service_raport'];
            $ans = $row['ans'];
            $timer = $row['timer'];
            $timer50 = $row['timer50'];
            $timer100 = $row['timer100'];
            $km = $row['km'];
	    $bro = $row['bro2'];
	    $status = $row['bro'];
            $beskivsle = $row['beskivsle'];
	    if (is_numeric($service_raport)) {
            $result2 = mysqli_query($conn, "SELECT * FROM proservice WHERE id = '$service_raport'");
            while($row2 = mysqli_fetch_assoc($result2)) {
            $firma_navn = $row2['firma_navn'];            
?>
<table height="100%" border="1" width="100%" CELLPADDING="0" CELLSPACING="0">
<tr>
<td width="10%" height="20px"><font size="10px"><b> <?php echo ''.$service_raport.''; ?></font></b></td>
<td width="49%" height="20px"><font size="10px"><b> <?php echo ''.$firma_navn.''; ?></font></b></td>
<td width="7%" height="20px"><font size="10px"><b> <?php echo ''.$timer.''; ?></font></b></td>
<td width="6%" height="20px"><font size="10px"><b> <?php echo ''.$timer50.''; ?></font></b></td>
<td width="6%" height="20px"><font size="10px"><b> <?php echo ''.$timer100.''; ?></font></b></td>
<td width="9%" height="20px"><font size="10px"><b> <?php echo ''.$km.''; ?></font></b></td>
<td width="6%" height="20px"><font size="10px"><b> <?php echo ''.$bro.''; ?></font></b></td>
<td width="7%" height="20px"><font size="10px"><b> <?php echo ''.$status.''; ?></font></b></td>
</tr>
</table>
 <?php } } else {  ?>
<table height="100%" border="1" width="100%" CELLPADDING="0" CELLSPACING="0">
<tr>
<td width="10%" height="20px"><font size="10px"><b> <?php echo ''.$service_raport.''; ?></font></b></td>
<td width="49%" height="20px"><font size="10px"><b> <?php echo ''.$beskivsle.''; ?></font></b></td>
<td width="7%" height="20px"><font size="10px"><b> <?php echo ''.$timer.''; ?></font></b></td>
<td width="6%" height="20px"><font size="10px"><b> <?php echo ''.$timer50.''; ?></font></b></td>
<td width="6%" height="20px"><font size="10px"><b> <?php echo ''.$timer100.''; ?></font></b></td>
<td width="9%" height="20px"><font size="10px"><b> <?php echo ''.$km.''; ?></font></b></td>
<td width="6%" height="20px"><font size="10px"><b> <?php echo ''.$bro.''; ?></font></b></td>
<td width="7%" height="20px"><font size="10px"><b> <?php echo ''.$status.''; ?></font></b></td>

</tr>
</table>
<?php }     
            $min = '126306V';
            $max = '139999V';
	    if ($service_raport>$min && $service_raport<$max) {
	    if (!is_numeric($service_raport)) {
	    $timer = $row['timer'];
            $timer = str_replace(array("."),array(","),$timer);
?>
<table height="100%" border="1" width="100%" CELLPADDING="0" CELLSPACING="0">
<tr>
<td width="10%" height="20px"><font size="10px"><b> <?php echo ''.$service_raport.''; ?></font></b></td>
<td width="55%" height="20px"><font size="10px"><b> <?php echo ''.$beskivsle.''; ?></font></b></td>
<td width="7%" height="20px"><font size="10px"><b> <?php echo ''.$bro.''; ?></font></b></td>
<td width="7%" height="20px"><font size="10px"><b> <?php echo ''.$timer.''; ?></font></b></td>
<td width="6%" height="20px"><font size="10px"><b> <?php echo ''.$timer50.''; ?></font></b></td>
<td width="6%" height="20px"><font size="10px"><b> <?php echo ''.$timer100.''; ?></font></b></td>
<td width="9%" height="20px"><font size="10px"><b> <?php echo ''.$km.''; ?></font></b></td>
</tr>
</table>
<?php } } } ?>
</body>
</html>


<?php
$html = ob_get_clean();

// set core font
$pdf->SetFont('helvetica', '', 10);

// output the HTML content
$pdf->writeHTML($html, false, 0, false, false);

// force print dialog
$js .= 'print(true);';

// set javascript
$pdf->IncludeJS($js);

ob_clean();

// ---------------------------------------------------------
//Close and output PDF document
if (file_exists('pdf/dagseld.pdf')) unlink('pdf/dagseld.pdf');
$pdf->Output('pdf/dagseld.pdf', 'F');
require_once('class.phpmailer.php'); //where your phpmailer folder is
$mail = new PHPMailer();                    
$mail->From = "$email";
$mail->FromName = "Pro-Consult A/S";
$mail->AddReplyTo("$email", "Pro-Consult A/S");               
$mail->AddAttachment("pdf/dagseld.pdf");      
// attach pdf that was saved in a folder
$mail->Subject  = "$navn har sendt sin dagsseddel fra $dato";               
$mail->Body    = "$navn har sendt sin dagsseddel fra $dato"; 
$mail->WordWrap = 300; 
if(!$mail->Send())
{
   echo "Message could not be sent. <p>";
   echo "Mailer Error: " . $mail->ErrorInfo;
}
else
{
   echo "Message sent";
} //`the end`


$dato = date('Y-m-d H:i:s' , strtotime("$dato"));
mysqli_query($conn, "UPDATE `promed` SET `sidste_dagsseld`='$dato' WHERE id='$id'");
 
//============================================================+
// END OF FILE                                                
//============================================================+
?>
<script>
    window.location="dagseddel.php";
</script>