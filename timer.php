<!DOCTYPE html>
<html>
<body>
<! Ø !>
<div class="top">Div time rapport</div>
<?php 
	if(isset($_POST['set_rapp'])){
	$fra = $_POST['fra'];
	$til = $_POST['til'];
} 

?>
<form method="post" action="" onsubmit="return v(this)">
<div id="container2">
		<div class="felt">Fra</div>
		<div class="felt"><input style="height:23px; width:100%;" class="tekst2" type="date" name="fra" value="<?php if(isset($_POST['set_rapp'])){ echo $fra ; } else { echo date('d / m / Y'); }?>"></div>
		<div class="felt">Til</div>
		<div class="felt"><input style="height:23px; width:100%;" class="tekst2" type="date" name="til" value="<?php if(isset($_POST['set_rapp'])){ echo $til ; } else { echo date('d / m / Y'); }?>"></div>
		<div class="felt"><input style="width:100%; height:23px;" type="submit" value="klik for at vælge datoer." name="set_rapp"></div>
		<div class="felt">Vælg datoer og klik vælge datoer og derefter klik print rapport</div>
	</div>
</form>
<p>
<?php if(isset($_POST['set_rapp'])){ ?> 
<?php
$list = array("Navn.Nr.syg.div.fri.afsp.timer.timer50%.timer100%.Ejen bil km");

require_once('config.php');

$min = date('Y-m-d', strtotime($_POST['fra']));
$max = date('Y-m-d', strtotime($_POST['til']));

 $result  = mysqli_query($conn,"SELECT * FROM promed WHERE id != '900' AND id != '833' AND lukket != 'JA' ORDER BY id ASC ");
            while($row = mysqli_fetch_assoc($result)) {
		  $navn = $row['navn'];
		  $ans = $row['id'];
		  $qry = mysqli_query($conn," SELECT SUM(timer) AS sygtimer FROM proservice_rapport WHERE dato2 <= '$max' AND dato2 >= '$min' AND ans = '$ans' AND service_raport = 'SYG' AND timer != '-'");
  		  $row = mysqli_fetch_assoc($qry);
		  $sygtimer = $row['sygtimer'];
	          $sygtimer = str_replace(array("."),array(","),$sygtimer);
		  $qry = mysqli_query($conn," SELECT SUM(timer) AS divtimer FROM proservice_rapport WHERE dato2 <= '$max' AND dato2 >= '$min' AND ans = '$ans' AND service_raport = 'DIV' AND timer != '-' AND service_raport != 'FRI' AND service_raport != 'AFSP'");
  		  $row = mysqli_fetch_assoc($qry);
		  $divtimer = $row['divtimer'];  
	          $divtimer = str_replace(array("."),array(","),$divtimer);
		  $qry = mysqli_query($conn," SELECT SUM(timer) AS timer FROM proservice_rapport WHERE dato2 <= '$max' AND dato2 >= '$min' AND ans = '$ans' AND timer != '-' AND service_raport = 'FRI'");
  		  $row = mysqli_fetch_assoc($qry);
		  $fri = $row['timer'];
	          $fri = str_replace(array("."),array(","),$fri);
		  $qry = mysqli_query($conn," SELECT SUM(timer) AS timer FROM proservice_rapport WHERE dato2 <= '$max' AND dato2 >= '$min' AND ans = '$ans' AND timer != '-' AND service_raport = 'AFSP'");
  		  $row = mysqli_fetch_assoc($qry);
		  $asp = $row['timer'];
	          $asp = str_replace(array("."),array(","),$asp);
		  $qry = mysqli_query($conn," SELECT SUM(timer) AS timer FROM proservice_rapport WHERE dato2 <= '$max' AND dato2 >= '$min' AND ans = '$ans' AND timer != '-' AND service_raport != 'FRI' AND service_raport != 'AFSP'");
  		  $row = mysqli_fetch_assoc($qry);
		  $timer1 = $row['timer'];
	          $timer1 = str_replace(array("."),array(","),$timer1);
		  $qry = mysqli_query($conn," SELECT SUM(timer50) AS timer FROM proservice_rapport WHERE dato2 <= '$max' AND dato2 >= '$min' AND ans = '$ans' AND timer != '-' AND service_raport != 'FRI' AND service_raport != 'AFSP'");
  		  $row = mysqli_fetch_assoc($qry);
		  $timer50 = $row['timer']; 
	          $timer50 = str_replace(array("."),array(","),$timer50);
		  $qry = mysqli_query($conn," SELECT SUM(timer100) AS timer FROM proservice_rapport WHERE dato2 <= '$max' AND dato2 >= '$min' AND ans = '$ans' AND timer != '-' AND service_raport != 'FRI' AND service_raport != 'AFSP'");
  		  $row = mysqli_fetch_assoc($qry);
		  $timer100 = $row['timer'];
	          $timer100 = str_replace(array("."),array(","),$timer100);
		  $qry = mysqli_query($conn," SELECT SUM(km) AS km FROM proservice_rapport WHERE dato2 <= '$max' AND dato2 >= '$min' AND ans = '$ans' AND service_raport != 'FRI' AND service_raport != 'AFSP' AND bil = '093997'");
  		  $row = mysqli_fetch_assoc($qry);
		  $bil = $row['km'];
	          $bil = str_replace(array("."),array(","),$bil);


array_push($list, "$navn.$ans.$sygtimer.$divtimer.$fri.$asp.$timer1.$timer50.$timer100.$bil");
}
$filename = 'E://Regnskab/timestyring/timer.csv';
if(file_exists ($filename)){
echo 'CSV Fil opdateret'; 
} else {echo "<b>Kunne ikke åberne $filename</b>"; }
$file = fopen("$filename","w");

foreach ($list as $line)
  {
  fputcsv($file,explode('.',$line),',');
  }

fclose($file); 

} ?>
</body>
</html> 