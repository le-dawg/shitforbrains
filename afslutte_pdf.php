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


$week_number = $_GET['dato'];
$year = $_GET['dato2'];
{
$min3 = date('Y-m-d H:i:s', strtotime($year."W".$week_number))."\n";
}
$dato = date('d-m-Y');
$min = date('Y-m-d H:i:s', strtotime($min3. "this monday"));
$min2 = date('W-Y', strtotime($min));
$max = date('Y-m-d H:i:s', strtotime($min3. "this sunday"));


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
<td width="12.5%" height="20px" bgcolor="#dddddd"><font size="10px"> <b>Service rap.</font></b></td>
<td width="22.5%" height="20px" bgcolor="#dddddd"><font size="10px"> <b>Firma navn</font></b></td>
<td width="22.5%" height="20px" bgcolor="#dddddd"><font size="10px"> <b>producent</b></font></td>
<td width="12.5%" height="20px" bgcolor="#dddddd"><font size="10px"> <b>type</b></font></td>
<td width="5.25%" height="20px" bgcolor="#dddddd"><font size="10px"> <b>ans</b></font></td>
<td width="25%" height="20px" bgcolor="#dddddd"><font size="10px"> <b>afslutte dato</b></font></td>
</tr>
</table>

<?php          $result  = mysql_query("SELECT * FROM proservice WHERE dato3 <= '$max' AND dato3 >= '$min' AND ans='10' AND ind_kode != '7' || dato3 <= '$max' AND dato3 >= '$min' AND ans='11' AND ind_kode != '7' || dato3 <= '$max' AND dato3 >= '$min' AND ans='12' AND ind_kode != '7' || dato3 <= '$max' AND dato3 >= '$min' AND ans='13' AND ind_kode != '7' || dato3 <= '$max' AND dato3 >= '$min' AND ans='15' AND ind_kode != '7' || dato3 <= '$max' AND dato3 >= '$min' AND ans='16' AND ind_kode != '7' || dato3 <= '$max' AND dato3 >= '$min' AND ans='19' AND ind_kode != '7' || dato3 <= '$max' AND dato3 >= '$min' AND ans='20' AND ind_kode != '7' || dato3 <= '$max' AND dato3 >= '$min' AND ans='50' AND ind_kode != '7' ORDER BY dato3 ASC ");
            while($row = mysql_fetch_assoc($result)) {
            $id = $row['id'];
            $navn = $row['firma_navn'];
            $pro = $row['fabrikat'];
            $vare = $row['type'];
            $ans = $row['ans'];
            $dato = $row['dato3'];
?>
<table height="100%" border="1" width="100%" CELLPADDING="0" CELLSPACING="0">
<tr>
<td width="12.5%" height="20px" bgcolor="#ffffff"><font size="10px"> <b><?php echo ''.$id.''; ?></b></font></td>
<td width="22.5%" height="20px" bgcolor="#ffffff"><font size="10px"> <b><?php echo ''.$navn.''; ?></b></font></td>
<td width="22.5%" height="20px" bgcolor="#ffffff"><font size="10px"> <b><?php echo ''.$pro.''; ?></b></font></td>
<td width="12.5%" height="20px" bgcolor="#ffffff"><font size="10px"> <b><?php echo ''.$vare.''; ?></b></font></td>
<td width="5.25%" height="20px" bgcolor="#ffffff"><font size="10px"> <b><?php echo ''.$ans.''; ?></b></font></td>
<td width="25%" height="20px" bgcolor="#ffffff"><font size="10px"> <b><?php echo ''.$dato.''; ?></b></font></td>
</tr>
</table>
<?php } ?>
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