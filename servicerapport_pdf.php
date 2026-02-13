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
require_once('configpdf.php');
require_once('../tcpdf/config/lang/eng.php');
require_once('../tcpdf/tcpdf.php');

$result = mysql_query("SELECT * FROM proservice where id=$_GET[id]");
   while($row = mysql_fetch_array($result)) {
$firma_navn = $row['firma_navn'];
$id = $row['id'];
$ans = $row['ans'];
$asap = $row['ASAP'];
$navn = $row['navn'];
$v_ref = $row['v_ref'];
$dato = $row['dato'];
$dato2 = $row['dato2'];
If($dato2 != '0000-00-00 00:00:00') {
$dato = $dato2; }
$dato = date('d-m-Y H:i:s', strtotime($dato));
$adresse = $row['adresse'];
$d_ref = $row['d_ref'];
$post = $row['post'];
$revk = $row['revk'];
$by = $row['by'];
$land = $row['land'];
$oamail = $row['mail'];
$telefon = $row['telefon'];
$mobil = $row['mobil'];
$fabrikat = $row['fabrikat'];
$type = $row['type'];
$maskine = $row['maskine'];
$sn_nr = $row['sn_nr'];
$med_emb = $row['med_emb'];
$baaf = $row['baaf'];
$baof = $row['baof'];
$dok_retur = $row['dok_retur'];
$rapp_korrekt = $row['rapp_korrekt'];
$label = $row['label'];
$pakket = $row['pakket'];
$pris_s = $row['pris_s'];
$note = $row['note'];
$pris_n = $row['pris_n'];
$pris_b = $row['pris_b'];
$pris_k = $row['pris_k'];
$veagt = $row['godkent'];
$forsendelse = $row['forsendelse'];
$for_mod = $row['for_mod'];
$navn_lev = $row['Navn_lev'];
$adresse_lev = $row['Adresse_lev'];
$post_lev = $row['post_lev'];
$land_lev = $row['land_lev'];
$gr_nr = $row['ind_kode'];
$tekstt = $row['tekstt'];
$tekstk = $row['tekstk'];
}


$date2 = date("Y-m-d H:i:s");
mysql_query("UPDATE `proservice` SET `status_kode`='9',`dato3`='$date2' WHERE id='$id'");  

$result3 = mysql_query("SELECT * FROM proservice_kom where service_rapport=$id LIMIT 17");

$dato42 = date('Y-m-d', strtotime("$dato2. -7 day"));
$result4 = mysql_query("SELECT * FROM proservice_rapport where service_raport=$_GET[id] AND dato2 >= '$dato42' LIMIT 11");

$result5 = mysql_query("SELECT * FROM proservice_rapport where service_raport=$_GET[id] AND dato2 >= '$dato42' AND timer !='-'");

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
<td width="60%" height="50px" bgcolor="#eeeeee" valign="middle" style="line-height:200%;"><font size="22px"><b><?php echo ' '.$firma_navn.' '; ?></font></b></td>
<td width="40%" height="50px"><table height="100%" width="100%" CELLPADDING="0" CELLSPACING="0"  style="line-height:200%;">
           <tr>
           <td width="50%" height="100%"><table height="100%"  width="100%" CELLPADDING="0" CELLSPACING="0" style="line-height:200%;">
                      <tr>
                      <td width="100%" height="25px" bgcolor="#eeeeee" style="border-left:1px solid black; border-top:1px solid black; border-bottom:1px solid black; line-height:200%;"> <font size="12px"><b>Rapport Nummer</font></b></td>
                      </tr>
                      <tr>
                      <td width="60%" height="25px" bgcolor="#eeeeee" style="line-height:200%; border-left:1px solid black; border-right:1px solid black;"> <font size="12px"><b>Ans.:</font></b></td>
                      <td width="40%" height="25px" style="line-height:200%; border-right:1px solid black;"> <font size="12px"><b><?php echo ' '.$ans.' '; ?></font></b></td>
                      </tr>
               </table>
           </td>
           <td width="50%" height="50px" bgcolor="#eeeeee" style="border-right:1px solid black; border-top:1px solid black; border-bottom:1px solid black; line-height:200%;"><font size="22px"><b><?php echo ' '.$id.' '; ?></font></b></td>
           </tr>
     </table>
