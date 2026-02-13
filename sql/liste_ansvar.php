<?php

$rapport = $_GET['tag-ansvar'];
$id = $_GET['tag-ansvar'];
   $ans = $_SESSION['uid']; 
   $up_data_date = date('j-m-Y');
   $up_data_date2 = date('Y-m-d', strtotime("$up_data_date"));
     $result = mysqli_query($conn,"SELECT * FROM proservice WHERE id='$id'");
     while($row = mysqli_fetch_assoc($result)) {
   $ans2 = $row['ans'];
     $result = mysqli_query($conn,"SELECT * FROM promed WHERE id='$ans'");
     while($row = mysqli_fetch_assoc($result)) {
	$navn_sql = $row['navn']; }
         mysqli_query($conn,"UPDATE `proservice` SET `ans`='$ans' WHERE id='$id'"); 
$jsonData = array(
    'Employee' => $ans,
);
 
//Encode the array into JSON.
$jsonDataEncoded = json_encode($jsonData);
var_dump($jsonDataEncoded);
$ch = curl_init('http://localhost:8080/');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, "Action=update&table=DebtorOrderClient&property=OrderNumber&propertyvalue=$id&values=$jsonDataEncoded");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/x-www-form-urlencoded',)
);
$result = curl_exec($ch);
$result = json_decode($result);

         mysqli_query($conn,"INSERT INTO `proservice_rapport` (`service_raport`, `timer`, `dato`, `dato2`, `beskivsle`, `ans`) VALUES ('$id','-','$up_data_date','$up_data_date2','$ans Har taget ansvare for opgaven fra $ans2','$ans')");
         $result = mysqli_query("SELECT * FROM proservice_rapport ORDER BY id DESC LIMIT 1");
         while($row = mysqli_fetch_assoc($result)) { 
$_SESSION['tag-ansvar'] = '0';
?>
<div class="top">Du har nu ansvaret for rapport: <?php echo ''.$row['service_raport'].''; ?></div>
<?php } } ?>