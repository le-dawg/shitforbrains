<! ø !>
<?php
if(isset($_POST['send_rapp'])) {
     $ans = $_SESSION['uid'];
     $id = $_GET['id'];
     $dato_send = date('d-m-Y');
     $dato_afs = date('Y-m-d H:i:s');
     $status = $_POST['status'];
     $forsendsle = $_POST['forsendelse'];
     $vaegt = $_POST['vaegt'];
         mysqli_query($conn,"UPDATE `proservice` SET `forsendelse`='$forsendsle',`godkent`='$vaegt',`datoafslu` = '$dato_afs'  WHERE id='$id'"); 
if ($forsendsle == 'POST.STD.DK'){
$forsendsle = 'POST.STD.DK.'.$vaegt.'KG';
Echo $forsendsle;
}
if ($forsendsle == 'POST.EKSP.DK'){
$forsendsle = 'POST.EKSP.DK.'.$vaegt.'KG';
} 
if ($forsendsle == 'POST.STD.EU'){
$forsendsle = 'POST.STD.EU.'.$vaegt.'KG';
} 
if ($forsendsle == 'POST.EKSP.EU'){
$forsendsle = 'POST.EKSP.EU.'.$vaegt.'KG';
} 
if ($forsendsle == 'POST.EKSP.UD'){
$forsendsle = 'POST.EKSP.UD.'.$vaegt.'KG';
} 


if($_SESSION['afdeling'] == LJ){
$Afdeling = Viby;
}
if($_SESSION['afdeling'] == VJ){
$Afdeling = JYL;
}

// Load order
$ch = curl_init('http://localhost:8080/');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, "Action=loadorder&type=salesorder&orderno=$id");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded',));
curl_exec($ch);
//


$jsonData = array(
    'Employee' => $ans,
);
$jsonDataEncoded = json_encode($jsonData);

$jsonData = array(
    'afsluttet' => $dato_send,
    'Afdeling' => $Afdeling,
);
$jsonDataEncoded2 = json_encode($jsonData);


curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, "Action=update&table=DebtorOrderClient&property=OrderNumber&propertyvalue=$id&values=$jsonDataEncoded&customfields=$jsonDataEncoded2");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded',));
$result = curl_exec($ch);
$result = json_decode($result, true);

$jsonData = array(
    'Item' => $forsendsle,
    'Qty' => '1', );
$jsonDataEncoded = json_encode($jsonData);
$ch = curl_init('http://localhost:8080/');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, "Action=addorderline&type=salesorder&orderno=$id&values=$jsonDataEncoded");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded',));
curl_exec($ch);

$jsonData = array(
    'Item' => $status,
    'Qty' => '0', );
$jsonDataEncoded = json_encode($jsonData);
$ch = curl_init('http://localhost:8080/');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, "Action=addorderline&type=salesorder&orderno=$id&values=$jsonDataEncoded");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded',));
curl_exec($ch);

$jsonData = array(
    'Item' => 'ADM',
    'Qty' => '1', );
$jsonDataEncoded = json_encode($jsonData);
$ch = curl_init('http://localhost:8080/');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, "Action=addorderline&type=salesorder&orderno=$id&values=$jsonDataEncoded");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded',));
curl_exec($ch);


$ch = curl_init('http://localhost:8080/');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, "Action=completeorder&type=salesorder&orderno=$id");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded',));
curl_exec($ch);


if($id > '500000'){    
?>
<script>
window.location="../prosalg/salgsrapport.php?id=<?php echo $id ?>&komp=ja";
</script>
<?php } else { ?>
<script>
window.location="../teknik/servicerapport_kontor_pdf.php?id=<?php echo $id ?>";
</script>  
<?php  
} }
?>