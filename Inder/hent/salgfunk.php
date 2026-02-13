<?php
   if(!empty($_GET['funk'])) {
if($_GET['funk'] == 'kontaklev'){
   $rapport = $_GET['id'];
     $test = 0;
   $dato2 = date('Y-m-d H:i:s');
 
	mysqli_query($conn,"UPDATE `prosalg` SET `flag_kode`='1',`flag_dato`='$dato2' WHERE id='$rapport'");
?>
<div class="top">Du har nu opdateret rapport: <?php echo ''.$rapport.''; ?></div>
<?php } } 
   if(!empty($_GET['funk'])) {
if($_GET['funk'] == 'ryklev'){
   $rapport = $_GET['id'];
     $test = 0;
   $dato2 = date('Y-m-d H:i:s');
 
	mysqli_query($conn,"UPDATE `prosalg` SET `flag_kode`='4',`flag_dato`='$dato2' WHERE id='$rapport'");
?>
<div class="top">Du har nu opdateret rapport: <?php echo ''.$rapport.''; ?></div>
<?php } } 
   if(!empty($_GET['funk'])) {
if($_GET['funk'] == 'tilbudtele'){
   $rapport = $_GET['id'];
     $test = 0;
   $dato2 = date('Y-m-d H:i:s');
 
	mysqli_query($conn,"UPDATE `prosalg` SET `flag_kode`='2',`status_kode`='85',`datotilbud`='$dato2',`flag_dato`='$dato2' WHERE id='$rapport'");
?>
<div class="top">Du har nu opdateret rapport: <?php echo ''.$rapport.''; ?></div>
<?php } }
   if(!empty($_GET['funk'])) {
if($_GET['funk'] == 'rykkunde'){
   $rapport = $_GET['id'];
     $test = 0;
   $dato2 = date('Y-m-d H:i:s');
 
	mysqli_query($conn,"UPDATE `prosalg` SET `flag_kode`='3',`flag_dato`='$dato2' WHERE id='$rapport'");
?>
<div class="top">Du har nu opdateret rapport: <?php echo ''.$rapport.''; ?></div>
<?php } } ?>
