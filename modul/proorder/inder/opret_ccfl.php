<! Ø !>
<?php if(!isset($_POST['send'])) { ?>
<?php if(!isset($_POST['ret'])) { ?>
<?php if(!isset($_POST['ret_godkend'])) { ?>
<form method="post" action="" onsubmit="return v(this)">
	<div class="top">Tilføre backlight rør til listen</div>
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
                <option value="NEJ">NEJ</option>
                <option value="JA">JA</option>
                <option value="LAGER">Lager</option>
                <option value="PRIVAT">Privat</option></select></div>
</div>
<div id="container2">
	<div class="felt25">Diameter</div>
	<div class="felt25"><input class="inhvid" type="text" name="diamenter" value=""></div>
	<div class="felt25">Længde</div>
	<div class="felt25"><input class="inhvid" type="text" name="hoj" value=""></div>
</div>
<div id="container2">

	<div class="felt25">Ønsked Antal:</div>
	<div class="felt25"><input class="inhvid" type="text" name="antal" value=""></div>
	<div class="felt25""></div>
	<div class="felt25"><input class="in" type="submit" value="Tilføre vare til kurven" name="send"></div>

</div>
<p></p>
</center>
<?php } } } ?>