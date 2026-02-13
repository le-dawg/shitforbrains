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


$dato = date('d-m-Y');
$min = date('Y-m-d', strtotime($_GET['dato']));
$max = date('Y-m-d', strtotime($_GET['dato2']));


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
<td width="100%" height="50px" bgcolor="#eeeeee" valign="middle" style="line-height:200%;"><center><font size="25px"><b> DIV OG SYGE rapport for perioden <br> <?php echo ' '.$min.' '; ?> til <?php echo ' '.$max.' '; ?><br> Printe den <?php echo ' '.$dato.' '; ?></font></b><font size="22px"><b></font></b></td>
</tr>
</table>
<p>

<table height="100%" border="1" width="100%" CELLPADDING="0" CELLSPACING="0">
<tr>
<td width="24%" height="20px" bgcolor="#eeeeee"><font size="10px"> <b>Navn</font></b></td>
<td width="19%" height="20px" bgcolor="#eeeeee"><font size="10px"> <b>Div timer</font></b></td>
<td width="19%" height="20px" bgcolor="#eeeeee"><font size="10px"> <b>Syge timer</b></font></td>
<td width="19%" height="20px" bgcolor="#eeeeee"><font size="10px"> <b>Total timer</b></font></td>
<td width="19%" height="20px" bgcolor="#eeeeee"><font size="10px"> <b>% div/syg af tot</b></font></td>

