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
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);

$week_number = $_GET['dato'];
$year = $_GET['dato2'];
{
$min3 = date('Y-m-d H:i:s', strtotime($year."W".$week_number))."\n";
}
$dato = date('d-m-Y');
$min = date('Y-m-d H:i:s', strtotime($min3. "this day"));
$min2 = date('W-Y', strtotime($min));
$max = date('Y-m-d H:i:s', strtotime($min3. "this sunday"));

$mindag = date('Y-m-d H:i:s', strtotime($dato));
$mindag2 = date('d-m-Y');
$maxdag = date('Y-m-d H:i:s', strtotime($dato. "+1 day"));

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
<td width="100%" height="50px" bgcolor="#dddddd" valign="middle" style="line-height:200%;"><center><font size="25px"><b>Oversigt over rapporter printe <?php echo ' '.$dato.' '; ?></font></b><font size="22px"><b></font></b></td>
</tr>
</table>
<p>
<table height="100%" border="1" width="100%" CELLPADDING="0" CELLSPACING="0">
<tr>
<td width="10%" height="20px" bgcolor="#dddddd"><font size="10px"> <b>Periode</font></b></td>
<td width="10%" height="20px" bgcolor="#dddddd"><font size="10px"> <b>Ind Viby</font></b></td>
<td width="10%" height="20px" bgcolor="#dddddd"><font size="10px"> <b>Ind Vejle</b></font></td>
<td width="10%" height="20px" bgcolor="#dddddd"><font size="10px"> <b>PRO sag<br> Viby</b></font></td>
<td width="10%" height="20px" bgcolor="#dddddd"><font size="10px"> <b>PRO sag<br> Vejle</b></font></td>
<td width="10%" height="20px" bgcolor="#dddddd"><font size="10px"> <b>Regm. <br> Viby</b></font></td>
<td width="10%" height="20px" bgcolor="#dddddd"><font size="10px"> <b>Regm. <br> Vejle</b></font></td>
<td width="10%" height="20px" bgcolor="#dddddd"><font size="10px"> <b>Salg</b></font></td>
<td width="10%" height="20px" bgcolor="#dddddd"><font size="10px"> <b>Afslutte<br> Viby</b></font></td>
<td width="10%" height="20px" bgcolor="#dddddd"><font size="10px"> <b>Afslutte<br> Vejle</b></font></td>
</tr>
</table>

<?php 
	include_once('../teknik/sql/Sagsliste/jan_mrd.php'); 
	include_once('../teknik/sql/Sagsliste/feb_mrd.php');
	include_once('../teknik/sql/Sagsliste/mar_mrd.php');
	include_once('../teknik/sql/Sagsliste/apr_mrd.php');
	include_once('../teknik/sql/Sagsliste/maj_mrd.php'); 
	include_once('../teknik/sql/Sagsliste/jun_mrd.php');
	include_once('../teknik/sql/Sagsliste/jul_mrd.php');
	include_once('../teknik/sql/Sagsliste/aug_mrd.php'); 
	include_once('../teknik/sql/Sagsliste/sep_mrd.php');  
	include_once('../teknik/sql/Sagsliste/okt_mrd.php'); 
	include_once('../teknik/sql/Sagsliste/nov_mrd.php'); 
	include_once('../teknik/sql/Sagsliste/dec_mrd.php');
	include_once('../teknik/sql/Sagsliste/hele_mrd.php');                
?>

</p><p>
<table height="100%" border="1" width="100%" CELLPADDING="0" CELLSPACING="0">
<tr>
<td width="25%" height="20px" bgcolor="#dddddd"><font size="10px"> <b>Periode</font></b></td>
<td width="18.75%" height="20px" bgcolor="#dddddd"><font size="10px"> <b>Ind Viby<br> ROD</font></b></td>
<td width="18.75%" height="20px" bgcolor="#dddddd"><font size="10px"> <b>Ind Vejle<br> ROD</b></font></td>
<td width="18.75%" height="20px" bgcolor="#dddddd"><font size="10px"> <b>Afslutte ROD<br> Viby</b></font></td>
<td width="18.75%" height="20px" bgcolor="#dddddd"><font size="10px"> <b>Afslutte ROD<br> Vejle</b></font></td>
</tr>
</table>

