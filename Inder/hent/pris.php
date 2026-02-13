<?php
   if(isset($_POST['pris_paa'])){
   $pris_s = $_POST['pris_ret_s'];
   $pris_n = $_POST['pris_ret_n'];
   $pris_b = $_POST['pris_ret_b'];
   $pris_k = $_POST['pris_ret_k'];
   $id = $_POST['id'];
 	mysqli_query($conn, "UPDATE `proservice` SET `pris_s`='$pris_s',`pris_n`='$pris_n',`pris_b`='$pris_b',`pris_k`='$pris_k' WHERE id='$id'");    
   header("Location:index.php?side=hentrapport&id=$id");
   }
?>