<! ø !>
<?php 
if ($_GET[id] >= '500000'){
$sql = 'prosalg';
} else {
$sql = 'proservice';
}
            $result  = mysqli_query($conn,"SELECT * FROM $sql WHERE id='$_GET[id]'");
            while($row = mysqli_fetch_assoc($result)) {

if ($_GET[id] >= '500000'){
$id = $row['id2'];
$status = $row['status_kode'];
$id2 = $row['id'];
$id3 = $row['id2'];
$komdo = 'salg';
}
if ($row['flag'] == 'SALG'){
$id = $row['id'];
$id3 = $row['id'];
$komdo = 'salg';
$result2  = mysqli_query($conn,"SELECT * FROM prosalg WHERE id2='$_GET[id]'");
while($row2 = mysqli_fetch_assoc($result2)) {
$id2 = $row2['id'];
} } else {
if ($_GET[id] <= '500000'){
$id = $row['id']; }}

?>
                <p>
                <div id="opgave">
                <form method="post" action="" onsubmit="return v(this)">
		<div class="opgave-div" >
                <input type="hidden" name="id" value="<?php echo ''.$row['id'].''; ?>">
		<input type="hidden" name="id2" value="<?php echo ''.$row['id2'].''; ?>">
		<input type="hidden" name="id3" value="<?php echo ''.$row['id3'].''; ?>">
                <input type="hidden" name="ans" value="<?php echo ''.$row['ans'].''; ?>">
		<input type="hidden" name="uniid" value="<?php echo ''.$row['uni_firma_navn_id'].''; ?>">
<! ------------------------------------------------------------------------- Repport info ------------------------------------------------------------------------------------------- !>
		<div class="top_felt">Kundenavn:<br>
                  <div class="firmanavn"><input class="tekst" type="text" name="firma_navn" value="<?php echo ''.$row['firma_navn'].''; ?>"></div></div>
                <div class="top_felt2">Ansvarlig:<br>
                  <div class="firmanavn"><?php echo ''.$row['ans'].''; ?></div></div>
                <div class="top_felt3" >Rapport nr.:<br>
                  <div class="firmanavn"><?php if($komdo == 'salg'){ ?><?php echo ''.$id.''; ?> / <?php echo ''.$id2.''; ?><?php } else {  ?><?php echo ''.$id.''; } ?></div></div><br style="clear:both"></div><p>
<! ------------------------------------------------------------------------- line 1 ------------------------------------------------------------------------------------------------- !>
		<div class="opgave-div" >
                <div class="line_type_438" id="graa2">
		  Fakturerings Adresse
                </div>
                <div class="line_type_438" id="sidste-graa2">
		  Leverings Adresse
                </div><br style="clear:both"> 
<! ------------------------------------------------------------------------- line 1 ------------------------------------------------------------------------------------------------- !>
               <div class="line_type_438">
                  <div class="info_felt">C/O Firmanavn: </div>                  
                  <div class="tekst_felt"><input class="tekst" type="text" name="navn" value="<?php echo ''.$row['navn'].''; ?>"></div>
                  <div class="clear"></div>
                </div>
                <div class="line_type_438" id="sidste">
                  <div class="info_felt">Firmanavn: </div>                  
                  <div class="tekst_felt"><input class="tekst" type="text" name="navn_lev" value="<?php echo ''.$row['Navn_lev'].''; ?>"></div>
                  <div class="clear"></div>
                </div><br style="clear:both">
<! ------------------------------------------------------------------------- line 2 ------------------------------------------------------------------------------------------------- !>
                <div class="line_type_438">
		  <div class="info_felt">Adresse: (min 3 tegn)</div>  
		  <div class="tekst_felt"><input class="tekst" type="text" name="adresse" value="<?php echo ''.$row['adresse'].''; ?>" pattern=".{3,}" required></div></div>
		<div class="line_type_438" id="sidste">
		  <div class="info_felt">Adresse: </div>  
		  <div class="tekst_felt"><input class="tekst" type="text" name="adresse_lev" value="<?php echo ''.$row['Adresse_lev'].''; ?>"></div></div><br style="clear:both">
<! ------------------------------------------------------------------------- line 3 ------------------------------------------------------------------------------------------------- !>
                <div class="line_type_438">
                  <div class="info_felt">Post nr.: (min 3 tegn)</div>                  
                  <div class="tekst_felt"><input class="tekst" type="text" name="post" value="<?php echo ''.$row['post'].''; ?>" pattern=".{3,}" required></div>
                </div>
                <div class="line_type_438" id="sidste">
                  <div class="info_felt">Post nr.:</div>                  
                  <div class="tekst_felt"><input class="tekst" type="text" name="post_lev" value="<?php echo ''.$row['post_lev'].''; ?>"></div>
                </div><br style="clear:both">
<! ------------------------------------------------------------------------- line 4 ------------------------------------------------------------------------------------------------- !>                
                <div class="line_type_438">
                  <div class="info_felt">By:</div>                  
                  <div class="tekst_felt"><input class="tekst" type="text" name="by" value="<?php echo ''.$row['by'].''; ?>"></div>
                </div>
                <div class="line_type_438" id="sidste">
                  <div class="info_felt">By:</div>                  
                  <div class="tekst_felt"><input class="tekst" type="text" name="by_lev" value="<?php echo ''.$row['by_lev'].''; ?>"></div>
                </div><br style="clear:both">
<! ------------------------------------------------------------------------- line 4 ------------------------------------------------------------------------------------------------- !>                

                <div class="line_type_438">
                  <div class="info_felt">Land.: (min 3 tegn)</div>        
		  <div class="tekst_felt"><select name="land" class="tekst" id="hvid">
                <?php $resultland1 = mysqli_query($conn,"SELECT * FROM prouniland where id = $row[land]");          
                      while($rowland1 = mysqli_fetch_assoc($resultland1)) { ?>
		     <option value="<?php echo $rowland1['id'] ?>"><?php echo $rowland1['Land'] ?></option>
	             <?php } ?><?php  $resultland = mysqli_query($conn,"SELECT * FROM prouniland ORDER BY id ASC");
                                while($rowland = mysqli_fetch_assoc($resultland)) { ?>
		<option value="<?php echo $rowland['id'] ?>"><?php echo $rowland['Land'] ?></option>
                <?php } ?>
                </select></div>
                </div>
                <div class="line_type_438" id="sidste">
                  <div class="info_felt">Land.:</div>                  
                  <div class="tekst_felt"><select name="land_lev" class="tekst" id="hvid">
                <?php $resultland1 = mysqli_query($conn,"SELECT * FROM prouniland where id = $row[land_lev]");          
                      while($rowland1 = mysqli_fetch_assoc($resultland1)) { ?>
		     <option value="<?php echo $rowland1['id'] ?>"><?php echo $rowland1['Land'] ?></option>
	             <?php } ?><?php  $resultland = mysqli_query($conn,"SELECT * FROM prouniland ORDER BY id ASC");
                                while($rowland = mysqli_fetch_assoc($resultland)) { ?>
		<option value="<?php echo $rowland['id'] ?>"><?php echo $rowland['Land'] ?></option>
                <?php } ?>
                </select></div>
                </div><br style="clear:both">
<! ------------------------------------------------------------------------- line 4 ------------------------------------------------------------------------------------------------- !>                
                <div class="line_type_438">
                  <div class="info_felt">Deres ref.: (min 3 tegn)</div>                  
                  <div class="tekst_felt"><input class="tekst" type="text" name="d_ref" value="<?php echo ''.$row['d_ref'].''; ?>" pattern=".{2,}" required></div>
                </div>
                <div class="line_type_438" id="sidste">
                  <div class="info_felt">Rekv. nr.:</div>                  
                  <div class="tekst_felt"><input class="tekst" type="text" name="revk" value="<?php echo ''.$row['revk'].''; ?>"></div>
                </div><br style="clear:both">
<! ------------------------------------------------------------------------- line 4 ------------------------------------------------------------------------------------------------- !>                
               <div class="line_type_2">
                  <div class="info_felt">Telefon:</div>                  
                  <div class="tekst_felt"><input class="tekst" type="text" name="telefon" value="<?php echo ''.$row['telefon'].''; ?>" pattern=".{3,}" required></div>
                </div>
                <div class="line_type_2">
                  <div class="info_felt">Mobil:</div>                  
                  <div class="tekst_felt"> <input class="tekst" type="text" name="mobil" value="<?php echo ''.$row['mobil'].''; ?>"></div>
                </div>
                <div class="line_type_438" id="sidste">
                  <div class="info_felt">Mail:</div>                  
                  <div class="tekst_felt"><input class="tekst" type="text" name="mail" value="<?php echo ''.$row['mail'].''; ?>"></div>
                </div><br style="clear:both">
<! ------------------------------------------------------------------------- line 4 ------------------------------------------------------------------------------------------------- !>                
               <div class="line_type_2">
                  <div class="info_felt">CVR / VAT Nr.:</div>                  
                  <div class="tekst_felt"><input class="tekst" type="text" name="CVR" value="<?php echo ''.$row['CVR'].''; ?>"></div>
                </div>
                <div class="line_type_2">
                  <div class="info_felt">EAN / GLN Nr.:</div>                  
                  <div class="tekst_felt"> <input class="tekst" type="text" name="EAN" value="<?php echo ''.$row['EAN'].''; ?>"></div>
                </div>
                <div class="line_type_438" id="sidste">
                  <div class="info_felt">Faktura mail:</div>                  
                  <div class="tekst_felt"><input class="tekst" type="text" name="FAKMAIL" value="<?php echo ''.$row['FAKMAIL'].''; ?>"></div>
                </div><br style="clear:both">
</div><p>
<! ------------------------------------------------------------------------- line 5 ------------------------------------------------------------------------------------------------- !>
		<div class="opgave-div" >
                <div class="line_type_2" id="graa2">Fabrikat (min 3 tegn)</div>
                <div class="line_type_2" id="graa2">Type (min 3 tegn)</div>
                <div class="line_type_2" id="graa2">Maskine (min 3 tegn)</div>
                <div class="line_type_2" id="sidste-graa2">Serie Nr. (min 3 tegn)</div><br style="clear:both">
<! ------------------------------------------------------------------------- line 6 ------------------------------------------------------------------------------------------------- !>
<?php 
if($komdo == 'salg'){
$result3  = mysqli_query($conn,"SELECT * FROM proservice WHERE id='$id3'");
while($row3 = mysqli_fetch_assoc($result3)) { ?>
                <div class="line_type_2"><input class="tekst" type="text" name="fabrikat" value="<?php echo ''.$row3['fabrikat'].''; ?>"></div>
                <div class="line_type_2"><input class="tekst" type="text" name="type" value="<?php echo ''.$row3['type'].''; ?>" ></div>
                <div class="line_type_2"><input class="tekst" type="text" name="maskine" value="<?php echo ''.$row3['maskine'].''; ?>"></div>
                <div class="line_type_2" id="sidste"><input class="tekst" type="text" name="sn_nr" value="<?php echo ''.$row3['sn_nr'].''; ?>"></div><br style="clear:both">  
<?php } } else { ?> 
                 <div class="line_type_2"><input class="tekst" type="text" name="fabrikat" value="<?php echo ''.$row['fabrikat'].''; ?>" pattern=".{3,}" required></div>
                <div class="line_type_2"><input class="tekst" type="text" name="type" value="<?php echo ''.$row['type'].''; ?>" pattern=".{3,}" required></div>
                <div class="line_type_2"><input class="tekst" type="text" name="maskine" value="<?php echo ''.$row['maskine'].''; ?>" pattern=".{3,}" required></div>
                <div class="line_type_2" id="sidste"><input class="tekst" type="text" name="sn_nr" value="<?php echo ''.$row['sn_nr'].''; ?>" pattern=".{3,}" required></div><br style="clear:both">
<?php } ?> 
<! ------------------------------------------------------------------------- line 7 ------------------------------------------------------------------------------------------------- !>    
                <div class="line_type_2">
                  <div class="info_felt" style="width:42%;">Pris skønnet:</div>                  
                  <div class="tekst_felt" style="width:56%;"> <input class="tekst" type="text" name="pris_s" value="<?php echo ''.$row['pris_s'].''; ?>"></div>
                </div>
                <div class="line_type_2">
                  <div class="info_felt" style="width:42%;">Pris Ny:</div>                  
                  <div class="tekst_felt" style="width:56%;"> <input class="tekst" type="text" name="pris_n" value="<?php echo ''.$row['pris_n'].''; ?>"></div>
                </div>
		<div class="line_type_2">
                  <div class="info_felt" style="width:42%;">Pris brugt/ebay:</div>                  
                  <div class="tekst_felt" style="width:56%;"> <input style="width:100%;" class="tekst" type="text" name="pris_b" value="<?php echo ''.$row['pris_b'].''; ?>"></div>
                </div>
		<div class="line_type_2" id="sidste">
                  <div class="info_felt" style="width:42%;">Pris aftalt:</div>                  
                  <div class="tekst_felt" style="width:56%;"> <input class="tekst" type="text" name="pris_k" value="<?php echo ''.$row['pris_k'].''; ?>"></div>
                </div><br style="clear:both">
<! ------------------------------------------------------------------------- line 7a ------------------------------------------------------------------------------------------------- !>    
                <div class="line_type_2">
                  <div class="info_felt" style="width:42%;">Medf. Emb.:</div>                  
                  <div class="tekst_felt" style="width:56%;"><select name="emb" class="tekst" id="hvid">
                <option value="<?php echo ''.$row['med_emb'].''; ?>"><?php echo ''.$row['med_emb'].''; ?></option>
                <option value="NEJ">NEJ</option>
                <option value="JA">JA</option></select>
                </div></div>
                <div class="line_type_2">
                  <div class="info_felt" style="width:42%;">Dok. Retur:</div>                  
                  <div class="tekst_felt" style="width:56%;"><select name="dok" class="tekst" id="hvid">
                <option value="<?php echo ''.$row['dok_retur'].''; ?>"><?php echo ''.$row['dok_retur'].''; ?></option>
                <option value="NEJ">NEJ</option>
                <option value="JA">JA</option></select>                </div></div>
		<div class="line_type_2">
                  <div class="info_felt" style="width:42%;">Haster den:</div>                  
                  <div class="tekst_felt" style="width:56%;"><select name="asap" class="tekst" id="hvid">
                <option value="<?php echo ''.$row['ASAP'].''; ?>"><?php echo ''.$row['ASAP'].''; ?></option>
                <option value="NEJ">NEJ</option>
                <option value="JA">JA</option></select>                </div></div>
		<div class="line_type_2" id="sidste">
                  <div class="info_felt" style="width:42%;"></div>                  
                  <div class="tekst_felt" style="width:56%;"></div>
                </div><br style="clear:both">


</div><p>   
<! ------------------------------------------------------------------------- line 8 ------------------------------------------------------------------------------------------------- !>            
                <div class="topfak" style="border-bottom:0px;">Beskrivels af anmeldt fejl</div><div class="opgave-div">
<! ------------------------------------------------------------------------- line 9 ------------------------------------------------------------------------------------------------- !>
                <div class="line_type_4" style="border-bottom:0px;"><textarea class="tekst" name="baaf" style="width:100%"><?php echo ''.$row['baaf'].''; ?></textarea></div><br style="clear:both"></div> 
<! ------------------------------------------------------------------------- line 10 ------------------------------------------------------------------------------------------------ !>
                <div class="topfak" style="border-bottom:0px;">Note</div><div class="opgave-div">
<! ------------------------------------------------------------------------- line 13 ------------------------------------------------------------------------------------------------ !>
                <div class="line_type_4"><textarea class="tekst" name="note" style="width:100%"><?php echo ''.$row['note'].''; ?></textarea></div><br style="clear:both"></div> 

<?php if ($_GET[p_id] == 'ret' and $row['status_kode'] == '9' or $_GET[p_id] == 'soeg' and $row['status_kode'] == '9'){?>
<! ------------------------------------------------------------------------- line 10 ------------------------------------------------------------------------------------------------ !>
                <div class="topfak" style="border-bottom:0px; border-top:0px;">Hvad var der galt med enheden / Hvad er der lavet (kortfattet)</div><div class="opgave-div">
<! ------------------------------------------------------------------------- line 13 ------------------------------------------------------------------------------------------------ !>
                <div class="line_type_4"><textarea class="tekst" name="baof" style="width:100%"><?php echo ''.$row['baof'].''; ?></textarea></div><br style="clear:both"></div> 
<! ------------------------------------------------------------------------- line 10 ------------------------------------------------------------------------------------------------ !>
                <div class="topfak" style="border-bottom:0px; border-top:0px;">Hvordan gik testen og er enheden testet? (Hjælp til fremtiden)</div><div class="opgave-div">
<! ------------------------------------------------------------------------- line 13 ------------------------------------------------------------------------------------------------ !>
                <div class="line_type_4"><textarea class="tekst" name="tekstt" style="width:100%"><?php echo ''.$row['tekstt'].''; ?></textarea></div><br style="clear:both"></div> 
<! ------------------------------------------------------------------------- line 10 ------------------------------------------------------------------------------------------------ !>
                <div class="topfak" style="border-bottom:0px; border-top:0px;">Hvad tror kunden vi har lavet? (Ved hastesager, hvor lang tid tog sagen)</div><div class="opgave-div">
<! ------------------------------------------------------------------------- line 13 ------------------------------------------------------------------------------------------------ !>
                <div class="line_type_4"><textarea class="tekst" name="tekstk" style="width:100%"><?php echo ''.$row['tekstk'].'';?></textarea></div><br style="clear:both"></div> 


<?php } ?>



<?php 
}
?>