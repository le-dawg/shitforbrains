<! � !>
<?php
if(isset($_GET['c5id'])) { 
$idc5 = $_GET['c5id']; 
$con2 = odbc_connect("Driver={SQL Server};Server=PROSERVER\BKUPEXEC;Database=C530; CharacterSet => UTF-8", 'proteknik2', 'pro2060');


	$querySQL = "SELECT NAVN, LXBENUMMER, ADRESSE1, ADRESSE2, POSTBY, BETALING, TELEFON, FORFALDEN, SALDO, LAND, SPXRRET FROM DEBKART WHERE DATASET='DAT' AND LXBENUMMER = $idc5" ;

	$resultSQL = odbc_exec($con2, $querySQL);
	while(odbc_fetch_row($resultSQL)){
  		$rap_firma_navn = odbc_result($resultSQL, 1);
		$rap_firma_navn = iconv("ISO-8859-1", "UTF-8//TRANSLIT//IGNORE", $rap_firma_navn);
  		$rap_navn = odbc_result($resultSQL, 3);
		$rap_navn = iconv("ISO-8859-1", "UTF-8//TRANSLIT//IGNORE", $rap_navn);
  		$rap_adresse = odbc_result($resultSQL, 4);
		$rap_adresse = iconv("ISO-8859-1", "UTF-8//TRANSLIT//IGNORE", $rap_adresse);
		$rap_post = odbc_result($resultSQL, 5);
		$rap_post = iconv("ISO-8859-1", "UTF-8//TRANSLIT//IGNORE", $rap_post);
		$rap_telefon = odbc_result($resultSQL, 7);
		$rap_telefon = iconv("ISO-8859-1", "UTF-8//TRANSLIT//IGNORE", $rap_telefon);
		$FORFALDEN = odbc_result($resultSQL, 8);
		$SALDO = odbc_result($resultSQL, 9);
		$rap_land = odbc_result($resultSQL, 10);
		$rap_land = iconv("ISO-8859-1", "UTF-8//TRANSLIT//IGNORE", $rap_land);
		$betaling = odbc_result($resultSQL, 6);
		$spxrret = odbc_result($resultSQL, 11);
	
}
if($betaling == '20_Netto'){
If($FORFALDEN != '0.000000000000'){
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
if($spxrret == '3'){
?>
<div class="h1flash">
<?php
Echo 'kontoen til '. $rap_firma_navn .' er spærret, og der kan ikke oprettes på kunden'; 
?>
</div>
<?php
}}
?>
