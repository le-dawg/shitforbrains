<! ø !>
<?php
if(isset($_POST['ret'])) {
     $id = $_POST['id'];
     $id2 = $_POST['id2'];
         $result = mysqli_query($conn, "SELECT * FROM proorder WHERE id = $id");
         while($row = mysqli_fetch_assoc($result)) { 
         $result2 = mysqli_query($conn, "SELECT * FROM proservice_kom WHERE id = '$id2'");
         while($row2 = mysqli_fetch_assoc($result2)) {
 ?>
<form method="post" action="" onsubmit="return v(this)">
<input name="id2" type="hidden" value="<?php echo ' '.$row2['id'].' '?>">
<?php } ?>
<input name="id" type="hidden" value="<?php echo ' '.$row['id'].' '?>">
	<div class="top">Ret order
	</div>
<div id="container2">
	<div class="felt25">Dato:</div>
	<div class="felt25"><input class="inhvid" id="graa" type="text" name="dato" value="<?php echo''.$row['dato'].''?>" style="background-color:#eeeeee;"></div>
	<div class="felt25">Intialer:</div>
	<div class="felt25"><input class="inhvid" type="text" name="intal" value="<?php echo''.$row['intal'].''?>"></div>
</div>
<div id="container2">
	<div class="felt25">rapport nr./andet Revk.:</div>
	<div class="felt25"><input class="inhvid" type="text" name="service_report" value="<?php echo''.$row['service_report'].''?>"></div>
	<div class="felt25">Leverandør: </div>
	<div class="felt25"><?php include('modul/proorder/inder/lev.php'); ?></div>
</div>
<div id="container2">
	<div class="felt25"></div>
	<div class="felt25"></div>
	<div class="felt25">Hvis anden levendør:</div>
	<div class="felt25"><input class="inhvid" type="text" name="andre_lev" value=""></div>
</div>
<div id="container2">
	<div class="felt25">Vare nr.:</div>
	<div class="felt25"><input class="inhvid" type="text" name="vare_nr" value="<?php echo''.$row['vare_nr'].''?>"></div>
	<div class="felt25">Vare beskrivelse:</div>
	<div class="felt25"><input class="inhvid" type="text" name="vare_beskrivelse" value="<?php echo''.$row['vare_beskrivelse'].''?>"></div>
</div>
<div id="container2">
	<div class="felt25">Ønsked Antal:</div>
	<div class="felt25"><input class="inhvid" type="text" name="antal" value="<?php echo''.$row['antal'].''?>"></div>
	<div class="felt25">ASAP:</div>
	<div class="felt25"><select name="asap" class="in" id="hvid"">
                <option value="<?php echo''.$row['asap'].''?>"><?php echo''.$row['asap'].''?></option>
                <option value="NEJ">NEJ</option>
                <option value="JA">JA</option>
                <option value="LAGER">Lager</option>
                <option value="PRIVAT">Privat</option></select></div>
</div>
<div id="container2">
	<div class="felt25"></div>
	<div class="felt25"></div>
	<div class="felt25"></div>
	<div class="felt25"><input class="in" type="submit" value="Godkend" name="ret_godkend"></div>
</diV>
<p></p>
</center>
</form>
<?php } } ?>