</td>
</tr>
</table>
<table height="100%" border="1" width="100%" CELLPADDING="0" CELLSPACING="0">
<tr>
<td width="12.5%" height="20px"><font size="10px"> Gr. Nr.: <b><?php echo ' '.$gr_nr.' '; ?></font></b></td>
<td width="12.5%" height="20px"><font size="10px"> Haster.: <b><?php echo ' '.$asap.' '; ?></font></b></td>
<td width="25%" height="20px"><font size="10px"> Ank. med: <b><?php echo ' '.$for_mod.' '; ?></font></b></td>
<td width="25%" height="20px"><font size="10px"> Vores ref: <b><?php echo ' '.$v_ref.' '; ?></font></b></td>
<td width="25%" height="20px"><font size="10px"> Dato: <b><?php echo ' '.$dato.' '; ?></font></b></td>
</tr>
</table>
<br>
<table height="100%" border="1" width="100%" CELLPADDING="0" CELLSPACING="0">
<tr>
<td width="50%" height="20px"><font size="12px"><b> Fakturerings Adresse</font></b></td>
<td width="50%" height="20px"><font size="12px"><b> Leverings Adresse</font></b></td>
</tr>
</table>
<table height="100%" border="1" width="100%" CELLPADDING="0" CELLSPACING="0">
<tr>
<td width="50%" height="20px"><font size="10px"> Navn: <b><?php echo ' '.$navn.' '; ?></font></b></td>
<td width="50%" height="20px"><font size="10px"> Navn: <b><?php echo ' '.$navn_lev.' '; ?></font></b></td>
</tr>
</table>
<table height="100%" border="1" width="100%" CELLPADDING="0" CELLSPACING="0">
<tr>
<td width="50%" height="20px"><font size="10px"> Adresse: <b><?php echo ' '.$adresse.' '; ?></font></b></td>
<td width="50%" height="20px"><font size="10px"> Adresse: <b><?php echo ' '.$adresse_lev.' '; ?></font></b></td>
</tr>
</table>
<table height="100%" border="1" width="100%" CELLPADDING="0" CELLSPACING="0">
<tr>
<td width="50%" height="20px"><font size="10px"> Post Nr.: <b><?php echo ' '.$post.' '; ?></font></b></td>
<td width="50%" height="20px"><font size="10px"> Post Nr.: <b><?php echo ' '.$post_lev.' '; ?></font></b></td>
</tr>
</table>
<table height="100%" border="1" width="100%" CELLPADDING="0" CELLSPACING="0">
<tr>
<td width="50%" height="20px"><font size="10px"> Land: <b>
<?php if (is_numeric($land)) { $resultland = mysql_query("SELECT * FROM prouniland WHERE id=$land"); while($rowland = mysql_fetch_assoc($resultland)) { echo $rowland['Land']; } } else { echo ''.$land.''; }?></font></b></td>
<td width="50%" height="20px"><font size="10px"> Land: <b>
<?php if (is_numeric($land)) { $resultland = mysql_query("SELECT * FROM prouniland WHERE id=$land_lev"); while($rowland = mysql_fetch_assoc($resultland)) { echo $rowland['Land']; } } else { echo ''.$land_lev.''; }?></font></b></td>
</tr>
</table><br>
<table height="100%" border="1" width="100%" CELLPADDING="0" CELLSPACING="0">
<tr>
<td width="50%" height="20px"><font size="10px"> Revk. Nr.: <b><?php echo ' '.$revk.' '; ?></font></b></td>
<td width="50%" height="20px"><font size="10px"> Deres ref: <b><?php echo ' '.$d_ref.' '; ?></font></b></td>
</tr>
</table>
<table height="100%" border="1" width="100%" CELLPADDING="0" CELLSPACING="0">
<tr>
<td width="25%" height="20px"><font size="10px"> Telefon: <b><?php echo ' '.$telefon.' '; ?></font></b></td>
<td width="25%" height="20px"><font size="10px"> Mobil: <b><?php echo ' '.$mobil.' '; ?></font></b></td>
<td width="50%" height="20px"><font size="10px"> E-Mail: <b><?php echo ' '.$oamail.' '; ?></font></b></td>
</tr>
</table>
<br>
<table height="100%" border="1" width="100%" CELLPADDING="0" CELLSPACING="0">
<tr>
<td width="25%" height="20px" bgcolor="#eeeeee"><font size="10px"> Fabrikat:</font></td>
<td width="25%" height="20px" bgcolor="#eeeeee"><font size="10px"> Type:</font></td>
<td width="25%" height="20px" bgcolor="#eeeeee"><font size="10px"> Hvad er det?:</font></td>
<td width="25%" height="20px" bgcolor="#eeeeee"><font size="10px"> Serie Nr.:</font></td>
</tr>
</table>
<table height="100%" border="1" width="100%" CELLPADDING="0" CELLSPACING="0">
<tr>
<td width="25%" height="20px"><font size="10px"><b><?php echo ' '.$fabrikat.' '; ?></font></b></td>
<td width="25%" height="20px"><font size="10px"><b><?php echo ' '.$type.' '; ?></font></b></td>
<td width="25%" height="20px"><font size="10px"><b><?php echo ' '.$maskine.' '; ?></font></b></td>
<td width="25%" height="20px"><font size="10px"><b><?php echo ' '.$sn_nr.' '; ?></font></b></td>
</tr>
</table>
<table height="100%" border="1" width="100%" CELLPADDING="0" CELLSPACING="0">
<tr>
<td width="25%" height="20px" bgcolor="#eeeeee"><font size="10px"> Pris Skønnet:</font></td>
<td width="25%" height="20px" bgcolor="#eeeeee"><font size="10px"> Pris Ny:</font></td>
<td width="25%" height="20px" bgcolor="#eeeeee"><font size="10px"> Pris Brugt/ebay:</font></td>
<td width="25%" height="20px" bgcolor="#eeeeee"><font size="10px"> Pris Kundeaftale:</font></td>
</tr>
</table>
<table height="100%" border="1" width="100%" CELLPADDING="0" CELLSPACING="0">
<tr>
<td width="25%" height="20px"><font size="10px"><b><?php echo ' '.$pris_s.' '; ?></font></b></td>
<td width="25%" height="20px"><font size="10px"><b><?php echo ' '.$pris_n.' '; ?></font></b></td>
<td width="25%" height="20px"><font size="10px"><b><?php echo ' '.$pris_b.' '; ?></font></b></td>
<td width="25%" height="20px"><font size="10px"><b><?php echo ' '.$pris_k.' '; ?></font></b></td>
</tr>
</table>
<br>
<table height="100%" border="1" width="100%" CELLPADDING="0" CELLSPACING="0">
<tr>
<td width="100%" height="20px" bgcolor="#eeeeee"><font size="10px"> <b>Beskrivelse af anmeldt fejl:</b></font></td>
</tr>
</table>
<table height="100%" border="1" width="100%" CELLPADDING="0" CELLSPACING="0">
<tr>
<td width="100%" height="30px"><font size="10px"><b><?php echo ' '.$baaf.' '; ?></b></font></td>
</tr>
</table>
<table height="100%" border="1" width="100%" CELLPADDING="0" CELLSPACING="0">
<tr>
<td width="100%" height="20px" bgcolor="#eeeeee"><font size="10px"> <b>Beskrivelse af observeret fejl:</b></font></td>
</tr>
</table>
<table height="100%" border="1" width="100%" CELLPADDING="0" CELLSPACING="0">
<tr>
<td width="100%" height="30px"><font size="10px"><b><?php echo ' '.$baof.' '; ?></b></font></td>
</tr>
</table>
<table height="100%" border="1" width="100%" CELLPADDING="0" CELLSPACING="0">
<tr>
<td width="100%" height="20px" bgcolor="#eeeeee"><font size="10px"> <b>Kundens indtryk er:</b></font></td>
</tr>
</table>
<table height="100%" border="1" width="100%" CELLPADDING="0" CELLSPACING="0">
<tr>
<td width="100%" height="30px"><font size="10px"><b><?php echo ' '.$tekstk.' '; ?></b></font></td>
</tr>
</table>
<table height="100%" border="1" width="100%" CELLPADDING="0" CELLSPACING="0">
<tr>
<td width="100%" height="20px" bgcolor="#eeeeee"><font size="10px"> <b>info fra testen</b></font></td>
</tr>
</table>
<table height="100%" border="1" width="100%" CELLPADDING="0" CELLSPACING="0">
<tr>
<td width="100%" height="30px"><font size="10px"><b><?php echo ' '.$tekstt.' '; ?></b></font></td>
</tr>
</table>
<table height="100%" border="1" width="100%" CELLPADDING="0" CELLSPACING="0">
<tr>
<td width="10%" height="20px" bgcolor="#eeeeee"><font size="10px"> <b>Note:</b></font></td>
<td width="90%" height="20px"><font size="10px"> <b><?php echo ' '.$note.' '; ?></b></font></td>
</tr>
</table>
<table height="100%" border="1" width="100%" CELLPADDING="0" CELLSPACING="0">
<tr>
<td width="10%" height="20px" bgcolor="#eeeeee"><font size="10px"> <b>Dato:</b></font></td>
<td width="7%" height="20px" bgcolor="#eeeeee"><font size="10px"> <b>Ans:</b></font></td>
<td width="83%" height="20px" bgcolor="#eeeeee"><font size="10px"> <b>Beskrivelse af udført arbejde:</b></font></td>
</tr>
</table>
<table height="100%" border="1" width="100%" CELLPADDING="0" CELLSPACING="0">
<?php 
   while($row = mysql_fetch_array($result4)) {
$dato3 = $row['dato'];
$ans3 = $row['ans'];
$timer = $row['timer'];
$beskrivsle = $row['beskivsle'];
$id_sql2 = $row['id'];
?>
<tr>
<td width="10%" height="30px"><?php echo ''.$dato3.' '; ?></td>
<td width="7%" height="30px"><?php echo ' '.$ans3.' '; ?></td>
<td width="83%" height="30px"><?php echo ' '.$beskrivsle.' '; ?><font size="10px"><b></b></font></td>
</tr>
<?php } ?>
</table>
<table height="100%" border="1" width="100%" CELLPADDING="0" CELLSPACING="0">
<tr>
<td width="25%" height="20px" bgcolor="#eeeeee"><font size="10px"> <b>Fagt firma</font></b></td>
<td width="25%" height="20px"><font size="10px"><b><?php echo ' '.$forsendelse.' '; ?></font></b></td>
<td width="25%" height="20px" bgcolor="#eeeeee"><font size="10px"> <b>Vægt/mål m.m.</font></b></td>
<td width="25%" height="20px"><font size="10px"><b><?php echo ' '.$veagt.' '; ?></font></b></td>
</tr>
</table>
    </body>
