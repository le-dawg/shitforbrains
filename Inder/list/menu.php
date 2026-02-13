<! ø !>
<div class="top">
<?php if($_GET['liste'] == '50') { ?>LISTE 50<?php } ?>
<?php if($_GET['liste'] == '51') { ?>LISTE 51<?php } ?>
<?php if($_GET['liste'] == 'al') { ?>Alle Opgaver Lejre<?php } ?>
<?php if($_GET['liste'] == 'av') { ?>Alle Opgaver Vejle<?php } ?>
<?php if($_GET['liste'] == $bruger_id) { ?>Dine Opgaver<?php } ?>
<?php if($_GET['liste'] == 'prosalg') { ?>Foresporgsel / PROsalg<?php } ?>
</div>
<form method="post" action="" onsubmit="return v(this)">


<div id="container2">
		<div style="width:13%;">sortere efter:</div>
                <?php if($_GET['liste'] == 'prosalg'){?>
		<a href="?side=liste&liste=<?php echo $_GET['liste'];?>&sort=id&idid=5&knap=top">Service nr</a>
                <?php } else { ?>
		<a href="?side=liste&liste=<?php echo $_GET['liste'];?>&sort=id&knap=top">Service nr</a>
                <?php } ?>
		<a href="?side=liste&liste=<?php echo $_GET['liste'];?>&sort=an&knap=top">Ansvarlig</a>
		<a href="?side=liste&liste=<?php echo $_GET['liste'];?>&sort=fn&knap=top">Firma navn</a>
		<a href="?side=liste&liste=<?php echo $_GET['liste'];?>&sort=da&knap=top">Dato</a>
		<a href="?side=liste&liste=<?php echo $_GET['liste'];?>&sort=ha&knap=top">Haster</a>
		<a href="?side=liste&liste=<?php echo $_GET['liste'];?>&sort=st&knap=top">Status</a>

</div>
</form>