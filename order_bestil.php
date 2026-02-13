<! ø !>
<?php 
$side = $_GET['under'];
if ($side == 'LYT'){
$title = 'PROteknik :: Indsæt Lyt/kondensator';
$tekst = "Indsæt Lyt/kondensator";
} elseif($side == 'CCFL'){
$title = 'PROteknik :: Indsæt CCFL / Backlight rÃ¸r';
$tekst = "Indsæt CCFL / Backlight rÃ¸r";
} else {
$title = 'PROteknik :: Indsæt vare/komponent';
$tekst = "Indsæt vare/komponent";
}
?>
<div class="top">PROordre -> <?php echo $tekst; ?></div>
<p>
<! \\\--\\--\\--\\--\\--\\--\\--\\--\\--\\--\\--\\--\\--\\ Programmer \\\--\\--\\--\\--\\--\\--\\--\\--\\--\\--\\--\\--\\--\\\\\--\\--\\--\\--\>
<?php
$side = $_GET['under'];
if ($side == 'LYT' or $side == 'CCFL'){
include_once('modul/proorder/sql/opret_lyt.php'); 
} else {
include_once('modul/proorder/sql/opret.php'); 

}
include_once('modul/proorder/sql/slet.php');


?>
<! ///--//--//--//--//--//--//--//--//--//--//--//--//--//!Programmer ///--//--//--//--//--//--//--//--//--//--//--//--//--/////--//--//--//--//>

<?php 
if ($side == 'LYT'){
include_once('modul/proorder/inder/opret_lyt.php'); 
include_once('modul/proorder/inder/ret_lyt.php');
} elseif($side == 'CCFL'){
include_once('modul/proorder/inder/opret_ccfl.php'); 
include_once('modul/proorder/inder/ret_ccfl.php'); 
} elseif($side == 'lager'){
include_once('modul/proorder/inder/opret_lager.php');
} else {
include_once('modul/proorder/inder/opret.php'); 
include_once('modul/proorder/inder/ret.php');
}
if ($side != 'FORS'){
include_once('modul/proorder/inder/godkend.php');
include_once('modul/proorder/inder/godkend_ret.php'); 
}
?>

