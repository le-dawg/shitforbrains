<?php  
           $date = date('Y-m-d');
			$ru0 = date('Y-m-d 23:59:59', strtotime($date));
			$ru1 = date('Y-m-d H:i:s', strtotime($date. "-7day"));
			$ru2 = date('Y-m-d H:i:s', strtotime($date. "-28day"));
			$ru3 = date('Y-m-d H:i:s', strtotime($date. "-175day"));
			$ru4 = date('Y-m-d H:i:s', strtotime($date. "-357day"));
			$ru5 = date('Y-m-d H:i:s', strtotime($date. "-714day"));

		  $qry = mysqli_query($conn," SELECT COUNT(id) AS rus0 FROM proservice WHERE dato2 <= '$ru0' AND dato2 >= '$ru1' AND status_kode !='9' AND ind_kode !='6' AND ans != '1' ");
  		  $row = mysqli_fetch_assoc($qry);
		  $rus0 = $row['rus0'];

		  $qry = mysqli_query($conn," SELECT COUNT(id) AS rus1 FROM proservice WHERE dato2 <= '$ru1' AND dato2 >= '$ru2' AND status_kode !='9' AND ind_kode !='6' AND ans != '1' ");
  		  $row = mysqli_fetch_assoc($qry);
		  $rus1 = $row['rus1'];

		  $qry = mysqli_query($conn," SELECT COUNT(id) AS rus2 FROM proservice WHERE dato2 <= '$ru2' AND dato2 >= '$ru3' AND status_kode !='9' AND ind_kode !='6' AND ans != '1' ");
  		  $row = mysqli_fetch_assoc($qry);
		  $rus2 = $row['rus2'];

		  $qry = mysqli_query($conn," SELECT COUNT(id) AS rus3 FROM proservice WHERE dato2 <= '$ru3' AND dato2 >= '$ru4' AND status_kode !='9' AND ind_kode !='6' AND ans != '1' ");
  		  $row = mysqli_fetch_assoc($qry);
		  $rus3 = $row['rus3'];


		  $qry = mysqli_query($conn," SELECT COUNT(id) AS rus4 FROM proservice WHERE dato2 <= '$ru4' AND dato2 >= '$ru5' AND status_kode !='9' AND ind_kode !='6' AND ans != '1' ");
  		  $row = mysqli_fetch_assoc($qry);
		  $rus4 = $row['rus4'];


		  $qry = mysqli_query($conn," SELECT COUNT(id) AS rus5 FROM proservice WHERE dato2 <= '$ru5' AND status_kode !='9' AND ind_kode !='6' AND ans != '1' ");
  		  $row = mysqli_fetch_assoc($qry);
		  $rus5 = $row['rus5'];

?>
<table height="100%" border="1" width="100%" CELLPADDING="0" CELLSPACING="0">
<tr>
<td width="16.6%" height="20px" bgcolor="#eeeeee"><font size="10px"><b> <?php echo ''.$rus0.''; ?></font></b></td>
<td width="16.6%" height="20px" bgcolor="#eeeeee"><font size="10px"><b> <?php echo ''.$rus1.''; ?></font></b></td>
<td width="16.6%" height="20px" bgcolor="#eeeeee"><font size="10px"><b> <?php echo ''.$rus2.''; ?></font></b></td>
<td width="16.6%" height="20px" bgcolor="#eeeeee"><font size="10px"><b> <?php echo ''.$rus3.''; ?></font></b></td>
<td width="16.6%" height="20px" bgcolor="#eeeeee"><font size="10px"><b> <?php echo ''.$rus4.''; ?></font></b></td>
<td width="17%" height="20px" bgcolor="#eeeeee"><font size="10px"><b> <?php echo ''.$rus5.''; ?></font></b></td>
</tr>
</table>