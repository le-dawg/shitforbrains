<?php 

if ($id >= '500000'){
$id = $id2;
}

$ch = curl_init('http://localhost:8080/');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, "Action=loadorder&type=salesorder&orderno=$levendor");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded',));
curl_exec($ch);

$json_str = file_get_contents("http://localhost:8080/?table=DebtorClient&filters=Phone=$telefon;Account=$uniid");
$test2 = json_decode($json_str, true);
echo $erdernoget = $test2['error'];

if (!isset($erdernoget)){

$jsonData = array(
    'CompanyRegNo' => $cvr,
    'EAN' => $ean,
    'InvoiceEmail' => $fakmail,
);

$jsonDataEncoded = json_encode($jsonData);

$ch = curl_init('http://localhost:8080/');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, "Action=update&table=DebtorClient&property=Account&propertyvalue=$uniid&values=$jsonDataEncoded");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/x-www-form-urlencoded',)
);


$result = curl_exec($ch);

}

$jsonData = array(
    'Requisition' => $revk,
    'YourRef' => $d_ref,
    'Employee' => $ans,
    'DeliveryName' => $navn_lev,
    'DeliveryAddress1' => $navn_lev,
    'DeliveryAddress2' => $adresse_lev,
    'DeliveryZipCode' => $post_lev,
    'DeliveryCity' => $by_lev,
);

$jsonDataEncoded = json_encode($jsonData);

$ch = curl_init('http://localhost:8080/');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, "Action=update&table=DebtorOrderClient&property=OrderNumber&propertyvalue=$id&values=$jsonDataEncoded");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/x-www-form-urlencoded',)
);
$result = curl_exec($ch);

curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, "Action=completeorder&type=salesorder&orderno=$id");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/x-www-form-urlencoded',)
);
$result = curl_exec($ch);
$result = json_decode($result);

?>