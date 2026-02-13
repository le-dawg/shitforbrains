<?php
if(isset($_POST['kopikom'])) {
if(!empty($_POST['rapport2'])) {
$rapport2 = $_POST['rapport2'];
$result = mysqli_query($conn,"SELECT * FROM proservice_kom WHERE service_rapport = '$rapport2'");
while($row = mysqli_fetch_assoc($result)) {
$sqlrapp = $_GET['id'];
$dato = date('d-m-Y');
$levendor = $row['levendor'];
$varenr = $row['vare_nr'];
$varebe = $row['vare_beskrivelse'];
$antal = $row['antal'];
$type = $row['type'];
$result2 = mysqli_query($conn,"SELECT * FROM promed WHERE id = '$_SESSION[uid]'");
while($row2 = mysqli_fetch_assoc($result2)) {
$intal = $row2['intal'];
}
mysqli_query($conn,"INSERT INTO `proservice_kom` (`service_rapport`, `dato`, `levendor`, `vare_nr`, `vare_beskrivelse`, `intal`, `antal`, `type`) VALUES ('$sqlrapp','$dato','$levendor','$varenr','$varebe','$intal','$antal','$type')");
$result2 = mysqli_query($conn, "SELECT * FROM proservice_kom WHERE service_rapport = '$sqlrapp' ORDER BY id DESC LIMIT 1");

while($row2 = mysqli_fetch_assoc($result2)) { 
$id2 = $row2['id'];
}
include("tiluni.php");

} } }?>