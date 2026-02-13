<! ø !>
<?php
if(isset($_POST['rettet_bestilt_lyt'])) {
       $id = $_POST['id'];
       $service_report = $_POST['service_report'];
       $levendor = $_POST['levendor'];
       $vare_nr = $_POST['vare_nr'];
       $antal = $_POST['antal'];
       $asap = $_POST['asap'];
       $afd = $_POST['afd'];
       $kap = $_POST['kap'];
       $volt = $_POST['volt'];
       $diameter = $_POST['diamenter'];
       $hoj = $_POST['hoj'];
       $kon = $_POST['kon'];
       $type = 'LYT';
         $result  = mysqli_query($conn, "SELECT * FROM proorder WHERE id='$id'");
         while($row = mysqli_fetch_assoc($result)) {
	 $id2 = $row['id2'];}
         $result2 = mysqli_query($conn, "SELECT * FROM proservice_kom WHERE id = '$id2'");
         while($row2 = mysqli_fetch_assoc($result2)) { 
         $vare_nr2 = $row2['vare_nr'];
         $service_report2 = $row2['service_report'];
         }
                 mysqli_query($conn, "UPDATE `proorder` SET levendor = '$levendor',  vare_nr = '$vare_nr', `afd`='$afd',`service_report`='$service_report',`asap`='$asap',`antal`='$antal',`kapacitet`='$kap',`volt`='$volt',`diameter`='$diameter',`hojde`='$hoj',`konstruction`='$kon'WHERE id='$id'");
        mysqli_query($conn, "UPDATE proservice_kom SET levendor = '$levendor' , vare_nr = '$vare_nr' , vare_beskrivelse = '$kap $volt' , antal = '$antal' , service_rapport = '$service_report' WHERE id=$id2"); 
         echo $id2;
         $result2 = mysqli_query($conn, "SELECT * FROM proservice_kom WHERE id = $id2");
         while($row2 = mysqli_fetch_assoc($result2)) {
         $vare_nr2 = $row2['vare_nr'];
         $service_report2 = $row2['service_rapport'];
         $id3 = $service_report2;
         $service_report = $levendor;
         $levendor = $_POST['service_report'];
         include("sletuni.php");
	 $kap2 = preg_replace("/[^0-9]/", '', $kap);
	 $volt2 = preg_replace("/[^0-9]/", '', $volt);
         $vare_beskrivelse = 'EL-LYT '.$kap2.'uF '.$volt2.'V ';
         include("tiluni.php");
         }     

header("Location:index.php?side=order_lister&afd=$_GET[afd]&list=be_li");
}
?>