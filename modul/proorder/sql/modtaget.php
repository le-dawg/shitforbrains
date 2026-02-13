<! ø !>
<?php
if(!empty($_GET['funk'])) {
if($_GET['funk'] = 'mo'){
       $id = $_GET['id'];
       $modtaget_dato = date('d-m-Y'); 
       $modtaget_int = $_SESSION['uid'];

         mysqli_query($conn, "UPDATE proorder SET modtaget = 'JA', modtaget_dato = '$modtaget_dato', modtaget_int = '$modtaget_int' WHERE id='$id'");
header("Location:index.php?side=order_lister&afd=$_GET[afd]&list=mo_li&lev=$_GET[lev]");
 } }
?>