
 <?
  header('Content-Type: text/html;charset=utf8');
 ?>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf8"> 
</head>
<?php
$conn = odbc_connect("Driver={SQL Server};Server=PROSERVER\BKUPEXEC;Database=C530;", 'proteknik2', 'pro2060');
$html = '';
$html .= '<li class="result">';
$html .= '<a href="urlString">';
$html .= '<h3>nameString - postString</h3>';

$html .= '</a>';
$html .= '</li>';

// Get Search

$search_string =  $_POST['query'];
$search_string = iconv("UTF-8", "ISO-8859-1//TRANSLIT//IGNORE", $search_string);


// Check Length More Than One Character

	// Build Query
	$query = "SELECT VARENUMMER, VARENAVN1, LXBENUMMER, LEVERANDXR, BEHOLDNING FROM LAGKART WHERE TOLDPOSITION = '%$search_string%'" ;
echo $query;
	// Do Search
	$result = odbc_exec($conn, $query);
echo $result;
	//exit;
	while(odbc_fetch_row($result)){
  		$name = odbc_result($result, 1); 
		$name = iconv("ISO-8859-1", "UTF-8//TRANSLIT//IGNORE", $name);
  		$nummer = odbc_result($result, 3); 
		$nummer = iconv("ISO-8859-1", "UTF-8//TRANSLIT//IGNORE", $nummer);

		// Format No Results Output
		$output = str_replace('urlString', '?c5id='.$nummer , $html);
		$output = str_replace('nameString', $name, $output);
		$output = str_replace('postString', $name, $output);

		// Output
		echo($output);
		echo($name);
		echo($nummer);
	}

?>