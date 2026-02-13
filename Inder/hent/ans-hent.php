<! ø !>
<?php 
     $id = $_SESSION['uid2'];
     $result  = mysqli_query($conn, "SELECT * FROM proservice WHERE id='$id'");
     while($row = mysqli_fetch_assoc($result)) {     
 ?>
<p>
<div id="container">
	<div class="top">Vidergiv ansvaret for service rapporten</div>
        <form method="post" action="" onsubmit="return v(this)">
		<input type="hidden" name="id" value="<?php echo ''.$id.'' ?>">
	<div id="container2"">
		<div class="felt100">Vælg den er skal overtage ans ned for og klik på giv ansvar</div>
	</div>
	<div id="container2">
		<div class="felt100"><select class="in" style="background-color:#fff; color:#000; width:100%; height:100%;" class="select" name="ans">
                  <option value="50">50 Uden ansvar Lejre</option>
                  <option value="51">51 Uden ansvar Vejle</option>
                          <?php $result = mysqli_query($conn, "SELECT * FROM promed WHERE lukket != 'JA' ORDER BY id ASC");
                                while($row = mysqli_fetch_assoc($result)) { 
		                $ans = $row['id'];?></option>
                  <option value="<?php echo ''.$row['id'].''; ?>"><?php echo ''.$row['id'].''; ?> 
		          <?php $result2 = mysqli_query($conn, "SELECT * FROM promed WHERE id=$ans");
                                while($row2 = mysqli_fetch_assoc($result2)) { 
                                echo ''.$row['navn'].''; ?>
                  </option> <?php } }?></Select></div>
	</div>
	<div id="container2">
		<div class="felt100" ><input class="in" type="submit" value="Giv ansvaret" name="giv_ans_paa"></div>
	</div>

        </form>
</div>
<?php } ?>