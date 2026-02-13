<! Ø !>
<div class="top">Div time rapport</div>
<?php 
	if(isset($_POST['set_rapp'])){
	$fra = $_POST['fra'];
	$til = $_POST['til'];
} ?>
<form method="post" action="" onsubmit="return v(this)">
<div id="container2">
		<div class="felt">Fra</div>
		<div class="felt"><input style="height:23px; width:100%;" class="tekst2" type="text" name="fra" value="<?php if(isset($_POST['set_rapp'])){ echo $fra ; } else { echo date('d-m-Y'); }?>"></div>
		<div class="felt">Til</div>
		<div class="felt"><input style="height:23px; width:100%;" class="tekst2" type="text" name="til" value="<?php if(isset($_POST['set_rapp'])){ echo $til ; } else { echo date('d-m-Y'); }?>"></div>
		<div class="felt"><input style="width:100%; height:23px;" type="submit" value="klik for at vælge datoer." name="set_rapp"></div>
		<div class="felt">Vælg datoer og klik vælge datoer og derefter klik print rapport</div>
	</div>
</form>
<p>
<?php if(isset($_POST['set_rapp'])){ ?>
<form action="divrapport_pdf.php?dato=<?php echo ''.$fra.'' ; ?>&dato2=<?php echo ''.$til.'' ; ?>" method="post" onclick="window.open(this.action); return false;">
<div id="container2" style="width:100%; height:25px; margin: 0 auto; padding:0;">
		<div class="felt" style="width:100%; height:100%;"><input style="width:100%; height:23px;" type="submit" value="Print rapport" name="set_rapp"></div>
	</div>
</form>
<?php } ?>