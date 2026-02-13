<! ø !><p>
	<div class="top">Flyt til PROordre</div>
<form method="post" action="" onsubmit="return v(this)">

		<input type="hidden" name="v_ref" value="<?php echo ''.$vref.''; ?>">
		<input type="hidden" name="revk" value="<?php echo ''.$revk.''; ?>">
		<input type="hidden" name="asap" value="<?php echo ''.$asap.''; ?>">
		<input type="hidden" name="id" value="<?php echo ''.$id.''; ?>">

<div id="container2">
	<div class="felt25">Leverandør: </div>
	<div class="felt25"><?php include('modul/proorder/inder/lev.php'); ?></div>
	<div class="felt25">Hvis anden levendør:</div>
	<div class="felt25"><input class="inhvid" type="text" name="andre_lev" value=""></div>
</div>
<div id="container2">
	<div class="felt100"><input class="in" type="submit" value="Flyt til PROordre" name="flytpro"></div>
</div>

        </form><p>
</div>
</div>
</div>