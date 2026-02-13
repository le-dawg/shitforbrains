<?php
if(!isset($_SESSION['opmenu'])){
$_SESSION['opmenu'] = 'luk'; }
if(!isset($_SESSION['ad'])){
$_SESSION['ad'] = 'luk'; }
if(!isset($_SESSION['proordre'])){
$_SESSION['proordre'] = 'luk'; }
if(!isset($_SESSION['proordrelist'])){
$_SESSION['proordrelist'] = 'luk'; }


if($_GET['menu'] == 'op'){
if($_SESSION['opmenu'] == 'luk'){
$_SESSION['opmenu'] = 'aab';
} elseif($_SESSION['opmenu'] == 'aab'){
$_SESSION['opmenu'] = 'luk';
}
}
if($_GET['menu'] == 'ad'){
if($_SESSION['ad'] == 'luk'){
$_SESSION['ad'] = 'aab';
} elseif($_SESSION['ad'] == 'aab'){
$_SESSION['ad'] = 'luk';
}
}
if($_GET['menu'] == 'proordre'){
if($_SESSION['proordre'] == 'luk'){
$_SESSION['proordre'] = 'aab';
} elseif($_SESSION['proordre'] == 'aab'){
$_SESSION['proordre'] = 'luk';
}
}
if($_GET['menu'] == 'prolist'){
if($_SESSION['proordrelist'] == 'luk'){
$_SESSION['proordrelist'] = 'aab';
} elseif($_SESSION['proordrelist'] == 'aab'){
$_SESSION['proordrelist'] = 'luk';
}
}





?>