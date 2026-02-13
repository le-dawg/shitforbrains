<?php
$dato_top = date('Y-m-d H:i:s');
$ans_sql = $_GET['liste'];
$ans_sql = "ans=$ans_sql";

if(isset($_GET['sort'])){
if($_GET['sort'] == 'an') {
$sql = 'ans' ;
} elseif($_GET['sort'] == 'fn') {
$sql = 'firma_navn' ;
} elseif($_GET['sort'] == 'da') {
$sql = 'dato2' ;
} elseif($_GET['sort'] == 'ha') {
$sql = 'asap' ;
} elseif($_GET['sort'] == 'st') {
$sql = 'status_kode' ;
} elseif($_GET['sort'] == 'id') {
$sql = 'id' ;
}} else {
$sql = 'id' ;
}
$_SESSION['p_id'] = 'list;';




 ?>