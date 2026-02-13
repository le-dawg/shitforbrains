<?php 
if(!empty($_GET['knap'])){
if(empty($_SESSION['retning'])) {
$_SESSION['retning'] = 'ASC'; } elseif($_SESSION['retning'] == 'ASC' and $_SESSION['sorting'] == $_GET['sort'] ) {
$_SESSION['retning'] = 'DESC';} elseif($_SESSION['retning'] == 'DESC' and $_SESSION['sorting'] == $_GET['sort']) {
$_SESSION['retning'] = 'ASC'; } 
}
if(!empty($_SESSION['sorting'])) {
if(!empty($_GET['sort'])) {
$_SESSION['sorting'] = $_GET['sort'];} else {
$_SESSION['sorting'] = 'id';
 } } else {
$_SESSION['sorting'] = 'id'; }
$_SESSION['p2_id'] = 'liste&liste='.$_GET['liste'].'&sort='.$_GET['sort'];
?>