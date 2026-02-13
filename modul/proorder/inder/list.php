<! ø !>
<?php
if(!empty($_GET['lev'])) {
?>
<br style="clear:both">
	<div class="top">Ikke Bestil liste <?php echo $_GET['lev']; ?></div>
<div id="con_order">
<?php
$result = mysqli_query($conn, "SELECT * FROM proorder WHERE levendor='$_GET[lev]' and Bestilt='NEJ' and afd='$afd' and modtaget='NEJ' order by asap");
while($row = mysqli_fetch_assoc($result)) {
$asap = $row['asap'];
if($asap == 'JA'){
$asap2 = 'r';
} else {
$asap2 = '';
}
$link = $row['link'];
?>
<div id="container2" style="border-top:2px black solid;">
	<div class="felt25<?php echo $asap2 ?>" >Ordre nr.:<?php echo $row['id']; ?></div>
	<div class="felt25<?php echo $asap2 ?>" >Dato: <?php echo $row['dato']; ?></div>
	<div class="felt25<?php echo $asap2 ?>" >service_report.: <?php echo $row['service_report']; ?></div>
	<div class="felt25<?php echo $asap2 ?>" >Bestilt af: <?php echo $row['intal']; ?></div>
</div>
<div id="container2">
	<div class="felt25<?php echo $asap2 ?>">Vare nr.:<?php echo $row['vare_nr']; ?></div>
	<div class="felt50<?php echo $asap2 ?>">vare beskrivelse:<?php echo $row['vare_beskrivelse']; ?></div>
	<div class="felt25<?php echo $asap2 ?>">Antal:<?php echo $row['antal']; ?></div>
</div>
<?php if ($link != ''){?>
<div id="container2">
	<div class="felt33" style="width:100%;"><?php echo $row['link']; ?></div>
</diV>
<?php } ?>
<div id="container2">
	<div class="felt33"><a href="?side=order_lister&afd=<?php echo $_GET['afd']?>&funk=be&id=<?php echo $row['id']?>&lev=<?php echo $_GET['lev']?>">Bestilt</a></div>
	<div class="felt33"><a href="?side=order_lister&afd=<?php echo $_GET['afd']?>&funk=re&id=<?php echo $row['id']?>&lev=<?php echo $_GET['lev']?>">Ret Vare</a></div>
	<div class="felt331"><a href="?side=order_lister&afd=<?php echo $_GET['afd']?>&funk=slet&id=<?php echo $row['id']?>&lev=<?php echo $_GET['lev']?>">Slet Vare</a></div>
</diV><br style="clear:both">
<?php } } ?>

