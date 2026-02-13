<! ø !>
<?php
if(isset($_POST['send'])) {
     $errormsg = "";
     $dato = $_POST['dato']; 
     $levendor = $_POST['service_report'];
     $service_report = $_POST['levendor']; 
     $andre_lev = $_POST['andre_lev'];
     $vare_nummer = $_POST['vare_nummer']; 
     $modtaget = $_POST['modtaget']; 
     $bestilt = $_POST['bestilt']; 
     $vare_beskrivelse = $_POST['vare_beskrivelse']; 
     $antal_max = $_POST['max_antal'];
     $intal = $_POST['intal'];
     $kapacitet = $_POST['kapacitet'];
     $spaending = $_POST['spaending'];
     $diameter = $_POST['diameter'];
     $hojde = $_POST['hojde'];


	$where = array();
	if ( !empty ( $vare_nr) ) $where[] = "`vare_nr`='" . $vare_nr . "'";
	if ( !empty ( $levendor) ) $where[] = "`service_report`LIKE'%" . $levendor . "%'";
        if ( $service_report != 'NULL' ) {
	if ( $service_report == 'ANDRE' ) { $where[] = "`levendor`LIKE'%" . $andre_lev . "%'"; } else {
	if ( !empty ( $service_report) ) $where[] = "`levendor`='" . $service_report . "'"; } }
	if ( !empty ( $bestilt ) ) $where[] = "`bestilt_dato`='" . $bestilt . "'";
	if ( !empty ( $modtaget) ) $where[] = "`modtaget_dato`='" . $modtaget . "'";
	if ( !empty ( $vare_beskrivelse) ) $where[] = "`vare_beskrivelse` LIKE '%" . $vare_beskrivelse . "%'";
	if ( !empty ( $vare_nummer) ) $where[] = "`vare_nr` LIKE '%" . $vare_nummer . "%'";
	if ( !empty ( $dato) ) $where[] = "`dato`='" . $dato . "'";
	if ( !empty ( $intal) ) $where[] = "`intal`='" . $intal . "'";
	if ( !empty ( $kapacitet) ) $where[] = "`kapacitet`='" . $kapacitet . "'";
	if ( !empty ( $spaending) ) $where[] = "`volt`='" . $spaending . "'";
	if ( !empty ( $diameter) ) $where[] = "`diameter`='" . $diameter . "'";
	if ( !empty ( $hojde) ) $where[] = "`hojde`='" . $hojde . "'";
	$where = implode(' AND ', $where);
	$query = "SELECT * FROM proorder WHERE " . $where;
	$query2 = "SELECT * FROM proorder_vejle WHERE " . $where;
         $result = mysqli_query($conn, "$query ORDER BY id DESC LIMIT $antal_max");
         $result2 = mysqli_query($conn, "$query2 ORDER BY id DESC LIMIT $antal_max");
         while($row = mysqli_fetch_assoc($result)) {
	 $flag = $row['flag'];
?>
<div id="container2" style="border-top:2px black solid;">
	<div class="felt25<?php echo $asap2 ?>" >Ordre nr.: <?php echo $row['id']; ?></div>
	<div class="felt25<?php echo $asap2 ?>" >Dato: <?php echo $row['dato']; ?></div>
	<div class="felt25<?php echo $asap2 ?>" >service_report.: <?php echo $row['service_report']; ?></div>
	<div class="felt25<?php echo $asap2 ?>" >Bestilt af: <?php echo $row['intal']; ?></div>
</div>
<div id="container2">
	<div class="felt25<?php echo $asap2 ?>">Vare nr.: <?php echo $row['vare_nr']; ?></div>
	<div class="felt50<?php echo $asap2 ?>">vare beskrivelse: <?php echo $row['vare_beskrivelse']; if($flag == 'LYT' || $flag == 'CCFL'){ echo $row['flag'];  } ?></div>
	<div class="felt25<?php echo $asap2 ?>">Antal: <?php echo $row['antal']; ?></div>
</div>
<div id="container2">
	<div class="felt25<?php echo $asap2 ?>">Leverandør: <?php echo $row['levendor']; ?></div>
	<div class="felt25<?php echo $asap2 ?>">Bestilt Dato.: <?php echo $row['bestilt_dato']; ?></div>
	<div class="felt25<?php echo $asap2 ?>">Bestilt af: <?php echo $row['bestilt_int']; ?></div>
	<div class="felt25<?php echo $asap2 ?>"></div>
</div>
<?php if($flag == 'LYT' OR $flag == 'CCFL'){ ?>
<div id="container2">
	<div class="felt25<?php echo $asap2 ?>">kapacitet: <?php echo $row['kapacitet']; ?></div>
	<div class="felt25<?php echo $asap2 ?>">Spænding.: <?php echo $row['volt']; ?></div>
	<div class="felt25<?php echo $asap2 ?>">Diameter: <?php echo $row['diameter']; ?></div>
	<div class="felt25<?php echo $asap2 ?>">Højde <?php echo $row['hojde']; ?></div>
</div>
<?php } ?>
<div id="container2">
	<div class="felt100b"></div>
</div>
<br>
<?php
} 
}
?>