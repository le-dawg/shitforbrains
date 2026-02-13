<! ø !>
<p>
<?php if($_GET['side'] == 'fak2') {
$tekst = 'Dato';
$tekst3 = 'Dato';
$tekst2 = 'service rapport';
$tekstin = date('d-m-Y');
$tekst4 = $tekstin;
}
if($_GET['side'] == 'dagseddel') {
$tekst = 'service_rapport';
$tekst2 = 'din dagsseddel';
$tekst3 = 'Rapport';
$tekstin = '';
if (!empty($_SESSION['uid2'])) {
$tekst4 = $_SESSION['uid2'];
} else {
$tekst4 = '';
}
}
?>
<div id="container">
	<div class="top">Tilføj linjer til <?php echo $tekst2; ?></div>
       <form method="post" action="" onsubmit="return v(this)"><input type="hidden" name="id" value="<?php echo ''.$_GET['id'].''; ?>"><input type="hidden" name="dato_line" value="<?php echo $dato ?>">
<div id="container2">
		<div class="felt10" ><?php echo $tekst3; ?></div>
		<div class="felt5" >Int.:</div>
		<div class="felt45">Beskrivelse af udført arbejde</div>
		<div class="felt5">Timer</div>
		<div class="felt10">O.T. 50%</div>
		<div class="felt10">O.T. 100%</div>
		<div class="felt5">Bil</div>
		<div class="felt5">Km</div>
		<div class="felt5">Bro</div>

	</div>
	<div id="container2" style="height:55px;">
		<div class="felt10"><input class="tekst" type="text" name="<?php echo $tekst; ?>"  value="<?php echo $tekst4; ?>"></div>
		<div class="felt5"><input id="graa" class="tekst" type="text" name="ans" value="<?php echo ''.$_SESSION['uid'].'' ?>"></div>
		<div class="felt45"><textarea rows="4" cols="50" class="tekst" type="text" name="beskivsle" value="" autofocus></textarea></div>
		<div class="felt5"><input class="tekst" type="text" name="timer" value=""></div>
		<div class="felt10"><input class="tekst" type="text" name="o_t_50" value=""></div>
		<div class="felt10"><input class="tekst" type="text" name="o_t_100" value=""></div>
		<div class="felt5"><select name="bil" class="in" id="hvid"><?php include('sql/fak2/biler.php'); ?></div>
		<div class="felt5"><input class="tekst" type="text" name="km" value=""></div>
		<div class="felt5"><input class="tekst" type="text" name="bro" value=""></div>

	</div>