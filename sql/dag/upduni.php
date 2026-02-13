<! ø !>
<?php 

     $timer = str_replace(array("."),array("."),$timer);
     $timer50 = str_replace(array("."),array("."),$timer50);
     $timer100 = str_replace(array("."),array("."),$timer100);
     $km = str_replace(array("."),array("."),$km);
     $bro = str_replace(array("."),array("."),$bro);



if($timer == ''){
$timer = '0';}

if($service_rapport == $service_rapportrep){
// Load order
$ch = curl_init('http://localhost:8080/');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, "Action=loadorder&type=salesorder&orderno=$service_rapport");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded',));
$result = curl_exec($ch);
$result = json_decode($result, true);
$resultlog = $result[success];
$ip = $_SERVER['REMOTE_ADDR'];
$anslog = $navnsql;
$funk = "load $uniservice_rapport til opdatering";
$note = "Svaret fra updatering $resultlog";
include('tillog.php');
//

// indsæt timer
if (isset($timer)){
$jsonData = array(
    'Item' => $ans,
    'Qty' => $timer,
    'ReferenceNumber' => $id,
    'DoInvoice' => 'false',
);
//Encode the array into JSON.
$jsonDataEncoded = json_encode($jsonData);
$ch = curl_init('http://localhost:8080/');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, "Action=update&table=DebtorOrderLineClient&property=ReferenceNumber&propertyvalue=$id&values=$jsonDataEncoded");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded',));
$result = curl_exec($ch);
print_r ($result = json_decode($result, true));
$resultlog = $result[result];
$ip = $_SERVER['REMOTE_ADDR'];
$anslog = $navnsql;
$funk = "updateret timer til sag $uniservice_rapport";
$note = "Svaret fra updatering $resultlog";
include('tillog.php');

$resultt = $result['error'];
if(isset($resultt)) {
     $timer = str_replace(array(","),array("."),$timer);
$jsonData = array(
    'Item' => $ans,
    'Qty' => $timer,
    'ReferenceNumber' => $id,
    'DoInvoice' => 'false', );

$jsonDataEncoded = json_encode($jsonData);
$ch = curl_init('http://localhost:8080/');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, "Action=addorderline&type=salesorder&orderno=$service_rapport&values=$jsonDataEncoded");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded',));
curl_exec($ch);
}}
//

// indsæt timer 50%
if (isset($timer50)){
$iduni = $id.'-1';
$jsonData = array(
    'Item' => $ans.'-1',
    'Qty' => $timer50,
    'ReferenceNumber' => $id.'-1',
    'DoInvoice' => 'false',
);
//Encode the array into JSON.
$jsonDataEncoded = json_encode($jsonData);
$ch = curl_init('http://localhost:8080/');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, "Action=update&table=DebtorOrderLineClient&property=ReferenceNumber&propertyvalue=$iduni&values=$jsonDataEncoded");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded',));
$result = curl_exec($ch);
$result = json_decode($result, true);
$result50 = $result['error'];
if(isset($result50)) {
     $timer50 = str_replace(array(","),array("."),$timer50);
$jsonData = array(
    'Item' => $ans.'-1',
    'Qty' => $timer50,
    'ReferenceNumber' => $id.'-1',
    'DoInvoice' => 'false',);

$jsonDataEncoded = json_encode($jsonData);
$ch = curl_init('http://localhost:8080/');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, "Action=addorderline&type=salesorder&orderno=$service_rapport&values=$jsonDataEncoded");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded',));
curl_exec($ch);
}}
//

