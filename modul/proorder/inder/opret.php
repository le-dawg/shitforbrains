<! Ø !>
<?php if(!isset($_POST['ret'])) { ?>
<?php if(!isset($_POST['ret_godkend'])) { ?>
<form method="post" action="" onsubmit="return v(this)">
	<div class="top">Tilføre vare til listen</div>
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
	<div class="felt25">Leverandør: </div>
	<div class="felt25" id="lev"><?php include('lev.php'); ?></div>
</div>
<div id="container2">
	<div class="felt25">Url / Link / http://</div>
	<div class="felt25"><input class="inhvid" type="text" name="link" value=""></div>
	<div class="felt25">Hvis Ikke standart levendør:</div>
	<div class="felt25"><input class="inhvid" type="text" name="andre_lev" value=""></div>
</div>
<div id="container2">
	<div class="felt25">Vare nr.:</div>
	<div class="felt25"><input class="inhvid" id="vare_nr" type="text" name="vare_nr" value=""></div>
	<div class="felt25">Vare beskrivelse:</div>
	<div class="felt25"><input class="inhvid" id="vare_beskrivelse" type="text" name="vare_beskrivelse" value=""></div>
</div>
<div id="container2">
	<div class="felt25">Ønsked Antal:</div>
	<div class="felt25"><input class="inhvid" type="text" name="antal" value="" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"></div>
	<div class="felt25">ASAP:</div>
	<div class="felt25"><select name="asap" class="in" id="hvid">
                <option value="NEJ">NEJ</option>
                <option value="JA">JA</option>
                <option value="LAGER">Lager</option>
                <option value="PRIVAT">Privat</option></select></div>
</div>
<div id="container2">
	<div class="felt25">Antal i skuffen efter du har taget:</div>
	<div class="felt25"><input class="inhvid" type="text" name="antallager" value=""></div>
	<div class="felt25">Hvor mange tog du fra skuffe:</div>
	<div class="felt25"><input class="inhvid" type="text" name="antalbrugt" value=""></div>
</div>
<div id="container2">
	<div class="felt25">Har du lavet lager tjek?:</div>
	<div class="felt25"><select name="lagertjekto" class="in" id="hvid">
                <option value="NEJ">NEJ</option>
                <option value="JA">JA</option></select></div>
	<div class="felt25"></div>
	<div class="felt25"></div>
</div>
<div id="container2">
	<div class="felt25" id="hvisunidata"><input style="" class="inhvid" type="hidden" name="unidat" id="unidat" value="NEJ"></div>
	<div class="felt25"></div>
	<div class="felt25"></div>
	<div class="felt25"><input class="in" type="submit" value="Tilføre vare til kurven" name="send"></div>
</div>
<br>
<p id="results"></p>
</center>
<?php } } ?>