<! ø !>
<div id="container">
	<div class="top">Timer på din seddel for <?php echo ''.$day.''; ?> den <?php echo ''.$dato.''; ?><?php if($person != $_SESSION['uid']) { ?> For medarbj. nr. <?php echo $person; } ?></div>
<div id="container2">
		<div class="felt5">Rap.</div>
		<div class="felt45">Kunde / beskrivelse</div>
		<div class="felt5">Timer</div>
		<div class="felt5">50%</div>
		<div class="felt5">100%</div>
		<div class="felt5"">Bil</div>
		<div class="felt5">Km</div>
		<div class="felt5">Bro</div>
		<div class="felt20">Knapper</div>
</div>
<?php          
            $result  = mysqli_query($conn, "SELECT * FROM proservice_rapport WHERE ans = '$person' AND dato = '$dato' AND timer != '-' ORDER BY id ASC ");
            while($row = mysqli_fetch_assoc($result)) {
	    $timer = $row['timer'];
            $service_raport = $row['service_raport'];
	    if (is_numeric($service_raport)) {
            if ($service_raport >= '500000' ){
            $result2 = mysqli_query($conn, "SELECT * FROM prosalg WHERE id = '$service_raport'");
            } else {
            $result2 = mysqli_query($conn, "SELECT * FROM proservice WHERE id = '$service_raport'");
            }
            while($row2 = mysqli_fetch_assoc($result2)) {
	    $timer = $row['timer'];
            $timer = str_replace(array("."),array(","),$timer);
	    $bro = $row['bro'];
            $result3 = mysqli_query($conn, "SELECT * FROM proservice WHERE id = '$service_raport'");
            while($row3 = mysqli_fetch_assoc($result3)) {
	    if (empty($bro)){
	    $status = $row3['status_kode']; } else { $status = $row['bro']; } }
?>
<form method="post" action="" onsubmit="return v(this)"><input type="hidden" name="dato" value="<?php echo ''.$dato.'' ?>">
<input class="tekst2" type="hidden" type="text" name="line_id" value="<?php echo ''.$row['id'].''; ?>"><input type="hidden" name="line_ans" value="<?php echo ''.$row['ans'].''; ?>">
<div id="container2">
		<div class="felt5"><input class="tekst2" type="text" name="line_service" value="<?php echo ''.$row['service_raport'].''; ?>"></div>
		<div class="felt45"><input class="tekst2" type="text" name="line_firma" value="<?php echo ''.$row2['firma_navn'].''; ?>"></div>
		<div class="felt5"><input class="tekst2" type="text" name="line_timer" value="<?php echo ''.$timer.''; ?>"></div>
		<div class="felt5"><input class="tekst2" type="text" name="line_o_timer_50" value="<?php echo ''.$row['timer50'].''; ?>"></div>
		<div class="felt5"><input class="tekst2" type="text" name="line_o_timer_100" value="<?php echo ''.$row['timer100'].''; ?>"></div>
		<div class="felt5"><input class="tekst2" type="text" name="line_bil" value="<?php if($row['bil'] == '093997'){$bilvis = 'EJEN';} elseif ($row['bil'] == 'KORSEL'){$bilvis = 'FIRMA';}
else{$bilvis = $row['bil'];} echo ''.$bilvis.''; ?>"></div>
		<div class="felt5"><input class="tekst2" type="text" name="line_km" value="<?php echo $row['km']; ?>"></div>
		<div class="felt5"><input class="tekst2" type="text" name="line_bro2" value="<?php echo $row['bro2']; ?>"></div>
		<div class="felt10"><input class="in" type="submit" value="Ret Line" name="Ret_line_dag"></div>
		<div class="felt10" id="sidst"><input class="in" type="submit" value="Slet line" name="slet_line_dagseddel"></div>
	</div></form>
<?php } } else { ?>

<form method="post" action="" onsubmit="return v(this)"><input type="hidden" name="dato" value="<?php echo ''.$dato.'' ?>">
<input type="hidden" type="text" name="line_id" value="<?php echo ''.$row['id'].''; ?>"><input type="hidden" name="line_ans" value="<?php echo ''.$row['ans'].''; ?>">
<div id="container2">
		<div class="felt5"><input style="min-height:21px; height:100%; width:100%;" class="tekst2" type="text" name="line_service" value="<?php echo ''.$row['service_raport'].''; ?>"></div>
		<div class="felt45"><input style="min-height:21px; height:100%; width:100%;" class="tekst2" type="text" name="line_beskivsle" value="<?php echo ''.$row['beskivsle'].''; ?>"></div>
		<div class="felt5"><input style="min-height:21px; height:100%; width:100%;" class="tekst2" type="text" name="line_timer" value="<?php echo ''.$timer.''; ?>"></div>
		<div class="felt5"><input style="min-height:21px; height:100%; width:100%;" class="tekst2" type="text" name="line_o_timer_50" value="<?php echo ''.$row['timer50'].''; ?>"></div>
		<div class="felt5"><input style="min-height:21px; height:100%; width:100%;" class="tekst2" type="text" name="line_o_timer_100" value="<?php echo ''.$row['timer100'].''; ?>"></div>
		<div class="felt5"><input style="min-height:21px; height:100%; width:100%;" class="tekst2" type="text" name="line_bil" value="<?php if($row['bil'] == '093997'){$bilvis = 'Ejen';} elseif ($row['bil'] == 'KORSEL'){$bilvis = 'FIRMA';}
else {$bilvis = $row['bil'];} echo ''.$bilvis.''; ?>"></div>
		<div class="felt5"><input style="min-height:21px; height:100%; width:100%;" class="tekst2" type="text" name="line_km" value="<?php echo $row['km']; ?>"></div>
		<div class="felt5"><input style="min-height:21px; height:100%; width:100%;" class="tekst2" type="text" name="line_bro2" value="<?php echo $row['bro2']; ?>"></div>
		<div class="felt10"><input class="in" type="submit" value="Ret Line" name="Ret_line_dag"></div>
		<div class="felt10" id="sidst"><input class="in" type="submit" value="Slet line" name="slet_line_dagseddel"></div>
	</div></form>
<?php } } ?>

