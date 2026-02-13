<! � !>
<?php
$ny_dato = $_POST['ny_dato'] ;
$ny_dato = date('d-m-Y', strtotime("$ny_dato")); 
if (empty($_SESSION['datodag'])){
$_SESSION['datodag'] = date('d-m-Y'); }
   if(isset($_POST['set_dato'])) {
   $_SESSION['datodag'] = $ny_dato;
   $_SESSION['datodagtime'] = date("Y-m-d H:i:s");
   }
if (!empty($_SESSION['datodagtime'])){
$dato2 = strtotime($_SESSION['datodagtime']) + 600; 
$dato3 = strtotime(date ("Y-m-d H:i:s"));
if($dato2 < $dato3){
$_SESSION['datodag'] = date('d-m-Y');
}}
$dato = $_SESSION['datodag'];
?>

<!------ /dato styring ------!>

<!------ Person styring ------------!>

<?php	if(isset($_POST['set_ans'])) {
$person = $_POST['ny_ans'];
	} elseif(!isset($person)) {
$person = $_SESSION['uid'];
} 	
if(isset($_POST['flyt_dag'])) {
$dato_flyt = $ny_dato;
$dato_flyt2 = date('Y-m-d', strtotime("$dato_flyt"));
mysqli_query($conn, "UPDATE `proservice_rapport` SET `dato`='$dato_flyt',`dato2`='$dato_flyt2' WHERE ans='$person' and dato='$dato'");
$_SESSION['datodag'] = $ny_dato; 
$_SESSION['datodagtime'] = date("Y-m-d H:i:s");
$dato = $_SESSION['datodag'];
        $ans = $person;
	$ip = $_SERVER['REMOTE_ADDR'];
	$funk = 'Flyttet Dagseld';
	$note = "Flyttet Dagseld til $dato_flyt";
	include('tillog.php');
}

?>

<!------ dansk ugedag styring ------!>

<?php
$day = date('N', strtotime($dato)) ; 
if($day == 1){
$day = 'Mandag' ; }
if($day == 2){
$day = 'Tirsdag' ; }
if($day == 3){
$day = 'Onsdag' ; }
if($day == 4){
$day = 'Torsdag' ; }
if($day == 5){
$day = 'Fredag' ; }
if($day == 6){
$day = 'Lørdag' ; }
if($day == 7){
$day = 'Søndag' ; } 
?>

<!------/dansk ugedag styring ------!>