<?php
	 $where = array();
         $result = mysqli_query($conn,"SELECT * FROM promed WHERE afd='VJ' and id!='1' ORDER BY id DESC");
         while($rowsqllej = mysqli_fetch_assoc($result)) {
	 $ans = $rowsqllej['id'];
         $where[] = ("dato2 <= '$ru0' AND dato2 >= '$ru1' AND status_kode !='9' AND ans != '1' AND ans='$ans' AND ind_kode != '6'"); 
         $where[] = ("dato2 <= '$ru0' AND dato2 >= '$ru1' AND status_kode !='9' AND ans != '1' AND ans='51' AND ind_kode != '6'"); }
         $where = implode(' OR ', $where);
		  $qry = mysqli_query($conn," SELECT COUNT(id) AS rus0 FROM proservice WHERE $where ");
  		  $row = mysqli_fetch_assoc($qry);
		  $rus0 = $row['rus0'];
	 $where = array();
         $result = mysqli_query($conn,"SELECT * FROM promed WHERE afd='VJ' and id!='1' ORDER BY id DESC");
         while($rowsqllej = mysqli_fetch_assoc($result)) {
	 $ans = $rowsqllej['id'];
         $where[] = ("dato2 <= '$ru1' AND dato2 >= '$ru2' AND status_kode !='9' AND ans != '1' AND ans='$ans' AND ind_kode != '6'"); 
         $where[] = ("dato2 <= '$ru1' AND dato2 >= '$ru2' AND status_kode !='9' AND ans != '1' AND ans='51' AND ind_kode != '6'"); }
         $where = implode(' OR ', $where);
		  $qry = mysqli_query($conn," SELECT COUNT(id) AS rus1 FROM proservice WHERE $where ");
  		  $row = mysqli_fetch_assoc($qry);
		  $rus1 = $row['rus1'];
	 $where = array();
         $result = mysqli_query($conn,"SELECT * FROM promed WHERE afd='VJ' and id!='1' ORDER BY id DESC");
         while($rowsqllej = mysqli_fetch_assoc($result)) {
	 $ans = $rowsqllej['id'];
         $where[] = ("dato2 <= '$ru2' AND dato2 >= '$ru3' AND status_kode !='9' AND ans != '1' AND ans='$ans' AND ind_kode != '6'"); 
         $where[] = ("dato2 <= '$ru2' AND dato2 >= '$ru3' AND status_kode !='9' AND ans != '1' AND ans='51' AND ind_kode != '6'"); }
         $where = implode(' OR ', $where);
		  $qry = mysqli_query($conn," SELECT COUNT(id) AS rus2 FROM proservice WHERE $where ");
  		  $row = mysqli_fetch_assoc($qry);
		  $rus2 = $row['rus2'];
	 $where = array();
         $result = mysqli_query($conn,"SELECT * FROM promed WHERE afd='VJ' and id!='1' ORDER BY id DESC");
         while($rowsqllej = mysqli_fetch_assoc($result)) {
	 $ans = $rowsqllej['id'];
         $where[] = ("dato2 <= '$ru3' AND dato2 >= '$ru4' AND status_kode !='9' AND ans != '1' AND ans='$ans' AND ind_kode != '6'"); 
         $where[] = ("dato2 <= '$ru3' AND dato2 >= '$ru4' AND status_kode !='9' AND ans != '1' AND ans='51' AND ind_kode != '6'"); }
         $where = implode(' OR ', $where);
		  $qry = mysqli_query($conn," SELECT COUNT(id) AS rus3 FROM proservice WHERE $where ");
  		  $row = mysqli_fetch_assoc($qry);
		  $rus3 = $row['rus3'];
	 $where = array();
         $result = mysqli_query($conn,"SELECT * FROM promed WHERE afd='VJ' and id!='1' ORDER BY id DESC");
         while($rowsqllej = mysqli_fetch_assoc($result)) {
	 $ans = $rowsqllej['id'];
         $where[] = ("dato2 <= '$ru4' AND dato2 >= '$ru5' AND status_kode !='9' AND ans != '1' AND ans='$ans' AND ind_kode != '6'"); 
         $where[] = ("dato2 <= '$ru4' AND dato2 >= '$ru5' AND status_kode !='9' AND ans != '1' AND ans='51' AND ind_kode != '6'"); }
         $where = implode(' OR ', $where);
		  $qry = mysqli_query($conn," SELECT COUNT(id) AS rus4 FROM proservice WHERE $where ");
  		  $row = mysqli_fetch_assoc($qry);
		  $rus4 = $row['rus4'];
	 $where = array();
         $result = mysqli_query($conn,"SELECT * FROM promed WHERE afd='VJ' and id!='1' ORDER BY id DESC");
         while($rowsqllej = mysqli_fetch_assoc($result)) {
	 $ans = $rowsqllej['id'];
         $where[] = ("dato2 <= '$ru5'  AND status_kode !='9' AND ans != '1' AND ans='$ans' AND ind_kode != '6'"); 
         $where[] = ("dato2 <= '$ru5'  AND status_kode !='9' AND ans != '1' AND ans='51' AND ind_kode != '6'"); }
         $where = implode(' OR ', $where);
		  $qry = mysqli_query($conn," SELECT COUNT(id) AS rus5 FROM proservice WHERE $where ");
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