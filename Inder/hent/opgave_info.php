<! ø !>
<?php 
$vref = $row['v_ref']; 
$revk = $row['revk']; 
$asap = $row['ASAP']; 
$firmanavn = $row['firma_navn'];
$statuskodeku = $row['status_kode'];

?>
                <div id="opgave">
                <form method="post" action="" onsubmit="return v(this)">
		<div class="opgave-div">
                <input type="hidden" name="id" value="<?php echo ''.$row['id'].''; ?>">
                <input type="hidden" name="ans" value="<?php echo ''.$row['ans'].''; ?>">
                <input type="hidden" name="p_id" value="hentrapp">
<! ------------------------------------------------------------------------- Repport info ------------------------------------------------------------------------------------------- !>
		<div class="top_felt">Kundenavn:<br>
                  <div class="firmanavnhent"><?php echo ''.$row['firma_navn'].''; $firma_navn = $row['firma_navn'];?></div></div>
                <div class="top_felt2">Ansvarlig:<br>
                  <div class="firmanavnhent"><?php echo ''.$row['ans'].''; ?></div></div>
                <div class="top_felt3">rapport nr.:<br>
                  <div class="firmanavnhent"><?php echo ''.$row['id'].'';?></div></div><br style="clear:both">
<! ------------------------------------------------------------------------- line 1 ------------------------------------------------------------------------------------------------- !>
                <div class="line_type_2">
                  <div class="info_felt">Vores ref.:</div>                  
                  <div class="tekst_felt"><?php echo ''.$row['v_ref'].''; ?></div>
                </div>
		<div class="line_type_2">
		  <div class="info_felt" style="width:42%;"></div> 
		  <div class="tekst_felt" style="width:56%;"><?php echo ''.$row['for_mod'].''; ?></div>
		</div>
                <div class="line_type_2"><div class="info_felt">ind gr.:</div><div class="tekst_felt"><?php $status = $row['ind_kode']; if ($status == '0'){ echo '(0) indleveret SJ. Lejre' ; }
		if ($status == '1'){ 
		echo '(1) indleveret JY. Lejre' ;
		}
		if ($status == '2'){ 
		echo '(2) Sverige' ;
		}
		if ($status == '3'){ 
		echo '(3) Udearbj. SJ. Lejre' ;
		}
		if ($status == '4'){ 
		echo '(4) Udearbj. JY. Lejre' ;
		}
		if ($status == '5'){ 
		echo '(5) Salg' ;
		}
		if ($status == '10'){ 
		echo '(10) Reglamation !!' ;
		}
		if ($status == '21'){ 
		echo '(21) Øvrig udland' ;
		}
		if ($status == '6'){ 
		echo '(6) Pro-Consult sag' ;
		}
		if ($status == '7'){ 
		echo '(7) indleveret Vejle' ;
		}
		if ($status == '8'){ 
		echo '(8) Udearbj. JY. Vejle' ;
		}
		if ($status == '9'){ 
		echo '(9) Udearbj. FYN. Vejle' ;
		}
		if ($status == '61'){ 
		echo '(61) Pro-Consult sag' ;
		}
		if ($status == '62'){ 
		echo '(62) Reglamation !!' ;
		}
 ?>		</div></div>
                <div class="line_type_2" id="sidste">
                  <div class="info_felt">Dato:</div>                  
                  <div class="tekst_felt"><?php echo ''.$dato.''; ?></div>
                </div><br style="clear:both">
<! ------------------------------------------------------------------------- line 1 ------------------------------------------------------------------------------------------------- !>
                <div class="line_type_438" id="graa">
		  Fakturerings Adresse
                </div>
                <div class="line_type_438" id="sidste-graa">
		  Leverings Adresse
                </div><br style="clear:both"> 
<! ------------------------------------------------------------------------- line 1 ------------------------------------------------------------------------------------------------- !>
               <div class="line_type_438">
                  <div class="info_felt">C/O Firmanavn: </div>                  
                  <div class="tekst_felt"><?php echo ' '.$row['navn'].''; ?></div>
                  <div class="clear"></div>
                </div>
                <div class="line_type_438" id="sidste">
                  <div class="info_felt">C/O Firmanavn: </div>                  
                  <div class="tekst_felt"><?php echo ' '.$row['Navn_lev'].''; ?>.</div>
                  <div class="clear"></div>
                </div><br style="clear:both">
<! ------------------------------------------------------------------------- line 2 ------------------------------------------------------------------------------------------------- !>
               <div class="line_type_438">
                  <div class="info_felt">Adresse: </div>                  
                  <div class="tekst_felt"><?php echo $row['adresse']; ?></div>
                </div>
                <div class="line_type_438" id="sidste">
                  <div class="info_felt">Adresse: </div>                  
                  <div class="tekst_felt"><?php echo $row['Adresse_lev']; ?>.</div>
                </div><br style="clear:both">