</html>
<?php

$num_rows = mysql_num_rows($result4);
if($num_rows > '10') { 

$html = ob_get_clean();

// set core font
$pdf->SetFont('helvetica', '', 10);

// output the HTML content
$pdf->writeHTML($html, false, 0, false, false);

$pdf->AddPage();


    // your other script
    ob_start();
?>

<html>
    <head></head>
    <body>
<br>
<table height="100%" border="1" width="100%" CELLPADDING="0" CELLSPACING="0">
<tr>
<td width="60%" height="50px" bgcolor="#eeeeee" valign="middle" style="line-height:200%;"><font size="22px"><b><?php echo ' '.$firma_navn.' '; ?></font></b></td>
<td width="40%" height="50px"><table height="100%" width="100%" CELLPADDING="0" CELLSPACING="0"  style="line-height:200%;">
           <tr>
           <td width="50%" height="100%"><table height="100%"  width="100%" CELLPADDING="0" CELLSPACING="0" style="line-height:200%;">
                      <tr>
                      <td width="100%" height="25px" bgcolor="#eeeeee" style="border-left:1px solid black; border-top:1px solid black; border-bottom:1px solid black; line-height:200%;"> <font size="12px"><b>Rapport Nummer</font></b></td>
                      </tr>
                      <tr>
                      <td width="60%" height="25px" bgcolor="#eeeeee" style="line-height:200%; border-left:1px solid black; border-right:1px solid black;"> <font size="12px"><b>Ans.:</font></b></td>
                      <td width="40%" height="25px" style="line-height:200%; border-right:1px solid black;"> <font size="12px"><b><?php echo ' '.$ans.' '; ?></font></b></td>
                      </tr>
               </table>
           </td>
           <td width="50%" height="50px" bgcolor="#eeeeee" style="border-right:1px solid black; border-top:1px solid black; border-bottom:1px solid black; line-height:200%;"><font size="22px"><b><?php echo ' '.$id.' '; ?></font></b></td>
           </tr>
     </table>
</td>
</tr>
</table>
<p>
<table height="100%" border="1" width="100%" CELLPADDING="0" CELLSPACING="0">
<?php 
   $result8 = mysql_query("SELECT * FROM proservice_rapport where service_raport=$_GET[id] AND dato2 >= '$dato42' AND id>$id_sql2 LIMIT 27");
   while($row = mysql_fetch_array($result8)) {
$dato3 = $row['dato'];
$ans3 = $row['ans'];
$timer = $row['timer'];
$beskrivsle = $row['beskivsle'];

?>
<tr>
<td width="10%" height="30px"><?php echo ''.$dato3.' '; ?></td>
<td width="7%" height="30px"><?php echo ' '.$ans3.' '; ?></td>
<td width="83%" height="30px"><?php echo ' '.$beskrivsle.' '; ?><font size="10px"><b></b></font></td>
</tr>
<?php } ?>
</table>
</body></html>
<?php } ?>
<?php

