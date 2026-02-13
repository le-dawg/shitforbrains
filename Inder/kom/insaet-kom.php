<! ø !>
<?php          $result  = mysqli_query($conn,"SELECT * FROM promed WHERE id = '$_SESSION[uid]'");
            while($row = mysqli_fetch_assoc($result)) {
?>
        <form method="post" action="" onsubmit="return v(this)">
        <input name="id" type="hidden" value="<?php echo ''.$tileid = $_GET['id'].'' ; ?>">
<div id="container">
	<div class="top">Tilføj komponter til order</div>
        <div id="container2">
		<div class="felt10">Dato:</div>
		<div class="felt5" >Int.:</div>
		<div class="felt151" >Levenandør</div>
		<div class="felt20" >Vare nr. eller Vare ID:</div>
		<div class="felt20" >Varebetegnelse</div>
		<div class="felt5" >Type</div>
		<div class="felt5" >Antal</div>
		<div class="felt20" ></div>
	</div>
        <div id="container2">
		<div class="felt10"><input class="tekst" type="text" name="dato" value="<?php echo date('j-m-Y'); ?>"></div>
		<div class="felt5"><input class="tekst" type="text" name="intal" value="<?php echo ''.$row['int'].''; ?>"></div>
		<div class="felt151"><input id="leve" class="tekst" type="text" name="levendor" autofocus></div>
		<div class="felt20"><input id="varenr" class="tekst" type="text" name="vare_nr" value=""></div>
		<div class="felt20"><input id="beskiv" class="tekst" type="text" name="vare_beskrivelse" value=""></div>
		<div class="felt5"><input style="text-transform:uppercase;" class="tekst" type="text" name="type" value=""></div>
		<div class="felt5"><input  class="tekst" type="text" name="antal" value="" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"></div>
	        <div class="felt20"></div>
	</div>
	<div id="container2">
		<div class="felt50"><?php include('modul\tilbagesystem\inder\tilbage.php'); ?></div>
		<div class="felt50"><input type="submit" value="Tilføj komponent(er) til rapport" name="tilfore_kom"></div>
	</div>
</div>
<?php } ?>