<?php
   $result  = mysqli_query($conn, "SELECT * FROM proservice WHERE id='$rapport'");
             while($row = mysqli_fetch_assoc($result)) {
            $pic_flag = $row['pic_flag'];
            $status_kode = $row['status_kode'];
            $asap = $row['ASAP'];
            $ans = $row['ans'];
	    $dato = $row['dato'];
 	    $dato2 = $row['dato2'];
	    $dato3 = $row['dato3'];
            $dato3 = date('d-m-Y H:i:s', strtotime("$dato3"));
	    If($dato2 != '0000-00-00 00:00:00') {
	    $dato = $dato2; 
            $dato = date('d-m-Y H:i:s', strtotime("$dato"));
	    
 } } ?>