<! ø !>
<?php 

$antal = preg_replace('/[^0-9]/', '', $antal);

// Load order
$ch = curl_init('http://localhost:8080/');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, "Action=loadorder&type=salesorder&orderno=$id");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded',));
$result = curl_exec($ch);
// print_r ($result = json_decode($result, true));
//

// indsæt kompont
//Encode the array into JSON.
if($antal == ''){
$antal = '0';
}

$jsonData = array(
    'Item' => $vare_nr,
    'Qty' => $antal,
    'ReferenceNumber' => $serviceid,
    'Warehouse' => $lagersted,
    'DoInvoice' => 'false',

);

$jsonDataEncoded = json_encode($jsonData);
$ch = curl_init('http://localhost:8080/');
print_r ($ch);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, "Action=addorderline&type=salesorder&orderno=$id&values=$jsonDataEncoded");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded',));
$result = curl_exec($ch);
// print_r ($result);
$result = json_decode($result, true);
// print_r ($result);
$resultlog = $result[success];
$ip = $_SERVER['REMOTE_ADDR'];
$anslog = $navnsql;
$funk = "tilfore vare til sag $uniservice_rapport";
$note = "Svaret fra updatering $resultlog";
include('tillog.php');


//


$resultt = $result['success'];
if(!isset($resultt)) {

$jsonData = array(
    'Item' => 'tekniker.oprette',
    'Qty' => $antal,
    'Text' => $vare_nr.' - '.$vare_beskrivelse.' - Type id: '.$type.'Varen kommer fra '.$levendor,
    'ReferenceNumber' => $serviceid,
    'DoInvoice' => 'false',

);

$jsonDataEncoded = json_encode($jsonData);
$ch = curl_init('http://localhost:8080/');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, "Action=addorderline&type=salesorder&orderno=$id&values=$jsonDataEncoded");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded',));
$result = curl_exec($ch);
$result = json_decode($result, true);
// print_r ($result);
$resultlog = $result[success];
$ip = $_SERVER['REMOTE_ADDR'];
$anslog = $navnsql;
$funk = "tilfore vare til sag $uniservice_rapport";
$note = "Svaret fra updatering $resultlog";
include('tillog.php');
}

// Luk order 
$ch = curl_init('http://localhost:8080/');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, "Action=completeorder&type=salesorder&orderno=$id");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded',));
$result = curl_exec($ch);
$result = json_decode($result, true);
// print_r ($result);
 ?>