// indsæt timer 100%
if (isset($timer100)){
$iduni = $id.'-2';
$jsonData = array(
    'Item' => $ans.'-2',
    'Qty' => $timer100,
    'ReferenceNumber' => $id.'-2',
    'DoInvoice' => 'false',
);
//Encode the array into JSON.
$jsonDataEncoded = json_encode($jsonData);
$ch = curl_init('http://localhost:8080/');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, "Action=update&table=DebtorOrderLineClient&property=ReferenceNumber&propertyvalue=$iduni&values=$jsonDataEncoded");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded',));
$result = curl_exec($ch);
$result = json_decode($result, true);
$result100 = $result['error'];
if(isset($result100)) {
     $timer100 = str_replace(array(","),array("."),$timer100);
$jsonData = array(
    'Item' => $ans.'-2',
    'Qty' => $timer100,
    'ReferenceNumber' => $id.'-2',
    'DoInvoice' => 'false',);

$jsonDataEncoded = json_encode($jsonData);
$ch = curl_init('http://localhost:8080/');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, "Action=addorderline&type=salesorder&orderno=$service_rapport&values=$jsonDataEncoded");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded',));
curl_exec($ch);
}}
//

// indsæt bil
if (isset($bil)){
$iduni = $id.'-bil';
if ($bil == '093997'){
$bil = 'tekniker.ejenbil.korsel';
$biltext = 'KÃ¸rsel ejen bil '. $ans;
}
$jsonData = array(
    'Item' => $bil,
    'Qty' => $km,
    'ReferenceNumber' => $id.'-bil',
    'Text' => $biltext,
    'DoInvoice' => 'false',
);
//Encode the array into JSON.
$jsonDataEncoded = json_encode($jsonData);
$ch = curl_init('http://localhost:8080/');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, "Action=update&table=DebtorOrderLineClient&property=ReferenceNumber&propertyvalue=$iduni&values=$jsonDataEncoded");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded',));
$result = curl_exec($ch);
$result = json_decode($result, true);
$resultbil = $result['error'];
if(isset($resultbil)) {
$ch = curl_init('http://localhost:8080/');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, "Action=addorderline&type=salesorder&orderno=$service_rapport&values=$jsonDataEncoded");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded',));
curl_exec($ch);
}}
//

// indsæt bro
if (isset($bro)){
$iduni = $id.'-bro';
$biltext = 'Bro';
$jsonData = array(
    'Item' => 'tekniker.brokorsel',
    'Qty' => $bro,
    'ReferenceNumber' => $id.'-bro',
    'Text' => $biltext,
    'DoInvoice' => 'false',
);
//Encode the array into JSON.
$jsonDataEncoded = json_encode($jsonData);
$ch = curl_init('http://localhost:8080/');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, "Action=update&table=DebtorOrderLineClient&property=ReferenceNumber&propertyvalue=$iduni&values=$jsonDataEncoded");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded',));
$result = curl_exec($ch);
$result = json_decode($result, true);
$resultbro = $result['error'];
if(isset($resultbro)) {
$ch = curl_init('http://localhost:8080/');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, "Action=addorderline&type=salesorder&orderno=$service_rapport&values=$jsonDataEncoded");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded',));
curl_exec($ch);
}}
//

// Luk order 
$ch = curl_init('http://localhost:8080/');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, "Action=completeorder&type=salesorder&orderno=$service_rapport");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded',));
curl_exec($ch);
//

} else {

// Load order
$ch = curl_init('http://localhost:8080/');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, "Action=loadorder&type=salesorder&orderno=$service_rapportrep");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded',));
curl_exec($ch);
//

$ch = curl_init('http://localhost:8080/');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, "Action=delete&table=DebtorOrderLineClient&property=ReferenceNumber&propertyvalue=$id");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded',));
curl_exec($ch);

$uniid = $id.'-1'; 
$ch = curl_init('http://localhost:8080/');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, "Action=delete&table=DebtorOrderLineClient&property=ReferenceNumber&propertyvalue=$uniid");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded',));
curl_exec($ch);

$uniid = $id.'-2'; 
$ch = curl_init('http://localhost:8080/');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, "Action=delete&table=DebtorOrderLineClient&property=ReferenceNumber&propertyvalue=$uniid");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded',));
curl_exec($ch);