<?php   
	include_once('../teknik/sql/Sagsliste/danne_uge_rod.php');  
	include_once('../teknik/sql/Sagsliste/jan_mrd_rod.php');          
	include_once('../teknik/sql/Sagsliste/feb_mrd_rod.php');
	include_once('../teknik/sql/Sagsliste/mar_mrd_rod.php');	
	include_once('../teknik/sql/Sagsliste/apr_mrd_rod.php'); 
	include_once('../teknik/sql/Sagsliste/maj_mrd_rod.php');
	include_once('../teknik/sql/Sagsliste/jun_mrd_rod.php');  
	include_once('../teknik/sql/Sagsliste/jul_mrd_rod.php');  
	include_once('../teknik/sql/Sagsliste/aug_mrd_rod.php');  
	include_once('../teknik/sql/Sagsliste/sep_mrd_rod.php'); 
	include_once('../teknik/sql/Sagsliste/okt_mrd_rod.php');   
	include_once('../teknik/sql/Sagsliste/nov_mrd_rod.php'); 
	include_once('../teknik/sql/Sagsliste/dec_mrd_rod.php');
	include_once('../teknik/sql/Sagsliste/hele_mrd_rod.php'); 
?>

</p><p>

<table height="100%" border="1" width="100%" CELLPADDING="0" CELLSPACING="0">
<tr>
<td width="100%" height="20px" bgcolor="#dddddd"><font size="10px"> <b> Oversigt Over hvor gamle vores opgaver er</font></b></td>
</tr>
</table>
<table height="100%" border="1" width="100%" CELLPADDING="0" CELLSPACING="0">
<tr>
<td width="16.6%" height="20px" bgcolor="#dddddd"><font size="8px"> <b> > 1 uge</b></font></td>
<td width="16.6%" height="20px" bgcolor="#dddddd"><font size="8px"> <b> 1 Uge -> 4 uger</b></font></td>
<td width="16.6%" height="20px" bgcolor="#dddddd"><font size="8px"> <b> 4 uger -> 25 uger</b></font></td>
<td width="16.6%" height="20px" bgcolor="#dddddd"><font size="8px"> <b> 25 uger -> 51 uger</b></font></td>
<td width="16.6%" height="20px" bgcolor="#dddddd"><font size="8px"> <b> 51 uger -> 102 uger</b></font></td>
<td width="17%" height="20px" bgcolor="#dddddd"><font size="8px"> <b> 102 uger og der over </b></font></td>
</tr>
</table>
<?php  
	include_once('../teknik/sql/Sagsliste/gamle_hele.php');          
?>
<table height="100%" border="1" width="100%" CELLPADDING="0" CELLSPACING="0">
<tr>
<td width="100%" height="20px" bgcolor="#dddddd"><font size="10px"> <b>Heraf i lejre</font></b></td>
</tr>
</table>
<?php  
	include_once('../teknik/sql/Sagsliste/gamle_lejre.php');          
?>
<table height="100%" border="1" width="100%" CELLPADDING="0" CELLSPACING="0">
<tr>
<td width="100%" height="20px" bgcolor="#dddddd"><font size="10px"> <b>Heraf i Vejle</font></b></td>
</tr>
</table>
<?php  
	include_once('../teknik/sql/Sagsliste/gamle_vejle.php');          
?>
</p><p>

<table height="100%" border="1" width="100%" CELLPADDING="0" CELLSPACING="0">
<tr>
<td width="100%" height="20px" bgcolor="#dddddd"><font size="10px"> <b> First Look / Turn roundt time (dage)</font></b></td>
</tr>
</table>
<table height="100%" border="1" width="100%" CELLPADDING="0" CELLSPACING="0">
<tr>
<td width="8.3%" height="20px" bgcolor="#dddddd"><font size="8px"> <b>Jan. FL</b></font></td>
<td width="8.3%" height="20px" bgcolor="#dddddd"><font size="8px"> <b>Jan. TR</b></font></td>
<td width="8.3%" height="20px" bgcolor="#dddddd"><font size="8px"> <b>Feb. FL</b></font></td>
<td width="8.3%" height="20px" bgcolor="#dddddd"><font size="8px"> <b>Feb. TR</b></font></td>
<td width="8.3%" height="20px" bgcolor="#dddddd"><font size="8px"> <b>Mar. FL</b></font></td>
<td width="8.3%" height="20px" bgcolor="#dddddd"><font size="8px"> <b>Mar. TR</b></font></td>
<td width="8.3%" height="20px" bgcolor="#dddddd"><font size="8px"> <b>Apr. FL</b></font></td>
<td width="8.3%" height="20px" bgcolor="#dddddd"><font size="8px"> <b>Apr. TR</b></font></td>
<td width="8.4%" height="20px" bgcolor="#dddddd"><font size="8px"> <b>Maj. FL</b></font></td>
<td width="8.4%" height="20px" bgcolor="#dddddd"><font size="8px"> <b>Maj. TR</b></font></td>
<td width="8.4%" height="20px" bgcolor="#dddddd"><font size="8px"> <b>Jun. FL</b></font></td>
<td width="8.4%" height="20px" bgcolor="#dddddd"><font size="8px"> <b>Jun. TR</b></font></td>
</tr>
</table>
<?php            
//	include_once('vaek.php');
?>

