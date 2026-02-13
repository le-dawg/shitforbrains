<?php
$x = 0;

while($x <= 23) {

$day = date('Y');
$day = date('Y-m-d H:i:s', strtotime("$day-12-11 00:00:00". "-$x month"));

$belob = '0';

$week_start = date('Y-m-d 00:00:00', strtotime($day. "first day of this month"));
$week_end = date('Y-m-d 23:59:59', strtotime($day. "last day of this month"));
 
                 $result = mysqli_query($conn,"SELECT * FROM proservice WHERE dato2 <= '$week_end' AND dato2 >= '$week_start' AND ind_kode = '5'");
                  while($rowsql= mysqli_fetch_assoc($result)) { 
                  $id = $rowsql['id'];
                  $result2 = mysqli_query($conn,"SELECT * FROM prosalg WHERE id2 = '$id'");
                  while($rowsql2= mysqli_fetch_assoc($result2)) {
                  $id = $rowsql2['id'];
                  $result3 = mysqli_query($conn,"SELECT * FROM prosalg_kom WHERE id2 = '$id'");
                  while($rowsql3= mysqli_fetch_assoc($result3)) {
                  if ($rowsql3['valuta'] != 'DKK'){
                  $salg = $rowsql3['salg'] * 7.5;
                  $kob = $rowsql3['kob'] * 7.5;
		  $antal = $rowsql3['antal'];
                   } else {$kob = $rowsql3['kob']; $salg = $rowsql3['salg']; $antal = $rowsql3['antal'];} 
                  $salg = $salg * $antal;
                  $belob = $salg + $belob;
	           } } }
    
if($x == '0'){
$belob1 = $belob;}
if($x == '1'){
$belob2 = $belob; }
if($x == '2'){
$belob3 = $belob; }
if($x == '3'){
$belob4 = $belob; }
if($x == '4'){
$belob5 = $belob; }
if($x == '5'){
$belob6 = $belob; }
if($x == '6'){
$belob7 = $belob; }
if($x == '7'){
$belob8 = $belob; }
if($x == '8'){
$belob9 = $belob; }
if($x == '9'){
$belob10 = $belob; }
if($x == '10'){
$belob11 = $belob; }
if($x == '11'){
$belob12 = $belob; }
if($x == '12'){
$belob13 = $belob; }
if($x == '13'){
$belob14 = $belob; }
if($x == '14'){
$belob15 = $belob; }
if($x == '15'){
$belob16 = $belob; }
if($x == '16'){
$belob17 = $belob; }
if($x == '17'){
$belob18 = $belob; }
if($x == '18'){
$belob19 = $belob; }
if($x == '19'){
$belob20 = $belob; }
if($x == '20'){
$belob21 = $belob; }
if($x == '21'){
$belob22 = $belob; }
if($x == '22'){
$belob23 = $belob; }
if($x == '23'){
$belob24 = $belob; }
$x++;
} 
$snit0 = $belob1 + $belob2 + $belob3 + $belob4 + $belob5 + $belob6 + $belob7 + $belob8 + $belob9 + $belob10 + $belob11 + $belob12;
$array = array("$belob1","$belob2","$belob3","$belob4","$belob5","$belob6","$belob7","$belob8","$belob9","$belob10","$belob11","$belob12");
$counts = array_count_values($array);
if ($counts['0'] != 12){
$snit0 = $snit0 / (12 - $counts['0']);
} else {$snit0 = 0;}

$snit1 = $belob2 + $belob3 + $belob4 + $belob5 + $belob6 + $belob7 + $belob8 + $belob9 + $belob10 + $belob11 + $belob12 + $belob13;
$array = array("$belob2","$belob3","$belob4","$belob5","$belob6","$belob7","$belob8","$belob9","$belob10","$belob11","$belob12","$belob13");
$counts = array_count_values($array);
if ($counts['0'] != 12){
$snit1 = $snit1 / (12 - $counts['0']);
} else {$snit1 = 0;}

$snit2 = $belob3 + $belob4 + $belob5 + $belob6 + $belob7 + $belob8 + $belob9 + $belob10 + $belob11 + $belob12 + $belob13 + $belob14;
$array = array("$belob3","$belob4","$belob5","$belob6","$belob7","$belob8","$belob9","$belob10","$belob11","$belob12","$belob13","$belob14");
if ($counts['0'] != 12){
$snit2 = $snit2 / (12 - $counts['0']);
} else {$snit2 = 0;}

