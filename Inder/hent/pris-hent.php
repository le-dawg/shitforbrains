<! ø !>
<?php 
     $id = $_SESSION['uid2'];
     $result  = mysqli_query($conn,"SELECT * FROM proservice WHERE id='$id'");
     while($row = mysqli_fetch_assoc($result)) {     
 ?>
<p>
<div id="container">
	<div class="top">Tilføj / ret pris på service rapport</div>
        <form method="post" action="" onsubmit="return v(this)">
		<input type="hidden" name="id" value="<?php echo ''.$id.'' ?>">
	<div id="container2">
		<div class="felt251">Pris skønnet</div>
                <div class="felt251">Pris Ny</div>
                <div class="felt251">Pris brugt/ebay</div>
                <div class="felt251">Pris aftalt</div><br style="clear:both">   
	</div>
	<div id="container2">
                <div class="felt251"><input class="tekst" type="text" name="pris_ret_s" value="<?php echo ''.$row['pris_s'].''; ?>"></div>
                <div class="felt251"><input class="tekst" type="text" name="pris_ret_n" value="<?php echo ''.$row['pris_n'].''; ?>"></div>
                <div class="felt251"><input class="tekst" type="text" name="pris_ret_b" value="<?php echo ''.$row['pris_b'].''; ?>"></div>
                <div class="felt251"><input class="tekst" type="text" name="pris_ret_k" value="<?php echo ''.$row['pris_k'].''; ?>"></div><br style="clear:both">   
	</div>
	<div id="container2">
		<div class="felt100"><input class="in" type="submit" value="TilfÃ¸j ny/rette pris" name="pris_paa"></div>
	</div>

        </form>
</div>
<?php } ?>