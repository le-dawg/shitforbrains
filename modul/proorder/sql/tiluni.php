<! ø !>
<?php 

$antal = preg_replace('/[^0-9]/', '', $antal);

// Load order
$ch = curl_init('http://localhost:8080/');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, "Action=loadorder&type=salesorder&orderno=$levendor");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded',));
curl_exec($ch);
//
if($type == 'LYT'){

$kap2 = preg_replace("/[^0-9]/", '', $kap);
$volt2 = preg_replace("/[^0-9]/", '', $volt);
$vare_nruni = 'LYT.'.$kap2.'UF.'.$volt2.'V';
} else {$vare_nruni = $vare_nr; }
// indsæt kompont
//Encode the array into JSON.
if($antal == ''){
$antal = '0';
}

$jsonData = array(
    'Item' => $vare_nruni,
    'Qty' => $antal,
    'ReferenceNumber' => $id2,
    'DoInvoice' => 'false',

);
$jsonDataEncoded = json_encode($jsonData);
$ch = curl_init('http://localhost:8080/');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, "Action=addorderline&type=salesorder&orderno=$levendor&values=$jsonDataEncoded");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded',));
$result = curl_exec($ch);
$result = json_decode($result, true);
//


$resultt = $result['success'];


if(!isset($resultt)) {

if($type != 'LYT'){
if ($service_report == 'RS' || $service_report == 'FARNELL'){
$vare_nr2 = preg_replace('/[^0-9]/', '', $vare_nruni);
if ($service_report == 'RS') {
$vare_nr2 = '55'. $vare_nr2; }
if ($service_report == 'FARNELL') {
$vare_nr2 = '66'. $vare_nr2; }
} }

$vare_nruni = str_replace("-",".",$vare_nruni);
$vare_nruni = str_replace(",",".",$vare_nruni);
$vare_nruni = str_replace("/",".",$vare_nruni);
$vare_nruni = str_replace(" ",".",$vare_nruni);
$vare_nruni = str_replace(".....",".",$vare_nruni);
$vare_nruni = str_replace("....",".",$vare_nruni);
$vare_nruni = str_replace("...",".",$vare_nruni);
$vare_nruni = str_replace("..",".",$vare_nruni);

$vare_nr2 = $vare_nruni;

$jsonData = array(
    'Item' => $vare_nr2,
    'Qty' => $antal,
    'ReferenceNumber' => $id2,
    'DoInvoice' => 'false',

);

$jsonDataEncoded = json_encode($jsonData);

$ch = curl_init('http://localhost:8080/');

curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, "Action=addorderline&type=salesorder&orderno=$levendor&values=$jsonDataEncoded");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded',));
$resulttt = curl_exec($ch);
$resulttt = json_decode($resulttt, true);
$resultttt = $resulttt['success'];

if(!isset($resultttt)) {
$jsonData = array(
    'Item' => $vare_nr2,
    'Name' => 'Automaskisk oprette vare " '. $vare_beskrivelse .' "',
    'Currency1' => 'DKK',
    'Decimals' => '2',
    'ItemType' => 'Vare',
    'Unit' => 'stk',
    'SalesUnit' => 'stk',
    'CostModel' => 'FIFO',
    'Group' => 'VAERKSTED',
);

$jsonDataEncoded = json_encode($jsonData);

$ch = curl_init('http://localhost:8080/');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, "Action=insert&table=InvItemClient&values=$jsonDataEncoded");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded',));
$resulttt = curl_exec($ch);
$resulttt = json_decode($resulttt, true);
echo $resultttt = $resulttt['success'];
echo $resultttt2 = $resulttt['error'];

$jsonData = array(
    'Item' => $vare_nr2,
    'Qty' => $antal,
    'ReferenceNumber' => $id2,
    'DoInvoice' => 'false',

);
$jsonDataEncoded = json_encode($jsonData);
$ch = curl_init('http://localhost:8080/');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, "Action=addorderline&type=salesorder&orderno=$levendor&values=$jsonDataEncoded");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded',));
curl_exec($ch);
}

 }

