<! ø !>
<?php 

     $timer = str_replace(array(","),array("."),$timer);
     $timer50 = str_replace(array(","),array("."),$timer50);
     $timer100 = str_replace(array(","),array("."),$timer100);
     $km = str_replace(array(","),array("."),$km);
     $bro = str_replace(array(","),array("."),$bro);

if ($service_rapport >= '500000'){
$uniservice_rapport = $service_rapport2;
} else {
$uniservice_rapport = $service_rapport;
}

// Load order
$ch = curl_init('http://localhost:8080/');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, "Action=loadorder&type=salesorder&orderno=$uniservice_rapport");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded',));
$result = curl_exec($ch);
$result = json_decode($result, true);
$resultlog = $result[success];
$ip = $_SERVER['REMOTE_ADDR'];
$anslog = $navnsql;
$funk = "load  $uniservice_rapport";
$note = "Svaret fra updatering $resultlog";
// include('tillog.php');
//

// indsæt timer
if (isset($timer)){
$jsonData = array(
    'Item' => $ans,
    'Qty' => $timer,
    'ReferenceNumber' => $serviceid,
    'DoInvoice' => 'false',
);
//Encode the array into JSON.
$jsonDataEncoded = json_encode($jsonData);
$ch = curl_init('http://localhost:8080/');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, "Action=addorderline&type=salesorder&orderno=$uniservice_rapport&values=$jsonDataEncoded");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded',));
$result = curl_exec($ch);
$result = json_decode($result, true);
$resultlog = $result[success];
$ip = $_SERVER['REMOTE_ADDR'];
$anslog = $navnsql;
$funk = "tilfore timer til sag $uniservice_rapport";
$note = "Svaret fra updatering $resultlog";
// include('tillog.php');

}


//

// indsæt timer 50%
if (isset($timer50)){
$jsonData = array(
    'Item' => $ans.'-1',
    'Qty' => $timer50,
    'ReferenceNumber' => $serviceid.'-1',
    'DoInvoice' => 'false',
);
//Encode the array into JSON.
$jsonDataEncoded = json_encode($jsonData);
$ch = curl_init('http://localhost:8080/');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, "Action=addorderline&type=salesorder&orderno=$uniservice_rapport&values=$jsonDataEncoded");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded',));
$result = curl_exec($ch);
$result = json_decode($result, true);
$resultlog = $result[success];
$ip = $_SERVER['REMOTE_ADDR'];
$anslog = $navnsql;
$funk = "tilfore 50 timer til sag $uniservice_rapport";
$note = "Svaret fra updatering $resultlog";
// include('tillog.php');
}
//

// indsæt timer 100%
if (isset($timer100)){
$jsonData = array(
    'Item' => $ans.'-2',
    'Qty' => $timer100,
    'ReferenceNumber' => $serviceid.'-2',
    'DoInvoice' => 'false',
);
//Encode the array into JSON.
$jsonDataEncoded = json_encode($jsonData);
$ch = curl_init('http://localhost:8080/');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, "Action=addorderline&type=salesorder&orderno=$uniservice_rapport&values=$jsonDataEncoded");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded',));
$result = curl_exec($ch);
$result = json_decode($result, true);
$resultlog = $result[success];
$ip = $_SERVER['REMOTE_ADDR'];
$anslog = $navnsql;
$funk = "tilfore 100 timer til sag $uniservice_rapport";
$note = "Svaret fra updatering $resultlog";
// include('tillog.php');
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
    'ReferenceNumber' => $serviceid.'-bil',
    'Text' => $biltext,
    'DoInvoice' => 'false',
);
//Encode the array into JSON.
$jsonDataEncoded = json_encode($jsonData);
$ch = curl_init('http://localhost:8080/');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, "Action=addorderline&type=salesorder&orderno=$uniservice_rapport&values=$jsonDataEncoded");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded',));
$result = curl_exec($ch);
$result = json_decode($result, true);
$resultlog = $result[success];
$ip = $_SERVER['REMOTE_ADDR'];
$anslog = $navnsql;
$funk = "tilfore bil timer til sag $uniservice_rapport";
$note = "Svaret fra updatering $resultlog";
// include('tillog.php');
}
//

// indsæt bro
if (isset($bro)){
$biltext = 'Bro';

$jsonData = array(
    'Item' => 'tekniker.brokorsel',
    'Qty' => $bro,
    'ReferenceNumber' => $serviceid.'-bro',
    'Text' => $biltext,
    'DoInvoice' => 'false',
);
//Encode the array into JSON.
$jsonDataEncoded = json_encode($jsonData);
$ch = curl_init('http://localhost:8080/');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, "Action=addorderline&type=salesorder&orderno=$uniservice_rapport&values=$jsonDataEncoded");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded',));
$result = curl_exec($ch);
$result = json_decode($result, true);
$resultlog = $result[success];
$ip = $_SERVER['REMOTE_ADDR'];
$anslog = $navnsql;
$funk = "tilfore bro timer til sag $uniservice_rapport";
$note = "Svaret fra updatering $resultlog";
// include('tillog.php');
}
//

// Luk order 
$ch = curl_init('http://localhost:8080/');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, "Action=completeorder&type=salesorder&orderno=$uniservice_rapport");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded',));
curl_exec($ch);

 ?>