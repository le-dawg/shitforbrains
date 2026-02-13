<! ø !>
<! ------------------------------------------------------------------------- Repport info ------------------------------------------------------------------------------------------- !>

<?php        $baaf = $row['baaf'];
             
	     $note = $row['note'];
	     if ($flag == 'SALG') { 
                
	     $result  = mysqli_query($conn,"SELECT id FROM prosalg WHERE id2=$rapport");
             while($row = mysqli_fetch_assoc($result)) {	
	     $rapport = $row['id']; $statuskode = '9';} }

	     $result  = mysqli_query($conn,"SELECT * FROM prosalg_kom WHERE id2=$rapport");
             while($row = mysqli_fetch_assoc($result)) {

		if(!isset($nummer)){ $nummer =0; }
		$nummer = $nummer + 1;
                $grandtotal = $grandtotal + $row['total'];
	        $valuta = $row['valuta'];

?>      
<form method="post" action="" onsubmit="return v(this)">
		<input type="hidden" name="id" value="<?php echo $row['id'] ?>">
        </div><p><div class="opgave-div">
        <div class="rubrik7" style="background-color: #fff;">Vare line <?php echo $nummer; ?></div>
<?php // echo $row[flag]; if($row[flag] == 'KOMMET'){?>        
              <div class="rubrik7" style="background-color: green; color: #fff;">
             <div class="t_rubrik_2" style="background-color: green; border-right:2px solid black; width:60%;"><?php echo $row['antalkommet']; ?> stk af varen er modtaget den <?php echo $row['datolev']; ?> af <?php echo $row['modaf']; ?></div>
             <div class="t_rubrik_2" style="color: #000; border-right:2px solid black; width:18%;">Serie Nr.</div>
             <div class="t_rubrik_2" style="background-color: #fff; color: #000; width:22%;"><?php echo $row['snnr']; ?></div>
</div>
<?php // } ?>
        <div class="rubrik7">
             <div class="t_rubrik_2" style="border-right:2px solid black; width:24%;">Producent</div>
             <div class="t_rubrik_1" style="border-right:2px solid black;">Vare nr. eller Vare ID:</div>
	     <div class="t_rubrik_1" style="border-right:2px solid black;">Varebetegnelse</div>
	     <div class="t_rubrik_1" style="border-right:2px solid black;">Type (f.eks. sensor)</div>
             <div class="t_rubrik_1">LevenandÃ¸r</div>
        </div>

        <div class="rubrik7">
		<div class="t_rubrik_2" style="background-color: #fff; border-right:2px solid black; width:24%;"><?php echo $row['producent']; ?></div>
		<div class="t_rubrik_1" style="background-color: #fff;border-right:2px solid black;"><?php echo $row['varenr']; ?></div>
		<div class="t_rubrik_1" style="background-color: #fff;border-right:2px solid black;"><?php echo $row['varebe']; ?></div>
		<div class="t_rubrik_1" style="background-color: #fff;border-right:2px solid black;"><?php echo $row['type']; ?></div>
		<div class="t_rubrik_1" style="background-color: #fff; width:22%;"><?php echo $row['leverandor']; ?></div>
        </div>
        <div class="rubrik7">
	     <div class="t_rubrik_2" style="border-right:2px solid black;">antal</div>
	     <div class="t_rubrik_2" style="border-right:2px solid black;">Listepris</div>
	     <div class="t_rubrik_3" style="border-right:2px solid black;">rabat (%)</div>
	     <div class="t_rubrik_2" style="border-right:2px solid black;">Købspris</div>
	     <div class="t_rubrik_2" style="border-right:2px solid black;">Advance (%)</div>
	     <div class="t_rubrik_3" style="border-right:2px solid black;">Rabat (%)</div>
	     <div class="t_rubrik_2" style="border-right:2px solid black;">Salges pris</div>
	     <div class="t_rubrik_1" style="border-right:2px solid black;">Tolal</div>
	     <div class="t_rubrik_3">DB (%)</div>
        </div>
        <div class="rubrik7">
		<div class="t_rubrik_2" style="background-color: #fff;border-right:2px solid black;"><?php echo $row['antal']; ?></div>
		<div class="t_rubrik_2" style="background-color: #fff;border-right:2px solid black;"><?php echo number_format($row['liste'],2,",", ".").' '.$row['valuta']; ?></div>
		<div class="t_rubrik_3" style="background-color: #fff;border-right:2px solid black;"><?php echo number_format($row['rab1'],2,",", ".");?> %</div>
		<div class="t_rubrik_2" style="background-color: #fff;border-right:2px solid black;"><?php // echo number_format($row['kob'], 2,",", ".").' '.$row['valuta']; ?></div>
		<div class="t_rubrik_2" style="background-color: #fff;border-right:2px solid black;"><?php echo number_format($row['adv'], 2,",", "."); ?> %</div>
		<div class="t_rubrik_3" style="background-color: #fff;border-right:2px solid black;"><?php echo number_format($row['rab2'], 2,",", "."); ?> %</div>
		<div class="t_rubrik_2" style="background-color: #fff;border-right:2px solid black;"><?php echo number_format($row['salg'], 2,",", ".").' '.$row['valuta']; ?></div>
		<div class="t_rubrik_1" style="background-color: #fff;border-right:2px solid black;"><?php echo number_format($row['total'], 2,",", ".").' '.$row['valuta']; ?></div>
		<div class="t_rubrik_3"  style="background-color: #fff; width:10%;"><?php // echo number_format($row['db'], 2,",", "."); ?> %</div>
	</div><br style="clear:both"> 
<?php if($statuskode != 9){ ?>
        <div class="rubrik7">
		<div class="t_rubrik_50" style="background-color: #fff;border-right:2px solid black;"><a href="index.php?side=hentrapport&id=<?php echo $rapport?>&id2=<?php echo $row['id']?>&funk=ret">Ret vare</a></div>
		<div class="t_rubrik_50" style="background-color:"><input class="in" type="submit" value="slet vare" name="sletvare"></div>
	</div><br style="clear:both"> 
</form>
<?php } } ?>
        <div class="rubrik7">
		<div class="t_rubrik_50" style="background-color: #fff;border-right:2px solid black;"></div>
		<div class="t_rubrik_50" style="background-color: text-align: right;">Grandtotal: <?php echo number_format($grandtotal, 2).' '.$valuta;?></div>
	</div><br style="clear:both"> 
<! ------------------------------------------------------------------------- line 8 ------------------------------------------------------------------------------------------------- !>            
                <div class="line_type_3" id="graa">Infomation:</div><br style="clear:both"> 
<! ------------------------------------------------------------------------- line 9 ------------------------------------------------------------------------------------------------- !>
                <div class="line_type_4" style="height:100%;"><?php echo $baaf; ?>.</div><br style="clear:both"> 
<! ------------------------------------------------------------------------- line 12 ------------------------------------------------------------------------------------------------ !>
                <div class="line_type_3" id="graa">Note</div><br style="clear:both"> 
<! ------------------------------------------------------------------------- line 13 ------------------------------------------------------------------------------------------------ !>
                <div class="line_type_4" style="height:100%;"><?php echo $note; ?>.</div><br style="clear:both"> 
<! ------------------------------------------------------------------------- line 13 ------------------------------------------------------------------------------------------------ !>
                <?php include('inder/hent/pic.php'); ?>
