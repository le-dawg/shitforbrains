<! ø !>
<?php
if(isset($_POST['tildag']) OR isset($_POST['send_seddel'])) {
     $errormsg = "";
     $dato_line = $_POST['dato_line'];
     $dato = $dato_line;
     $dato2 = date('Y-m-d', strtotime("$dato_line"));
     $service_rapport = $_POST['service_rapport'];
     $service_rapport = str_replace(array(" "),array(""),$service_rapport);
     $service_rapport = str_replace(array("."),array(""),$service_rapport);
     $service_rapport = str_replace(array(","),array(""),$service_rapport);
     $service_rapport = strtoupper($service_rapport);
     $ans = $_POST['ans'];
     $beskivsle = htmlspecialchars($_POST['beskivsle'],ENT_COMPAT,true);
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
     if ($_POST['beskivsle']){
         $result = mysqli_query($conn, "SELECT * FROM proservice WHERE id = '$service_rapport'");
         while($row = mysqli_fetch_assoc($result)) {
         $ser_rap_sql = $row['id']; }
         echo $row['id'];
         if(empty($ser_rap_sql) and $service_rapport != 'DIV' AND $service_rapport != 'SYG' AND $service_rapport != 'FRI' AND $service_rapport <= '500000'){
         $snyd = $service_rapport .'..' ;
	?>
		<div class="top">Du har sat en rapport på din dagsseld som ikke er oprettet</div>
	<?php
         $service_rapport = str_replace(array($service_rapport),array($snyd),$service_rapport); }  
         mysqli_query($conn, "INSERT INTO `proservice_rapport` (`service_raport`, `dato`, `dato2`, `timer`, `timer50`, `timer100`, `ans`, `beskivsle`, `bil`, `km` ,`bro` ,`bro2` ) VALUES ('$service_rapport','$dato_line','$dato2','$timer','$timer50','$timer100','$ans','$beskivsle','$bil','$km','$status','$bro')");
         $result = mysqli_query($conn, "SELECT * FROM proservice WHERE id = '$service_rapport'");
         while($row = mysqli_fetch_assoc($result)) {
     $status_sql = $row['status_kode'];
	$dato_fl = $row['dato_fl'];
        $dato_fl2 = date('y-m-d 15:30:00', strtotime($dato));
     $ans_sql = $row['ans'];
     if ($ans_sql != $_SESSION['uid']){ 
     if ($ans_sql != $ans AND $ans_sql == 50 || $ans_sql != $ans AND $ans_sql == 51) {
         mysqli_query($conn, "UPDATE `proservice` SET `ans`='$ans' WHERE id='$service_rapport'"); 
         mysqli_query($conn, "INSERT INTO `proservice_rapport` (`service_raport`, `timer`, `dato`, `dato2`,  `beskivsle`, `ans`) VALUES ('$service_rapport','-','$dato_line','$dato2','$ans Har taget ansvare for opgaven fra $ans_sql','$ans')");
 } }
     if ($status_sql != '9') {
     if ($dato_fl == '0000-00-00 00:00:00'){ 
	 mysqli_query($conn, "UPDATE `proservice` SET `dato_fl`= '$dato_fl2'  WHERE id='$service_rapport'");  

} } } $result = mysqli_query($conn, "SELECT * FROM proservice_rapport WHERE service_raport = '$service_rapport' ORDER BY id DESC LIMIT 1 ");
         while($row = mysqli_fetch_assoc($result)) { $serviceid = $row['id']; }

if($service_rapport != 'DIV' AND $service_rapport != 'SYG' AND $service_rapport != 'FRI' AND $service_rapport <= '500000'){
include('tiluni.php');
 }
?>

<!------/time line 1 ---------------!>
<!------ time line 2 ---------------!>

<?php   }
     if ($_POST['service_rapport2']){
     $service_rapport = $_POST['service_rapport2'];
     $service_rapport = str_replace(array(" "),array(""),$service_rapport);
     $service_rapport = str_replace(array("."),array(""),$service_rapport);
     $service_rapport = str_replace(array(","),array(""),$service_rapport);
     $service_rapport = strtoupper($service_rapport);
     $ans = $_POST['ans2'];
     $beskivsle = htmlspecialchars($_POST['beskivsle2'],ENT_COMPAT,true);
     $bil = $_POST['bil2'];
     $km = $_POST['km2'];
     $timer = $_POST['timer2'];
     $timer = str_replace(array(","),array("."),$timer);
     $timer50 = $_POST['o_t_502'];
     $timer50 = str_replace(array(","),array("."),$timer50);
     $timer100 = $_POST['o_t_1002'];
     $timer100 = str_replace(array(","),array("."),$timer100);
     $bro = $_POST['bro2'];   
         $result = mysqli_query($conn, "SELECT * FROM proservice WHERE id = '$service_rapport'");
         while($row = mysqli_fetch_assoc($result)) {
         $ser_rap_sql = $row['id']; }
         echo $row['id'];
         if(empty($ser_rap_sql) and $service_rapport != 'DIV' AND $service_rapport != 'SYG' AND $service_rapport != 'FRI' AND $service_rapport <= '500000'){
         $snyd = $service_rapport .'..' ;
	?>
		<div class="top">Du har sat en rapport på din dagsseld som ikke er oprettet</div>
	<?php
         $service_rapport = str_replace(array($service_rapport),array($snyd),$service_rapport); }  
         mysqli_query($conn, "INSERT INTO `proservice_rapport` (`service_raport`, `dato`, `dato2`, `timer`, `timer50`, `timer100`, `ans`, `beskivsle`, `bil`, `km` ,`bro` ,`bro2` ) VALUES ('$service_rapport','$dato_line','$dato2','$timer','$timer50','$timer100','$ans','$beskivsle','$bil','$km','$status','$bro')");
         $result = mysqli_query($conn, "SELECT * FROM proservice WHERE id = '$service_rapport'");
         while($row = mysqli_fetch_assoc($result)) {
     $status_sql = $row['status_kode'];
	$dato_fl = $row['dato_fl'];
        $dato_fl2 = date('y-m-d 15:30:00', strtotime($dato));
     if ($service_rapport != 'V') {
     $ans_sql = $row['ans'];
     if ($ans_sql != $_SESSION['uid']){ 
     if ($ans_sql != $ans AND $ans_sql == 50 || $ans_sql != $ans AND $ans_sql == 51) {
         mysqli_query($conn, "UPDATE `proservice` SET `ans`='$ans' WHERE id='$service_rapport'"); 
         mysqli_query($conn, "INSERT INTO `proservice_rapport` (`service_raport`, `timer`, `dato`, `dato2`,  `beskivsle`, `ans`) VALUES ('$service_rapport','-','$dato_line','$dato2','$ans Har taget ansvare for opgaven fra $ans_sql','$ans')");
} } }
     if ($status_sql != '9') {
     if ($dato_fl == '0000-00-00 00:00:00'){ 
	 mysqli_query($conn, "UPDATE `proservice` SET `dato_fl`= '$dato_fl2'  WHERE id='$service_rapport'");  

} } } $result = mysqli_query($conn, "SELECT * FROM proservice_rapport WHERE service_raport = '$service_rapport' ORDER BY id DESC LIMIT 1 ");
         while($row = mysqli_fetch_assoc($result)) { $serviceid = $row['id']; }

if($service_rapport != 'DIV' AND $service_rapport != 'SYG' AND $service_rapport != 'FRI' AND $service_rapport <= '500000'){
include('tiluni.php');
 }

?>

<!------/time line 2 ---------------!>
<!------ time line 3 ---------------!>

<?php }
     if ($_POST['service_rapport3']){
     $service_rapport = $_POST['service_rapport3'];
     $service_rapport = str_replace(array(" "),array(""),$service_rapport);
     $service_rapport = str_replace(array("."),array(""),$service_rapport);
     $service_rapport = str_replace(array(","),array(""),$service_rapport);
     $service_rapport = strtoupper($service_rapport);
     $ans = $_POST['ans3'];
     $beskivsle = htmlspecialchars($_POST['beskivsle3'],ENT_COMPAT,true);
     $bil = $_POST['bil3'];
     $km = $_POST['km3'];
     $timer = $_POST['timer3'];
     $timer = str_replace(array(","),array("."),$timer);
     $timer50 = $_POST['o_t_503'];
     $timer50 = str_replace(array(","),array("."),$timer50);
     $timer100 = $_POST['o_t_1003'];
     $timer100 = str_replace(array(","),array("."),$timer100);
     $bro = $_POST['bro3']; 
         $result = mysqli_query($conn, "SELECT * FROM proservice WHERE id = '$service_rapport'");
         while($row = mysqli_fetch_assoc($result)) {
         $ser_rap_sql = $row['id']; }
         echo $row['id'];
         if(empty($ser_rap_sql) and $service_rapport != 'DIV' AND $service_rapport != 'SYG' AND $service_rapport != 'FRI' AND $service_rapport <= '500000'){
         $snyd = $service_rapport .'..' ;
	?>
		<div class="top">Du har sat en rapport på din dagsseld som ikke er oprettet</div>
	<?php
         $service_rapport = str_replace(array($service_rapport),array($snyd),$service_rapport); }  
         mysqli_query($conn, "INSERT INTO `proservice_rapport` (`service_raport`, `dato`, `dato2`, `timer`, `timer50`, `timer100`, `ans`, `beskivsle`, `bil`, `km` ,`bro` ,`bro2` ) VALUES ('$service_rapport','$dato_line','$dato2','$timer','$timer50','$timer100','$ans','$beskivsle','$bil','$km','$status','$bro')");
         $result = mysqli_query($conn, "SELECT * FROM proservice WHERE id = '$service_rapport'");
         while($row = mysqli_fetch_assoc($result)) {
     $status_sql = $row['status_kode'];
	$dato_fl = $row['dato_fl'];
        $dato_fl2 = date('y-m-d 15:30:00', strtotime($dato));
     if ($service_rapport != 'V') {
     $ans_sql = $row['ans'];
     if ($ans_sql != $_SESSION['uid']){ 
     if ($ans_sql != $ans AND $ans_sql == 50 || $ans_sql != $ans AND $ans_sql == 51) {
         mysqli_query($conn, "UPDATE `proservice` SET `ans`='$ans' WHERE id='$service_rapport'"); 
         mysqli_query($conn, "INSERT INTO `proservice_rapport` (`service_raport`, `timer`, `dato`, `dato2`,  `beskivsle`, `ans`) VALUES ('$service_rapport','-','$dato_line','$dato2','$ans Har taget ansvare for opgaven fra $ans_sql','$ans')");
} } }
     if ($status_sql != '9') {
     if ($dato_fl == '0000-00-00 00:00:00'){ 
	 mysqli_query($conn, "UPDATE `proservice` SET `dato_fl`= '$dato_fl2'  WHERE id='$service_rapport'");  

} } } $result = mysqli_query($conn, "SELECT * FROM proservice_rapport WHERE service_raport = '$service_rapport' ORDER BY id DESC LIMIT 1 ");
         while($row = mysqli_fetch_assoc($result)) { $serviceid = $row['id']; }

if($service_rapport != 'DIV' AND $service_rapport != 'SYG' AND $service_rapport != 'FRI' AND $service_rapport <= '500000'){
include('tiluni.php');
 }
 ?>

<!------/time line 3 ---------------!>
<!------ time line 4 ---------------!>

<?php }
     if ($_POST['service_rapport4']){
     $service_rapport = $_POST['service_rapport4'];
     $service_rapport = str_replace(array(" "),array(""),$service_rapport);
     $service_rapport = str_replace(array("."),array(""),$service_rapport);
     $service_rapport = str_replace(array(","),array(""),$service_rapport);
     $service_rapport = strtoupper($service_rapport);
     $ans = $_POST['ans4'];
     $beskivsle = htmlspecialchars($_POST['beskivsle4'],ENT_COMPAT,true);
     $bil = $_POST['bil4'];
     $km = $_POST['km4'];
     $timer = $_POST['timer4'];
     $timer = str_replace(array(","),array("."),$timer);
     $timer50 = $_POST['o_t_504'];
     $timer50 = str_replace(array(","),array("."),$timer50);
     $timer100 = $_POST['o_t_1004'];
     $timer100 = str_replace(array(","),array("."),$timer100);
     $bro = $_POST['bro4']; 
         $result = mysqli_query($conn, "SELECT * FROM proservice WHERE id = '$service_rapport'");
         while($row = mysqli_fetch_assoc($result)) {
         $ser_rap_sql = $row['id']; }
         echo $row['id'];
         if(empty($ser_rap_sql) and $service_rapport != 'DIV' AND $service_rapport != 'SYG' AND $service_rapport != 'FRI' AND $service_rapport <= '500000'){
         $snyd = $service_rapport .'..' ;
        ?>
		<div class="top">Du har sat en rapport på din dagsseld som ikke er oprettet</div>
	<?php
         $service_rapport = str_replace(array($service_rapport),array($snyd),$service_rapport); }  
         mysqli_query($conn, "INSERT INTO `proservice_rapport` (`service_raport`, `dato`, `dato2`, `timer`, `timer50`, `timer100`, `ans`, `beskivsle`, `bil`, `km` ,`bro` ,`bro2` ) VALUES ('$service_rapport','$dato_line','$dato2','$timer','$timer50','$timer100','$ans','$beskivsle','$bil','$km','$status','$bro')");
         $result = mysqli_query($conn, "SELECT * FROM proservice WHERE id = '$service_rapport'");
         while($row = mysqli_fetch_assoc($result)) {
     $status_sql = $row['status_kode'];
	$dato_fl = $row['dato_fl'];
        $dato_fl2 = date('y-m-d 15:30:00', strtotime($dato));
     if ($service_rapport != 'V') {
     $ans_sql = $row['ans'];
     if ($ans_sql != $_SESSION['uid']){ 
     if ($ans_sql != $ans AND $ans_sql == 50 || $ans_sql != $ans AND $ans_sql == 51) {
         mysqli_query($conn, "UPDATE `proservice` SET `ans`='$ans' WHERE id='$service_rapport'"); 
         mysqli_query($conn, "INSERT INTO `proservice_rapport` (`service_raport`, `timer`, `dato`, `dato2`,  `beskivsle`, `ans`) VALUES ('$service_rapport','-','$dato_line','$dato2','$ans Har taget ansvare for opgaven fra $ans_sql','$ans')");
} } }
     if ($status_sql != '9') {
     if ($dato_fl == '0000-00-00 00:00:00'){ 
	 mysqli_query($conn, "UPDATE `proservice` SET `dato_fl`= '$dato_fl2'  WHERE id='$service_rapport'");  

} } } $result = mysqli_query($conn, "SELECT * FROM proservice_rapport WHERE service_raport = '$service_rapport' ORDER BY id DESC LIMIT 1 ");
         while($row = mysqli_fetch_assoc($result)) { $serviceid = $row['id']; }

if($service_rapport != 'DIV' AND $service_rapport != 'SYG' AND $service_rapport != 'FRI' AND $service_rapport <= '500000'){
include('tiluni.php');
 }

?>

<!------/time line 4 ---------------!>
<!------ time line 5 ---------------!>

<?php }
     if ($_POST['service_rapport5']){
     $service_rapport = $_POST['service_rapport5'];
     $service_rapport = str_replace(array(" "),array(""),$service_rapport);
     $service_rapport = str_replace(array("."),array(""),$service_rapport);
     $service_rapport = str_replace(array(","),array(""),$service_rapport);
     $service_rapport = strtoupper($service_rapport);
     $ans = $_POST['ans5'];
     $beskivsle = htmlspecialchars($_POST['beskivsle5'],ENT_COMPAT,true);
     $bil = $_POST['bil5'];
     $km = $_POST['km5'];
     $timer = $_POST['timer5'];
     $timer = str_replace(array(","),array("."),$timer);
     $timer50 = $_POST['o_t_505'];
     $timer50 = str_replace(array(","),array("."),$timer50);
     $timer100 = $_POST['o_t_1005'];
     $timer100 = str_replace(array(","),array("."),$timer100);
     $bro = $_POST['bro5'];  
         $result = mysqli_query($conn, "SELECT * FROM proservice WHERE id = '$service_rapport'");
         while($row = mysqli_fetch_assoc($result)) {
         $ser_rap_sql = $row['id']; }
         echo $row['id'];
         if(empty($ser_rap_sql) and $service_rapport != 'DIV' AND $service_rapport != 'SYG' AND $service_rapport != 'FRI' AND $service_rapport <= '500000'){
         $snyd = $service_rapport .'..' ;
	?>
		<div class="top">Du har sat en rapport på din dagsseld som ikke er oprettet</div>
	<?php
         $service_rapport = str_replace(array($service_rapport),array($snyd),$service_rapport); }  
         mysqli_query($conn, "INSERT INTO `proservice_rapport` (`service_raport`, `dato`, `dato2`, `timer`, `timer50`, `timer100`, `ans`, `beskivsle`, `bil`, `km` ,`bro` ,`bro2` ) VALUES ('$service_rapport','$dato_line','$dato2','$timer','$timer50','$timer100','$ans','$beskivsle','$bil','$km','$status','$bro')");
         $result = mysqli_query($conn, "SELECT * FROM proservice WHERE id = '$service_rapport'");
         while($row = mysqli_fetch_assoc($result)) {
     $status_sql = $row['status_kode'];
	$dato_fl = $row['dato_fl'];
        $dato_fl2 = date('y-m-d 15:30:00', strtotime($dato));
     if ($service_rapport != 'V') {
     $ans_sql = $row['ans'];
     if ($ans_sql != $_SESSION['uid']){ 
     if ($ans_sql != $ans AND $ans_sql == 50 || $ans_sql != $ans AND $ans_sql == 51) {
         mysqli_query($conn, "UPDATE `proservice` SET `ans`='$ans' WHERE id='$service_rapport'"); 
         mysqli_query($conn, "INSERT INTO `proservice_rapport` (`service_raport`, `timer`, `dato`, `dato2`,  `beskivsle`, `ans`) VALUES ('$service_rapport','-','$dato_line','$dato2','$ans Har taget ansvare for opgaven fra $ans_sql','$ans')");
} } }
     if ($status_sql != '9') {
     if ($dato_fl == '0000-00-00 00:00:00'){ 
	 mysqli_query($conn, "UPDATE `proservice` SET `dato_fl`= '$dato_fl2'  WHERE id='$service_rapport'");  

} } } $result = mysqli_query($conn, "SELECT * FROM proservice_rapport WHERE service_raport = '$service_rapport' ORDER BY id DESC LIMIT 1 ");
         while($row = mysqli_fetch_assoc($result)) { $serviceid = $row['id']; }

if($service_rapport != 'DIV' AND $service_rapport != 'SYG' AND $service_rapport != 'FRI' AND $service_rapport <= '500000'){
include('tiluni.php');
 }
 ?>

<!------/time line 5 ---------------!>

<?php } } ?>