<! ø !>
<?php 
     $id = $_SESSION['uid2'];
     $result  = mysqli_query($conn, "SELECT * FROM proservice WHERE id='$id'");
     while($row = mysqli_fetch_assoc($result)) {     
 ?>
<p>
<div id="container">
	<div class="top">Tilføj tekst på service rapport</div>
        <form method="post" action="" onsubmit="return v(this)">
		<input type="hidden" name="id" value="<?php echo ''.$id.'' ?>">
	<div id="container2">
		<div class="felt100"><input class="tekst" type="text" name="beskivsle" value=""></div>
	</div>
	<div id="container2">
		<div class="felt100"><input class="in" type="submit" value="Tilføj tekst til rapport" name="tekst_paa"></div>
	</div>
        </form>
</div>
<?php } 
     $result  = mysqli_query($conn, "SELECT * FROM prosalg WHERE id='$id'");
     while($row = mysqli_fetch_assoc($result)) {     
 ?>
<p>
<div id="container">
	<div class="top">Tilføj tekst på service rapport</div>
        <form method="post" action="" onsubmit="return v(this)">
		<input type="hidden" name="id" value="<?php echo ''.$id.'' ?>">
	<div id="container2">
		<div class="felt100"><input class="tekst" type="text" name="beskivsle" value=""></div>
	</div>
	<div id="container2">
		<div class="felt100"><input class="in" type="submit" value="Tilføj tekst til rapport" name="tekst_paa"></div>
	</div>
        </form>
</div>
<?php } ?>