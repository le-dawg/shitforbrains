<! ø !>
<!DOCTYPE HTML>
<?php $p_id = $_GET['p_id']; 
if ($p_id == 'ret' or $_GET['p_id'] == 'soeg') {?>
<div class="top">Ret rapport stamdata</div>
<?php } ?>
<?php $p_id = $_GET['p_id']; 
if ($p_id == 'fak1') {?>
<div class="top">Send Service Rapport til fakt. side 1/3</div>
<div class="top">På denne side skal du tjekke at infomatiner er retige og rette dem hvis nødvendig</div>
<?php }
include('sql/stam/ret-opgave.php');
include('inder/stam/opgave.php');
include('inder/stam/menu.php');
?>
