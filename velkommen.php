<! ø !>
<div class="top"><b>Velkommen <?php $result  = mysqli_query($conn, "SELECT * FROM promed WHERE id='$_SESSION[uid]'"); while($row = mysqli_fetch_assoc($result)) { echo ''.$row['navn'].'';} ?> til PROteknik</b></div>
<?php 
include('sql/dag/tjek.php');
if(isset($_GET['tag-ansvar'])) {
include('sql/liste_ansvar.php');
 } $_SESSION['p2_id'] = 'velkommen'; ?>
<p>
<?php $test='1'; if($test == '0') { ?>
<div style="width:95%;">
<div style="display: inline-block; border: 2px solid #2C5463; width:30%;">FORSPØGSLER</div>
<div style="display: inline-block; width:4%;"></div>
<div style="display: inline-block; border: 2px solid #2C5463; width:30%;">TILBUD</div>
<div style="display: inline-block; width:4%;"></div>
<div style="display: inline-block; border: 2px solid #2C5463; width:30.7%;">ORDER</div>
</div>

<div style="width:95%; height:500px;">
<div style="display: inline-block; border: 2px solid #2C5463; width:30%; height:100%;">g</div>
<div style="display: inline-block; width:4%;"></div>
<div style="display: inline-block; border: 2px solid #2C5463; width:30%; height:100%;">TILBUD</div>
<div style="display: inline-block; width:4%;"></div>
<div style="display: inline-block; border: 2px solid #2C5463; width:30.7%; height:100%;">ORDER</div>
</div>

<?php } ?>

<?php $result  = mysqli_query($conn, "SELECT * FROM promed WHERE id='$_SESSION[uid]'");
                               while($row = mysqli_fetch_assoc($result)) {
				$last = $row['last_login'];
				$afd = $row['afd'];
				$this_log = date("Y-m-d H:i:s"); } 
	$result = mysqli_query($conn, "SELECT * FROM proservice WHERE dato2 >='$last' AND dato2 <='$this_log' AND ans = '$_SESSION[uid]' AND status_kode !='9' AND ind_kode !='7'");
        $number = mysqli_num_rows($result);
        if($number >= 1) { 
 ?>		<div class="top">Opgaver oprette til dig siden sidst du logget på og til nu</div>

<?PHP 	while($row = mysqli_fetch_assoc($result)) { $old = 'Nej'; include('inder/inder_no.php');
} } if($afd == 'LJ') {

	$result = mysqli_query($conn, "SELECT * FROM proservice WHERE dato2 >='$last' AND dato2 <='$this_log' AND ans = '50'  AND status_kode !='9' AND ind_kode !='7'");
        $number = mysqli_num_rows($result);
        if($number >= 1) {
?>
		
		<div <div class="top">Nye Opgaver på liste 50 siden du sidst logget på og til nu</div>
<?PHP 	while($row = mysqli_fetch_assoc($result)) { $old = 'Nej'; include('inder/inder_no.php');
} } } elseif($afd == 'VJ') { 
	$result = mysqli_query($conn, "SELECT * FROM proservice WHERE dato2 >='$last' AND dato2 <='$this_log' AND ans = '51'  AND status_kode !='9' AND ind_kode !='7'");
        $number = mysqli_num_rows($result);
        if($number >= 1) { ?>		
<br><div <div class="top">Nye Opgaver på liste 51 siden du sidst logget på og til nu</div>
<?PHP while($row = mysqli_fetch_assoc($result)) { $old = 'Nej'; include('inder/inder_no.php'); }}}?>