<table height="100%" border="1" width="100%" CELLPADDING="0" CELLSPACING="0">
<tr>
<td width="8.3%" height="20px" bgcolor="#eeeeee"><font size="10px" color="red"><b> <?php echo  $flt01 ?></font></b></td>
<td width="8.3%" height="20px" bgcolor="#eeeeee"><font size="10px"><b> <?php echo  $trt01 ?></font></b></td>
<td width="8.3%" height="20px" bgcolor="#eeeeee"><font size="10px" color="red"><b> <?php echo  $flt02 ?></font></b></td>
<td width="8.3%" height="20px" bgcolor="#eeeeee"><font size="10px"><b> <?php echo  $trt02 ?></font></b></td>
<td width="8.3%" height="20px" bgcolor="#eeeeee"><font size="10px" color="red"><b> <?php echo  $flt03 ?></font></b></td>
<td width="8.3%" height="20px" bgcolor="#eeeeee"><font size="10px"><b> <?php echo  $trt03 ?></font></b></td>
<td width="8.3%" height="20px" bgcolor="#eeeeee"><font size="10px" color="red"><b> <?php echo  $flt04 ?></font></b></td>
<td width="8.3%" height="20px" bgcolor="#eeeeee"><font size="10px"><b> <?php echo  $trt04 ?></font></b></td>
<td width="8.4%" height="20px" bgcolor="#eeeeee"><font size="10px" color="red"><b> <?php echo  $flt05 ?></font></b></td>
<td width="8.4%" height="20px" bgcolor="#eeeeee"><font size="10px"><b> <?php echo  $trt05 ?></font></b></td>
<td width="8.4%" height="20px" bgcolor="#eeeeee"><font size="10px" color="red"><b> <?php echo  $flt06 ?></font></b></td>
<td width="8.4%" height="20px" bgcolor="#eeeeee"><font size="10px"><b> <?php echo  $trt06 ?></font></b></td>

</tr>
</table>
<table height="100%" border="1" width="100%" CELLPADDING="0" CELLSPACING="0">
<tr>
<td width="8.3%" height="20px" bgcolor="#dddddd"><font size="8px"> <b>Jul. FL</b></font></td>
<td width="8.3%" height="20px" bgcolor="#dddddd"><font size="8px"> <b>Jul. TR</b></font></td>
<td width="8.3%" height="20px" bgcolor="#dddddd"><font size="8px"> <b>Aug. FL</b></font></td>
<td width="8.3%" height="20px" bgcolor="#dddddd"><font size="8px"> <b>Aug. TR</b></font></td>
<td width="8.3%" height="20px" bgcolor="#dddddd"><font size="8px"> <b>Sep. FL</b></font></td>
<td width="8.3%" height="20px" bgcolor="#dddddd"><font size="8px"> <b>Sep. TR</b></font></td>
<td width="8.3%" height="20px" bgcolor="#dddddd"><font size="8px"> <b>Okt. FL</b></font></td>
<td width="8.3%" height="20px" bgcolor="#dddddd"><font size="8px"> <b>Okt. TR</b></font></td>
<td width="8.4%" height="20px" bgcolor="#dddddd"><font size="8px"> <b>Nov. FL</b></font></td>
<td width="8.4%" height="20px" bgcolor="#dddddd"><font size="8px"> <b>Nov. TR</b></font></td>
<td width="8.4%" height="20px" bgcolor="#dddddd"><font size="8px"> <b>Dec. FL</b></font></td>
<td width="8.4%" height="20px" bgcolor="#dddddd"><font size="8px"> <b>Dec. TR</b></font></td>
</tr>
</table>
<table height="100%" border="1" width="100%" CELLPADDING="0" CELLSPACING="0">
<tr>
<td width="8.3%" height="20px" bgcolor="#eeeeee"><font size="10px" color="red"><b> <?php echo  $flt07 ?></font></b></td>
<td width="8.3%" height="20px" bgcolor="#eeeeee"><font size="10px"><b> <?php echo  $trt07 ?></font></b></td>
<td width="8.3%" height="20px" bgcolor="#eeeeee"><font size="10px" color="red"><b> <?php echo  $flt08 ?></font></b></td>
<td width="8.3%" height="20px" bgcolor="#eeeeee"><font size="10px"><b> <?php echo  $trt08 ?></font></b></td>
<td width="8.3%" height="20px" bgcolor="#eeeeee"><font size="10px" color="red"><b> <?php echo  $flt09 ?></font></b></td>
<td width="8.3%" height="20px" bgcolor="#eeeeee"><font size="10px"><b> <?php echo  $trt09 ?></font></b></td>
<td width="8.3%" height="20px" bgcolor="#eeeeee"><font size="10px" color="red"><b> <?php echo  $flt10 ?></font></b></td>
<td width="8.3%" height="20px" bgcolor="#eeeeee"><font size="10px"><b> <?php echo  $trt10 ?></font></b></td>
<td width="8.4%" height="20px" bgcolor="#eeeeee"><font size="10px" color="red"><b> <?php echo  $flt11 ?></font></b></td>
<td width="8.4%" height="20px" bgcolor="#eeeeee"><font size="10px"><b> <?php echo  $trt11 ?></font></b></td>
<td width="8.4%" height="20px" bgcolor="#eeeeee"><font size="10px" color="red"><b> <?php echo  $flt12 ?></font></b></td>
<td width="8.4%" height="20px" bgcolor="#eeeeee"><font size="10px"><b> <?php echo  $trt12 ?></font></b></td>

