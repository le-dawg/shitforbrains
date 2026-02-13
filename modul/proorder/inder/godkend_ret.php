<?php
if(isset($_POST['ret_godkend'])) {
     $id = $_POST['id'];
     $id2 = $_POST['id2'];
         $result = mysqli_query($conn, "SELECT * FROM proorder WHERE id = $id ");
         while($row = mysqli_fetch_assoc($result)) {
         $result2 = mysqli_query($conn, "SELECT * FROM proservice_kom WHERE id = '$id2'");
         while($row2 = mysqli_fetch_assoc($result2)) {
?>
<form method="post" action="" onsubmit="return v(this)">
<input name="id2" type="hidden" value="<?php echo ' '.$row2['id'].' '?>">
<?php } ?>
<input name="id" type="hidden" value="<?php echo ' '.$row['id'].' '?>">
<?php 
$side = $_GET['under'];
if ($side == 'LYT'){
include('godkend_felt_lyt.php');
} elseif ($side == 'CCFL'){
include('godkend_felt_ccfl.php');
} else {
include('godkend_felt.php'); 
} ?>
</form>
<?php } } ?> 