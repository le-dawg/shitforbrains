<?php 
$result  = mysqli_query($conn,"SELECT * FROM proservice WHERE ans='$ans_sql' AND status_kode!='9' ORDER BY $sql ASC");
while($row = mysqli_fetch_assoc($result)) {
	    $asap = $row['ASAP'];
	    $id = $row['id'];
	    $firma_navn = $row['ind_kode'];
	    $flag = $row['flag'];
            if($flag != 'ROD'){
	    $dato2 = $row['dato2'];
            $dato_1mrd = date('Y-m-d H:i:s', strtotime($dato2. "+1month"));
            if($dato_top >= $dato_1mrd) {
		$result2  = mysqli_query($conn,"SELECT * FROM proservice_rapport WHERE service_raport='$id' ORDER BY dato2 ASC");
            while($row2 = mysqli_fetch_assoc($result2)) {
		$dato3 = $row2['dato2']; }
            if(!isset($dato3)) {
		$dato3 = $dato2; }
            $dato_1mrd2 = date('Y-m-d 15:00:00', strtotime($dato3. "+2month"));
            if($dato_top >= $dato_1mrd2) {
	    $old = 'JA'; } else { $old = 'Nej'; } } else { $old = 'Nej'; } } else { $old = 'Nej'; }
            if($firma_navn == '6') { $old = 'Nej'; } }?>