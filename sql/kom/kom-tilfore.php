<! ø !>
<?php
if(isset($_POST['tilfore_kom']) || isset($_POST['send_rapp'])) {
     $errormsg = "";
     $id = $_POST['id'];
     $dato = $_POST['dato'];
     $ans = $_POST['intal'];
     if ($_POST['vare_beskrivelse']){
     $levendor = $_POST['levendor'];
     if ($levendor == ''){
     $levendor = 'LAGER';
     }
     if($_SESSION['afdeling'] == LJ){
     $lagersted = Viby;
     }
     if($_SESSION['afdeling'] == VJ){
     $lagersted = Vejle;
     }
     $vare_nr = htmlspecialchars($_POST['vare_nr'],ENT_COMPAT,true);
     $vare_beskrivelse = htmlspecialchars($_POST['vare_beskrivelse'],ENT_COMPAT,true);
     $antal = $_POST['antal'];
     $type = $_POST['type'];
     $type = strtoupper($type);
         mysqli_query($conn,"INSERT INTO `proservice_kom` (`service_rapport`, `dato`, `levendor`, `vare_nr`, `vare_beskrivelse`, `intal`, `antal`, `type`) VALUES ('$id','$dato','$levendor','$vare_nr','".htmlspecialchars($vare_beskrivelse, ENT_QUOTES)."','$ans','$antal','$type')");
	 $result = mysqli_query($conn, "SELECT * FROM proservice_kom WHERE service_rapport = '$id' ORDER BY id DESC LIMIT 1 ");
         while($row = mysqli_fetch_assoc($result)) { $serviceid = $row['id']; }
     include('tiluni.php');
     }

 ?>
<div class="top">Komponent(er) tilføjet</div>
<?php } ?>