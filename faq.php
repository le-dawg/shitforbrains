<! ø !>
<div class="top">FAQ / HJÃ†LP side</div>
<center>
<?php $result = mysqli_query(conn, "SELECT * FROM faq order by id");
while($row = mysqli_fetch_assoc($result)) { ?>
		<br style="clear:both">
                <div id="container2" style="border-top:2px solid black; height:40px; ">
                          <div class="felt102" style="background-color:#eeeeee;"><?php echo $row['a'] ?></div>
                </div>
		<div id="container2" style="height:40px;">
                          <div class="felt102"><?php echo $row['q'] ?></div>
                </div>
<?php } ?>