<! ------------------------------------------------------------------------- line 3 ------------------------------------------------------------------------------------------------- !>
               <div class="line_type_438">
                  <div class="info_felt">Post/by.: </div>                  
                  <div class="tekst_felt"><?php 
 echo ''.$row['post'].''; ?> <?php echo ''.$row['by'].''; ?></div>
                </div>
                <div class="line_type_438" id="sidste">
                  <div class="info_felt">Post/by.: </div>                  
                  <div class="tekst_felt"><?php echo ''.$row['post_lev'].''; ?> <?php echo ''.$row['by_lev'].''; ?></div>
                </div><br style="clear:both">
<! ------------------------------------------------------------------------- line 4 ------------------------------------------------------------------------------------------------- !>                
               <div class="line_type_438">
                  <div class="info_felt">Land: </div>                  
                  <div class="tekst_felt"><?php
			if (is_numeric($row['land'])) { 
 			$resultland  = mysqli_query($conn,"SELECT * FROM prouniland WHERE id=$row[land]");
 	            	while($rowland = mysqli_fetch_assoc($resultland)) { echo $rowland['Land']; } } else { echo ''.$row['land'].''; }?></div>
                </div>
                <div class="line_type_438" id="sidste">
                  <div class="info_felt">Land: </div>                  
                  <div class="tekst_felt"><?php
			if (is_numeric($row['land_lev'])) { 
 			$resultland  = mysqli_query($conn,"SELECT * FROM prouniland WHERE id=$row[land_lev]");
 	            	while($rowland = mysqli_fetch_assoc($resultland)) { echo $rowland['Land']; } } else { echo ''.$row['land_lev'].''; }?>.</div>
                </div><br style="clear:both"> 
<! ------------------------------------------------------------------------- line 4 ------------------------------------------------------------------------------------------------- !>                
               <div class="line_type_438">
                  <div class="info_felt">Deres ref.:</div>                  
                  <div class="tekst_felt"><?php echo ''.$row['d_ref'].''; ?></div>
                </div>
                <div class="line_type_438" id="sidste">
                  <div class="info_felt">Rekv. nr.: </div>                  
                  <div class="tekst_felt"><?php echo ''.$row['revk'].''; ?></div>
                </div><br style="clear:both"> 
<! ------------------------------------------------------------------------- line 4 ------------------------------------------------------------------------------------------------- !>                
               <div class="line_type_2">
                  <div class="info_felt">Telefon:</div>                  
                  <div class="tekst_felt"><?php echo ''.$row['telefon'].''; ?></div>
                </div>
                <div class="line_type_2">
                  <div class="info_felt">Mobil: </div>                  
                  <div class="tekst_felt"><?php echo ''.$row['mobil'].''; ?>.</div>
		</div>
                <div class="line_type_438" id="sidste">
                  <div class="info_felt">E-mail:  </div>  
                <?php if($row['id'] > '500000'){
		     $result2  = mysqli_query($conn,"SELECT producent FROM prosalg_kom WHERE id2=$row[id] GROUP BY LOWER(producent)");
 	            while($row2 = mysqli_fetch_assoc($result2)) {
                     $producent = $producent.' '.$row2['producent']; }
		     $result2  = mysqli_query($conn,"SELECT varenr FROM prosalg_kom WHERE id2=$row[id] GROUP BY LOWER(varenr)");
 	            while($row2 = mysqli_fetch_assoc($result2)) {
	             $varenr = $varenr.' '.$row2['varenr'];
 		     } ?>
                  <div class="tekst_felt"><a href="mailto:<?php $mailtilmig = $row['mail']; echo $row['mail']; ?>?subject=Angående forespørgsel / tilbud nummer:<?php echo $row['id']; ?>."><?php echo $row['mail']; ?></a></div>
                <?php } else { ?>
                  <div class="tekst_felt"><a href="mailto:<?php echo $row['mail']; ?>?subject=Angående service sagsnummer: <?php echo $row['id']; ?> "><?php echo $row['mail']; ?></a></div>
                <?php } ?>             
               </div><br style="clear:both">
<! ------------------------------------------------------------------------- line 4 ------------------------------------------------------------------------------------------------- !>                
               <div class="line_type_2">
                  <div class="info_felt">CVR / VAT Nr.:</div>                  
                  <div class="tekst_felt"><?php echo ''.$row['CVR'].''; ?></div>
                </div>
                <div class="line_type_2">
                  <div class="info_felt">EAN / GLN Nr.:</div>                  
                  <div class="tekst_felt"><?php echo ''.$row['EAN'].''; ?></div>
                </div>
                <div class="line_type_438" id="sidste">
                  <div class="info_felt">Faktura mail:</div>                  
                  <div class="tekst_felt"><?php echo ''.$row['FAKMAIL'].''; ?></div>
                </div><br style="clear:both">
</div><p>
<! ------------------------------------------------------------------------- line 5 ------------------------------------------------------------------------------------------------- !>
                <div class="opgave-div">
 		<?php if($rapport > '500000' || $flag == 'SALG'){include('nedernedsalg.php'); } else { include('nederned.php'); } ?>
        
                </div>
                </div>
