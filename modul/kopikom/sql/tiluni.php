<! ø !>
<?php 

$antal = preg_replace('/[^0-9]/', '', $antal);

// Load order
$ch = curl_init('http://localhost:8080/');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, "Action=loadorder&type=salesorder&orderno=$sqlrapp");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded',));
$result3 = curl_exec($ch);
//

// indsæt kompont
//Encode the array into JSON.
if($antal == ''){
$antal = '0';
}

$jsonData = array(
    'Item' => $varenr,
    'Qty' => $antal,
    'ReferenceNumber' => $id2,
    'DoInvoice' => 'false',

);

$jsonDataEncoded = json_encode($jsonData);
$ch = curl_init('http://localhost:8080/');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, "Action=addorderline&type=salesorder&orderno=$sqlrapp&values=$jsonDataEncoded");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded',));
$result3 = curl_exec($ch);
$result3 = json_decode($result3, true);


//

$resultt = $result3['success'];
if(!isset($resultt)) {
$jsonData = array(
    'Item' => 'tekniker.oprette',
    'Qty' => $antal,
    'Text' => $varenr.' - '.$varebe.' - Type id: '.$type.' Varen kommer fra '.$levendor,
    'ReferenceNumber' => $id2,
    'DoInvoice' => 'false',

);

$jsonDataEncoded = json_encode($jsonData);
$ch = curl_init('http://localhost:8080/');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, "Action=addorderline&type=salesorder&orderno=$sqlrapp&values=$jsonDataEncoded");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded',));
$result3 = curl_exec($ch);
}

// Luk order 
$ch = curl_init('http://localhost:8080/');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, "Action=completeorder&type=salesorder&orderno=$sqlrapp");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded',));
$result3 = curl_exec($ch);

 ?>