// Luk order 
$ch = curl_init('http://localhost:8080/');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, "Action=completeorder&type=salesorder&orderno=$levendor");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded',));
curl_exec($ch);


$lukker = 'JA';
if ($lukker != 'JA'){

if ($afd == 'LJ'){
$afdadd1 = 'Fabriksvaenget 2 B';
$afdpost = '4130';
$afdby = 'Viby Sj';

}
if ($afd == 'VJ'){
$afdadd1 = 'Hjulmagervej 2 B';
$afdpost = '7100';
$afdby = 'Vejle';
}

if ($service_report == 'RS' || $service_report == 'FARNELL' || $service_report == 'CYPAX'){
if ($service_report == 'RS'){
$account = '38169900';
}
if ($service_report == 'FARNELL'){
$account = '44536644';
}
if ($service_report == 'CYPAX'){
$account = '97101188';
}

echo $account;

$json_str = file_get_contents("http://localhost:8080/?table=CreditorOrderClient&filters=Account=$account;DeliveryZipCode=$afdpost;approved=false");
// Do Search
$test2 = json_decode($json_str, true);
$erdernoget2 = $test2['error'];
$erdernogetindkob = $test2['0'];
print_r ($indkobnr = $erdernogetindkob['_OrderNumber']);

if(isset($erdernoget2)) {

$result  = mysqli_query($conn, "SELECT * FROM prolob WHERE id='1'");
           while($row = mysqli_fetch_assoc($result)) { 
	   $indkobnr = $row['indkobnr']; 
print_r	   ($indkobnr = $indkobnr + 1); }

$ch = curl_init('http://localhost:8080/');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, "Action=neworder&type=purchaseorder&debtor=$account&orderno=$indkobnr");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/x-www-form-urlencoded',));
$result = curl_exec($ch);
$result = json_decode($result, true);

$ch = curl_init('http://localhost:8080/');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, "Action=completeorder&type=purchaseorder&orderno=$indkobnr");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded',));
$result = curl_exec($ch);
$result = json_decode($result, true);

$jsonData = array(
    'DeliveryName' => 'Pro-Consult A/S',
    'DeliveryAddress1' => $afdadd1,
    'DeliveryZipCode' => $afdpost,
    'DeliveryCity' => $afdby,
    'Currency' => DKK,
);
$jsonDataEncoded = json_encode($jsonData);

$ch = curl_init('http://localhost:8080/');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, "Action=update&table=CreditorOrderClient&property=OrderNumber&propertyvalue=$indkobnr&values=$jsonDataEncoded");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/x-www-form-urlencoded',)
);
$result = curl_exec($ch);
$result = json_decode($result, true);

}

$ch = curl_init('http://localhost:8080/');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, "Action=loadorder&type=purchaseorder&orderno=$indkobnr");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded',));
curl_exec($ch);
//


// indsæt kompont
//Encode the array into JSON.
if($antal == ''){
$antal = '0';
}

$jsonData = array(
    'Item' => $vare_nr2,
    'Qty' => $antal,
    'ReferenceNumber' => $id2,

);
$jsonDataEncoded = json_encode($jsonData);

$jsonData = array(
    'sagsrapport' => $levendor,
);
$jsonDataEncoded2 = json_encode($jsonData);


$ch = curl_init('http://localhost:8080/');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, "Action=addorderline&type=purchaseorder&orderno=$indkobnr&values=$jsonDataEncoded&customfields=$jsonDataEncoded2");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded',));
$result = curl_exec($ch);
$result = json_decode($result, true);

$ch = curl_init('http://localhost:8080/');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, "Action=completeorder&type=purchaseorder&orderno=$indkobnr");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded',));
$result = curl_exec($ch);
$result = json_decode($result, true);


mysqli_query($conn, "UPDATE `prolob` SET `indkobnr`='$indkobnr' WHERE id='1'"); 



} }
 ?>