<?php
                  $qry = mysqli_query($conn, " SELECT COUNT(id) AS ind0 FROM proservice WHERE dato2 <= '$max' AND dato2 >= '$min' AND ind_kode = '0' AND flag != 'ROD' || dato2 <= '$max' AND dato2 >= '$min' AND ind_kode = '1' AND flag != 'ROD' || dato2 <= '$max' AND dato2 >= '$min' AND ind_kode = '2' AND flag != 'ROD' || dato2 <= '$max' AND dato2 >= '$min' AND ind_kode = '3' AND flag != 'ROD' || dato2 <= '$max' AND dato2 >= '$min' AND ind_kode = '4' AND flag != 'ROD' || dato2 <= '$max' AND dato2 >= '$min' AND ind_kode = '21' AND flag != 'ROD' ");
  		  $row = mysqli_fetch_assoc($qry);
		  $ind0 = $row['ind0'];
		  $qry = mysqli_query($conn, " SELECT COUNT(id) AS ind1 FROM proservice WHERE dato2 <= '$max' AND dato2 >= '$min' AND ind_kode = '7' AND flag != 'ROD' || dato2 <= '$max' AND dato2 >= '$min' AND ind_kode = '8' AND flag != 'ROD' || dato2 <= '$max' AND dato2 >= '$min' AND ind_kode = '9' AND flag != 'ROD' ");
  		  $row = mysqli_fetch_assoc($qry);
		  $ind1 = $row['ind1'];
		  $qry = mysqli_query($conn, " SELECT COUNT(id) AS ind2 FROM proservice WHERE dato2 <= '$max' AND dato2 >= '$min' AND ind_kode = '10'");
  		  $row = mysqli_fetch_assoc($qry);
		  $ind2 = $row['ind2'];
		  $qry = mysqli_query($conn, " SELECT COUNT(id) AS ind62 FROM proservice WHERE dato2 <= '$max' AND dato2 >= '$min' AND ind_kode = '62'");
  		  $row = mysqli_fetch_assoc($qry);
		  $ind62 = $row['ind62'];
		  $qry = mysqli_query($conn, " SELECT COUNT(id) AS ind3 FROM proservice WHERE dato2 <= '$max' AND dato2 >= '$min' AND ind_kode = '5'");
  		  $row = mysqli_fetch_assoc($qry);
		  $ind3 = $row['ind3'];
	 $where = array();
         $result = mysqli_query($conn, "SELECT id FROM promed WHERE afd='LJ' and id!='1' ORDER BY id DESC");
         while($rowsqllej = mysqli_fetch_assoc($result)) {
	 $ans = $rowsqllej['id'];
         $where[] = ("dato3 <= '$max' AND dato3 >= '$min' AND ans='$ans' AND ind_kode != '5' AND ind_kode != '6' AND flag != 'ROD'"); }
 //      $result = mysqli_query($conn, "SELECT * FROM promed WHERE afd='LJ' and id!='1' ORDER BY id DESC");
         $where = implode(' OR ', $where);
		  $qry = mysqli_query($conn, " SELECT COUNT(id) AS ind4 FROM proservice WHERE $where ");
  		  $row = mysqli_fetch_assoc($qry);
		  $ind4 = $row['ind4'];
	 $where2 = array();
         $result = mysqli_query($conn, "SELECT id FROM promed WHERE afd='VJ' and id!='1' ORDER BY id DESC");
         while($rowsqllej = mysqli_fetch_assoc($result)) {
	 $ans = $rowsqllej['id'];
         $where2[] = ("dato3 <= '$max' AND dato3 >= '$min' AND ans='$ans' AND ind_kode != '5' AND ind_kode != '6' AND flag != 'ROD'"); }
//       $result = mysqli_query($conn, "SELECT * FROM promed WHERE afd='VJ' and id!='1' ORDER BY id DESC");
         $where2 = implode(' OR ', $where2);
		  $qry = mysqli_query($conn, " SELECT COUNT(id) AS ind5 FROM proservice WHERE $where2 ");
  		  $row = mysqli_fetch_assoc($qry);
		  $ind5 = $row['ind5'];
		  $qry = mysqli_query($conn, " SELECT COUNT(id) AS ind6 FROM proservice WHERE dato2 <= '$max' AND dato2 >= '$min' AND ind_kode = '6'");
  		  $row = mysqli_fetch_assoc($qry);
		  $ind6 = $row['ind6'];
		  $qry = mysqli_query($conn, " SELECT COUNT(id) AS ind61 FROM proservice WHERE dato2 <= '$max' AND dato2 >= '$min' AND ind_kode = '61'");
  		  $row = mysqli_fetch_assoc($qry);
		  $ind61 = $row['ind61'];
?>


<table height="100%" border="1" width="100%" CELLPADDING="0" CELLSPACING="0">
<tr>
<td width="10%" height="20px"><font size="10px" color="red"><b> <?php echo ' '.$min2.' '; ?></font></b></td>
<td width="10%" height="20px"><font size="10px" color="red"><b> <?php echo ''.$ind0.''; ?></font></b></td>
<td width="10%" height="20px"><font size="10px" color="red"><b> <?php echo ''.$ind1.''; ?></font></b></td>
<td width="10%" height="20px"><font size="10px" color="red"><b> <?php echo ''.$ind6.''; ?></font></b></td>
<td width="10%" height="20px"><font size="10px" color="red"><b> <?php echo ''.$ind61.''; ?></font></b></td>
<td width="10%" height="20px"><font size="10px" color="red"><b> <?php echo ''.$ind2.''; ?></font></b></td>
<td width="10%" height="20px"><font size="10px" color="red"><b> <?php echo ''.$ind62.''; ?></font></b></td>
<td width="10%" height="20px"><font size="10px" color="red"><b> <?php echo ''.$ind3.''; ?></font></b></td>
<td width="10%" height="20px"><font size="10px" color="red"><b> <?php echo ''.$ind4.''; ?></font></b></td>
<td width="10%" height="20px"><font size="10px" color="red"><b> <?php echo ''.$ind5.''; ?></font></b></td>
</tr>
</table>
