<! Ø !>
<div class="top">Kollega oversigt</div>
<p>
<?php 		$result  = mysqli_query($conn,"SELECT * FROM promed order by ID");
                	while($row = mysqli_fetch_assoc($result)) {
				$id = $row['id'];
                               

		  $qry = mysqli_query($conn," SELECT COUNT(id) AS ind0 FROM proservice WHERE ans=$id and status_kode != '9'");
  		  $row1 = mysqli_fetch_assoc($qry);
		  $ind0 = $row1['ind0'];
		  $qry = mysqli_query($conn," SELECT COUNT(id) AS ind1 FROM proservice WHERE ans=$id and status_kode != '9' and asap = 'JA'");
  		  $row1 = mysqli_fetch_assoc($qry);
		  $ind1 = $row1['ind1'];
		  $qry = mysqli_query($conn," SELECT COUNT(id) AS ind2 FROM proservice WHERE ans=$id and status_kode != '9' and asap = 'JA' and flag = 'ROD'");
  		  $row1 = mysqli_fetch_assoc($qry);
		  $ind2 = $row1['ind2'];

if ($row['afd'] == 'VJ'){
$farve = '#00ffbf';
}
if ($row['afd'] == 'LJ'){
$farve = '#b3d9ff';
}
if ($row['lukket'] == 'JA'){
$farve = '#d1d1d1';
}
?>                       
<div id="container2" style="border-top:2px black solid;">
		<div class="felt30" style="background:#d1d1d1;">Navn</div>
		<div class="felt5" style="background:#d1d1d1;">Nr.</div>
		<div class="felt5" style="background:#d1d1d1;">lokal nr.</div>
		<div class="felt10" style="background:#d1d1d1;">Dirkte nr.</div>
		<div class="felt20" style="background:#d1d1d1;">mail.</div>
		<div class="felt10" style="background:#d1d1d1;">antal sager igang.</div>
		<div class="felt10" style="background:#d1d1d1;">her af haster.</div>
		<div class="felt10" style="background:#d1d1d1;">her af ude.</div>


</div>
<div id="container2">
		<div class="felt30" style="background:<?php echo $farve ?>;"><?php echo $row['navn']; ?></div>
		<div class="felt5" style="background:<?php echo $farve ?>;"><?php echo $id; ?></div>
		<div class="felt5" style="background:<?php echo $farve ?>;"><?php echo $row['lokal']; ?></div>
		<div class="felt10" style="background:<?php echo $farve ?>;"><?php echo $row['tele']; ?></div>
		<div class="felt20" style="background:<?php echo $farve ?>;"><?php echo $row['email']; ?></div>
		<div class="felt10" style="background:<?php echo $farve ?>;"><?php echo $ind0; ?></div>
		<div class="felt10" style="background:<?php echo $farve ?>;"><?php echo $ind1; ?></div>
		<div class="felt10" style="background:<?php echo $farve ?>;"><?php echo $ind2; ?></div>
</div><p>
<?php } $title = 'PROteknik :: Kollega oversigt';?>