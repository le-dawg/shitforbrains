<?php

// Load order
$ch = curl_init('http://localhost:8080/');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, "Action=loadorder&type=salesorder&orderno=$service_raport");
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
//

$iduni = $id.'-1';
$ch = curl_init('http://localhost:8080/');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, "Action=delete&table=DebtorOrderLineClient&property=ReferenceNumber&propertyvalue=$iduni");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded',));
curl_exec($ch);
//

$iduni = $id.'-2';
$ch = curl_init('http://localhost:8080/');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, "Action=delete&table=DebtorOrderLineClient&property=ReferenceNumber&propertyvalue=$iduni");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded',));
curl_exec($ch);
//

$iduni = $id.'-bil';
$ch = curl_init('http://localhost:8080/');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, "Action=delete&table=DebtorOrderLineClient&property=ReferenceNumber&propertyvalue=$iduni");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded',));
curl_exec($ch);
//

$iduni = $id.'-bro';
$ch = curl_init('http://localhost:8080/');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, "Action=delete&table=DebtorOrderLineClient&property=ReferenceNumber&propertyvalue=$iduni");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded',));
curl_exec($ch);
//

// Luk order 
$ch = curl_init('http://localhost:8080/');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, "Action=completeorder&type=salesorder&orderno=$service_raport");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded',));
curl_exec($ch);
//

?>