$html = ob_get_clean();

// set core font
$pdf->SetFont('helvetica', '', 10);

// output the HTML content
$pdf->writeHTML($html, false, 0, false, false);

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
<td width="60%" height="50px" bgcolor="#eeeeee" valign="middle" style="line-height:200%;"><font size="22px"><b><?php echo ' '.$firma_navn.' '; ?></font></b></td>
<td width="40%" height="50px"><table height="100%" width="100%" CELLPADDING="0" CELLSPACING="0"  style="line-height:200%;">
           <tr>
           <td width="50%" height="100%"><table height="100%"  width="100%" CELLPADDING="0" CELLSPACING="0" style="line-height:200%;">
                      <tr>
                      <td width="100%" height="25px" bgcolor="#eeeeee" style="border-left:1px solid black; border-top:1px solid black; border-bottom:1px solid black; line-height:200%;"> <font size="12px"><b>Rapport Nummer</font></b></td>
                      </tr>
                      <tr>
                      <td width="60%" height="25px" bgcolor="#eeeeee" style="line-height:200%; border-left:1px solid black; border-right:1px solid black;"> <font size="12px"><b>Ans.:</font></b></td>
                      <td width="40%" height="25px" style="line-height:200%; border-right:1px solid black;"> <font size="12px"><b><?php echo ' '.$ans.' '; ?></font></b></td>
                      </tr>
               </table>
           </td>
           <td width="50%" height="50px" bgcolor="#eeeeee" style="border-right:1px solid black; border-top:1px solid black; border-bottom:1px solid black; line-height:200%;"><font size="22px"><b><?php echo ' '.$id.' '; ?></font></b></td>
           </tr>
     </table>