</tr>
</table>

 <?php                     $result  = mysqli_query($conn,"SELECT * FROM promed WHERE id != '1' AND id != '100' AND id != '101' AND lukket != 'JA' ORDER BY id ASC ");
            while($row = mysqli_fetch_assoc($result)) {
		  $navn = $row['navn'];
		  $ans = $row['id'];
		  $qry = mysqli_query($conn," SELECT SUM(timer) AS sygtimer FROM proservice_rapport WHERE dato2 <= '$max' AND dato2 >= '$min' AND ans = '$ans' AND service_raport = 'SYG' AND timer != '-'");
  		  $row = mysqli_fetch_assoc($qry);
		  $sygtimer = $row['sygtimer'];
		  $qry = mysqli_query($conn," SELECT SUM(timer) AS divtimer FROM proservice_rapport WHERE dato2 <= '$max' AND dato2 >= '$min' AND ans = '$ans' AND service_raport = 'DIV' AND timer != '-' AND service_raport != 'FRI' AND service_raport != 'ASAP'");
  		  $row = mysqli_fetch_assoc($qry);
		  $divtimer = $row['divtimer'];  
		  $qry = mysqli_query($conn," SELECT SUM(timer) AS timer FROM proservice_rapport WHERE dato2 <= '$max' AND dato2 >= '$min' AND ans = '$ans' AND timer != '-' AND service_raport != 'FRI' AND service_raport != 'ASAP'");
  		  $row = mysqli_fetch_assoc($qry);
		  $timer1 = $row['timer'];
		  $qry = mysqli_query($conn," SELECT SUM(timer50) AS timer FROM proservice_rapport WHERE dato2 <= '$max' AND dato2 >= '$min' AND ans = '$ans' AND timer != '-' AND service_raport != 'FRI' AND service_raport != 'ASAP'");
  		  $row = mysqli_fetch_assoc($qry);
		  $timer50 = $row['timer']; 
		  $qry = mysqli_query($conn," SELECT SUM(timer100) AS timer FROM proservice_rapport WHERE dato2 <= '$max' AND dato2 >= '$min' AND ans = '$ans' AND timer != '-' AND service_raport != 'FRI' AND service_raport != 'ASAP'");
  		  $row = mysqli_fetch_assoc($qry);
		  $timer100 = $row['timer'];
		  $timer = $timer1 + $timer50 + $timer100;
                  if($timer == 0){
		  $timer_pro = 1; } else { $timer_pro = $timer; }
		  $pro_div = $divtimer / $timer_pro * 100;
		  $pro_syg = $sygtimer / $timer_pro * 100; ?>

<table height="100%" border="1" width="100%" CELLPADDING="0" CELLSPACING="0">
<tr>
<td width="24%" height="20px"><font size="10px"><b> <?php echo ''.$navn.''; ?></font></b></td>
<td width="19%" height="20px"><font size="10px"><b> <?php echo ''.$divtimer.''; ?></font></b></td>
<td width="19%" height="20px"><font size="10px"><b> <?php echo ''.$sygtimer.''; ?></font></b></td>
<td width="19%" height="20px"><font size="10px"><b> <?php echo ''.$timer.''; ?></font></b></td>
<td width="19%" height="20px">
	<table height="100%" width="100%" CELLPADDING="0" CELLSPACING="0"><tr>
	<td width="50%" height="100%"><font size="10px"><b><?php echo ''.round($pro_div, 2).''; ?>% </b></font></td>
	<td width="50%" height="100%"><font size="10px"><b>/ <?php echo ''.round($pro_syg, 2).''; ?>% </b></font></td>
	</tr></table></td>
</tr>
</table>
<?php } ?>
 <?php         
		  $qry = mysqli_query($conn," SELECT SUM(timer) AS sygtimer FROM proservice_rapport WHERE ans != '1' AND ans != '100' AND ans != '101' AND dato2 <= '$max' AND dato2 >= '$min' AND service_raport = 'SYG' AND timer != '-' AND service_raport != 'FRI'");
  		  $row = mysqli_fetch_assoc($qry);
		  $sygtimer = $row['sygtimer'];
		  $qry = mysqli_query($conn," SELECT SUM(timer) AS divtimer FROM proservice_rapport WHERE ans != '1' AND ans != '100' AND ans != '101' AND dato2 <= '$max' AND dato2 >= '$min' AND service_raport = 'DIV' AND timer != '-' AND service_raport != 'FRI'");
  		  $row = mysqli_fetch_assoc($qry);
		  $divtimer = $row['divtimer'];  
		  $qry = mysqli_query($conn," SELECT SUM(timer) AS timer FROM proservice_rapport WHERE ans != '1' AND ans != '100' AND ans != '101' AND dato2 <= '$max' AND dato2 >= '$min' AND timer != '-' AND service_raport != 'FRI'");
  		  $row = mysqli_fetch_assoc($qry);
		  $timer1 = $row['timer']; 
		  $qry = mysqli_query($conn," SELECT SUM(timer50) AS timer FROM proservice_rapport WHERE ans != '1' AND ans != '100' AND ans != '101' AND dato2 <= '$max' AND dato2 >= '$min' AND timer != '-' AND service_raport != 'FRI'");
  		  $row = mysqli_fetch_assoc($qry);
		  $timer50 = $row['timer']; 
		  $qry = mysqli_query($conn," SELECT SUM(timer100) AS timer FROM proservice_rapport WHERE ans != '1' AND ans != '100' AND ans != '101' AND dato2 <= '$max' AND dato2 >= '$min' AND timer != '-' AND service_raport != 'FRI'");
  		  $row = mysqli_fetch_assoc($qry);
		  $timer100 = $row['timer']; 
		  $timer = $timer1 + $timer50 + $timer100; 
                  if($timer == 0){
		  $timer_pro = 1; } else { $timer_pro = $timer; }
		  $pro_div = $divtimer / $timer_pro * 100;
		  $pro_syg = $sygtimer / $timer_pro * 100; ?>

<table height="100%" border="1" width="100%" CELLPADDING="0" CELLSPACING="0">
<tr>
<td width="24%" height="20px"><font size="10px"><b> TOTAL</font></b></td>
<td width="19%" height="20px"><font size="10px"><b> <?php echo ''.$divtimer.''; ?></font></b></td>
<td width="19%" height="20px"><font size="10px"><b> <?php echo ''.$sygtimer.''; ?></font></b></td>
<td width="19%" height="20px"><font size="10px"><b> <?php echo ''.$timer.''; ?></font></b></td>
<td width="19%" height="20px">
	<table height="100%" width="100%" CELLPADDING="0" CELLSPACING="0"><tr>
	<td width="50%" height="100%"><font size="10px"><b><?php echo ''.round($pro_div, 2).''; ?>% </b></font></td>
	<td width="50%" height="100%"><font size="10px"><b>/ <?php echo ''.round($pro_syg, 2).''; ?>% </b></font></td>
	</tr></table></td>
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

ob_clean();

// ---------------------------------------------------------

//Close and output PDF document
$pdf->Output('example_039a.pdf', 'I');




//============================================================+
// END OF FILE                                                
//============================================================+
?>