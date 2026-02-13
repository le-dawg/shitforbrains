<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<! ø !>
<style type="text/css">
div{padding:0; box-sizing: border-box; -moz-box-sizing: border-box;}
input{padding:0; box-sizing: border-box; -moz-box-sizing: border-box; width: 100%; height:100%; border:0; background-color:#AAE3E8; font-weight: bold; text-align:left;}
input:hover{border: 1px solid #000000; background: #7FF1FF;}
textarea{padding:0; box-sizing: border-box; -moz-box-sizing: border-box;}
.top{width:100% height:32px; background-color:#FF5555; float:center; border-bottom:2px solid black; font-size:25px; text-align:center; font-weight: bold;}
.firmanavn{color:#000000; font-size:24px; font-family:Arial; text-transform:uppercase; font-weight:bold;}
.tekst_felt{color:#000000; font-size:14px; font-weight:bold; text-indent:3px; float:left; height:100%; vertical-align:middle; padding:0; margin:0 auto;}
.info_felt{color:#000000; font-size:14px; text-indent:0px; float:left; height:100%; vertical-align:middle; padding:0; margin:0 auto;}
.top_felt{width:748px; height:19%; background-color:#ffffff; float:left; border-bottom:2px solid black; text-align:left; padding:0; margin:0 auto;}
.top_felt2{width:128px; height:19%; background-color:#ffffff; float:left; border-bottom:2px solid black; text-align:left; padding:0; margin:0 auto;} 
.line_type_438{width:438px; height:9%; background-color:#ffffff; float:left; border-bottom:2px solid black; text-align:left;}
</style>
<?php          $result  = mysqli_query($conn,"SELECT * FROM proservice WHERE id='$_GET[id]'");
            while($row = mysqli_fetch_assoc($result)) {
            $p_id = $_GET['p_id'];
?>
<?php
if(isset($_POST['ansvar'])) {
     $dato = date('j-m-Y') ; 
     $service_rapport = $_POST['id'];
     $ans = $_POST['ans'];
     $ans_sql = $row['ans'];
     if ($ans_sql != $ans) {
         mysqli_query($conn,"UPDATE `proservice` SET `ans`='$ans' WHERE id='$service_rapport'"); 
         mysqli_query($conn,"INSERT INTO `proservice_rapport` (`service_raport`, `timer`, `dato`, `beskivsle`, `ans`) VALUES ('$service_rapport','-','$dato','$ans_sql Har givet ansvare for opgaven til $ans','$ans_sql')");
?>
<div class="top">Du var givet ansvaret for <?php echo ''.$row['id'].''; ?> til <?php echo ''.$ans.''; ?></div>
<?php } } ?>
<div class="top">Giv ansvar for <?php echo ''.$row['id'].''; ?> videre</div>
<p>
<tr><td style="vertical-align:text-top;"><center>
                <p>
                <div style="text-align:center;">
                <form method="post" action="" onsubmit="return v(this)">
		<div style="width:880px; height:290px; background-color:#cccccc; float:center; border:2px solid black; text-align:center; margin: 0 auto; padding:0; display:inline-flex;">
                <input type="hidden" name="id" value="<?php echo ''.$row['id'].''; ?>"><input type="hidden" name="dato" value="<?php echo ''.$row['id'].''; ?>">
<! ------------------------------------------------------------------------- Repport info ------------------------------------------------------------------------------------------- !>
		<div class="top_felt" style="border-right:2px solid black;">Kundenavn:<br>
                  <div class="firmanavn"><?php echo ''.$row['firma_navn'].''; ?></div></div>
                <div class="top_felt2" >service report nr.:<br>
                  <div class="firmanavn"><?php echo ''.$row['id'].''; ?></div></div><br style="clear:both">
<! ------------------------------------------------------------------------- line 1 ------------------------------------------------------------------------------------------------- !>
                <div class="line_type_438" style="border-right:2px solid black;">
                  <div class="info_felt">C/O Firmanavn: </div>                  
                  <div class="tekst_felt"><?php echo ' '.$row['by'].''; ?></div>
                  <div class="clear"></div>
                </div>
                <div style="width:25%; height:9%; background-color:#ffffff; float:left; border-right:2px solid black; border-bottom:2px solid black; text-align:left;">
                  <div class="info_felt">Vores ref.:</div>                  
                  <div class="tekst_felt"><?php echo ''.$row['v_ref'].''; ?></div>
                </div>
                <div style="width:25%; height:9%; background-color:#ffffff; float:left; border-bottom:2px solid black; text-align:left;">
                  <div class="info_felt">Dato:</div>                  
                  <div class="tekst_felt"><?php echo ''.$row['dato'].''; ?></div>
                </div><br style="clear:both">
<! ------------------------------------------------------------------------- line 2 ------------------------------------------------------------------------------------------------- !>
                <div class="line_type_438" style="border-right:2px solid black;">Adresse: <?php echo ''.$row['adresse'].''; ?></div>
                <div class="line_type_438">Deres ref.:<?php echo ''.$row['d_ref'].''; ?></div><br style="clear:both">
<! ------------------------------------------------------------------------- line 3 ------------------------------------------------------------------------------------------------- !>
                <div class="line_type_438" style="border-right:2px solid black;">Post nr.: <?php echo ''.$row['post'].''; ?></div>
                <div class="line_type_438">Rekv. nr.: <?php echo ''.$row['revk'].''; ?></div><br style="clear:both">
<! ------------------------------------------------------------------------- line 4 ------------------------------------------------------------------------------------------------- !>                
                <div style="width:25%; height:9%; background-color:#ffffff; float:left; border-bottom:2px solid black; border-right:2px solid black; text-align:left;">By: <?php echo ''.$row['by'].''; ?></div>
                <div style="width:25%; height:9%; background-color:#ffffff; float:left; border-bottom:2px solid black; border-right:2px solid black; text-align:left;">Land: <?php echo ''.$row['land'].''; ?></div>
                <div style="width:25%; height:9%; background-color:#ffffff; float:left; border-bottom:2px solid black; border-right:2px solid black; text-align:left;">Telefon: <?php echo ''.$row['telefon'].''; ?></div>
                <div style="width:25%; height:9%; background-color:#ffffff; float:left; border-bottom:2px solid black; text-align:left;">Mobil: <?php echo ''.$row['mobil'].''; ?></div><br style="clear:both">
<! ------------------------------------------------------------------------- line 5 ------------------------------------------------------------------------------------------------- !>
                <div style="width:25%; height:9%; background-color:#bbbbbb; float:left; border-bottom:2px solid black; border-right:2px solid black; border-bottom:2px solid black; text-align:left;">Fabrikat</div>
                <div style="width:25%; height:9%; background-color:#bbbbbb; float:left; border-bottom:2px solid black; border-right:2px solid black; text-align:left;">Type</div>
                <div style="width:25%; height:9%; background-color:#bbbbbb; float:left; border-bottom:2px solid black; border-right:2px solid black; text-align:left;">Maskine</div>
                <div style="width:25%; height:9%; background-color:#bbbbbb; float:left; border-bottom:2px solid black; text-align:left;">Serie Nr.</div><br style="clear:both">
<! ------------------------------------------------------------------------- line 6 ------------------------------------------------------------------------------------------------- !>
                <div style="width:25%; height:9%; background-color:#ffffff; float:left; border-bottom:2px solid black; border-right:2px solid black; text-align:left;"><?php echo ''.$row['fabrikat'].''; ?></div>
                <div style="width:25%; height:9%; background-color:#ffffff; float:left; border-bottom:2px solid black; border-right:2px solid black; text-align:left;"><?php echo ''.$row['type'].''; ?></div>
                <div style="width:25%; height:9%; background-color:#ffffff; float:left; border-bottom:2px solid black; border-right:2px solid black; text-align:left;"><?php echo ''.$row['maskine'].''; ?></div>
                <div style="width:25%; height:9%; background-color:#ffffff; float:left; border-bottom:2px solid black; text-align:left;"><?php echo ''.$row['sn_nr'].''; ?></div><br style="clear:both">        
<! ------------------------------------------------------------------------- line 7 ------------------------------------------------------------------------------------------------- !>    
                <div style="width:25%; height:9%; background-color:#ffffff; float:left; border-bottom:2px solid black; border-right:2px solid black; text-align:left;">Pris skønnet: <?php echo ''.$row['pris_s'].''; ?></div>
                <div style="width:25%; height:9%; background-color:#ffffff; float:left; border-bottom:2px solid black; border-right:2px solid black; text-align:left;">Pris Ny: <?php echo ''.$row['pris_n'].''; ?></div>
                <div style="width:25%; height:9%; background-color:#ffffff; float:left; border-bottom:2px solid black; border-right:2px solid black; text-align:left;">Pris brugt/ebay: <?php echo ''.$row['pris_b'].''; ?></div>
                <div style="width:25%; height:9%; background-color:#ffffff; float:left; border-bottom:2px solid black; text-align:left;">Pris aftalt: <?php echo ''.$row['pris_k'].''; ?></div><br style="clear:both">        
<! ------------------------------------------------------------------------- line 8 ------------------------------------------------------------------------------------------------- !>            
                <div style="width:100%; height:9%; background-color:#bbbbbb; float:left; border-bottom:2px solid black; text-align:left;">Valg hvem der skal have ansvaret og klik giv ans.</div><br style="clear:both"> 
<! ------------------------------------------------------------------------- line 9 ------------------------------------------------------------------------------------------------- !>
		<div style="width:25%; height:9%; background-color:#ffffff; float:left; border-right:2px solid black; text-align:left;">
		<?php if ($p_id == 'hentrapp') {  ?>
                <input type="submit" value="Tilbage til rapport siden" name="hent_rapp_retur">
		<?php } else {  ?>
                <input type="submit" value="Tilbage til oversigt" name="dine_opgaver">
                <?php } ?></div>
                <div style="width:25%; height:9%; background-color:#ffffff; float:left; border-right:2px solid black; text-align:left;"></div>
                <div style="width:25%; height:9%; background-color:#ffffff; float:left; border-right:2px solid black; text-align:left;"><select id="s1" style="width:100%; height:100%;" class="select" name="ans">
                  <option value="<?php echo ''.$row['ans'].''; ?>"><?php echo ''.$row['ans'].''; ?></option>
                  <option value="50">50 Uden ansvar</option>
                  <option value="51">51 Uden ansvar</option>
                          <?php $result = mysqli_query($conn,"SELECT * FROM promed ORDER BY id ASC");
                                while($row = mysqli_fetch_assoc($result)) { 
		                $ans = $row['id'];?></option>
                  <option value="<?php echo ''.$row['id'].''; ?>"><?php echo ''.$row['id'].''; ?> 
		          <?php $result2 = mysqli_query($conn,"SELECT * FROM promed WHERE id=$ans");
                                while($row2 = mysqli_fetch_assoc($result2)) { 
                                echo ''.$row['navn'].''; ?>
                  </option> <?php } }?></Select></div>
                <div style="width:25%; height:9%; background-color:#ffffff; float:left;  text-align:left;"><input type="submit" value="Giv Ansvar" name="ansvar"></div><br style="clear:both"> 
<! ------------------------------------------------------------------------- line 15 ------------------------------------------------------------------------------------------------ !>            
                </div></form>
                </div>
<?php 
}
?>
</td></tr>
</table>
