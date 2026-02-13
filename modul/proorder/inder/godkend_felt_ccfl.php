<! ø !>
<input name="id" type="hidden" value="<?php echo ' '.$row['id'].' '?>">
<div class="top">Gennemse og godkend order
	</div>
<div id="container2">
	<div class="felt25">Dato:</div>
	<div class="felt25"><input class="inhvid" type="text" name="dato" value="<?php echo''.$row['dato'].''?>" style="background-color:#eeeeee;"></div>
	<div class="felt25">Intialer:</div>
	<div class="felt25"><input class="inhvid" type="text" name="intal" value="<?php echo''.$row['intal'].''?>"></div>
</div>
<div id="container2">
	<div class="felt25">rapport nr./andet Revk.:</div>
	<div class="felt25"><input class="inhvid" type="text" name="service_report" value="<?php echo''.$row['service_report'].''?>"></div>
	<div class="felt25">ASAP:</div>
	<div class="felt25"><input class="inhvid" type="text" name="service_report" value="<?php echo''.$row['asap'].''?>"></div>
</div>
<div id="container2">
	<div class="felt25">Diameter</div>
	<div class="felt25"><input class="inhvid" type="text" name="diamenter" value="<?php echo''.$row['diameter'].''?>"></div>
	<div class="felt25">Længde</div>
	<div class="felt25"><input class="inhvid" type="text" name="hoj" value="<?php echo''.$row['hojde'].''?>"></div>
</div>
<div id="container2">
	<div class="felt25"></div>
	<div class="felt25"></div>
	<div class="felt25">Ønsked Antal:</div>
	<div class="felt25"><input class="inhvid" type="text" name="antal" value="<?php echo''.$row['antal'].''?>"></div>

</div>
<div id="container2">
	<div class="felt25"><input class="in" type="submit" value="Ret indtastingen" name="ret"></div>
	<div class="felt25"><input class="in" type="submit" value="slet varen fra kurven" name="slet"></div>
	<div class="felt25"></div>
	<div class="felt25"><input class="in" type="submit" value="Godkende varen" name="godkent"></div>
</diV>