<! ø !>
<?php

function get_string_between($string, $start, $end){
  $string = " ".$string;
  $ini = strpos($string,$start);
  if ($ini == 0) return "";
  $ini += strlen($start);
  $len = strpos($string,$end,$ini) - $ini;
  return substr($string,$ini,$len);
}

$url =  "//{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
$_SESSION['nu'] = $url;
$url2 = $_SERVER['HTTP_REFERER'];

$nu = get_string_between($url, 'side=', '&');
$sidst = get_string_between($url2, 'side=', '&');

if($nu != $sidst){
$_SESSION['til1'] = $_SERVER['HTTP_REFERER'];
}

if($nu == 'fak2'){
if($sidst == 'stam'){
$_SESSION['til_2'] = $_SERVER['HTTP_REFERER'];
}}

if($sidst == 'fak3'){
$_SESSION['til1'] = $_SESSION['til_2'];
}
if($nu == 'stam'){
if($sidst == 'hentrapport'){


$iddd = get_string_between($url2, '&id=', '&');
$_SESSION['til_3'] = 'index.php?side=hentrapport&id='.$iddd.'&p_id=list';
}}

if($sidst == 'fak2'){
if($nu == 'stam'){
$iddd = get_string_between($url, '&id=', '&');
$_SESSION['til_3'] = 'index.php?side=hentrapport&id='.$iddd.'&p_id=list';
$_SESSION['til1'] = $_SESSION['til_3'];
}}

$til = $_SESSION['til1'];
$tilbageknap = $til;
?>
