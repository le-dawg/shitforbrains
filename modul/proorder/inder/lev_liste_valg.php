<! ø !>
		<?php 		$afd = $_GET['afd'];
				if ($afd != 'LYT' ){
				if ($afd != 'CCFL' ){

?>
<form method="post" action="" onsubmit="return v(this)">
	<div class="top">Listerne
	</div><div id="container2">
	<div class="felt50"><?php include('modul/proorder/inder/lev_lister.php'); ?></div>
	<div class="felt50"><input class="in" type="submit" value="ikke bestilt liste" name="bestil" ></div>
</div>
</form>
<?php } ?>
<?php } ?>		