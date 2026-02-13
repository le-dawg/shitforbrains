<! ø !>
<?php
if(isset($_POST['rettet_bestilt'])) {
       $levendor = $_POST['levendor'];
       if($levendor == 'ANDRE') {
       $levendor = $_POST['andre_lev'];
	}
       $id = $_POST['id'];
       $link = $_POST['link'];
       $service_report = $_POST['service_report'];
       $vare_nr = $_POST['vare_nr'];
       $vare_beskrivelse = $_POST['vare_beskrivelse'];
       $antal = $_POST['antal'];
       $asap = $_POST['asap'];
       $afd = $_POST['afd'];
         $result  = mysqli_query($conn, "SELECT * FROM proorder WHERE id='$id'");
         while($row = mysqli_fetch_assoc($result)) {
	 $id2 = $row['id2'];}
         $result2 = mysqli_query($conn, "SELECT * FROM proservice_kom WHERE id = '$id2'");
         while($row2 = mysqli_fetch_assoc($result2)) { 
         $vare_nr2 = $row2['vare_nr'];
         $service_report2 = $row2['service_report'];
         }
         mysqli_query($conn, "UPDATE proservice_kom SET levendor = '$levendor' , vare_nr = '$vare_nr' , vare_beskrivelse = '$vare_beskrivelse' , antal = '$antal' , service_rapport = '$service_report' WHERE id=$id2"); 
         mysqli_query($conn, "UPDATE proorder SET levendor = '$levendor', service_report = '$service_report', vare_nr = '$vare_nr', vare_beskrivelse = '$vare_beskrivelse', antal = '$antal', asap = '$asap', afd = '$afd', link = '$link' WHERE id='$id'"); 
         $result2 = mysqli_query($conn, "SELECT * FROM proservice_kom WHERE id = $id2");
         while($row2 = mysqli_fetch_assoc($result2)) {
         $vare_nr2 = $row2['vare_nr'];
         $service_report2 = $row2['service_rapport'];
         $id3 = $service_report2;
         $service_report = $levendor;
         $levendor = $_POST['service_report'];
         include("sletuni.php");include("tiluni.php");
         }      
header("Location:index.php?side=order_lister&afd=$_GET[afd]&list=be_li&lev=$levendor");
}
?>