<div id="container2"">
		<div class="felt100">Antal timer på din dagseddel: <b><?php $qry = mysqli_query($conn, " SELECT SUM(timer) AS total FROM proservice_rapport WHERE ans = '$person' AND dato = '$dato' AND timer != '-'");
			$qry2 = mysqli_query($conn, " SELECT SUM(timer50) AS total FROM proservice_rapport WHERE ans = '$person' AND dato = '$dato' AND timer != '-'");
			$qry3 = mysqli_query($conn, " SELECT SUM(timer100) AS total FROM proservice_rapport WHERE ans = '$person' AND dato = '$dato' AND timer != '-'");
  		  $row = mysqli_fetch_assoc($qry);
  		  $row2 = mysqli_fetch_assoc($qry2);
  		  $row3 = mysqli_fetch_assoc($qry3);
		  $total = $row['total'];
		  $total2 = $row2['total'];
		  $total3 = $row3['total'];
		  $total = $total + $total2 + $total3 ;
		  $total = str_replace(array("."),array(","),$total);
  		  echo $total; ?></b>
                </div>
	</div>
</div>
<p>
<?php 
     if(isset($_POST['Ret_line_dag'])){
     $id = $_POST['line_id'];
     $result  = mysqli_query($conn, "SELECT * FROM proservice_rapport WHERE id = $id ");
     while($row = mysqli_fetch_assoc($result)) {
     $service_rapport = $row['service_raport'];
     $ans = $_POST['line_ans'];
     $beskivsle = $row['beskivsle']; 
     $km = $_POST['line_km'];
     $timer = $_POST['line_timer'];
     $bro = $_POST['line_bro'];
     $bro2 = $_POST['line_bro2'];
      
 ?>
<div id="container">
	<div class="top">Ret line</div>
<div id="container2">
		<div class="felt10">Rap.</div>
		<div class="felt60">Beskrivsle / firmanavn</div>
		<div class="felt5">Timer</div>
		<div class="felt5">50%</div>
		<div class="felt5">100%</div>
		<div class="felt5">Bil.</div>
		<div class="felt5">Km</div>
		<div class="felt5">Bro</div>


	</div>
        <form method="post" action="" onsubmit="return v(this)"><input type="hidden" name="dato" value="<?php echo ''.$dato.'' ?>"><input type="hidden" name="id" value="<?php echo ''.$id.'' ?>">
	<input type="hidden" name="servicerapportrep" value="<?php echo $service_rapport ?>">
	<div id="container2">
		<div class="felt10"><input style="min-height:21px; height:100%; width:100%;" class="tekst" type="text" name="service_rapport" value="<?php echo ''.$service_rapport.''; ?>"></div>
		<div class="felt60"><input style="min-height:21px; height:100%; width:100%;" class="tekst" type="text" name="beskivsle" value="<?php echo ''.$beskivsle.''; ?>"></div>
		<div class="felt5"><input style="min-height:21px; height:100%; width:100%;" class="tekst" type="text" name="timer" value="<?php echo ''.$timer.''; ?>"></div>
		<div class="felt5"><input style="min-height:21px; height:100%; width:100%;" class="tekst" type="text" name="o_t_50" value="<?php echo ''.$row['timer50'].''; ?>"></div>
		<div class="felt5"><input style="min-height:21px; height:100%; width:100%;" class="tekst" type="text" name="o_t_100" value="<?php echo ''.$row['timer100'].''; ?>"></div>
		<div class="felt5"><select style="min-height:21px; height:100%; width:100%;" class="tekst" name="bil" class="in" id="hvid"><option value="<?php echo ''.$row['bil'].''; ?>"><?php echo ''.$row['bil'].''; ?></option><?php include('sql/fak2/biler.php'); ?></div>
		<div class="felt5"><input style="min-height:21px; height:100%; width:100%;" class="tekst" type="text" name="km" value="<?php echo $km; ?>"></div>
		<div class="felt5"><input style="min-height:21px; height:100%; width:100%;" class="tekst" type="text" name="bro" value="<?php echo $bro2; ?>"></div>
	</div>
        <div id="container2">
		<div class="felt100"><input class="in" type="submit" value="Godkendt rettesle af line" name="godkend_ret_dagseddel"></div>
	</div>
</div></form>
<?php } } ?>