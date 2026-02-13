<! ø !>
<?php if($row['ASAP'] == 'JA') {
$asaprod = 'asap';
} 
if($row['firma_navn'] == 'PRO-CONSULT A/S') {
$asaprod = 'pro';
} 
if($row['status_kode'] == '85') {
$asaprod = 'tilsend';
} 
$old_s = 'opgave1';
$old_s1 = 'firmanavn';
?> 
	                  <p><div class="opgave">
                          <form method="post" action="" onsubmit="return v(this)">
		          <div class="opgave-u">
                               <div class="con_2" style="border-bottom:2px solid black; height:70%;">
		                    <div class="<?php echo $old_s; ?>" id="<?php echo $asaprod; ?>">Kundenavn:<br>
                                         <div class="firmanavn" id="<?php echo $asaprod;?>"><?php echo ''.$row['firma_navn'].''; ?></div>
                                    </div>
                                    <div class="opgave2" id="<?php echo $asaprod; ?>">Oprette den.:<br>
                                         <div class="firmanavn" id="<?php echo $asaprod; ?>"><?php $dato = $row['dato2']; $dato = date('d-m-Y', strtotime("$dato")); echo ''.$dato.''; ?></div>
                                    </div>
                                    <div class="opgave3" id="<?php echo $asaprod; ?>">Ans.<br>
                                         <div class="firmanavn" id="<?php echo $asaprod; ?>"><?php echo ''.$row['ans'].''; ?></div>
                                    </div>
                                    <div class="opgave4" id="<?php echo $asaprod; ?>">Forespørgsel nr.:<br>
                                         <div class="firmanavn" id="<?php echo $asaprod; ?>"><a id="<?php echo ''.$row['id'].''; ?>"><?php echo ''.$row['id'].''; ?><input type="hidden" name="id" value="<?php echo ''.$row['id'].''; ?>"></a></div>
                                    </div>
                               </div><br>
<?php
$id2 = $row['id'];
$ansmenu = $row['ans'];
$ansmenu2 = $_SESSION['uid'];

?>
                               <div class="con_3">
                <div class="con_3_1" id="<?php if($row['firma_navn'] == 'PRO-CONSULT A/S' and $row['ASAP'] == 'JA') { echo 'asap'; } else { echo $asaprod; }?>">Fabrikat</div>
                <div class="con_3_1" id="<?php if($row['firma_navn'] == 'PRO-CONSULT A/S' and $row['ASAP'] == 'JA') { echo 'asap'; } else { echo $asaprod; }?>">Vare nr / Vare betegnesle</div>
                <div class="con_3_1" id="<?php if($row['firma_navn'] == 'PRO-CONSULT A/S' and $row['ASAP'] == 'JA') { echo 'asap'; } else { echo $asaprod; }?>">Type</div>
                <div class="con_3_2" id="<?php if($row['firma_navn'] == 'PRO-CONSULT A/S' and $row['ASAP'] == 'JA') { echo 'asap'; } else { echo $asaprod; }?>">Total pris</div><br>
<! ------------------------------------------------------------------------- line 6 ------------------------------------------------------------------------------------------------- !>
                <div class="con_3_3"><?php $result2 = mysqli_query($conn, "SELECT producent
                       FROM prosalg_kom
			WHERE id2 = $id2
                       GROUP BY LOWER(producent)                       
		       ");
while($row = mysqli_fetch_assoc($result2)) {
$fabrikat = $row['producent']; 
$nummer = $nummer + 1;
if($nummer != '1'){ echo ' og ';}
 echo ''.$fabrikat.'';  }?>.</div>
                <div class="con_3_3"><?php $result2 = mysqli_query($conn, "SELECT varenr
                       FROM prosalg_kom
			WHERE id2 = $id2
                       GROUP BY LOWER(varenr)                       
		       ");
while($row = mysqli_fetch_assoc($result2)) {
$type = $row['varenr']; 
$nummer2 = $nummer2 + 1;
if($nummer2 != '1'){ echo ' og ';}
 echo ''.$type.'';  }?>.</div>
                <div class="con_3_3"><?php $result2 = mysqli_query($conn, "SELECT type
                       FROM prosalg_kom
			WHERE id2 = $id2
                       GROUP BY LOWER(type)                       
		       ");
while($row = mysqli_fetch_assoc($result2)) {
$type2 = $row['type']; 
$nummer3 = $nummer3 + 1;
if($nummer3 != '1'){ echo ' og ';}
 echo ''.$type2.'';  }?>.</div>
                                <div class="con_3_4"><?php $result2 = mysqli_query($conn, "SELECT total
                       FROM prosalg_kom
			WHERE id2 = $id2                  
		       ");
while($row = mysqli_fetch_assoc($result2)) {
$total = $row['total'];
$pris =  $pris + $total; }
 echo number_format($pris, 2);  ?> Kr</div><br>        
			       </div>
<br>
<?php if ($_GET['side'] == 'soeg'){ ?>
                               <div class="con_3">
<?php if($row['status_kode'] == '9'){$fak2 = 'Fakturaet';?>
                <div class="con_3_1" id="asap"><b>Raport afslutte: <?php $dato = $row['dato3']; $dato = date('d-m-Y', strtotime("$dato")); echo ''.$dato.''; ?></b></div>
<?php } else { $fak2 = 'omkostinger (C5)';?>
		<div class="con_3_3"><b>Status kode: <?php echo$row['status_kode']?></b></div>
<?php } ?>
                <div class="con_3_3">Timer brugt: <?php echo $total4;?></div>
                <div class="con_3_3">omkosting (Lokal) <?php echo $penge;  ?> DKK</div>
                <div class="con_3_4"><?php echo $fak2;?>: <?php echo $fak; ?> DKK</div><br>
			       </div>
<?php } ?>
                               <div class="con_3">
		                    <div class="menu_op"><a href="sql/hent/se_rep.php?id=<?php echo $id2;?>">Se rapport</a></div>
		                    <div class="menu_op"><a href="#">&#127;</a></div>
<?php if($ansmenu == $ansmenu2) { ?>
		                    <div class="menu_op"><a href="#">&#127;</a></div>
<?php } else { ?>		    <div class="menu_op"><a href="#">&#127;</a></div>

<?php } if($flag == 'ROD') { ?>
				    <div class="menu_op"><a href="#">&#127;</a></div>
<?php } elseif($ansmenu == $ansmenu2) { ?>		                    
				    <div class="menu_op"><a href="#">&#127;</a></div>
				    <div class="menu_op" style="border-right:2px solid black;"></div>
<?php } else { ?>		    <div class="menu_op"><a href="#">&#127;</a></div>
<?php } ?>
		                    <div class="menu_op"><a href="index.php?side=hentrapport&id=<?php echo $id2;?>&p_id=list&funk=luksalg" target="_blank">Luk uden order</a></div>
		                    <div class="menu_op" style="border:0px; width:16.5%;"><a href="../prosalg/index.php?side=afslut&id=<?php echo $id2;?>" target="_blank">Lave til ordre</a></div><br style="clear:both">
<?php  $asaprod = ''; $old_s = ''; $fak = '';?>
                               </div><br>
			  </div><br>
                          </form>
                </div>
		</p><br>