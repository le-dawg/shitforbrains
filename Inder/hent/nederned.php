<! ø !>
<! ------------------------------------------------------------------------- Repport info ------------------------------------------------------------------------------------------- !>
                <div class="line_type_2" id="graa">Fabrikat</div>
                <div class="line_type_2" id="graa">Type</div>
                <div class="line_type_2" id="graa">Maskine</div>
                <div class="line_type_2" id="sidste-graa">Serie Nr.</div><br style="clear:both">
<! ------------------------------------------------------------------------- line 6 ------------------------------------------------------------------------------------------------- !>
                <div class="line_type_2"><?php echo ''.$row['fabrikat'].''; ?></div>
                <div class="line_type_2"><?php echo ''.$row['type'].''; ?></div>
                <div class="line_type_2"><?php echo ''.$row['maskine'].''; ?></div>
                <div class="line_type_2" id="sidste"><?php echo ''.$row['sn_nr'].''; ?></div><br style="clear:both">        
<! ------------------------------------------------------------------------- line 7 ------------------------------------------------------------------------------------------------- !>
                <div class="line_type_2">Pris skønnet: <?php echo ''.$row['pris_s'].''; ?></div>
                <div class="line_type_2">Pris Ny: <?php echo ''.$row['pris_n'].''; ?></div>
                <div class="line_type_2">Pris brugt/ebay: <?php echo ''.$row['pris_b'].''; ?></div>
                <div class="line_type_2" id="sidste">Pris aftalt: <?php echo ''.$row['pris_k'].''; ?></div><br style="clear:both"></div><p>
<! ------------------------------------------------------------------------- fors ------------------------------------------------------------------------------------------------- !>
                <div class="opgave-div">  
<! ------------------------------------------------------------------------- line 8 ------------------------------------------------------------------------------------------------- !>            
                <div class="line_type_3" id="graa">Beskrivels af anmeldt fejl</div><br style="clear:both"> 
<! ------------------------------------------------------------------------- line 9 ------------------------------------------------------------------------------------------------- !>
                <div class="line_type_4"><?php echo ''.$row['baaf'].''; ?>.</div><br style="clear:both"> 
<! ------------------------------------------------------------------------- line 10 ------------------------------------------------------------------------------------------------ !>
                <div class="line_type_3" id="graa">Beskrivels af observert fejl</div><br style="clear:both"> 
<! ------------------------------------------------------------------------- line 11 ------------------------------------------------------------------------------------------------ !>
                <div class="line_type_4"><?php echo ''.$row['baof'].''; ?>.</div><br style="clear:both"> 
<! ------------------------------------------------------------------------- line 12 ------------------------------------------------------------------------------------------------ !>
                <div class="line_type_3" id="graa">Note</div><br style="clear:both"> 
<! ------------------------------------------------------------------------- line 13 ------------------------------------------------------------------------------------------------ !>
                <div class="line_type_4" style="min-height:25px;"><?php echo ''.$row['note'].''; ?>.</div><br style="clear:both"> 
<! ------------------------------------------------------------------------- line 12 ------------------------------------------------------------------------------------------------ !>
		<?php $status = $row['status_kode'];
		if ($status == '9'){ ?>
                <div class="line_type_3" id="graa">Hvordan gik testen</div><br style="clear:both"> 
<! ------------------------------------------------------------------------- line 13 ------------------------------------------------------------------------------------------------ !>
                <div class="line_type_4" style="height:100%; min-height:25px;"><?php echo ''.$row['tekstt'].''; ?>.</div><br style="clear:both"> 
<! ------------------------------------------------------------------------- line 12 ------------------------------------------------------------------------------------------------ !>
                <div class="line_type_3" id="graa">kundens opfattesle</div><br style="clear:both"> 
<! ------------------------------------------------------------------------- line 13 ------------------------------------------------------------------------------------------------ !>
                <div class="line_type_4" style="height:100%; min-height:25px;"><?php echo ''.$row['tekstk'].''; ?>.</div><br style="clear:both"> 
		<?php } ?>
<! ------------------------------------------------------------------------- line 14 ------------------------------------------------------------------------------------------------ !>
                <?php include('inder/hent/pic.php'); ?>
<! ------------------------------------------------------------------------- line 13 ------------------------------------------------------------------------------------------------ !>
		<div class="line_type_438"><b>Tid brugt: </b>
		  Normalt timer: <b><?php echo $total; ?></b> O. timer 50%: <b><?php echo $total2; ?></b> O. timer 100%: <b><?php echo $total3; ?></b></div>
                <div class="line_type_2">Total: <b><?php echo $penge;?> Kr.</b></div>
                <div class="line_type_2" id="sidste"> Fakt. <b> <?php echo $fak;?> Kr.</b></div><br style="clear:both"> 
<! ------------ ------------------------------------------------------------- line 8 ------------------------------------------------------------------------------------------------- !>            
</div><br style="clear:both"> 
<?php 		$result3  = mysqli_query($conn,"SELECT * FROM prosalg WHERE revk =$rapport");
	        $dererfs = '0';
            	while($row3 = mysqli_fetch_assoc($result3)) { $dererfs = '1';} 
                if($dererfs == '1'){?>                
                <div class="opgave-div"> 
                <div class="line_type_3" id="graa">Forspøglerser til sag</div><br style="clear:both">
<?php           $result3  = mysqli_query($conn,"SELECT * FROM prosalg WHERE revk =$rapport");
                while($row3 = mysqli_fetch_assoc($result3)) { $fors = $row3['id'];?>
<?php           $result4  = mysqli_query($conn,"SELECT * FROM prosalg_kom WHERE id2 =$fors");
                while($row4 = mysqli_fetch_assoc($result4)) { ?>
                <div class="line_type_2" style="width:10%;"><a href="index.php?side=hentrapport&id=<?php echo ''.$fors.''; ?>&p_id=list" target="_blank"><?php echo ''.$fors.''; ?></a></div>
                <div class="line_type_2"><?php echo ''.$row4['producent'].''; ?></div>
                <div class="line_type_2"><?php echo ''.$row4['varenr'].''; ?></div>
                <div class="line_type_2"><?php echo ''.$row4['type'].''; ?></div>
                <div class="line_type_2" id="sidste" style="width:15%;">Status: <?php 
if ($row3['status_kode'] == '0'){$status_kode = 'Modtaget';}
if ($row3['flag_kode'] == '2'){$status_kode = 'Tilbud sent';}
if ($row3['flag_kode'] == '1'){$status_kode = 'Lev. Kontaktet';}
if ($row3['flag_kode'] == '4'){$status_kode = 'Lev. Rykket';}
if ($row3['flag_kode'] == '3'){$status_kode = 'Rykke tekniker';}
if ($row3['flag_kode'] == '5'){$status_kode = 'Pris Acceptet';}
if ($row3['flag_kode'] == '0'){$status_kode = 'Modtaget';}
if ($row3['status_kode'] == '99'){$status_kode = 'afs. uden order';}
if ($row3['status_kode'] == '9'){$status_kode = 'afs. med order';}
echo $status_kode; ?></div><br style="clear:both">    
<?php } }?>    
                </div><br style="clear:both">  
<?php } ?>
<! ------------------------------------------------------------------------- line 8 ------------------------------------------------------------------------------------------------- !>            

