<?php
if(isset($_POST['ret_kom'])) {
     $errormsg = "";
     $servicerap = $_GET['id'];
     $id = $_POST['id'];
     $dato = $_POST['dato'];
     $intal = $_POST['intal'];
     $levendor = $_POST['levendor'];
     $vare_nr = $_POST['vare_nr'];
     $vare_beskrivelse = $_POST['vare_beskrivelse'];
     $antal = $_POST['antal'];
     $type = $_POST['type'];
     $type = strtoupper($type);

     addslashes($vare_beskrivelse);
         mysqli_query($conn,"UPDATE `proservice_kom` SET `levendor`='$levendor',`vare_nr`='$vare_nr',`vare_beskrivelse`='".htmlspecialchars($vare_beskrivelse, ENT_QUOTES)."',`intal`='$intal',`antal`='$antal',`type`='$type' WHERE id='$id'"); 
         $result = mysqli_query($conn,"SELECT * FROM proservice_kom ORDER BY id DESC LIMIT 1");
         while($row = mysqli_fetch_assoc($result)) {
     include('upduni.php');
?>
<div class="top">Komponent rettet</div>
<?php } } ?>