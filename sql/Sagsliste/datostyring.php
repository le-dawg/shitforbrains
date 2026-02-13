<?php             			$test = date('Y-m-d H:i:s', strtotime($date. "first day of next month"));
			$test = date('Y-m-d H:i:s', strtotime($test. "-1day"));
		  
		  $qry = mysqli_query($conn," SELECT COUNT(id) AS ind0 FROM proservice WHERE dato2 <= '$test' AND dato2 >= '$test2' AND ind_kode = '0' AND flag != 'ROD' || dato2 <= '$test' AND dato2 >= '$test2' AND ind_kode = '1' AND flag != 'ROD' || dato2 <= '$test' AND dato2 >= '$test2' AND ind_kode = '2' AND flag != 'ROD' || dato2 <= '$test' AND dato2 >= '$test2' AND ind_kode = '3' AND flag != 'ROD' || dato2 <= '$test' AND dato2 >= '$test2' AND ind_kode = '4' AND flag != 'ROD' || dato2 <= '$test' AND dato2 >= '$test2' AND ind_kode = '21' AND flag != 'ROD' ");
  		  $row = mysqli_fetch_assoc($qry);
		  $ind0 = $row['ind0'];
		  $qry = mysqli_query($conn," SELECT COUNT(id) AS ind1 FROM proservice WHERE dato2 <= '$test' AND dato2 >= '$test2' AND ind_kode = '7' AND flag != 'ROD' || dato2 <= '$test' AND dato2 >= '$test2' AND ind_kode = '8' AND flag != 'ROD' || dato2 <= '$test' AND dato2 >= '$test2' AND ind_kode = '9' AND flag != 'ROD'");
  		  $row = mysqli_fetch_assoc($qry);
		  $ind1 = $row['ind1'];
		  $qry = mysqli_query($conn," SELECT COUNT(id) AS ind2 FROM proservice WHERE dato2 <= '$test' AND dato2 >= '$test2' AND ind_kode = '10' AND flag != 'ROD'");
  		  $row = mysqli_fetch_assoc($qry);
		  $ind2 = $row['ind2'];
		  $qry = mysqli_query($conn," SELECT COUNT(id) AS ind62 FROM proservice WHERE dato2 <= '$test' AND dato2 >= '$test2' AND ind_kode = '62' AND flag != 'ROD'");
  		  $row = mysqli_fetch_assoc($qry);
		  $ind62 = $row['ind62'];
		  $qry = mysqli_query($conn," SELECT COUNT(id) AS ind3 FROM prosalg WHERE dato2 <= '$test' AND dato2 >= '$test2' AND status_kode = '9' AND c5_firma_navn_id != '775194'AND firma_navn != 'PRO-CONSULT A/S'");
  		  $row = mysqli_fetch_assoc($qry);
		  $ind3 = $row['ind3'];

	 $where = array();
         $result = mysqli_query($conn,"SELECT id FROM promed WHERE afd='LJ' and id!='1' ORDER BY id DESC");
         while($rowsqllej = mysqli_fetch_assoc($result)) {
	 $ans = $rowsqllej['id'];
         $where[] = ("dato3 <= '$test' AND dato3 >= '$test2' AND ans='$ans' AND ind_kode != '5' AND ind_kode != '6' AND flag != 'ROD'"); }
//       $result = mysqli_query($conn,"SELECT * FROM promed WHERE afd='LJ' AND ind_kode != '5' AND ind_kode != '6' ORDER BY id DESC");
         $where = implode(' OR ', $where);

		  $qry = mysqli_query($conn," SELECT COUNT(id) AS ind4 FROM proservice WHERE $where ");
  		  $row = mysqli_fetch_assoc($qry);
		  $ind4 = $row['ind4'];

	 $where2 = array();
         $result = mysqli_query($conn,"SELECT id FROM promed WHERE afd='VJ' and id!='1' ORDER BY id DESC");
         while($rowsqllej = mysqli_fetch_assoc($result)) {
	 $ans = $rowsqllej['id'];
         $where2[] = ("dato3 <= '$test' AND dato3 >= '$test2' AND ans='$ans' AND ind_kode != '5' AND ind_kode != '6' AND flag != 'ROD'"); }
//       $result = mysqli_query($conn,"SELECT * FROM promed WHERE afd='VJ' AND ind_kode != '5' AND ind_kode != '6' ORDER BY id DESC");
         $where2 = implode(' OR ', $where2);

		  $qry = mysqli_query($conn," SELECT COUNT(id) AS ind5 FROM proservice WHERE $where2 ");
  		  $row = mysqli_fetch_assoc($qry);
		  $ind5 = $row['ind5'];

		  $qry = mysqli_query($conn," SELECT COUNT(id) AS ind6 FROM proservice WHERE dato2 <= '$test' AND dato2 >= '$test2' AND ind_kode = '6'");
  		  $row = mysqli_fetch_assoc($qry);
		  $ind6 = $row['ind6'];

		  $qry = mysqli_query($conn," SELECT COUNT(id) AS ind61 FROM proservice WHERE dato2 <= '$test' AND dato2 >= '$test2' AND ind_kode = '61'");
  		  $row = mysqli_fetch_assoc($qry);
		  $ind61 = $row['ind61'];
$mrd = date('M', strtotime($test. "first day of this month"));
?>