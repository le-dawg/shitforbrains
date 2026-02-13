<! Ø !>
<div class="top">Sags rapport</div>
<?php 
	if(isset($_POST['set_rapp'])){
	$fra = $_POST['fra'];
	$til = $_POST['til'];
} ?>
<form method="post" action="" onsubmit="return v(this)">
<div id="container2">
		<div class="felt25">Uge</div>
		<div class="felt25"><input style="height:23px; width:100%;" class="tekst2" type="text" name="fra" value="<?php if(isset($_POST['set_rapp'])){ echo $fra ; } else { echo date('W'); }?>"></div>
		<div class="felt25">Ã…r</div>
		<div class="felt25"><input class="tekst2" type="text" name="til" value="<?php if(isset($_POST['set_rapp'])){ echo $til ; } else { echo date('Y'); }?>"></div><br>
</div>
<div id="container2">
		<div class="felt100"><input class="in" type="submit" value="klik for at vælge datoer." name="set_rapp"></div>
</div>
</form>
<?php if(isset($_POST['set_rapp'])){ ?>
<form action="sagsrapport_pdf.php?dato=<?php echo ''.$fra.'' ; ?>&dato2=<?php echo ''.$til.'' ; ?>" method="post" onclick="window.open(this.action); return false;">
<div id="container2">
		<div class="felt100"><input class="in"  type="submit" value="Print rapport" name="set_rapp"></div>
	</div>
</form>
<?php } $title = 'PROteknik :: Sags rapport';?>