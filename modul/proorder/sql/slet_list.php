<! ø !>
<?php
if(!empty($_GET['funk'])) {
if($_GET['funk'] == 'slet'){
       $id = $_GET['id'];
         $result  = mysqli_query($conn, "SELECT * FROM proorder WHERE id='$id'");
         while($row = mysqli_fetch_assoc($result)) {
	 $id2 = $row['id2']; }   
         $result  = mysqli_query($conn, "SELECT * FROM proservice_kom WHERE id='$id2'");
         while($row = mysqli_fetch_assoc($result)) {
	 $id3 = $row['service_rapport']; 
	 include("sletuni.php");}   

         mysqli_query($conn, "DELETE FROM `proorder` WHERE id='$id'");
         mysqli_query($conn, "DELETE FROM `proservice_kom` WHERE id='$id2'");


header("Location:index.php?side=order_lister&afd=$_GET[afd]&list=$_GET[list]&lev=$_GET[lev]");
} }
?>