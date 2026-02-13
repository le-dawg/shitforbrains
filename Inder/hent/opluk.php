<?php
   if(!empty($_GET['funk'])) {
if($_GET['funk'] == 'genaaben'){
   $rapport = $_GET['id'];
     $test = 0;
   $dato = date('d-m-Y');
   $dato2 = date('Y-m-d', strtotime("$dato"));
   $ans = $_SESSION['uid'];
         mysqli_query($conn,"INSERT INTO `proservice_rapport` (`service_raport`, `dato`, `dato2`, `timer`, `ans`, `beskivsle`, `km`, `bro`) VALUES ('$rapport','$dato','$dato2','-','$ans','".mysql_real_escape_string('Rapport genåbent af '. $ans)."',' ',' ')");
	mysqli_query($conn,"UPDATE `proservice` SET `status_kode`='0',`dato3`='0000-00-00 00:00:00' WHERE id='$rapport'");
?>
<div class="top">Du har nu åbert rapport: <?php echo ''.$row['service_raport'].''; ?></div>
<?php } } ?>