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
$html .= '<div class="felt60">';
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
$html .= '<input type="text" class="button" onclick="kominsat';
$html .= 'nr';
$html .= '()" value="';
$html .= 'nameString - postString';
$html .= '"></button>';
$html .= '</div>';
$html .= '<div class="felt10">';
$html .= 'paa Lager: ';
$html .= 'lagerantal';
$html .= ' Stk';
$html .= '</div>';
$html .= '<div class="felt10">';
$html .= 'i Viby: ';
$html .= 'vila';
$html .= ' Stk';
$html .= '</div>';
$html .= '<div class="felt10">';
$html .= 'i Vejle: ';
$html .= 'vela';
$html .= ' Stk';
$html .= '</div>';
$html .= '<div class="felt10">';
$html .= 'Pris: ';
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
	$search_string = str_replace(array("%2C"),array("%2C"),$search_string);

// Check Length More Than One Character
       
	// Build Query
	$json_str = file_get_contents("http://localhost:8080/?table=InvItemClient&filters=Name=$search_string&select=[\"Name\",\"Item\",\"Qty\",\"SalesPrice1\"]");
	// Do Search
	$test2 = json_decode($json_str, true);
;
$test3 = count($test2);
$erdernoget = $test2['error'];

$test4 = 0;
$test = $test2;

if (!isset($erdernoget)){
if ($test3 >= '10'){
$test3 = '10';
}
$test4 = 0;
while ($test4 != $test3) {
$viby = 0;
$vejle = 0;
$lager2 = 0;
$varehus = 0;
$test = $test2[$test4];
$json_varehus = file_get_contents("http://localhost:8080/?table=InvStockStatus&filters=Item=$test[Item]&select=[\"Warehouse\",\"Qty\"]");
$varehus = json_decode($json_varehus, true);
Foreach ($varehus as $varehus2){
$lager2 = array(varehus => $varehus2['Warehouse'], antal => $varehus2['Qty']);
if ($lager2['varehus'] == 'Viby'){
$viby = $lager2['antal'];
}
if ($lager2['varehus'] == 'Vejle'){
$vejle = $lager2['antal'];
}
}

;
	//exit;

  		$name = $test['Name'];
	        $nummer = $test['Item'];
		$lagerantal = $test['Qty'];
		$salgpris = $test['SalesPrice1'];

$test6 = $test5[0];

		$levran = $test6['Name'];

		// Format No Results Output
		$output = str_replace('nameString', $name, $html);
		$output = str_replace('postString', $nummer, $output);
		$output = str_replace('levString', $levran, $output);
		$output = str_replace('lagerantal', $lagerantal, $output);
	        $output = str_replace('salgpris', $salgpris, $output);
	        $output = str_replace('vila', $viby, $output);
	        $output = str_replace('vela', $vejle, $output);
		$output = str_replace('nr', $test4, $output);
		// Output
		echo($output);
	$test4 = $test4 + 1;
} }
?>