<! ø !>
<?php
if(isset($_POST['godkend_ret_dagseddel'])) {
     $errormsg = "";
     $id = $_POST['id'];
     $dato = $_POST['dato'];
     $ans = $_SESSION['uid'];
     $service_rapportrep = $_POST['servicerapportrep'];
     $service_rapport = $_POST['service_rapport'];
     $service_rapport = str_replace(array(" "),array(""),$service_rapport);
     $service_rapport = str_replace(array("."),array(""),$service_rapport);
     $service_rapport = str_replace(array(","),array(""),$service_rapport);
     $service_rapport = strtoupper($service_rapport);
     $bil = $_POST['bil'];
     $km = $_POST['km'];
     $timer = $_POST['timer'];
     $timer = str_replace(array(","),array("."),$timer);
     $timer50 = $_POST['o_t_50'];
     $timer50 = str_replace(array(","),array("."),$timer50);
     $timer100 = $_POST['o_t_100'];
     $timer100 = str_replace(array(","),array("."),$timer100);
     $bro = $_POST['bro'];
     $status = $_POST['status'];
     if(isset($_POST['beskivsle'])) {
         $result = mysqli_query($conn, "SELECT * FROM proservice WHERE id = '$service_rapport'");
         while($row = mysqli_fetch_assoc($result)) {
         $ser_rap_sql = $row['id']; }
         echo $row['id'];
         if(empty($ser_rap_sql) and $service_rapport != 'DIV' AND $service_rapport != 'SYG' AND $service_rapport != 'FRI'){
         $snyd = $service_rapport .'..' ;
	?>
		<div class="top">Du har sat en rapport pÃ¥ din dagsseld som ikke er oprettet</div>
	<?php
 $service_rapport = str_replace(array($service_rapport),array($snyd),$service_rapport); } 
         $beskivsle = htmlspecialchars($_POST['beskivsle'],ENT_COMPAT,true);
         mysqli_query($conn, "UPDATE `proservice_rapport` SET `beskivsle`='$beskivsle',`service_raport`='$service_rapport',`bil`='$bil',`timer`='$timer',`timer50`='$timer50',`timer100`='$timer100',`km`='$km',`bro2`='$bro' WHERE id='$id'");
         $result = mysqli_query($conn, "SELECT * FROM proservice WHERE id = '$service_rapport'");
         while($row = mysqli_fetch_assoc($result)) {
     $status_sql = $row['status_kode']; 
     if ($status_sql != '9') {
     } } }
     if ($service_rapport == 'FRI' || $service_rapport == 'DIV' || $service_rapport == 'SYG'){
         mysqli_query($conn, "UPDATE `proservice_rapport` SET `bro`='$status' WHERE id='$id'");

} Else {

         mysqli_query($conn, "UPDATE `proservice_rapport` SET `service_raport`='$service_rapport',`timer`='$timer',`km`='$km' WHERE id='$id'");
         $result = mysqli_query($conn, "SELECT * FROM proservice WHERE id = '$service_rapport'");
         while($row = mysqli_fetch_assoc($result)) {
     $status_sql = $row['status_kode']; 
     $ans_sql = $row['ans'];
     if ($ans_sql != $ans AND $ans_sql == 50 || $ans_sql != $ans AND $ans_sql == 51) {
         mysqli_query($conn, "UPDATE `proservice` SET `ans`='$ans' WHERE id='$service_rapport'"); 
         mysqli_query($conn, "INSERT INTO `proservice_rapport` (`service_raport`, `timer`, `dato`, `dato2`,  `beskivsle`, `ans`) VALUES ('$service_rapport','-','$dato','$dato2','$ans Har taget ansvare for opgaven fra $ans_sql','$ans')");
} } } 

include('upduni.php');
} ?>
