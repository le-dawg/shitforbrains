<?php 
include_once("config.php");
?>
<html>
<head>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="modul/c5kom/scripts/custom.js"></script>
<meta http-equiv="X-UA-Compatible" content="IE=100" />
<meta name="language" content="danish"/>
<meta http-equiv='Content-Type' content='text/html; charset=ISO-8859-1' />
<meta http-equiv="refresh" content="10" > 
<link href="css.css" rel="stylesheet" type="text/css"/>
<title>Pro Consult A/S :: PROteknik</title>
</head>
<?php
$result  = mysqli_query($conn, "SELECT * FROM proservice WHERE ind_kode='5' and salg_kommet='NEJ' ORDER BY dato4");

while($row = mysqli_fetch_assoc($result)) {
	    $id = $row['id'];
	    $firma_navn = $row['ind_kode'];
	    $flag = $row['flag'];?>
<p style="height:0px;">
	                  <div class="opgave" style="height:50px;">
		          <div class="opgave-u">
                               <div class="con_2" style="border-bottom:0px solid black; height:100%;">
		                    <div class="opgave1" style="width:65%;">Kundenavn:<br>
                                         <div class="firmanavn" style="height:20%;"><?php echo ''.$row['firma_navn'].''; ?></div>
                                    </div>
                                    <div class="opgave2" id="<?php echo $asaprod; ?>">Oprette den.:<br>
                                         <div class="firmanavn" style="height:20%;"><?php $dato = $row['dato2']; $dato = date('d-m-Y', strtotime("$dato")); echo ''.$dato.''; ?></div>
                                    </div>
                                    <div class="opgave2" id="<?php echo $asaprod; ?>">modtages senest<br>
                                         <div class="firmanavn" style="height:20%;"><?php $dato = $row['dato4']; $dato = date('d-m-Y', strtotime("$dato")); echo ''.$dato.''; ?></div>
                                    </div>
                                    <div class="opgave4" id="<?php echo $asaprod; ?>">Service rapport nr.:<br>
                                         <div class="firmanavn" style="height:20%;"><a id="<?php echo ''.$row['id'].''; ?>"><?php echo ''.$row['id'].''; ?><input type="hidden" name="id" value="<?php echo ''.$row['id'].''; ?>"></a></div>
                                    </div>
                               </div>
			</div></div><div class="opgave" style="height:50px;">
                <div class="con_3_1" style="height: 25px; width:15%; border-left:2px solid black;">Fabrikat</div>
                <div class="con_3_1" style="height: 25px;width:15%;">Type</div>
                <div class="con_3_1" style="height: 25px;width:15%;">Maskine</div>
                <div class="con_3_1" style="height: 25px;width:15%;">Leverandør</div>
                <div class="con_3_1" style="height: 25px;width:15%;">Vare nr.</div>
                <div class="con_3_1" style="height: 25px;width:15%;">kontakt person</div>
                <div class="con_3_1" style="height: 25px;width:10%;">dage tilbage</div>
<! ------------------------------------------------------------------------- line 6 ------------------------------------------------------------------------------------------------- !>
                <div class="con_3_1" style="width:15%; border-left:2px solid black;"><?php echo ''.$row['fabrikat'].''; ?></div>
                <div class="con_3_1" style="width:15%;"><?php echo ''.$row['type'].''; ?></div>
                <div class="con_3_1" style="width:15%;"><?php echo ''.$row['maskine'].''; ?></div>
                <div class="con_3_1" style="width:15%;"><?php echo ''.$row['salg_lev'].''; ?></div>
                <div class="con_3_1" style="width:15%;"><?php echo ''.$row['salg_type'].''; ?></div>
                <div class="con_3_1" style="width:15%;"><?php echo ''.$row['salg_kontagt'].''; ?></div>
                <div class="con_3_1" style="width:10%;" ><?php    
    $today = date('Y-m-d H:i:s');
    $today = strtotime($today);
    $finish = $row['dato4'];
    $finish = strtotime($finish);
    //difference
    $diff = $finish - $today;
    $daysleft=floor($diff/(60*60*24));
    echo "$daysleft Dage";
?></div></div></p><br>
<?php } ?>
</body>
</html>