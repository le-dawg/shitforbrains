<! ø !><p>

	<div class="top">Tilføj Vare</div>
<form method="post" action="" onsubmit="return v(this)">
		<input type="hidden" name="id" value="<?php echo ''.$id.'' ?>">
   <div id="opgave" style="background-color: #fff; border:2px solid black; width:95%; height:161px;">
        <div class="rubrik7">
             <div class="t_rubrik_25" style="border-right:2px solid black;">Leveringstid i dage</div>
             <div class="t_rubrik_25" style="background-color: #fff; border-right:2px solid black;"><input id="levtid" class="tekst" type="date" value="" name="levtid"></div>
             <div class="t_rubrik_25" style="border-right:2px solid black;">Vælg Valuta</div>
             <div class="t_rubrik_25"><select class="in" name="valuta">
                                             <option value="DKK">DKK</option>
                                             <option value="&#8364">&#8364</option>
                                             <option value="$">$</option>
                                     </select></div>
        </div>
        <div class="rubrik7">
             <div class="t_rubrik_1" style="border-right:2px solid black; width:24%;">Producent</div>
             <div class="t_rubrik_1" style="border-right:2px solid black;">Vare nr. eller Vare ID:</div>
	     <div class="t_rubrik_1" style="border-right:2px solid black;">Varebetegnelse</div>
	     <div class="t_rubrik_1" style="border-right:2px solid black;">Type (f.eks. sensor)</div>

             <div class="t_rubrik_1">LevenandÃ¸r</div>
        </div>

        <div class="rubrik7">
		<div class="t_rubrik_1" style="background-color: #fff; border-right:2px solid black; width:24%;"><input class="tekst" type="text" value="" name="producent"></div>
		<div class="t_rubrik_1" style="background-color: #fff;border-right:2px solid black;"><input class="tekst" type="text" value="" name="varenr"></div>
		<div class="t_rubrik_1" style="background-color: #fff;border-right:2px solid black;"><input class="tekst" type="text" value="" name="varebe"></div>
		<div class="t_rubrik_1" style="background-color: #fff;border-right:2px solid black;"><input class="tekst" type="text" value="" name="type"></div>
		<div class="t_rubrik_1" style="background-color: #fff; width:22%;"><input class="tekst" type="text" value="" name="levrenandor"></div>
        </div>
        <div class="rubrik7">
	     <div class="t_rubrik_2" style="border-right:2px solid black;">antal</div>
	     <div class="t_rubrik_2" style="border-right:2px solid black;">Listepris</div>
	     <div class="t_rubrik_3" style="border-right:2px solid black;">rabat (%)</div>
	     <div class="t_rubrik_2" style="border-right:2px solid black;">Købspris</div>
	     <div class="t_rubrik_3" style="border-right:2px solid black;">Advance</div>
	     <div class="t_rubrik_3" style="border-right:2px solid black;">Rabat (%)</div>
	     <div class="t_rubrik_1" style="border-right:2px solid black;">Salges pris</div>
	     <div class="t_rubrik_1" style="border-right:2px solid black;">Tolal</div>
	     <div class="t_rubrik_3">DB (%)</div>
        </div>
        <div class="rubrik7">
		<div class="t_rubrik_2" style="background-color: #fff;border-right:2px solid black;"><input id="antal" class="tekst" type="text" value="" name="antal"></div>
		<div class="t_rubrik_2" style="background-color: #fff;border-right:2px solid black;"><input id="liste" class="tekst" type="text" value="" name="liste"></div>
		<div class="t_rubrik_3" style="background-color: #fff;border-right:2px solid black;"><input id="rab1"class="tekst" type="text" value="" name="rab1"></div>
		<div class="t_rubrik_2" style="background-color: #fff;border-right:2px solid black;"><input id="kob" class="tekst" type="text" value="" name="kob"></div>
		<div class="t_rubrik_3" style="background-color: #fff;border-right:2px solid black;"><input id="adv"class="tekst" type="text" value="" name="adv"></div>
		<div class="t_rubrik_3" style="background-color: #fff;border-right:2px solid black;"><input id="rab2"class="tekst" type="text" value="" name="rab2"></div>
		<div class="t_rubrik_1" style="background-color: #fff;border-right:2px solid black;"><input id="salg"class="tekst" type="text" value="" name="salg"></div>
		<div class="t_rubrik_1" style="background-color: #fff;border-right:2px solid black;"><input id="total"class="tekst" type="text" value="" name="total"></div>
		<div class="t_rubrik_3"  style="background-color: #fff; width:10%;"><input id="db"class="tekst" type="text" value="" name="db"></div>
	</div>
                <div class="felt251" style="width:100%; height:22px;"><input class="in" type="submit" value="Tilføj vare" name="tilfore"></div>
	<br style="clear:both;" >

        </form>
</div>
</div>
</div>