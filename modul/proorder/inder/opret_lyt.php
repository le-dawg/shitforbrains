<! � !>
<form method="post" action="" onsubmit="return v(this)">
	<div class="top">Tilføre lyt til listen</div>
<div id="container2">

	<div class="felt25">Dato:</div>
	<div class="felt25"><input id="graa" class="inhvid" type="text" name="dato" value="<?php echo date('d-m-Y'); ?>" style="background-color:#eeeeee;"></div>
	<div class="felt25">Intialer:</div>
	<div class="felt25"><select  name="intal" class="in" id="hvid">
  		  <?php if(isset($_POST['godkent'])) { ?><option value="<?php echo ''.$_POST['intal'].'' ; ?>"><?php echo ''.$_POST['intal'].'' ; ?></option><?php } ?>
                  <?php if(isset($_SESSION['uid'])) { $result  = mysqli_query($conn, "SELECT * FROM promed WHERE id = '$_SESSION[uid]'");
            while($row = mysqli_fetch_assoc($result)) { ?><option value="<?php echo ''.$row['int'].'' ; ?>"><?php echo ''.$row['int'].'' ; ?></option><?php } } ?>

                          <?php $result = mysqli_query($conn, "SELECT * FROM promed WHERE lukket !='JA' ORDER BY id ASC");
                                while($row = mysqli_fetch_assoc($result)) { 
		                $ans = $row['id'];?>
                  <option value="<?php echo ''.$row['intal'].''; ?>"><?php echo ''.$row['intal'].''; ?> 
                  </option> <?php } ?></Select></div>
</div>
<div id="container2">
	<div class="felt25">rapport nr./andet Revk.:</div>
	<div class="felt25"><input class="inhvid" type="text" name="service_report" value="<?php if(isset($_POST['godkent'])) { echo ''.$_POST['service_report'].'' ; }elseif(isset($_SESSION['uid2'])) { ?><?php echo ''.$_SESSION['uid2'].'' ; ?><?php } ?>" style=""></div>
	<div class="felt25">ASAP:</div>
	<div class="felt25"><select name="asap" class="in" id="hvid">
		<option value="LAGER">Nej</option>
                <option value="LAGER">Lager</option></select></div>
</div>
<div id="container2">
	<div class="felt25">Kapacitet</div>
	<div class="felt25"><input class="inhvid" type="text" id="kap" name="kap" value=""></div>
	<div class="felt25">Spænding:</div>
	<div class="felt25"><input class="inhvid" type="text" id="volt" name="volt" value=""></div>
</div>
<div id="container2">
	<div class="felt25">Diameter (kun hvis vigtigt)</div>
	<div class="felt25"><input class="inhvid" type="text" name="diamenter" value=""></div>
	<div class="felt25">Højde (kun hvis vigtigt)</div>
	<div class="felt25"><input class="inhvid" type="text" name="hoj" value=""></div>
</div>
<div id="container2">
	<div class="felt25">Konstruction:</div>
	<div class="felt25"><select name="kon" class="in" id="hvid">
                <option value="Radial">Radial</option>
                <option value="Axial">Axial</option>
                <option value="Tantal">Tantal</option>
                <option value="SNAP-IN">SNAP-IN</option></select></div>
	<div class="felt25">Ønsked Antal:</div>
	<div class="felt25"><input class="inhvid" type="text" name="antal" value=""></div>

</div>
<div id="container2">
	<div class="felt25">Antal tilbage på lager:</div>
	<div class="felt25"><input class="inhvid" type="text" name="antallager" value=""></div>
	<div class="felt25">Hvor mange tog du fra skuffe:</div>
	<div class="felt25"><input class="inhvid" type="text" name="antalbrugt" value=""></div>
</div>
<div id="container2">
	<div class="felt25">er det en vare vi har i forvejen:</div>
	<div class="felt25"><select name="lagertjek" class="in" id="hvid">
                <option value="NEJ">NEJ</option>
                <option value="JA">JA</option></select></div>
	<div class="felt25">Har du lavet lageret tjek:</div>
	<div class="felt25"><select name="lagertjekto" class="in" id="hvid">
                <option value="NEJ">NEJ</option>
                <option value="JA">JA</option></select></div>
</div>
<div id="container2">
	<div class="felt25">Leverand�r</div>
	<div class="felt25"  id="lev"></div>
	<div class="felt25"><input class="inhvid" type="text" id="vare_nr" name="vare_nr" value=""></div>
	<div class="felt25"><input class="in" type="submit" value="Tilføre vare til kurven" name="send"></div>
</diV>
<br>
<p id="results"></p>
</center>