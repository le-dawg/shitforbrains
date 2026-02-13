<?php
   if(isset($_POST['sletvare'])) {
   $id = $_POST['id'];
   $rapport = $_GET['id'];
   

    mysqli_query($conn, "DELETE FROM `prosalg_kom` WHERE id='$id'");

   header("Location:index.php?side=hentrapport&id=$rapport");
   }
?>