$snit3 = $belob4 + $belob5 + $belob6 + $belob7 + $belob8 + $belob9 + $belob10 + $belob11 + $belob12 + $belob13 + $belob14 + $belob15;
$array = array("$belob4","$belob5","$belob6","$belob7","$belob8","$belob9","$belob10","$belob11","$belob12","$belob13","$belob14","$belob15");
$counts = array_count_values($array);
if ($counts['0'] != 12){
$snit3 = $snit3 / (12 - $counts['0']);
} else {$snit3 = 0;}

$snit4 = $belob5 + $belob6 + $belob7 + $belob8 + $belob9 + $belob10 + $belob11 + $belob12 + $belob13 + $belob14 + $belob15 + $belob16;
$array = array("$belob5","$belob6","$belob7","$belob8","$belob9","$belob10","$belob11","$belob12","$belob13","$belob14","$belob15","$belob16");
$counts = array_count_values($array);
if ($counts['0'] != 12){
$snit4 = $snit4 / (12 - $counts['0']);
} else {$snit4 = 0;}

$snit5 = $belob6 + $belob7 + $belob8 + $belob9 + $belob10 + $belob11 + $belob12 + $belob13 + $belob14 + $belob15 + $belob16 + $belob17;
$array = array("$belob6","$belob7","$belob8","$belob9","$belob10","$belob11","$belob12","$belob13","$belob14","$belob15","$belob16","$belob17");
$counts = array_count_values($array);
if ($counts['0'] != 12){
$snit5 = $snit5 / (12 - $counts['0']);
} else {$snit5 = 0;}

$snit6 = $belob7 + $belob8 + $belob9 + $belob10 + $belob11 + $belob12 + $belob13 + $belob14 + $belob15 + $belob16 + $belob17 + $belob18;
$array = array("$belob7","$belob8","$belob9","$belob10","$belob11","$belob12","$belob13","$belob14","$belob15","$belob16","$belob17","$belob18");
$counts = array_count_values($array);
if ($counts['0'] != 12){
$snit6 = $snit6 / (12 - $counts['0']);
} else {$snit6 = 0;}

$snit7 = $belob8 + $belob9 + $belob10 + $belob11 + $belob12 + $belob13 + $belob14 + $belob15 + $belob16 + $belob17 + $belob18 + $belob19;
$array = array("$belob8","$belob9","$belob10","$belob11","$belob12","$belob13","$belob14","$belob15","$belob16","$belob17","$belob18","$belob19");
$counts = array_count_values($array);
if ($counts['0'] != 12){
$snit7 = $snit7 / (12 - $counts['0']);
} else {$snit7 = 0;}

$snit8 = $belob9 + $belob10 + $belob11 + $belob12 + $belob13 + $belob14 + $belob15 + $belob16 + $belob17 + $belob18 + $belob19 + $belob20;
$array = array("$belob9","$belob10","$belob11","$belob12","$belob13","$belob14","$belob15","$belob16","$belob17","$belob18","$belob19","$belob20");
$counts = array_count_values($array);
if ($counts['0'] != 12){
$snit8 = $snit8 / (12 - $counts['0']);
} else {$snit8 = 0;}

$snit9 = $belob10 + $belob11 + $belob12 + $belob13 + $belob14 + $belob15 + $belob16 + $belob17 + $belob18 + $belob19 + $belob20 + $belob21;
$array = array("$belob10","$belob11","$belob12","$belob13","$belob14","$belob15","$belob16","$belob17","$belob18","$belob19","$belob20","$belob21");
$counts = array_count_values($array);
if ($counts['0'] != 12){
$snit9 = $snit9 / (12 - $counts['0']);
} else {$snit9 = 0;}

$snit10 = $belob11 + $belob12 + $belob13 + $belob14 + $belob15 + $belob16 + $belob17 + $belob18 + $belob19 + $belob20 + $belob21 + $belob22;
$array = array("$belob11","$belob12","$belob13","$belob14","$belob15","$belob16","$belob17","$belob18","$belob19","$belob20","$belob21","$belob22");
$counts = array_count_values($array);
if ($counts['0'] != 12){
$snit10 = $snit10 / (12 - $counts['0']);
} else {$snit10 = 0;}

$snit11 = $belob12 + $belob13 + $belob14 + $belob15 + $belob16 + $belob17 + $belob18 + $belob19 + $belob20 + $belob21 + $belob22 + $belob23;
$array = array("$belob12","$belob13","$belob14","$belob15","$belob16","$belob17","$belob18","$belob19","$belob20","$belob21","$belob22","$belob23");
$counts = array_count_values($array);
if ($counts['0'] != 12){
$snit11 = $snit11 / (12 - $counts['0']);
} else {$snit11 = 0;}
?>