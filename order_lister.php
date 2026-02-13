
<?php
$side = $_GET['afd']; 
include('modul/proorder/sql/bestilt.php');
include('modul/proorder/sql/slet_list.php');
if ($side == 'LYT' or $side == 'CCFL'){
include('modul/proorder/sql/ret_list_lyt.php');
} else {
include('modul/proorder/sql/ret_list.php');
}	

?>
<div class="top"><b>PROordre -> Bestilings lister</b></div><p>

<?php 	include('modul/proorder/inder/lev_liste_valg.php'); 
if ($side == 'LYT'){
include('modul/proorder/inder/ret_list_lyt.php'); 
} elseif ($side == 'CCFL'){
include('modul/proorder/inder/ret_list_ccfl.php');
}else {
include('modul/proorder/inder/ret_list.php');
}	
	include('modul/proorder/inder/list.php'); 
if ($afd == 'LYT'){
$title = 'PROteknik :: ikke Bestil liste Lytter';
} elseif ($afd == 'LJ'){
$title = 'PROteknik :: ikke Bestil liste Viby';
} elseif ($afd == 'VJ'){
$title = 'PROteknik :: ikke Bestil liste Vejle';
} elseif ($afd == 'PA'){
$title = 'PROteknik :: ikke Bestil liste Padborg';
} elseif ($afd == 'CCFL'){
$title = 'PROteknik :: ikke Bestil liste Backlight';
} 
?><! ø !>
