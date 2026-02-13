<! ø !><p>

	<div class="top">Vidergiv ansvaret for service rapporten</div>
<form method="post" action="" onsubmit="return v(this)">
		<input type="hidden" name="id" value="<?php echo $_GET['id2']; ?>">
<?php
   	     $result  = mysqli_query($conn,"SELECT * FROM prosalg_kom WHERE id=$_GET[id2]");
             while($row = mysqli_fetch_assoc($result)) 
{ 
?>      

   <div id="opgave" style="background-color: #fff; border:2px solid black; width:95%; height:161px;">
        <div class="rubrik7">
             <div class="t_rubrik_25" style="border-right:2px solid black;">Leverings Dato</div>
             <div class="t_rubrik_25" style="background-color: #fff; border-right:2px solid black;"><input id="levtid" class="tekst" type="date" value="<?php echo $row['levtid2'];?>" name="levtid"></div>
             <div class="t_rubrik_25" style="border-right:2px solid black;">Vælg Valuta</div>
             <div class="t_rubrik_25"><select class="in" name="valuta">
                                             <option value="<?php echo $row['valuta'];?>"><?php echo $row['valuta'];?></option>
                                             <option value="DKK">DKK</option>
                                             <option value="&#8364">&#8364</option>
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
		<div class="t_rubrik_1" style="background-color: #fff; border-right:2px solid black; width:24%;"><input class="tekst" type="text" value="<?php echo $row['producent'];?>" name="producent"></div>
		<div class="t_rubrik_1" style="background-color: #fff;border-right:2px solid black;"><input class="tekst" type="text" value="<?php echo $row['varenr'];?>" name="varenr"></div>
		<div class="t_rubrik_1" style="background-color: #fff;border-right:2px solid black;"><input class="tekst" type="text" value="<?php echo $row['varebe'];?>" name="varebe"></div>
		<div class="t_rubrik_1" style="background-color: #fff;border-right:2px solid black;"><input class="tekst" type="text" value="<?php echo $row['type'];?>" name="type"></div>
		<div class="t_rubrik_1" style="background-color: #fff; width:22%;"><input class="tekst" type="text" value="<?php echo $row['leverandor'];?>" name="levrenandor"></div>
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
		<div class="t_rubrik_2" style="background-color: #fff;border-right:2px solid black;"><input id="antal" class="tekst" type="text" value="<?php echo $row['antal'];?>" name="antal"></div>
		<div class="t_rubrik_2" style="background-color: #fff;border-right:2px solid black;"><input id="liste" class="tekst" type="text" value="<?php echo number_format($row['liste'],2,",", "."); ?>" name="liste"></div>
		<div class="t_rubrik_3" style="background-color: #fff;border-right:2px solid black;"><input id="rab1"class="tekst" type="text" value="<?php echo number_format($row['rab1'],2,",", "."); ?>" name="rab1"></div>
		<div class="t_rubrik_2" style="background-color: #fff;border-right:2px solid black;"><input id="kob" class="tekst" type="text" value="<?php echo number_format($row['kob'],2,",", "."); ?>" name="kob"></div>
		<div class="t_rubrik_3" style="background-color: #fff;border-right:2px solid black;"><input id="adv"class="tekst" type="text" value="<?php echo number_format($row['adv'],2,",", "."); ?>" name="adv"></div>
		<div class="t_rubrik_3" style="background-color: #fff;border-right:2px solid black;"><input id="rab2"class="tekst" type="text" value="<?php echo number_format($row['rab2'],2,",", "."); ?>" name="rab2"></div>
		<div class="t_rubrik_1" style="background-color: #fff;border-right:2px solid black;"><input id="salg"class="tekst" type="text" value="<?php echo number_format($row['salg'],2,",", "."); ?>" name="salg"></div>
		<div class="t_rubrik_1" style="background-color: #fff;border-right:2px solid black;"><input id="total"class="tekst" type="text" value="<?php echo number_format($row['total'],2,",", "."); ?>" name="total"></div>
		<div class="t_rubrik_3"  style="background-color: #fff; width:10%;"><input id="db"class="tekst" type="text" value="<?php echo number_format($row['db'],2,",", ".");?>" name="db"></div>
	</div>
                <div class="felt251" style="width:100%; height:22px;"><input class="in" type="submit" value="Ret vare" name="retvare"></div>
	<br style="clear:both;" >

        </form>
<?php } ?>
</div>
</div>
</div>