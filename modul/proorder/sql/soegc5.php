<! � !>
<?php
if(isset($_POST['send'])) {
if($_POST['vare_nummer'] != '') {
     $errormsg = "";

	$vare_nummer = $_POST['vare_nummer']; 
	$vare_nummer = strtolower($vare_nummer);
	$vare_nummer = '*'.$vare_nummer.'*';
	$vare_nummer = urlencode($vare_nummer);
	$vare_nummer = str_replace(array("%E3"),array("%C3"),$vare_nummer);
	$vare_nummer = str_replace(array("%2A%E3"),array("%2A%C3"),$vare_nummer);
	$json_str = file_get_contents("http://localhost:8080/?table=InvItemClient&filters=item=$vare_nummer");
	print_r($test2 = json_decode($json_str, true));
	$test3 = count($test2);



$test4 = 0;
$test = $test2;

$erdernoget = $test['error'];
if (!isset($erdernoget)){
while ($test4 != $test3){
$viby = 0;
$vejle = 0;
$lager2 = 0;
$varehus = 0;
$test = $test2[$test4];
$json_varehus = file_get_contents("http://localhost:8080/?table=InvStockStatus&filters=Item=$test[Item]");
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


?>
<div id="container2" style="border-top:2px black solid;">
	<div class="felt50">Vare nr.: <?php echo $test['Item']; ?></div>
	<div class="felt50">vare beskrivelse: <?php echo $test['_Name']; ?></div>
</div>
<div id="container2">
	<div class="felt25">Antal på lager: <?php echo round($test['Qty']); ?> Stk.</div>
	<div class="felt25">Heraf på Viby lager: <?php echo round($viby); ?> Stk.</div>
	<div class="felt25">Heraf på Vejle lager: <?php echo round($vejle); ?> Stk.</div>
	<div class="felt25">I Order: <?php echo round($test['QtyOrdered']); ?> Stk.</div>
</div>
<?php
$levran = $test['PurchaseAccount'];
$json_str = file_get_contents("http://localhost:8080/?table=CreditorClient&filters=Account=*$levran*");

// Do Search
$test5 = json_decode($json_str, true);
$test6 = $test5[0];
?>
<div id="container2">
	<div class="felt25">Købspris: <?php echo round($test['CostPrice'], 2); ?> DKK</div>
	<div class="felt25">Salgspris.: <?php echo round($test['SalesPrice1'], 2); ?> DKK</div>
	<div class="felt25"></div>
	<div class="felt25">Leverandør: <?php echo $test6['Name']; ?></div>
</div>
<div id="container2">
	<div class="felt100b"></div>
</div>
<br>
<?php
$test4 = $test4 + 1;
} } } elseif($_POST['vare_beskrivelse'] != '') {
     $errormsg = "";

        $vare_beskrivelse = $_POST['vare_beskrivelse']; 
	$vare_beskrivelse = strtolower($vare_beskrivelse);
	$vare_beskrivelse = '*'.$vare_beskrivelse.'*';
	$vare_beskrivelse = urlencode($vare_beskrivelse);
	$vare_beskrivelse = str_replace(array("%E3"),array("%C3"),$vare_beskrivelse);
	$vare_beskrivelse = str_replace(array("%2A%E3"),array("%2A%C3"),$vare_beskrivelse);

	$json_str = file_get_contents("http://localhost:8080/?table=InvItemClient&filters=Name=$vare_beskrivelse&select=[\"Name\",\"Item\",\"Qty\",\"SalesPrice1\",\"PurchaseAccount\"]");
	$test2 = json_decode($json_str, true);
	$test3 = count($test2);
$test4 = 0;
$test = $test2;
$erdernoget = $test['error'];
if (!isset($erdernoget)){
while ($test4 != $test3){
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
?>
<div id="container2" style="border-top:2px black solid;">
	<div class="felt50">Vare nr.: <?php echo $test['Item']; ?></div>
	<div class="felt50">vare beskrivelse: <?php echo $test['Name']; ?></div>
</div>
<div id="container2">
	<div class="felt25">Antal på lager: <?php echo round($test['Qty']); ?> Stk.</div>
	<div class="felt25">Heraf på Viby lager: <?php echo round($viby); ?> Stk.</div>
	<div class="felt25">Heraf på Vejle lager: <?php echo round($vejle); ?> Stk.</div>
	<div class="felt25">I Order: <?php echo round($test['QtyOrdered']); ?> Stk.</div>
</div>
<?php
$levran = $test['PurchaseAccount'];
$json_str = file_get_contents("http://localhost:8080/?table=CreditorClient&filters=Account=*$levran*&select=[\"Name\"]");

// Do Search
$test5 = json_decode($json_str, true);
$test6 = $test5[0];
?>
<div id="container2">
	<div class="felt25">Købspris: <?php echo round($test['CostPrice'], 2); ?> DKK</div>
	<div class="felt25">Salgspris.: <?php echo round($test['SalesPrice1'], 2); ?> DKK</div>
	<div class="felt25"></div>
	<div class="felt25">Leverandør: <?php echo $test6['Name']; ?></div>
</div>
<div id="container2">
	<div class="felt100b"></div>
</div>
<br>
<?php
$test4 = $test4 + 1;
} } }
 }
