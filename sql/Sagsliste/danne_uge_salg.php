<?php

		  $qry = mysqli_query($conn," SELECT COUNT(id) AS ind0 FROM prosalg WHERE dato2 <= '$maxdag' AND dato2 >= '$mindag' AND status_kode = '9' AND c5_firma_navn_id != '775194'AND firma_navn != 'PRO-CONSULT A/S'");
  		  $row = mysqli_fetch_assoc($qry);
		  $ind0 = $row['ind0'];
		  $qry = mysqli_query($conn," SELECT COUNT(id) AS ind1 FROM prosalg WHERE dato3 <= '$maxdag' AND dato3 >= '$mindag' AND status_kode = '99' AND c5_firma_navn_id != '775194'AND firma_navn != 'PRO-CONSULT A/S'");
  		  $row = mysqli_fetch_assoc($qry);
		  $ind1 = $row['ind1'];
		  $qry = mysqli_query($conn," SELECT COUNT(id) AS ind4 FROM prosalg WHERE datotilbud <= '$maxdag' AND datotilbud >= '$mindag'");
  		  $row = mysqli_fetch_assoc($qry);
		  $ind4 = $row['ind4'];
                  $result = mysqli_query($conn,"SELECT id FROM prosalg WHERE dato2 <= '$maxdag' AND dato2 >= '$mindag' AND status_kode = '9' AND c5_firma_navn_id != '775194'AND firma_navn != 'PRO-CONSULT A/S'");
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

?>


<table height="100%" border="1" width="100%" CELLPADDING="0" CELLSPACING="0">
<tr>
<td width="12%" height="20px"><font size="10px" color="blue"><b> <?php echo ' '.$mindag2.' '; ?></font></b></td>
<td width="12%" height="20px"><font size="10px" color="blue"><b> <?php echo ''.$ind4.''; ?></font></b></td>
<td width="13%" height="20px"><font size="10px" color="blue"><b> <?php echo ''.$ind0.''; ?></font></b></td>
<td width="13%" height="20px"><font size="10px" color="blue"><b> <?php echo ''.$ind1.''; ?></font></b></td>
<td width="20%" height="20px"><font size="10px" color="blue"><b> <?php echo ''.number_format($ind2, 2).' DKK'; ?></font></b></td>
<td width="20%" height="20px"><font size="10px" color="blue"><b> <?php echo ''.number_format($ind61, 2).' DKK'; ?></font></b></td>
<td width="10%" height="20px"><font size="10px" color="blue"><b> <?php echo ''.number_format($ind3, 2).' %'; ?></font></b></td>
</tr>
</table>
<?php

		  $qry = mysqli_query($conn," SELECT COUNT(id) AS ind0 FROM prosalg WHERE dato2 <= '$max' AND dato2 >= '$min' AND status_kode = '9' AND c5_firma_navn_id != '775194'AND firma_navn != 'PRO-CONSULT A/S'");
  		  $row = mysqli_fetch_assoc($qry);
		  $ind0 = $row['ind0'];
		  $qry = mysqli_query($conn," SELECT COUNT(id) AS ind1 FROM prosalg WHERE dato3 <= '$max' AND dato3 >= '$min' AND status_kode = '99' AND c5_firma_navn_id != '775194'AND firma_navn != 'PRO-CONSULT A/S'");
  		  $row = mysqli_fetch_assoc($qry);
		  $ind1 = $row['ind1'];
		  $qry = mysqli_query($conn," SELECT COUNT(id) AS ind4 FROM prosalg WHERE datotilbud <= '$max' AND datotilbud >= '$min'");
  		  $row = mysqli_fetch_assoc($qry);
		  $ind4 = $row['ind4'];
                  $result = mysqli_query($conn,"SELECT id FROM prosalg WHERE dato2 <= '$max' AND dato2 >= '$min' AND status_kode = '9' AND c5_firma_navn_id != '775194'AND firma_navn != 'PRO-CONSULT A/S'");
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

?>


<table height="100%" border="1" width="100%" CELLPADDING="0" CELLSPACING="0">
<tr>
<td width="12%" height="20px"><font size="10px" color="red"><b> <?php echo ' '.$min2.' '; ?></font></b></td>
<td width="12%" height="20px"><font size="10px" color="red"><b> <?php echo ''.$ind4.''; ?></font></b></td>
<td width="13%" height="20px"><font size="10px" color="red"><b> <?php echo ''.$ind0.''; ?></font></b></td>
<td width="13%" height="20px"><font size="10px" color="red"><b> <?php echo ''.$ind1.''; ?></font></b></td>
<td width="20%" height="20px"><font size="10px" color="red"><b> <?php echo ''.number_format($ind2, 2).' DKK'; ?></font></b></td>
<td width="20%" height="20px"><font size="10px" color="red"><b> <?php echo ''.number_format($ind61, 2).' DKK'; ?></font></b></td>
<td width="10%" height="20px"><font size="10px" color="red"><b> <?php echo ''.number_format($ind3, 2).' %'; ?></font></b></td>
</tr>
</table>
