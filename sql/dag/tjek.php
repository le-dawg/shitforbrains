<! ø !>
<?php 
if($_GET['side'] == 'dagseddel'){
  $result  = mysqli_query($conn, "SELECT * FROM promed WHERE id = '$person'");
} else {
  $result  = mysqli_query($conn, "SELECT * FROM promed WHERE id = '$_SESSION[uid]'");
}
            while($row = mysqli_fetch_assoc($result)) { 

$sidst_dag = date('Y-m-d', strtotime("$row[sidste_dagsseld]"));
$sidst_dag1 = date('Y-m-d', strtotime("$sidst_dag . - 1 day ."));
$currentWeekDay = date( "w" );
switch ($currentWeekDay) {
  case "1": {  // monday
    $lastWorkingDay = date("Y-m-d", strtotime("-3 day"));
    break;
  }
  case "0": {  // sunday
    $lastWorkingDay = date("Y-m-d", strtotime("-2 day"));
    break;
  }
  default: {  //all other days
    $lastWorkingDay = date("Y-m-d", strtotime("-1 day"));
    break;
  } }
if ($sidst_dag != $lastWorkingDay and $sidst_dag1 != $lastWorkingDay){
$sidst_dag = date('d-m-Y', strtotime($sidst_dag));
$lastWorkingDay = date('d-m-Y', strtotime($lastWorkingDay));
$gemtnoget = 'r';
$gemtnoget2 = 'Du mangler er sende din dagsseld fra den ' . $lastWorkingDay . ' // ';
$gemtnoget3 = '<div id="container2"><div class="felt100' . $gemtnoget . '"><b>' . $gemtnoget2 . '</b>Du har sidst send din dagsseld fra den ' . $sidst_dag . '</div></div>';
} else {
$sidst_dag = date('d-m-Y', strtotime($sidst_dag));
$lastWorkingDay = date('d-m-Y', strtotime($lastWorkingDay));
$gemtnoget = '';
$gemtnoget2 = '';
if($_GET['side'] != 'dagseddel'){
$gemtnoget3 = '';
} else {
$gemtnoget3 = '<div id="container2"><div class="felt100' . $gemtnoget . '"><b>' . $gemtnoget2 . '</b>Du har sidst send din dagsseld fra den ' . $sidst_dag . '</div></div>';
} }

?>

		<?php echo $gemtnoget3; ?>
<?php } ?><p>