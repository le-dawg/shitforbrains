<! ø !>
<?php if($_GET[liste] == "prosalg"){ ?>
<form method="post" action="" onsubmit="return v(this)">


<div id="container2">
		<div style="width:13%;">Se kun:</div>
		<a href="?side=liste&liste=<?php echo $_GET['liste'];?>&sort=<?php echo $_GET['sort'];?>&idid=procon&knap=top">Pro-Consult</a>
		<a href="?side=liste&liste=<?php echo $_GET['liste'];?>&sort=<?php echo $_GET['sort'];?>&idid=0&knap=top">Ikke påbegynd</a>
		<a href="?side=liste&liste=<?php echo $_GET['liste'];?>&sort=<?php echo $_GET['sort'];?>&idid=1&knap=top">Afventer Leverandør</a>
		<a href="?side=liste&liste=<?php echo $_GET['liste'];?>&sort=<?php echo $_GET['sort'];?>&idid=4&knap=top">Rykket Leverandør</a>
		<a href="?side=liste&liste=<?php echo $_GET['liste'];?>&sort=<?php echo $_GET['sort'];?>&idid=2&knap=top">Tilbud Sendt</a>
		<a href="?side=liste&liste=<?php echo $_GET['liste'];?>&sort=<?php echo $_GET['sort'];?>&idid=3&knap=top">Rykket Kunde</a>


</div>
</form>
<?php } ?>