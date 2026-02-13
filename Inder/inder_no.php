<! ø !>
<?php if($row['ASAP'] == 'JA') {
$asaprod = 'asap';
} 
if ($_GET['side'] != 'soeg'){
if ($old == 'JA'){
$old_s = 'old';
$old_s1 = 'firmanavn2';
} else {
$old_s = 'opgave1';
$old_s1 = 'firmanavn';
} }
if ($_GET['side'] == 'soeg'){
$old_s = 'opgave1';
$old_s1 = 'firmanavn';
$style = "width:100%;";
}
?>
	                  <p><div class="opgave" style="<?php echo $style;?>">
                          <form method="post" action="" onsubmit="return v(this)">
		          <div class="opgave-u">
                               <div class="con_2" style="border-bottom:2px solid black; height:70%;">
		                    <div class="<?php echo $old_s; ?>" id="<?php echo $asaprod; ?>"><font style="font-size:14px;">Kundenavn: </font><br>
                                         <div class="<?php echo $old_s1; ?>" id="<?php if ($old_s != 'old') { echo $asaprod; }?>"><?php echo ''.$row['firma_navn'].''; ?></div>
                                    </div>
                                    <div class="opgave2" id="<?php echo $asaprod; ?>"><font style="font-size:14px;">Oprette den.:</font><br>
                                         <div class="firmanavn" id="<?php echo $asaprod; ?>"><?php $dato = $row['dato2']; $dato = date('d-m-Y', strtotime("$dato")); echo ''.$dato.''; ?></div>
                                    </div>
                                    <div class="opgave3" id="<?php echo $asaprod; ?>"><font style="font-size:14px;">Ans.</font><br>
                                         <div class="firmanavn" id="<?php echo $asaprod; ?>"><?php echo ''.$row['ans'].''; ?></div>
                                    </div>
                                    <div class="opgave4" id="<?php echo $asaprod; ?>"><font style="font-size:14px;">Rapport:</font><br>
                                         <div class="firmanavn" id="<?php echo $asaprod; ?>"><a id="<?php echo ''.$row['id'].''; ?>"><?php echo ''.$row['id'].''; ?><input type="hidden" name="id" value="<?php echo ''.$row['id'].''; ?>"></a></div>
                                    </div>
                               </div><br>
<?php $flag = $row['flag'];
$ansmenu = $row['ans'];
$ansmenu2 = $_SESSION['uid'];
if($flag == 'ROD') { ?>
                               <div class="con_3">
                <div class="red"><b>Dette er en rød opgave</b></div>
			       </div>
<?php }  ?> 
                               <div class="con_3">

<! ------------------------------------------------------------------------- line 6 ------------------------------------------------------------------------------------------------- !>
                <div class="con_3_3"><?php echo ''.$row['fabrikat'].''; ?>.</div>
                <div class="con_3_3"><?php echo ''.$row['type'].''; ?>.</div>
                <div class="con_3_3"><?php echo ''.$row['maskine'].''; ?>.</div>
                <div class="con_3_4"><?php echo ''.$row['sn_nr'].''; ?>.</div><br>        
			       </div>
<br>
<?php if ($_GET['side'] == 'soeg'){ ?>
                               <div class="con_3">
<?php if($row['status_kode'] == '9'){ $fak2 = 'Fakturaet';?>
                <div class="con_3_1" id="asap"><b>Raport afslutte: <?php $dato = $row['dato3']; $dato = date('d-m-Y', strtotime("$dato")); echo ''.$dato.''; ?></b></div>
<?php } else { $fak2 = 'omkostinger (C5)';?>
		<div class="con_3_3"><b>Status kode: <?php echo$row['status_kode']?></b></div>
<?php } ?>
                <div class="con_3_3">Timer brugt: <?php echo $total4 ?></div>
                <div class="con_3_3">omkosting (Lokal) <?php echo $penge ?> DKK</div>
                <div class="con_3_4"><?php echo $fak2; ?>: <?php echo round($fak, 2); ?> DKK</div><br>
			       </div>
<?php } ?>
                               <div class="con_3">
		                    <div class="menu_op"><a href="sql/hent/se_rep.php?id=<?php echo $row['id']?>">Se rapport</a></div>
		                    <div class="menu_op"><a href="index.php?side=stam&id=<?php echo $row['id']?>&p_id=<?php if ($_GET['side'] == 'soeg'){ ?>soeg<?php } else { ?>ret<?php } ?>">Ret Detaljer</a></div>
<?php if($ansmenu == $ansmenu2) { ?>
		                    <div class="menu_op"><a href="#">&#127;</a></div>
<?php } else { ?>		    <div class="menu_op"><a href="<?php echo $_SERVER['REQUEST_URI']; ?>&tag-ansvar=<?php echo $row['id']?>">Tag ansvar</a></div>
<?php } ?>	                    
				    <div class="menu_op"><a href="index.php?side=komponter&id=<?php echo $row['id']?>&p_id=order">Komponentside</a></div>
				    <div class="menu_op" style="border-right:2px solid black;"></div>
		                    <div class="menu_op"><a href="#">&#127;</a></div>
<?php if($ansmenu == $ansmenu2) {
$ind_kode = $row['ind_kode']; 
if($ind_kode == '5' || $flag == 'ROD') { ?>
		                    <div class="menu_op" style="border:0px; width:16.5%;"><a href="index.php?side=afslut&id=<?php echo $row['id']?>">Afslut rapport</a></div><br style="clear:both">
<?php } else { ?>
		                    <div class="menu_op" style="border:0px; width:16.5%;"><a href="index.php?side=stam&id=<?php echo $row['id']?>&p_id=fak1">Færdigør rapport</a></div>
<?php }} else { ?>
		                    <div class="menu_op" style="border:0px; width:16.5%;"><a href="#">&#127;</a></div>
<?php } $asaprod = ''; $old_s = ''; $fak = '';?>
                               </div><br>
			  </div><br>
                          </form>
                </div>
		</p><br>