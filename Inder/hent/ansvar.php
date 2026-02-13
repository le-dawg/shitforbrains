<?php
   if(isset($_POST['ans_hent'])) {
   $rapport = $_POST['id'];
     $test = 0;
   }  
   if(isset($_POST['giv_ans_paa'])){
   $rapport = $_POST['id'];
   $ans = $_POST['ans'];
   $id = $_POST['id'];
   $up_data_date = date('j-m-Y');
   $up_data_date2 = date('Y-m-d', strtotime("$up_data_date"));
     $result = mysqli_query($conn, "SELECT * FROM proservice WHERE id='$id'");
     while($row = mysqli_fetch_assoc($result)) {
     $ans2 = $row['ans'];
     $result = mysqli_query($conn, "SELECT * FROM promed WHERE id='$ans'");
     while($row = mysqli_fetch_assoc($result)) {
	$navn_sql = $row['navn']; }
         mysqli_query($conn, "UPDATE `proservice` SET `ans`='$ans' WHERE id='$id'"); 
$con2 = odbc_connect("Driver={SQL Server};Server=PROSERVER\BKUPEXEC;Database=C530; CharacterSet => UTF-8", 'proteknik2', 'pro2060');
$sql = "UPDATE ORDKART SET SXLGER='$ans',VORREF='$navn_sql' WHERE DATASET ='DAT' AND NUMMER ='    $id'";
$resultSQL = odbc_exec($con2, $sql);
         mysqli_query($conn, "INSERT INTO `proservice_rapport` (`service_raport`, `timer`, `dato`, `dato2`, `beskivsle`, `ans`) VALUES ('$id','-','$up_data_date','$up_data_date2','$ans2 Har givet ansvaret for opgaven til $ans','$ans2')");
         $result = mysqli_query($conn, "SELECT * FROM proservice_rapport ORDER BY id DESC LIMIT 1");
         while($row = mysqli_fetch_assoc($result)) { header("Location:index.php?side=hentrapport&id=$id");     
 } } } 
   $min2 = '9999';
   $max2 = '70000';
   if (isset($test)) { 
   if ($rapport > $min2 && $max2 > $rapport) { ?>
   <div class="top2">Denne sag er en rød rapport.</div>
<?php }} ?>