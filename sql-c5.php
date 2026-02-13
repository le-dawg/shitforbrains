<! ø !>
<?php

if(isset($_GET['c5id'])) { 
$idc5 = $_GET['c5id']; 


$json_str = file_get_contents("http://localhost:8080/?table=DebtorClient&property=Account&propertyvalue=$idc5");


$test = json_decode($json_str, true);
$test = $test[0];
$rap_firma_navn = $test['_Name'];
$rap_navn = $test['_Address1'];
$rap_adresse = $test['_Address2'];
$rap_post = $test['_City'];
$rap_land = $test['_Country'];
$rap_telefon = $test['_Phone'];
$betaling = $test['_Payment'];
$spxrret = $test['_Blocked'];
$spxrret = (boolval($spxrret) ? 'true' : 'false');


if($betaling == '20_Netto'){
If($FORFALDEN == '0.000000000000'){
if($SALDO != '0.000000000000'){
$del = $FORFALDEN - $SALDO;
$belob = $FORFALDEN - $del;


?>
<div class="h1flash">
<?php
Echo 'Denne kunde har en forfalden konto på '. round($belob, 2) .' DKK'; 
?>
</div>
<?php
}}}
?>
<?php 
if($spxrret == 'true'){
?>
<div class="h1flash">
<?php
Echo 'kontoen til '. $rap_firma_navn .' er spærret, og der kan ikke oprettes på kunden'; 
?>
</div>
<?php
}}
?>
