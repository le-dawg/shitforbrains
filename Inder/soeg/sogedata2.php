<?php

	$query = "SELECT * FROM proservice WHERE " . $where;
         $result = mysqli_query($conn, "$query ORDER BY dato2 DESC LIMIT 200");
         while($row = mysqli_fetch_assoc($result)){


include('sql/soeg/time_fak.php');
include('inder/inder_no.php');


} 
$query = "SELECT * FROM prosalg WHERE id2 = 0 and " . $where;
$result = mysqli_query($conn, "$query ORDER BY dato2 DESC LIMIT 20");
while($row = mysqli_fetch_assoc($result)){ 
	    unset($nummer);
	    unset($nummer2);
	    unset($nummer3);
	    unset($pris);
include('inder/inder_prosalg.php');

 } ?>