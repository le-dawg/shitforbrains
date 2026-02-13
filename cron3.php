<?php
include_once("config.php");

$result  = mysqli_query($conn, "SELECT * FROM proservice WHERE status_kode = '9' AND fakbelob = '0' limit 2000");
while($row = mysqli_fetch_assoc($result)) {
$idfak = $row['id'];
echo $idfak.' ';

	// Build Query
	$json_str = file_get_contents("http://localhost:8080/?table=DebtorInvoiceClient&filters=OrderNumber=$idfak");
	// Do Search
	$test2 = json_decode($json_str, true);
        $test = $test2[0];
        $fakbelob = $test[NetAmount];

if(!isset($fakbelob)){
$fakbelob = '0';

	// Build Query
	$json_str = file_get_contents("http://localhost:8080/?table=DebtorOrderClient&filters=OrderNumber=$idfak");
	// Do Search
	$test4 = json_decode($json_str, true);
        $test3 = $test4[0];
        $denerder = $test3[OrderNumber];

if(!isset($denerder)){
$fakbelob = '-';
} }

mysqli_query($conn, "UPDATE `proservice` SET `fakbelob`='$fakbelob' WHERE id='$idfak'"); 

echo $fakbelob;

?>
<br>
<?php
}
?>