 <?
  header('Content-Type: text/html;charset=utf8');
 ?>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf8"> 
</head>

<div id="container">
	<div class="top">Klik for at flytte til Tilføj komponter</div>
<?php
$html = '';
$html .= '<div id="container2">';
$html .= '<div class="felt70">';
$html .= '<input type="hidden" id="putpaa';
$html .= 'nr';
$html .= '" value="';
$html .= 'postString';
$html .= '">';
$html .= '<input type="hidden" id="putpaab';
$html .= 'nr';
$html .= '" value="';
$html .= 'nameString';
$html .= '">';
$html .= '<input type="hidden" id="putpaac';
$html .= 'nr';
$html .= '" value="';
$html .= 'levString';
$html .= '">';
$html .= '<input type="text" class="button" onclick="myFunction';
$html .= 'nr';
$html .= '()" value="';
$html .= 'nameString - postString';
$html .= '"></button>';
$html .= '</div>';
$html .= '<div class="felt30">';
$html .= 'Antal paa Lager: ';
$html .= 'lagerantal';
$html .= ' Stk';
$html .= '</div>';
$html .= '<div class="felt30">';
$html .= 'Salgs Pris: ';
$html .= 'salgpris';
$html .= ' DKK';
$html .= '</div>';
$html .= '</div>';
?>
</div>

<?php
// Get Search

	$search_string = $_POST['query'];
	$search_string = strtolower($search_string);
	$search_string = '*'.$search_string.'*';
	$search_string = urlencode($search_string);
	$search_string = str_replace(array("%E3"),array("%C3"),$search_string);
	$search_string = str_replace(array("%2A%E3"),array("%2A%C3"),$search_string);


// Check Length More Than One Character

	// Build Query
	$json_str = file_get_contents("http://localhost:8080/?table=InvItemClient&filters=Item=$search_string");
	// Do Search
	print_r($test2 = json_decode($json_str, true));

$test3 = count($test2);
$erdernoget = $test2['error'];
if (!isset($erdernoget)){
if ($test3 >= '10'){
$test3 = '10';
}
$test4 = 0;
while ($test4 != $test3) {
$test = $test2[$test4];

	//exit;

  		$name = $test['_Name'];
	        $nummer = $test['Item'];
		$lagerantal = $test['Qty'];
		$salgpris = $test['SalesPrice1'];
		$levran = $test['PurchaseAccount'];

$json_str = file_get_contents("http://localhost:8080/?table=CreditorClient&filters=Account=$levran");

// Do Search
$test5 = json_decode($json_str, true);
$test6 = $test5[0];
		$levran = $test6['Name'];

		// Format No Results Output
		$output = str_replace('nameString', $name, $html);
		$output = str_replace('postString', $nummer, $output);
		$output = str_replace('levString', $levran, $output);
		$output = str_replace('lagerantal', $lagerantal, $output);
		$output = str_replace('salgpris', $salgpris, $output);
		$output = str_replace('nr', $test4, $output);
		// Output
		echo($output);
	$test4 = $test4 + 1;
} }
?>