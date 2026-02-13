<! ø !>
<form method="post" action="" onsubmit="return v(this)">
<div id="container2">
		<div class="felt15"><input class="in" type="submit" value="Skift dato til" name="set_dato"></div>
		<div class="felt15"><input class="in" type="submit" value="Flyt dagseld til dato" name="flyt_dag"></div>
		<div class="felt10"><input class="tekst" type="date" name="ny_dato" value="<?php echo date('Y-m-d', strtotime($dato)); ?>"></div>
		<div class="felt60" id="sidst">For en anden dato. Ã¦ndre dato feltet og klik skift dato, format (DD-MM-YYYY)</div>
	</div>

<!------/aendre dato ---------------!>
<!------ aendre person -------------!>
<?php  $result = mysqli_query($conn, "SELECT * FROM promed WHERE id = $_SESSION[uid]");
       while($row = mysqli_fetch_assoc($result)) {
       $rolle = $row['rolle'];
	}
	if($rolle == 'AD' || $rolle == 'LE' || $rolle == 'KOK') {
        ?><input type="hidden" name="dato" value="<?php echo ''.$dato.'' ?>">
<div id="container2">
		<div class="felt15"></div>
		<div class="felt15"><input class="in" type="submit" value="Skift person til" name="set_ans"></div>
		<div class="felt10"><input class="tekst" type="text" name="ny_ans" value=""></div>
		<div class="felt60" id="sidst">For en persons dagseddel. ændre medarbj. nr. feltet og klik skift person</div>
	</div>
<?php } ?>

</form>