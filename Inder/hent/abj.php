<?php 
           $dato2 = date('Y-m-d', strtotime("$dato2. -7day"));
		$result  = mysqli_query($conn, "SELECT * FROM proservice_rapport WHERE service_raport='$rapport' AND dato2 >= '$dato2' ORDER BY id LIMIT 1");
            while($row = mysqli_fetch_assoc($result)) {
            $nummer1 = $row['id'];
            $ans = $row['ans'];

		$result  = mysqli_query($conn, "SELECT * FROM promed WHERE id='$ans'");
            while($row2 = mysqli_fetch_assoc($result)) {
            $navn = $row2['navn'];
            }
?>
<! ------------------------------------------------------------------------- line 1 ------------------------------------------------------------------------------------------------- !>
	<div id="container2" style="background-color:#fff; border:2px solid black; border-bottom:0px; min-height:40px; height:100%;">
               <?php echo ''.$row['beskivsle'].''; ?>
               </div>
<! ------------------------------------------------------------------------- line 2 ------------------------------------------------------------------------------------------------- !>
		<div id="container2" style="background-color:#fff; border:2px solid black; min-height:22px; height:100%;"> 
               <div class="felt101" style="border-left:0px; border-right:2px solid black; border-bottom:0px; border-top:0px; min-height:18px; width:15%;" >Dato: <?php echo ''.$row['dato'].''; ?></div>
               <div class="felt101" style="border-left:0px; border-right:2px solid black; border-bottom:0px; border-top:0px; min-height:18px; width:35%;" >Af: <?php echo $navn; ?></div>
               <div class="felt101" style="border-left:0px; border-right:2px solid black; border-bottom:0px; border-top:0px; min-height:18px; width:25%;" >Tid brugt: <?php $timer1 = $row['timer']; if($timer1 >= 0){$timer1 = $timer1; }else{$timer1 = 0;} $timer2 = $row['timer50']; if($timer2 >= 0){$timer2 = $timer2; }else{$timer2 = 0;} $timer3 = $row['timer100']; if($timer3 >= 0){$timer3 = $timer3;}else{$timer3 = 0;} print_r($timer = $timer1 + $timer2 + $timer3); ?> time(r)</div>
               <div class="felt101" style="border-left:0px; border-right:0px; border-bottom:0px; border-top:0px; min-height:18px; width:25%;" >Km: <?php echo ''.$row['km'].''; ?></div>
               </div><br style="clear:both">


<?php       $result  = mysqli_query($conn, "SELECT * FROM proservice_rapport WHERE service_raport='$rapport' AND dato2 >= '$dato2' and id!='$nummer1'");
            while($row = mysqli_fetch_assoc($result)) {
            $ans = $row['ans'];

		$result2  = mysqli_query($conn, "SELECT * FROM promed WHERE id='$ans'");
            while($row2 = mysqli_fetch_assoc($result2)) {
            $navn = $row2['navn'];
            }

?>
<! ------------------------------------------------------------------------- line 1 ------------------------------------------------------------------------------------------------- !>
		<div id="container2" style="background-color:#fff; border:2px solid black; border-bottom:0px; min-height:40px; height:100%;">
               <?php echo ''.$row['beskivsle'].''; ?>
               </div>
<! ------------------------------------------------------------------------- line 2 ------------------------------------------------------------------------------------------------- !>
		<div id="container2" style="background-color:#fff; border:2px solid black; min-height:22px; height:100%;"> 
               <div class="felt101" style="border-left:0px; border-right:2px solid black; border-bottom:0px; border-top:0px; min-height:18px; width:15%;" >Dato: <?php echo ''.$row['dato'].''; ?></div>
               <div class="felt101" style="border-left:0px; border-right:2px solid black; border-bottom:0px; border-top:0px; min-height:18px; width:35%;" >Af: <?php echo $navn; ?></div>
               <div class="felt101" style="border-left:0px; border-right:2px solid black; border-bottom:0px; border-top:0px; min-height:18px; width:25%;" >Tid brugt: <?php $timer1 = $row['timer']; if($timer1 >= 0){$timer1 = $timer1; }else{$timer1 = 0;} $timer2 = $row['timer50']; if($timer2 >= 0){$timer2 = $timer2; }else{$timer2 = 0;} $timer3 = $row['timer100']; if($timer3 >= 0){$timer3 = $timer3;}else{$timer3 = 0;} print_r($timer = $timer1 + $timer2 + $timer3); ?> time(r)</div>
               <div class="felt101" style="border-left:0px; border-right:0px; border-bottom:0px; border-top:0px; min-height:18px; width:25%;" >Bil: <?php echo ''.$row['bil'].''; ?> Km: <?php echo ''.$row['km'].''; ?></div>

               </div><br style="clear:both">
<?php 
}
}

