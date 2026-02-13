<! ø !>
<form method="post" action="" onsubmit="return v(this)">
<div id="container">
	<div class="top">Komponter på rapporten <?php echo $_GET['id'] ?></div>
        <div id="container2">
		<div class="felt10">Dato:</div>
		<div class="felt5">Int.:</div>
		<div class="felt15">Levenandør</div>
		<div class="felt20">Vare(r) nr. eller Vare(r) ID:</div>
		<div class="felt20">Varebetegnelse</div>
		<div class="felt5">Type</div>
		<div class="felt5">Antal</div>
		<div class="felt20"></div>
	</div>
<?php          $result  = mysqli_query($conn, "SELECT * FROM proservice_kom WHERE service_rapport = '$_GET[id]' ORDER BY id ASC ");
            while($row = mysqli_fetch_assoc($result)) {
?>      <form method="post" action="" onsubmit="return v(this)">
        <div id="container2"><input type="hidden" name="id" value="<?php echo ''.$row['id'].''; ?>">
		<div class="felt10"><input class="tekst" type="text" name="dato" value="<?php echo ''.$row['dato'].''; ?>"></div>
		<div class="felt5" ><input class="tekst" type="text" name="intal" value="<?php echo ''.$row['intal'].''; ?>"></div>
		<div class="felt151"><input class="tekst" type="text" name="levendor" value="<?php echo ''.$row['levendor'].''; ?>"></div>
		<div class="felt20"><input class="tekst" type="text" name="vare_nr" value="<?php echo ''.$row['vare_nr'].''; ?>"></div>
		<div class="felt20"><input class="tekst" type="text" name="vare_beskrivelse" value="<?php echo ''.$row['vare_beskrivelse'].''; ?>"></div>
		<div class="felt5"><input class="tekst" type="text text-transform:uppercase;" name="type" value="<?php echo ''.$row['type'].''; ?>"></div>
		<div class="felt5"><input class="tekst" type="text" name="antal" value="<?php echo ''.$row['antal'].''; ?>"></div>
		<div class="felt10"><input class="in" type="submit" value="Ret" name="ret_kom"></div>
		<div class="felt10"><input class="in" type="submit" value="Slet" name="slet_kom"></div>
	</div></form>
<?php } ?>
</div>