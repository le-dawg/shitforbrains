<?php
         $id = $row['id'];
if(empty($id)){
$id = $rapport; 
}

$resultfak = mysqli_query($conn, "SELECT * FROM proservice WHERE id='$id'");
while($rowfak = mysqli_fetch_assoc($resultfak)) {
$fak = $rowfak['fakbelob'];
$fak2 = $rowfak['fakbelob'];
}

if (empty($fak)) {
$fak = '0';
} 

$fak = round($fak,2);

if ($fak2 == '-') {
$fak = 'Anulleret';
} 

		  $time = '895';
		  $ans = $row['ans'];
		  $qry = mysqli_query($conn," SELECT SUM(timer) AS total FROM proservice_rapport WHERE service_raport = '$id' AND timer != '-'");
		  $qry2 = mysqli_query($conn," SELECT SUM(timer50) AS total2, SUM(timer100) AS total3 FROM proservice_rapport WHERE service_raport = '$id'");
  		  $row2 = mysqli_fetch_assoc($qry);
  		  $row3 = mysqli_fetch_assoc($qry2);
		  $total = $row2['total'];
		  $total2 = $row3['total2'];
		  $total3 = $row3['total3'];
		  $total4 = $total + $total2 + $total3; 
	   	  $total4 = str_replace(array("."),array(","),$total4);
	                $total1 = str_replace(array(","),array("."),$total1);
                        $total1 = $total * $time ;
			$total2 = str_replace(array(","),array("."),$total2);
                        $total21 = $total2 * $time ;
                        $total21 = $total21 * 1.50 ;
			$total3 = str_replace(array(","),array("."),$total3);
                        $total31 = $total3 * $time ;
                        $total31 = $total31 * 2 ;
                        $penge = $total1 + $total21 + $total31;


?>