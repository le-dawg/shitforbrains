<! � !>
<?php
if(isset($_POST['ret'])) {
     $id = $_POST['id'];
     $id2 = $_POST['id2'];
         $result = mysqli_query($conn,"SELECT * FROM proorder WHERE id = $id");
         while($row = mysqli_fetch_assoc($result)) { 
         $result2 = mysqli_query($conn, "SELECT * FROM proservice_kom WHERE id = '$id2'");
         while($row2 = mysqli_fetch_assoc($result2)) {
 ?>
<form method="post" action="" onsubmit="return v(this)">
<input name="id2" type="hidden" value="<?php echo ' '.$row2['id'].' '?>">
<?php } ?>
<input name="id" type="hidden" value="<?php echo ' '.$row['id'].' '?>">
	<div class="top">Ret order</div>
<div id="container2">

	<div class="felt25">Dato:</div>
	<div class="felt25"><input class="inhvid" id="graa" type="text" name="dato" value="<?php echo''.$row['dato'].''?>" style="background-color:#eeeeee;"></div>
	<div class="felt25">Intialer:</div>
	<div class="felt25"><input class="inhvid" type="text" name="intal" value="<?php echo''.$row['intal'].''?>"></div>
</div>
<div id="container2">
	<div class="felt25">rapport nr./andet Revk.:</div>
	<div class="felt25"><input class="inhvid" type="text" name="service_report" value="<?php echo''.$row['service_report'].''?>"></div>
	<div class="felt25">ASAP:</div>
	<div class="felt25"><select name="asap" class="in" id="hvid"">
                <option value="<?php echo''.$row['asap'].''?>"><?php echo''.$row['asap'].''?></option>
                <option value="NEJ">NEJ</option>
                <option value="JA">JA</option>
                <option value="LAGER">Lager</option>
                <option value="PRIVAT">Privat</option></select></div>
</div>
<div id="container2">
	<div class="felt25">Kapacitet</div>
	<div class="felt25"><input class="inhvid" type="text" name="kap" value="<?php echo''.$row['kapacitet'].''?>"></div>
	<div class="felt25">Spænding:</div>
	<div class="felt25"><input class="inhvid" type="text" name="volt" value="<?php echo''.$row['volt'].''?>"></div>
</div>
<div id="container2">
	<div class="felt25">Diameter (kun hvis vigtigt)</div>
	<div class="felt25"><input class="inhvid" type="text" name="diamenter" value="<?php echo''.$row['diameter'].''?>"></div>
	<div class="felt25">Højde (kun hvis vigtigt)</div>
	<div class="felt25"><input class="inhvid" type="text" name="hoj" value="<?php echo''.$row['hojde'].''?>"></div>
</div>
<div id="container2">
	<div class="felt25">Konstruction:</div>
	<div class="felt25"><select name="kon" class="in" id="hvid">
                <option value="<?php echo''.$row['konstruction'].''?>"><?php echo''.$row['konstruction'].''?></option>
                <option value="Radial">Radial</option>
                <option value="Axial">Axial</option>
                <option value="SNAP-IN">SNAP-IN</option></select></div>
	<div class="felt25">Ønsked Antal:</div>
	<div class="felt25"><input class="inhvid" type="text" name="antal" value="<?php echo''.$row['antal'].''?>"></div>

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