</tr>
</table>
<table height="100%" border="1" width="100%" CELLPADDING="0" CELLSPACING="0">
<tr>
<td width="49.8%" height="20px" bgcolor="#eeeeee"><font size="10px"><b> aars total First look  <?php echo  $flty ?></font></b></td>
<td width="50.2%" height="20px" bgcolor="#eeeeee"><font size="10px"><b> aars total Turn rount <?php echo  $trty ?></font></b></td>
</tr>
</table>


</body>
</html>


<?php

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
<td width="100%" height="50px" bgcolor="#dddddd" valign="middle" style="line-height:200%;"><center><font size="25px"><b>Oversigt over prosalg printe <?php echo ' '.$dato.' '; ?></font></b><font size="22px"><b></font></b></td>
</tr>
</table>
<p>
<table height="100%" border="1" width="100%" CELLPADDING="0" CELLSPACING="0">
<tr>
<td width="12%" height="20px" bgcolor="#dddddd"><font size="10px"> <b>Periode</font></b></td>
<td width="12%" height="20px" bgcolor="#dddddd"><font size="10px"> <b>Tilbud sent</b></font></td>
<td width="13%" height="20px" bgcolor="#dddddd"><font size="10px"> <b>Salg</font></b></td>
<td width="13%" height="20px" bgcolor="#dddddd"><font size="10px"> <b>Ikke salg</b></font></td>
<td width="20%" height="20px" bgcolor="#dddddd"><font size="10px"> <b>Kunde pris</b></font></td>
<td width="20%" height="20px" bgcolor="#dddddd"><font size="10px"> <b>Fortjeneste</b></font></td>
<td width="10%" height="20px" bgcolor="#dddddd"><font size="10px"> <b>DB</b></font></td>

</tr>
</table>
<?php 
	include_once('../teknik/sql/Sagsliste/danne_uge_salg.php');
	include_once('../teknik/sql/Sagsliste/jan_mrd_salg.php'); 
	include_once('../teknik/sql/Sagsliste/feb_mrd_salg.php');
	include_once('../teknik/sql/Sagsliste/mar_mrd_salg.php');
	include_once('../teknik/sql/Sagsliste/apr_mrd_salg.php');
	include_once('../teknik/sql/Sagsliste/maj_mrd_salg.php'); 
	include_once('../teknik/sql/Sagsliste/jun_mrd_salg.php');
	include_once('../teknik/sql/Sagsliste/jul_mrd_salg.php');
	include_once('../teknik/sql/Sagsliste/aug_mrd_salg.php'); 
	include_once('../teknik/sql/Sagsliste/sep_mrd_salg.php');  
	include_once('../teknik/sql/Sagsliste/okt_mrd_salg.php'); 
	include_once('../teknik/sql/Sagsliste/nov_mrd_salg.php'); 
	include_once('../teknik/sql/Sagsliste/dec_mrd_salg.php');
	include_once('../teknik/sql/Sagsliste/hele_mrd_salg.php');                
?>
</body>
</html>
<?php
$html = ob_get_clean();

// set core font
$pdf->SetFont('helvetica', '', 10);

// output the HTML content
$pdf->writeHTML($html, false, 0, false, false);

ob_clean();

// ---------------------------------------------------------

$pdf->Output('example_039a.pdf', 'I');

//============================================================+
// END OF FILE                                                
//============================================================+
?>