</td>
</tr>
</table>
<p>
<table height="100%" border="1" width="100%" CELLPADDING="0" CELLSPACING="0">
<tr>
<td width="66.6%" height="20px" bgcolor="#eeeeee"><font size="10px"> <b>Arbejdstid</font></b></td>
<td width="33.4%" height="20px" bgcolor="#eeeeee"><font size="10px"> <b>Komponent type</font></b></td>
</tr>
</table>
<table height="100%" border="1" width="100%" CELLPADDING="0" CELLSPACING="0">
<tr>
<td width="66.6%" height="100%"><table height="100%" border="1" width="100%" CELLPADDING="0" CELLSPACING="0">
<tr>
<td width="20%" height="30px" bgcolor="#eeeeee"><font size="10px"> <b>Dato:</font></b></td>
<td width="10%" height="30px" bgcolor="#eeeeee"><font size="10px"> <b>Int.:</font></b></td>
<td width="15%" height="30px" bgcolor="#eeeeee"><font size="10px"> <b>Norm<br> tim.</font></b></td>
<td width="20%" height="30px" bgcolor="#eeeeee"><font size="10px"> <b>Over tid.<br> 50% tim.</font></b></td>
<td width="20%" height="30px" bgcolor="#eeeeee"><font size="10px"> <b>Over rid.<br> 100% tim.</font></b></td>
<td width="15%" height="30px" bgcolor="#eeeeee"><font size="10px"> <b>km.</font></b></td>
</tr>
<?php 
   while($row = mysql_fetch_array($result5)) {
$dato3 = $row['dato'];
$ans3 = $row['ans'];
$timer = $row['timer'];
$timer50 = $row['timer50'];
$timer100 = $row['timer100'];
$km = $row['km'];
?>
<tr>
<td width="20%" height="10px"><font size="10px"><b><?php echo ''.$dato3.' '; ?></font></b></td>
<td width="10%" height="10px"><font size="10px"><b><?php echo ''.$ans3.' '; ?></font></b></td>
<td width="15%" height="10px"><font size="10px"><b><?php echo ''.$timer.' '; ?></font></b></td>
<td width="20%" height="10px"><font size="10px"><b><?php echo ''.$timer50.' '; ?></font></b></td>
<td width="20%" height="10px"><font size="10px"><b><?php echo ''.$timer100.' '; ?></font></b></td>
<td width="15%" height="10px"><font size="10px"><b><?php echo ''.$km.' '; ?></font></b></td>
</tr>
<?php } ?>
<tr>
<td width="20%" height="10px"><font size="10px"> <b></font></b></td>
<td width="10%" height="10px"><font size="10px"> <b></font></b></td>
<td width="15%" height="10px"><font size="10px"> <b></font></b></td>
<td width="20%" height="10px"><font size="10px"> <b></font></b></td>
<td width="20%" height="10px"><font size="10px"> <b></font></b></td>
<td width="15%" height="10px"><font size="10px"> <b></font></b></td>
</tr>
</table>
</td>
<td width="33.4%" height="300px"><table height="100%" border="0" width="100%" CELLPADDING="0" CELLSPACING="0">
<tr>
<td width="20%" height="100%"><font size="10px"> <b>A<br> D<br> E<br> I<br> IC<br> M<br> MF<br> OA<br> OC<br> PI<br> PT<br> T<br> TH<br> TR<br> Z<br><br> S<br> (SE)
</font></b></td>
<td width="80%" height="100%"><font size="10px"> <b>= Andet<br> = Diode<br> = Elektrolyt<br> = IBGT<br> = IC 74, 40, Div.<br> = Modstand<br> = MOSFET<br> = OP-AMP.<br> = Opto Cupler<br> = Power IGBT<br> = Power Transistor<br> = Transistor<br> = Thyristor<br> = Triac<br> = Zener Diode<br><br> = SMD<br> = SMD Elektrolyt</font></b></td>
</tr></table>
</td>
</tr>
</table>
<table height="100%" border="1" width="100%" CELLPADDING="0" CELLSPACING="0">
<tr>
<td width="100%" height="20px" bgcolor="#eeeeee"><font size="10px"> <b>Reservedele Brugt til rep. og test</font></b></td>
</tr>
</table>
<table height="100%" border="1" width="100%" CELLPADDING="0" CELLSPACING="0">
<tr>
<td width="100%" height="100%"><font size="10px"><table height="100%" border="1" width="100%" CELLPADDING="0" CELLSPACING="0">
<tr>
<td width="6%" height="30px"><font size="10px"> <b>Dato:</font></b></td>
<td width="6%" height="30px"><font size="10px"> <b>Int.:</font></b></td>
<td width="20%" height="30px"><font size="10px"> <b>Leverandør</font></b></td>
<td width="20%" height="30px"><font size="10px"> <b>Leverabdør ID eller<br> Andet ID</font></b></td>
<td width="6%" height="30px"><font size="10px"> <b>Type:</font></b></td>
<td width="6%" height="30px"><font size="10px"> <b>Antal:</font></b></td>
<td width="20%" height="30px"><font size="10px"> <b>Varebetegnelse,<br> Typenummer eller<br> Andet ID</font></b></td>
<td width="16%" height="30px"><font size="10px"> <b>Pris Aftalt etc.</font></b></td>
</tr>
<?php 
   while($row = mysql_fetch_array($result3)) {
$dato2 = $row['dato'];
$dato43 = date('Y-m-d', strtotime("$dato2"));
if($dato43 >= $dato42){
$levendor = $row['levendor'];
$intal2 = $row['intal'];
$vare_beskrivesle = $row['vare_beskrivelse'];
$vare_nr = $row['vare_nr'];
$antal = $row['antal'];
$type = $row['type'];
$id_sql = $row['id'];
?>
<tr>
<td width="6%" height="30px"><font size="10px"><b><?php echo ''.$dato2.' '; ?></font></b></td>
<td width="6%" height="30px"><font size="10px"> <b><?php echo ''.$intal2.' '; ?></font></b></td>
<td width="20%" height="30px"><font size="10px"> <b><?php echo ''.$levendor.' '; ?></font></b></td>
<td width="20%" height="30px"><font size="10px"> <b><?php echo ''.$vare_nr.' '; ?></font></b></td>
<td width="6%" height="30px"><font size="10px"> <b><?php echo ''.$type.' '; ?></font></b></td>
<td width="6%" height="30px"><font size="10px"> <b><?php echo ''.$antal.' '; ?></font></b></td>
<td width="20%" height="30px"><font size="10px"><b><?php echo ''.$vare_beskrivesle.' '; ?></font></b></td>
<td width="16%" height="30px"><font size="10px"> <b></font></b></td>
</tr>
<?php } } ?>
</table>
</td>
</tr>
</table>
    </body>
