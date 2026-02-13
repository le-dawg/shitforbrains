<?php if(isset($_POST['slet_kom'])) {
     $errormsg = "";
     $servicerap = $_GET['id'];
     $id = $_POST['id'];
                  mysqli_query($conn,"DELETE FROM `proservice_kom` WHERE id='$id'");
     include('sletuni.php');
?>
<div class="top">Kompont er nu slettet</div>
<?php } ?>