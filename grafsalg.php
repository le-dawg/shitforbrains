<?php
 $url1=$_SERVER['REQUEST_URI'];
    header("Refresh: 120; URL=$url1");

include_once("../teknik/config.php");
include_once("sql/graf/1.php");

require_once ('jpgraph/src/jpgraph.php');
require_once ('jpgraph/src/jpgraph_line.php');
require_once ('jpgraph/src/jpgraph_bar.php');
 
if($belob6 == '0'){
$l1datay = array($snit11,$snit10,$snit9,$snit8,$snit7,$snit6);
$l2datay = array($belob12,$belob11,$belob10,$belob9,$belob8,$belob7);
} elseif($belob5 == '0'){
$l1datay = array($snit11,$snit10,$snit9,$snit8,$snit7,$snit6,$snit5);
$l2datay = array($belob12,$belob11,$belob10,$belob9,$belob8,$belob7,$belob6);
} elseif($belob4 == '0'){
$l1datay = array($snit11,$snit10,$snit9,$snit8,$snit7,$snit6,$snit5,$snit4);
$l2datay = array($belob12,$belob11,$belob10,$belob9,$belob8,$belob7,$belob6,$belob5);
} elseif($belob3 == '0'){
$l1datay = array($snit11,$snit10,$snit9,$snit8,$snit7,$snit6,$snit5,$snit4,$snit3);
$l2datay = array($belob12,$belob11,$belob10,$belob9,$belob8,$belob7,$belob6,$belob5,$belob4);
} elseif($belob2 == '0'){
$l1datay = array($snit11,$snit10,$snit9,$snit8,$snit7,$snit6,$snit5,$snit4,$snit3,$snit2);
$l2datay = array($belob12,$belob11,$belob10,$belob9,$belob8,$belob7,$belob6,$belob5,$belob4,$belob3);
} elseif($belob1 == '0'){
$l1datay = array($snit11,$snit10,$snit9,$snit8,$snit7,$snit6,$snit5,$snit4,$snit3,$snit2,$snit1);
$l2datay = array($belob12,$belob11,$belob10,$belob9,$belob8,$belob7,$belob6,$belob5,$belob4,$belob3,$belob2);
} elseif($belob1 != '0'){
$l1datay = array($snit11,$snit10,$snit9,$snit8,$snit7,$snit6,$snit5,$snit4,$snit3,$snit2,$snit1,$snit0);
$l2datay = array($belob12,$belob11,$belob10,$belob9,$belob8,$belob7,$belob6,$belob5,$belob4,$belob3,$belob2,$belob1);
}

JpgraphError::SetImageFlag(false);
JpGraphError::SetLogFile('syslog');
 
// Create the graph. 
$graph = new Graph(1280,768);    
$graph->SetScale('intlin');
 
$graph->img->SetMargin(60,20,20,20);
$graph->SetShadow();
 
// Create the linear error plot
$l1plot=new LinePlot($l1datay);
$l1plot->SetColor('red');
$l1plot->SetWeight(3);
$l1plot->SetLegend('12 mrd snit');
 
// Create the bar plot
$bplot = new BarPlot($l2datay);
$bplot->SetFillColor('orange');
$bplot->SetLegend('mrd. omsætning');
 
// Add the plots to t'he graph
$graph->Add($bplot);
$graph->Add($l1plot);
 
$graph->title->Set('PROsalg graf med 12 mrd snit');
 
$graph->title->SetFont(FF_FONT1,FS_BOLD);
$graph->yaxis->title->SetFont(FF_FONT1,FS_BOLD);
$graph->xaxis->title->SetFont(FF_FONT1,FS_BOLD);
 

$graph->xaxis->SetTickLabels($gDateLocale->GetShortMonth());

// Display the graph
$graph->Stroke();


?>