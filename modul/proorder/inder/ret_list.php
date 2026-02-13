<! Ø !>

<?php
if(!empty($_GET['funk'])) {
if($_GET['funk'] == 're'){
$intal = $_SESSION['uid']; 
$levendor = $_GET['lev']; 
$id = $_GET['id']; ?><br style="clear:both">
<?php     
          $result  = mysqli_query($conn, "SELECT * FROM proorder WHERE id=$id");
          while($row20 = mysqli_fetch_assoc($result)) {  
?>
<form method="post" action="" onsubmit="return v(this)">
	<input type="hidden" name="id" value="<?php echo $id; ?>">
	<div class="top">Ret ordre <?php echo $_GET['id']; ?></div>
<div id="container2">
	<div class="felt25">Dato:</div>
	<div class="felt25"><input class="in" id="graa" type="text" name="dato" value="<?php echo $row20['dato']; ?>"></div>
	<div class="felt25">Intialer:</div>
	<div class="felt25"><?php echo $row20['intal']; ?><input class="input_order" type="hidden" name="intal" value="<?php echo $row20['intal']; ?>"></div>
</div>
<div id="container2">
	<div class="felt25">rapport nr./andet Revk.:</div>
	<div class="felt25"><input class="in" id="hvid" type="text" name="service_report" value="<?php echo $row20['service_report']; ?>"></div>
	<div class="felt25">Leverandør:</div>
	<div class="felt25"><?php include('lev.php'); ?></div>
</div>
<div id="container2">
	<div class="felt25">Url / Link / http://</div>
	<div class="felt25"><input class="in" id="hvid" type="text" name="link" value="<?php echo $row20['link']; ?>"></div>
	<div class="felt25">Hvis anden levendør:</div>
	<div class="felt25"><input class="in" id="hvid" type="text" name="andre_lev" value=""></div>
</div>
<div id="container2">
	<div class="felt25">Vare nr.:</div>
	<div class="felt25"><input class="in" id="hvid" type="text" name="vare_nr" value="<?php echo $row20['vare_nr']; ?>"></div>
	<div class="felt25">Vare beskrivelse:</div>
	<div class="felt25"><input class="in" id="hvid" type="text" name="vare_beskrivelse" value="<?php echo $row20['vare_beskrivelse']; ?>"></div>
</div>
<div id="container2">
	<div class="felt25">Ønsked Antal:</div>
	<div class="felt25"><input class="in" id="hvid" type="text" name="antal" value="<?php echo $row20['antal']; ?>"></div>
	<div class="felt25">ASAP:</div>
	<div class="felt25"><select size="1" name="asap" class="in" id="hvid">
                <option value="<?php echo $row20['asap']; ?>"><?php echo $row20['asap']; ?></option>
                <option value="NEJ">NEJ</option>
                <option value="JA">JA</option>
                <option value="LAGER">Lager</option>
                <option value="PRIVAT">Privat</option></select></div>
</div>
<div id="container2">
	<div class="felt25">Leverings sted</div>
	<div class="felt25">
<select size="1" name="afd" class="in" id="hvid">
                <option value="<?php echo $row20['afd']; ?>"><?php echo $row20['afd']; ?></option>
                <option value="LJ">Viby</option>
                <option value="VJ">Vejle</option>
                <option value="PA">Padborg</option></select>
	</div>
	<div class="felt50"><input class="in" type="submit" value="Opdater ordren med de nye dataer" name="rettet_bestilt"></div>
</div>
</p>
<?php }}} ?>