<?php 		$afd2 = $_GET['afd'];
		if ($afd2 == 'LYT' ){ ?>
	<div class="top">Ikke Bestil Lyt liste </div>
<div id="con_order">
<?php
$result3 = mysqli_query($conn, "SELECT * FROM proorder WHERE flag='LYT' and Bestilt='NEJ' and modtaget='NEJ' order by asap");
while($row3 = mysqli_fetch_assoc($result3)) {
$asap = $row3['asap'];
if($asap == 'JA'){
$asap2 = 'r';
} else {
$asap2 = '';
}

?>
<div id="container2" style="border-top:2px black solid;">
	<div class="felt25<?php echo $asap2 ?>" >Ordre nr.:<?php echo $row3['id']; ?></div>
	<div class="felt25<?php echo $asap2 ?>" >Dato: <?php echo $row3['dato']; ?></div>
	<div class="felt25<?php echo $asap2 ?>" >service_report.: <?php echo $row3['service_report']; ?></div>
	<div class="felt25<?php echo $asap2 ?>" >Bestilt af: <?php echo $row3['intal']; ?></div>
</div>
<div id="container2">
	<div class="felt25<?php echo $asap2 ?>" >Kapacitet:<?php echo $row3['kapacitet']; ?></div>
	<div class="felt25<?php echo $asap2 ?>" >Spænding: <?php echo $row3['volt']; ?></div>
	<div class="felt25<?php echo $asap2 ?>" >Diameter: <?php echo $row3['diameter']; ?></div>
	<div class="felt25<?php echo $asap2 ?>" >Højde: <?php echo $row3['hojde']; ?></div>
</div>
<div id="container2">
	<div class="felt25<?php echo $asap2 ?>">Konstruction:</div>
	<div class="felt25<?php echo $asap2 ?>" ><?php echo $row3['konstruction']; ?></div>
	<div class="felt25<?php echo $asap2 ?>">Antal: <?php echo $row3['antal']; ?></div>
	<div class="felt25<?php echo $asap2 ?>">Afd.: <?php echo $row3['afd']; ?></div>
</div>
<div id="container2">
	<div class="felt25<?php echo $asap2 ?>">Vare nummer:</div>
	<div class="felt25<?php echo $asap2 ?>"><?php echo $row3['vare_nr']; ?></div>
	<div class="felt25<?php echo $asap2 ?>">Leverandor: </div>
	<div class="felt25<?php echo $asap2 ?>"><?php echo $row3['levendor']; ?></div>
</div>
<div id="container2">
	<div class="felt33"><a href="?side=order_lister&afd=<?php echo $_GET['afd']?>&funk=be&id=<?php echo $row3['id']?>">Bestilt</a></div>
	<div class="felt33"><a href="?side=order_lister&afd=<?php echo $_GET['afd']?>&funk=re&id=<?php echo $row3['id']?>">Ret Vare</a></div>
	<div class="felt331"><a href="?side=order_lister&afd=<?php echo $_GET['afd']?>&funk=slet&id=<?php echo $row3['id']?>">Slet Vare</a></div>
</diV><br style="clear:both">
<?php } } ?>

<?php 		$afd2 = $_GET['afd'];
		if ($afd2 == 'CCFL' ){ ?>
	<div class="top">Ikke Bestil CCFL liste </div>
<div id="con_order">
<?php
$result3 = mysqli_query($conn, "SELECT * FROM proorder WHERE flag='CCFL' and Bestilt='NEJ' and modtaget='NEJ' order by asap");
while($row3 = mysqli_fetch_assoc($result3)) {
$asap = $row3['asap'];
if($asap == 'JA'){
$asap2 = 'r';
} else {
$asap2 = '';
}

?>
<div id="container2" style="border-top:2px black solid;">
	<div class="felt25<?php echo $asap2 ?>" >Ordre nr.:<?php echo $row3['id']; ?></div>
	<div class="felt25<?php echo $asap2 ?>" >Dato: <?php echo $row3['dato']; ?></div>
	<div class="felt25<?php echo $asap2 ?>" >service_report.: <?php echo $row3['service_report']; ?></div>
	<div class="felt25<?php echo $asap2 ?>" >Bestilt af: <?php echo $row3['intal']; ?></div>
</div>
<div id="container2">
	<div class="felt25<?php echo $asap2 ?>" >Diameter: <?php echo $row3['diameter']; ?></div>
	<div class="felt25<?php echo $asap2 ?>" >Længde: <?php echo $row3['hojde']; ?></div>
	<div class="felt25<?php echo $asap2 ?>">Antal: <?php echo $row3['antal']; ?></div>
	<div class="felt25<?php echo $asap2 ?>">Afd.: <?php echo $row3['afd']; ?></div>
</div>
<div id="container2">
	<div class="felt33"><a href="?side=order_lister&afd=<?php echo $_GET['afd']?>&funk=be&id=<?php echo $row3['id']?>">Bestilt</a></div>
	<div class="felt33"><a href="?side=order_lister&afd=<?php echo $_GET['afd']?>&funk=re&id=<?php echo $row3['id']?>">Ret Vare</a></div>
	<div class="felt331"><a href="?side=order_lister&afd=<?php echo $_GET['afd']?>&funk=slet&id=<?php echo $row3['id']?>">Slet Vare</a></div>
</diV><br style="clear:both">
<?php } } ?>