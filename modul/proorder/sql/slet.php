<! ø !>
<?php
if(isset($_POST['slet'])) {
       $id = $_POST['id']; 
       $id2 = $_POST['id2'];    
         $result  = mysqli_query($conn, "SELECT * FROM proservice_kom WHERE id='$id2'");
         while($row = mysqli_fetch_assoc($result)) {
	 $id3 = $row['service_rapport']; 
	 include("sletuni.php");}   
         mysqli_query($conn, "DELETE FROM `proorder` WHERE id='$id'");
         mysqli_query($conn, "DELETE FROM `proservice_kom` WHERE id='$id2'");
?>
	<div class="top">Varen er nu slette </div>
<?php } ?>