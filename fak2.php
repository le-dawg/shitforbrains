<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<! Ø !>
<div class="top">Send Service Rapport til fakt. side 2/3</div>
<?php error_reporting(E_ALL);
 ini_set('display_errors', 1); ?>
<p>
<div class="top">Beskrivelse af udført arbejde <?php echo $_GET['id'] ?></div>
<?php 
               $rapport = $_GET['id'];
	$result  = mysqli_query($conn, "SELECT * FROM proservice WHERE id='$rapport'");
        while($row = mysqli_fetch_assoc($result)) {
	       $dato2 = $row['dato2'];
	       $tt = $row['tekstt'];
	       $tk = $row['tekstk'];
	       $baof = $row['baof'];

}
include('inder/hent/abj.php');
include('inder/fak2/indsaet.php');
include('inder/fak2/test-tekst.php');
include('inder/fak2/kunde-tekst.php');
include('inder/fak2/menu.php');
?>