</html>

<?php
$html = ob_get_clean();

$num_rows = mysql_num_rows($result3);
if($num_rows > '16') { 


// set core font
$pdf->SetFont('helvetica', '', 10);

// output the HTML content
$pdf->writeHTML($html, false, 0, false, false);

$pdf->AddPage();


    // your other script
    ob_start();
?>

<html>
    <head></head>
    <body>
<br>
<table height="100%" border="1" width="100%" CELLPADDING="0" CELLSPACING="0">
<tr>
<td width="60%" height="50px" bgcolor="#eeeeee" valign="middle" style="line-height:200%;"><font size="22px"><b><?php echo ' '.$firma_navn.' '; ?></font></b></td>
<td width="40%" height="50px"><table height="100%" width="100%" CELLPADDING="0" CELLSPACING="0"  style="line-height:200%;">
           <tr>
           <td width="50%" height="100%"><table height="100%"  width="100%" CELLPADDING="0" CELLSPACING="0" style="line-height:200%;">
                      <tr>
                      <td width="100%" height="25px" bgcolor="#eeeeee" style="border-left:1px solid black; border-top:1px solid black; border-bottom:1px solid black; line-height:200%;"> <font size="12px"><b>Rapport Nummer</font></b></td>
                      </tr>
                      <tr>
                      <td width="60%" height="25px" bgcolor="#eeeeee" style="line-height:200%; border-left:1px solid black; border-right:1px solid black;"> <font size="12px"><b>Ans.:</font></b></td>
                      <td width="40%" height="25px" style="line-height:200%; border-right:1px solid black;"> <font size="12px"><b><?php echo ' '.$ans.' '; ?></font></b></td>
                      </tr>
               </table>
           </td>
           <td width="50%" height="50px" bgcolor="#eeeeee" style="border-right:1px solid black; border-top:1px solid black; border-bottom:1px solid black; line-height:200%;"><font size="22px"><b><?php echo ' '.$id.' '; ?></font></b></td>
           </tr>
     </table>
</td>
</tr>
</table>
<p>
<table height="100%" border="1" width="100%" CELLPADDING="0" CELLSPACING="0">
<tr>
<td width="100%" height="20px" bgcolor="#eeeeee"><font size="10px"> <b>Reservedele Brugt til rep. og test (SIDE 2)</font></b></td>
</tr>
</table>
<?php 
   $result7 = mysql_query("SELECT * FROM proservice_kom where service_rapport=$_GET[id] AND id>$id_sql LIMIT 27");
   while($row32 = mysql_fetch_array($result7)) {
$dato2 = $row32['dato'];
$dato43 = date('Y-m-d', strtotime("$dato2"));
if($dato43 >= $dato42){
$levendor = $row32['levendor'];
$intal2 = $row32['intal'];
$vare_beskrivesle = $row32['vare_beskrivelse'];
$vare_nr = $row32['vare_nr'];
$antal = $row32['antal'];
$type = $row32['type'];
?>
<table height="100%" border="1" width="100%" CELLPADDING="0" CELLSPACING="0">
<tr>
<td width="6%" height="30px"><font size="10px"><b><?php echo ''.$dato2.' '; ?></font></b></td>
<td width="6%" height="30px"><font size="10px"> <b><?php echo ''.$intal2.' '; ?></font></b></td>
<td width="20%" height="30px"><font size="10px"> <b><?php echo ''.$levendor.' '; ?></font></b></td>
<td width="20%" height="30px"><font size="10px"> <b><?php echo ''.$vare_nr.' '; ?></font></b></td>
<td width="6%" height="30px"><font size="10px"> <b><?php echo ''.$type.' '; ?></font></b></td>
<td width="6%" height="30px"><font size="10px"> <b><?php echo ''.$antal.' '; ?></font></b></td>
<td width="20%" height="30px"><font size="10px"><b><?php echo ''.$vare_beskrivesle.' '; ?></font></b></td>
<td width="16%" height="30px"><font size="10px"> <b></font></b></td>
</tr>
</table>

<?php } } ?>

    </body>
</html>
<?php
$html = ob_get_clean();

}


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
$pdf->Output('example_039a.pdf', 'I');




//============================================================+
// END OF FILE                                                
//============================================================+
?>