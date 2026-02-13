<?php 
if($_GET['idid'] != 'procon'){
$what = "AND firma_navn != 'PRO-CONSULT A/S'";
}
if($_GET['idid'] == 'procon'){
$what = "AND firma_navn = 'PRO-CONSULT A/S'";
}
if($_GET['idid'] == '0'){
$what = "AND flag_kode = '0'";
}
if($_GET['idid'] == '1'){
$what = "AND flag_kode = '1'";
}
if($_GET['idid'] == '2'){
$what = "AND flag_kode = '2'";
}
if($_GET['idid'] == '3'){
$what = "AND flag_kode = '3'";
}
if($_GET['idid'] == '4'){
$what = "AND flag_kode = '4'";
}
if($_GET['idid'] == '5'){
$what = "AND status_kode != '85' AND firma_navn != 'PRO-CONSULT A/S'";
}
?>  