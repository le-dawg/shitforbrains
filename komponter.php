<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<! ø !>
<?php $p_id = $_GET['p_id'];?>
<div class="top">Komponentside</div>
<?php 
include_once('sql/kom/sql-c5.php');
include_once('sql/kom/kom-tilfore.php');
include_once('sql/kom/kom-rette.php');
include_once('sql/kom/kom-slet.php');
include_once('modul/kopikom/sql/kopi.php');
include('inder/kom/type-kom.php'); ?>
<p>
<?php include('modul/kopikom/inder/index.php'); ?>
<p>
<?php include('inder/kom/paa-kom.php'); ?>
<p>
<?php include('inder/kom/insaet-kom.php'); ?>
<p>
</form>
<p id="results"></p>
<p id="varenrfg"></p>
<p id="demo"></p>
<?php include('modul2/c5kom/alpha.php'); ?>
<p><?php $title = 'PROteknik :: Kompont side: '.$tileid.''; ?>