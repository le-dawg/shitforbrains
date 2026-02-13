<?php             			$test = date('Y-m-d H:i:s', strtotime($date. "first day of next month"));
			$test = date('Y-m-d H:i:s', strtotime($test. "-1day"));
		  
		  $qry = mysqli_query($conn," SELECT COUNT(id) AS ind0 FROM prosalg WHERE dato2 <= '$test' AND dato2 >= '$test2' AND status_kode = '9' AND c5_firma_navn_id != '775194'AND firma_navn != 'PRO-CONSULT A/S'");
  		  $row = mysqli_fetch_assoc($qry);
		  $ind0 = $row['ind0'];
		  $qry = mysqli_query($conn," SELECT COUNT(id) AS ind1 FROM prosalg WHERE dato3 <= '$test' AND dato3 >= '$test2' AND status_kode = '99' AND c5_firma_navn_id != '775194'AND firma_navn != 'PRO-CONSULT A/S'");
  		  $row = mysqli_fetch_assoc($qry);
		  $ind1 = $row['ind1'];
		  $qry = mysqli_query($conn," SELECT COUNT(id) AS ind4 FROM prosalg WHERE datotilbud <= '$test' AND datotilbud >= '$test2' AND c5_firma_navn_id != '775194'AND firma_navn != 'PRO-CONSULT A/S'");
  		  $row = mysqli_fetch_assoc($qry);
		  $ind4 = $row['ind4'];
                  $result = mysqli_query($conn,"SELECT id FROM prosalg WHERE dato2 <= '$test' AND dato2 >= '$test2' AND status_kode = '9' AND c5_firma_navn_id != '775194'AND firma_navn != 'PRO-CONSULT A/S'");
                  while($rowsql= mysqli_fetch_assoc($result)) {
                  $id = $rowsql['id'];
                  $result3 = mysqli_query($conn,"SELECT * FROM prosalg_kom WHERE id2 = '$id' and producent != 'Zumbach'");
                  while($rowsql3= mysqli_fetch_assoc($result3)) {
                  if ($rowsql3['valuta'] != 'DKK'){
                  $salg = $rowsql3['salg'] * 7.5;
                  $kob = $rowsql3['kob'] * 7.5;
		  $antal = $rowsql3['antal'];
                   } else {$kob = $rowsql3['kob']; $salg = $rowsql3['salg']; $antal = $rowsql3['antal'];} 
                  $salg = $salg * $antal;
                  $pris = $pris + $salg;
                  $kob = $kob * $antal;
                  $pris3 = $pris3 + $kob;
                  $pris2 = $pris - $pris3;
                  $pris4 = $pris2 / $pris;
                  $pris4 = $pris4 * 100;
	           } }
                  if ($ind0 == '0') { $ind2 = '0'; $ind61 = '0'; $ind3 = '0'; } else  {$ind2 = $pris; $ind61 = $pris2; $ind3 = $pris4; $pris='0'; $pris2='0'; $pris3='0'; $pris4='0';}

$mrd = date('M', strtotime($test. "first day of this month"));
?>