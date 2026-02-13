<?php
$x = 0;
$con2 = odbc_connect("Driver={SQL Server};Server=PROSERVER\BKUPEXEC;Database=C530; CharacterSet => UTF-8", 'proteknik2', 'pro2060');

while($x <= 23) {

$day = date('Y');
$day = date('Y-m-d H:i:s', strtotime("2017-12-11 00:00:00 -$x month"));

$fak2 = '0';

$week_start = date('Y-m-d 00:00:00', strtotime($day. "first day of this month"));
$week_end = date('Y-m-d 23:59:59', strtotime($day. "last day of this month"));
 
	 $where = array();
         $result = mysqli_query($conn,"SELECT * FROM promed WHERE afd='LJ' and id!='1' ORDER BY id DESC");
         while($rowsqllej = mysqli_fetch_assoc($result)) {
	 $ans = $rowsqllej['id']; 
         $where[] = ("dato3 <= '$week_end' AND dato3 >= '$week_start' AND ans='$ans' AND ind_kode != '5' AND ind_kode != '6' AND flag != 'ROD'"); }
         $where = implode(' OR ', $where);

         $result = mysqli_query($conn,"SELECT * FROM proservice WHERE $where ");
                  while($rowsql= mysqli_fetch_assoc($result)) { 
                  $id = $rowsql['id'];
if($rowsql['status_kode'] == '9'){
if($rowsql['flag'] == 'ROD'){

$querySQL = "SELECT VAREBELXB FROM ORDKARTARKIV WHERE DATASET='DAT' AND NUMMER = '     $id'" ;
} else {
$querySQL = "SELECT VAREBELXB FROM ORDKARTARKIV WHERE DATASET='DAT' AND NUMMER = '    $id'" ;
}		
	$resultSQL = odbc_exec($con2, $querySQL);
	while(odbc_fetch_row($resultSQL)){
  		$fak = odbc_result($resultSQL, 1);
		$fak = iconv("ISO-8859-1", "UTF-8//TRANSLIT//IGNORE", $fak);

$fak2 = $fak + $fak2;

} } }
   
if($x == '0'){
$belob1 = $fak2; }
if($x == '1'){
$belob2 = $fak2; }
if($x == '2'){
$belob3 = $fak2; }
if($x == '3'){
$belob4 = $fak2; }
if($x == '4'){
$belob5 = $fak2; }
if($x == '5'){
$belob6 = $fak2; }
if($x == '6'){
$belob7 = $fak2; }
if($x == '7'){
$belob8 = $fak2; }
if($x == '8'){
$belob9 = $fak2; }
if($x == '9'){
$belob10 = $fak2; }
if($x == '10'){
$belob11 = $fak2; }
if($x == '11'){
$belob12 = $fak2; }
if($x == '12'){
$belob13 = $fak2; }
if($x == '13'){
$belob14 = $fak2; }
if($x == '14'){
$belob15 = $fak2; }
if($x == '15'){
$belob16 = $fak2; }
if($x == '16'){
$belob17 = $fak2; }
if($x == '17'){
$belob18 = $fak2; }
if($x == '18'){
$belob19 = $fak2; }
if($x == '19'){
$belob20 = $fak2; }
if($x == '20'){
$belob21 = $fak2; }
if($x == '21'){
$belob22 = $fak2; }
if($x == '22'){
$belob23 = $fak2; }
if($x == '23'){
$belob24 = $fak2; }
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
} else {$snit6 = 0;}

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