?>
<?php      if($_GET['side'] != 'fak2'){
           $dato2 = date('Y-m-d', strtotime("$dato2. -7day"));
		$result  = mysqli_query($conn, "SELECT * FROM proservice_rapport WHERE service_raport='$rapport2' AND dato2 >= '$dato2' ORDER BY id LIMIT 1");
            while($row = mysqli_fetch_assoc($result)) {
            $nummer1 = $row['id'];
            $ans = $row['ans'];

		$result  = mysqli_query($conn, "SELECT * FROM promed WHERE id='$ans'");
            while($row2 = mysqli_fetch_assoc($result)) {
            $navn = $row2['navn'];
            }
?>
<! ------------------------------------------------------------------------- line 1 ------------------------------------------------------------------------------------------------- !>
		<div id="container2" style="background-color:#fff; border:2px solid black; border-bottom:0px; min-height:40px; height:100%;">
               <?php echo ''.$row['beskivsle'].''; ?>
               </div>
<! ------------------------------------------------------------------------- line 2 ------------------------------------------------------------------------------------------------- !>
		<div id="container2" style="background-color:#fff; border:2px solid black; min-height:22px; height:100%;"> 
               <div class="felt101" style="border-left:0px; border-right:2px solid black; border-bottom:0px; border-top:0px; min-height:18px; width:15%;" >Dato: <?php echo ''.$row['dato'].''; ?></div>
               <div class="felt101" style="border-left:0px; border-right:2px solid black; border-bottom:0px; border-top:0px; min-height:18px; width:35%;" >Af: <?php echo $navn; ?></div>
               <div class="felt101" style="border-left:0px; border-right:2px solid black; border-bottom:0px; border-top:0px; min-height:18px; width:25%;" >Tid brugt: <?php $timer1 = $row['timer']; if($timer1 >= 0){$timer1 = $timer1; }else{$timer1 = 0;} $timer2 = $row['timer50']; if($timer2 >= 0){$timer2 = $timer2; }else{$timer2 = 0;} $timer3 = $row['timer100']; if($timer3 >= 0){$timer3 = $timer3;}else{$timer3 = 0;} print_r($timer = $timer1 + $timer2 + $timer3); ?> time(r)</div>
               <div class="felt101" style="border-left:0px; border-right:0px; border-bottom:0px; border-top:0px; min-height:18px; width:25%;" >Km: <?php echo ''.$row['km'].''; ?></div>

               </div><br style="clear:both">


<?php       $result  = mysqli_query($conn, "SELECT * FROM proservice_rapport WHERE service_raport='$rapport2' AND dato2 >= '$dato2' and id!='$nummer1'");
            while($row = mysqli_fetch_assoc($result)) {
            $ans = $row['ans'];

		$result2  = mysqli_query($conn, "SELECT * FROM promed WHERE id='$ans'");
            while($row2 = mysqli_fetch_assoc($result2)) {
            $navn = $row2['navn'];
            }

?>
<! ------------------------------------------------------------------------- line 1 ------------------------------------------------------------------------------------------------- !>
		<div id="container2" style="background-color:#fff; border:2px solid black; border-bottom:0px; min-height:40px; height:100%;">
               <?php echo ''.$row['beskivsle'].''; ?>
               </div>
<! ------------------------------------------------------------------------- line 2 ------------------------------------------------------------------------------------------------- !>
		<div id="container2" style="background-color:#fff; border:2px solid black; min-height:22px; height:100%;"> 
               <div class="felt101" style="border-left:0px; border-right:2px solid black; border-bottom:0px; border-top:0px; min-height:18px; width:15%;" >Dato: <?php echo ''.$row['dato'].''; ?></div>
               <div class="felt101" style="border-left:0px; border-right:2px solid black; border-bottom:0px; border-top:0px; min-height:18px; width:35%;" >Af: <?php echo $navn; ?></div>
               <div class="felt101" style="border-left:0px; border-right:2px solid black; border-bottom:0px; border-top:0px; min-height:18px; width:25%;" >Tid brugt: <?php $timer1 = $row['timer']; if($timer1 >= 0){$timer1 = $timer1; }else{$timer1 = 0;} $timer2 = $row['timer50']; if($timer2 >= 0){$timer2 = $timer2; }else{$timer2 = 0;} $timer3 = $row['timer100']; if($timer3 >= 0){$timer3 = $timer3;}else{$timer3 = 0;} print_r($timer = $timer1 + $timer2 + $timer3); ?> time(r)</div>
               <div class="felt101" style="border-left:0px; border-right:0px; border-bottom:0px; border-top:0px; min-height:18px; width:25%;" >Bil: <?php echo ''.$row['bil'].''; ?> Km: <?php echo ''.$row['km'].''; ?></div>

               </div><br style="clear:both">
<?php 
}
}
}
?>