$uniid = $id.'-bil'; 
$ch = curl_init('http://localhost:8080/');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, "Action=delete&table=DebtorOrderLineClient&property=ReferenceNumber&propertyvalue=$uniid");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded',));
curl_exec($ch);

$uniid = $id.'-bro'; 
$ch = curl_init('http://localhost:8080/');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, "Action=delete&table=DebtorOrderLineClient&property=ReferenceNumber&propertyvalue=$uniid");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded',));
curl_exec($ch);


// Luk order 
$ch = curl_init('http://localhost:8080/');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, "Action=completeorder&type=salesorder&orderno=$service_rapportrep");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded',));
curl_exec($ch);
//

// Load order
$ch = curl_init('http://localhost:8080/');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, "Action=loadorder&type=salesorder&orderno=$service_rapport");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded',));
curl_exec($ch);
//

// indsæt timer
     $timer = str_replace(array(","),array("."),$timer);
if (isset($timer)){
$jsonData = array(
    'Item' => $ans,
    'Qty' => $timer,
    'ReferenceNumber' => $id,
    'DoInvoice' => 'false',
);
//Encode the array into JSON.
$jsonDataEncoded = json_encode($jsonData);
$ch = curl_init('http://localhost:8080/');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, "Action=addorderline&type=salesorder&orderno=$service_rapport&values=$jsonDataEncoded");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded',));
curl_exec($ch);
}
//

// indsæt timer 50%
     $timer50 = str_replace(array(","),array("."),$timer50);
if (isset($timer50)){
$jsonData = array(
    'Item' => $ans.'-1',
    'Qty' => $timer50,
    'ReferenceNumber' => $id.'-1',
    'DoInvoice' => 'false',
);
//Encode the array into JSON.
$jsonDataEncoded = json_encode($jsonData);
$ch = curl_init('http://localhost:8080/');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, "Action=addorderline&type=salesorder&orderno=$service_rapport&values=$jsonDataEncoded");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded',));
curl_exec($ch);
}
//

// indsæt timer 100%
     $timer100 = str_replace(array(","),array("."),$timer100);
if (isset($timer100)){
$jsonData = array(
    'Item' => $ans.'-2',
    'Qty' => $timer100,
    'ReferenceNumber' => $id.'-2',
    'DoInvoice' => 'false',
);
//Encode the array into JSON.
$jsonDataEncoded = json_encode($jsonData);
$ch = curl_init('http://localhost:8080/');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, "Action=addorderline&type=salesorder&orderno=$service_rapport&values=$jsonDataEncoded");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded',));
curl_exec($ch);
}
//

// indsæt bil
if (isset($bil)){
if ($bil == '093997'){
$bil = 'tekniker.ejenbil.korsel';
$biltext = 'KÃ¸rsel ejen bil '. $ans;
}

$jsonData = array(
    'Item' => $bil,
    'Qty' => $km,
    'ReferenceNumber' => $id.'-bil',
    'Text' => $biltext,
    'DoInvoice' => 'false',
);
//Encode the array into JSON.
$jsonDataEncoded = json_encode($jsonData);
$ch = curl_init('http://localhost:8080/');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, "Action=addorderline&type=salesorder&orderno=$service_rapport&values=$jsonDataEncoded");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded',));
curl_exec($ch);
}
//

// indsæt bro
if (isset($bro)){
$biltext = 'Bro';

$jsonData = array(
    'Item' => 'tekniker.brokorsel',
    'Qty' => $bro,
    'ReferenceNumber' => $id.'-bro',
    'Text' => $biltext,
    'DoInvoice' => 'false',
);
//Encode the array into JSON.
$jsonDataEncoded = json_encode($jsonData);
$ch = curl_init('http://localhost:8080/');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, "Action=addorderline&type=salesorder&orderno=$service_rapport&values=$jsonDataEncoded");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded',));
curl_exec($ch);
}
//

// Luk order 
$ch = curl_init('http://localhost:8080/');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, "Action=completeorder&type=salesorder&orderno=$service_rapport");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded',));
curl_exec($ch);
//

}


 ?>