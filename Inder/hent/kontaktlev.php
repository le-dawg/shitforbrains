<?php
   if(!empty($_GET['funk'])) {
if($_GET['funk'] == 'kontaklev'){
   $rapport = $_GET['id'];
     $test = 0;
   $dato2 = date('Y-m-d H:i:s');
 
	mysql_query("UPDATE `prosalg` SET `flag_kode`='1' WHERE id='$rapport'");
?>
<div class="top">Du har nu opdateret rapport: <?php echo ''.$rapport.''; ?></div>
<?php } } ?>