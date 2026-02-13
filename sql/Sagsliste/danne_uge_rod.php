<?php            
	          $dato = date('d-m-Y');
$min = date('Y-m-d H:i:s', strtotime($min3. "this monday"));
$min2 = date('W-Y', strtotime($min));
$max = date('Y-m-d H:i:s', strtotime($min3. "this sunday"));
		  $qry = mysqli_query($conn, " SELECT COUNT(id) AS ind00 FROM proservice WHERE dato2 <= '$max' AND dato2 >= '$min' AND ind_kode = '0' AND flag = 'ROD' || dato2 <= '$max' AND dato2 >= '$min' AND ind_kode = '1' AND flag = 'ROD' || dato2 <= '$max' AND dato2 >= '$min' AND ind_kode = '2' AND flag = 'ROD' || dato2 <= '$max' AND dato2 >= '$min' AND ind_kode = '3' AND flag = 'ROD' || dato2 <= '$max' AND dato2 >= '$min' AND ind_kode = '21' AND flag = 'ROD' || dato2 <= '$max' AND dato2 >= '$min' AND ind_kode = '4' AND flag = 'ROD' ");
  		  $row = mysqli_fetch_assoc($qry);
		  $ind00 = $row['ind00'];
		  $qry = mysqli_query($conn, " SELECT COUNT(id) AS ind01 FROM proservice WHERE dato2 <= '$max' AND dato2 >= '$min' AND ind_kode = '8' AND flag = 'ROD' || dato2 <= '$max' AND dato2 >= '$min' AND ind_kode = '9' AND flag = 'ROD' ");
  		  $row = mysqli_fetch_assoc($qry);
		  $ind01 = $row['ind01'];
	 $where = array();
         $result = mysqli_query($conn, "SELECT id FROM promed WHERE afd='LJ' and id!='1' and lukket != 'JA' ORDER BY id DESC");
         while($rowsqllej = mysqli_fetch_assoc($result)) {
	 $ans = $rowsqllej['id'];
         $where[] = ("dato3 <= '$max' AND dato3 >= '$min' AND ans='$ans' AND flag = 'ROD'"); }
         $where = implode(' OR ', $where);
		  $qry = mysqli_query($conn, " SELECT COUNT(id) AS ind04 FROM proservice WHERE $where ");
  		  $row = mysqli_fetch_assoc($qry);
		  $ind04 = $row['ind04'];
	 $where2 = array();
         $result = mysqli_query($conn, "SELECT id FROM promed WHERE afd='VJ' and id!='1' and lukket != 'JA' ORDER BY id DESC");
         while($rowsqllej = mysqli_fetch_assoc($result)) {
	 $ans = $rowsqllej['id'];
         $where2[] = ("dato3 <= '$max' AND dato3 >= '$min' AND ans='$ans'  AND flag != 'ROD'"); }
         $where2 = implode(' OR ', $where2);
		  $qry = mysqli_query($conn, " SELECT COUNT(id) AS ind5 FROM proservice WHERE $where2 ");
  		  $row = mysqli_fetch_assoc($qry);
		  $ind05 = $row['ind5'];
?>


<table height="100%" border="1" width="100%" CELLPADDING="0" CELLSPACING="0">
<tr>
<td width="25%" height="20px"><font size="10px" color="red"><b> Rapport for uge <?php echo ' '.$min2.' '; ?></font></b></td>
<td width="18.75%" height="20px"><font size="10px" color="red"><b> <?php echo ''.$ind00.''; ?></font></b></td>
<td width="18.75%" height="20px"><font size="10px" color="red"><b> <?php echo ''.$ind01.''; ?></font></b></td>
<td width="18.75%" height="20px"><font size="10px" color="red"><b> <?php echo ''.$ind04.''; ?></font></b></td>
<td width="18.75%" height="20px"><font size="10px" color="red"><b> <?php echo ''.$ind05.''; ?></font></b></td>
</tr>
</table>