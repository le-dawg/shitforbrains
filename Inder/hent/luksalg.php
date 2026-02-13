<?php
   if(!empty($_GET['funk'])) {
if($_GET['funk'] == 'luksalg'){
   $rapport = $_GET['id'];
     $test = 0;
   $dato2 = date('Y-m-d H:i:s');
 
	mysqli_query($conn, "UPDATE `prosalg` SET `status_kode`='99',`dato3`='$dato2' WHERE id='$rapport'");
?>
<div class="top">Du har nu lukke rapport: <?php echo ''.$rapport.''; ?></div>
<?php } } ?>