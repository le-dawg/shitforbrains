<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<! Ø !>
<div class="top">Send service rapport til fakt. side 3/3</div>
<?php $p_id = 'fak3' ;
include('inder/kom/type-kom.php');
include('sql/kom/kom-tilfore.php');
include('sql/kom/kom-slet.php');
include('sql/kom/kom-rette.php');
include('sql/fak3/send.php');
if ($_GET['sendt'] == 'ja'){ ?>
<div class="top">Rapporten er nu sendt</div>
<?php } ?>
<p> 
<?php include('inder/kom/paa-kom.php'); ?>
<p>  
<?php include('inder/kom/insaet-kom.php'); ?>
	<p>
<?php include('inder/fak3/send-menu.php'); ?>
</form>
<p id="results"></p>
<p id="varenrfg"></p>
<p id="demo"></p>