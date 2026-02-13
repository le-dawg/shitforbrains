
 <?
  header('Content-Type: text/html;charset=utf8');
 ?>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf8"> 
</head>
<?php
$html = '';
$html .= '<li class="result">';
$html .= '<a href="urlString">';
$html .= '<h3>nameString - postString cityString</h3>';

$html .= '</a>';
$html .= '</li>';

// Get Search

	$search_string = $_POST['query'];
	$search_string = strtolower($search_string);
	$search_string = '*'.$search_string.'*';
	$search_string = urlencode($search_string);
	$search_string = str_replace(array("%2A%E3"),array("%2A%C3"),$search_string);


// Check Length More Than One Character

	// Build Query
	$json_str = file_get_contents("http://localhost:8080/?table=DebtorClient&property=Name&propertyvalue=*$search_string*");
	// Do Search
	$test2 = json_decode($json_str, true);
$test3 = count($test2);
$test4 = 0;
while ($test4 != $test3) {
$test = $test2[$test4];

	//exit;

  		$name = $test['_Name'];
		$nummer = $test['_Account'];;
  		$city = $test['_City'];
  		$post = $test['_ZipCode'];

		// Format No Results Output
		$output = str_replace('urlString', '?c5id='.$nummer , $html);
		$output = str_replace('nameString', $name, $output);
		$output = str_replace('postString', $post, $output);
		$output = str_replace('cityString', $city, $output);
		// Output
		echo($output);
	$test4 = $test4 + 1;
} 
?>