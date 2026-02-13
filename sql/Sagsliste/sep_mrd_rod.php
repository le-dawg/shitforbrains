<?php             $date = "$year-09-11 00:00:00";
		  $test2 = date('Y-m-d H:i:s', strtotime($date. "first day of this month"));
		  $date = "$year-09-11 23:59:59";
			$test = date('Y-m-d H:i:s', strtotime($date. "first day of next month"));
			$test = date('Y-m-d H:i:s', strtotime($test. "-1day"));
		  $qry = mysqli_query($conn," SELECT COUNT(id) AS ind0 FROM proservice WHERE dato2 <= '$test' AND dato2 >= '$test2' AND ind_kode = '0' AND flag = 'ROD' || dato2 <= '$test' AND dato2 >= '$test2' AND ind_kode = '1' AND flag = 'ROD' || dato2 <= '$test' AND dato2 >= '$test2' AND ind_kode = '2' AND flag = 'ROD' || dato2 <= '$test' AND dato2 >= '$test2' AND ind_kode = '3'AND flag = 'ROD' || dato2 <= '$test' AND dato2 >= '$test2' AND ind_kode = '21' AND flag = 'ROD' || dato2 <= '$test' AND dato2 >= '$test2' AND ind_kode = '4' AND flag = 'ROD'");
  		  $row = mysqli_fetch_assoc($qry);
		  $ind0 = $row['ind0'];
		  $qry = mysqli_query($conn," SELECT COUNT(id) AS ind1 FROM proservice WHERE dato2 <= '$test' AND dato2 >= '$test2' AND ind_kode = '8' AND flag = 'ROD' || dato2 <= '$test' AND dato2 >= '$test2' AND ind_kode = '9' AND flag = 'ROD' ");
  		  $row = mysqli_fetch_assoc($qry);
		  $ind1 = $row['ind1'];
	 $where = array();
         $result = mysqli_query($conn,"SELECT * FROM promed WHERE afd='LJ' and id!='1' and lukket != 'JA' ORDER BY id DESC");
         while($rowsqllej = mysqli_fetch_assoc($result)) {
	 $ans = $rowsqllej['id'];
         $where[] = ("dato3 <= '$test' AND dato3 >= '$test2' AND ans='$ans' AND flag = 'ROD'"); }
         $where = implode(' OR ', $where);
		  $qry = mysqli_query($conn," SELECT COUNT(id) AS ind4 FROM proservice WHERE $where ");
  		  $row = mysqli_fetch_assoc($qry);
		  $ind4 = $row['ind4'];
	 $where2 = array();
         $result = mysqli_query($conn,"SELECT * FROM promed WHERE afd='VJ' and id!='1' and lukket != 'JA' ORDER BY id DESC");
         while($rowsqllej = mysqli_fetch_assoc($result)) {
	 $ans = $rowsqllej['id'];
         $where2[] = ("dato3 <= '$test' AND dato3 >= '$test2' AND ans='$ans' AND flag = 'ROD'"); }
         $where2 = implode(' OR ', $where2);
		  $qry = mysqli_query($conn," SELECT COUNT(id) AS ind5 FROM proservice WHERE $where2 ");
  		  $row = mysqli_fetch_assoc($qry);
		  $ind5 = $row['ind5'];

?>


<table height="100%" border="1" width="100%" CELLPADDING="0" CELLSPACING="0">
<tr>
<td width="25%" height="20px" bgcolor="#eeeeee"><font size="10px"><b> Rapport for Sep. <?php echo ' '.$year.' '; ?></font></b></td>
<td width="18.75%" height="20px" bgcolor="#eeeeee"><font size="10px"><b> <?php echo ''.$ind0.''; ?></font></b></td>
<td width="18.75%" height="20px" bgcolor="#eeeeee"><font size="10px"><b> <?php echo ''.$ind1.''; ?></font></b></td>
<td width="18.75%" height="20px" bgcolor="#eeeeee"><font size="10px"><b> <?php echo ''.$ind4.''; ?></font></b></td>
<td width="18.75%" height="20px" bgcolor="#eeeeee"><font size="10px"><b> <?php echo ''.$ind5.''; ?></font></b></td>
</tr>
</table>