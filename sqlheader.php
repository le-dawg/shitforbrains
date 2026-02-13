<?php 
 if(isset($_POST['ja_afslut'])) {
$id = $_GET['id'];
$date2 = date("Y-m-d H:i:s");
mysqli_query($conn, "UPDATE `proservice` SET `status_kode`='9',`dato3`='$date2' WHERE id='$id'");
header("Location:index.php?side=liste&liste=$_SESSION[uid]&sort=id");
} 

if(isset($_POST['nej_afslut'])) {
header("Location:index.php?side=$_SESSION[p2_id]");
}

if(isset($_POST['sql_ret_opgaver'])) {
     $id = $_POST['id'];
     $ans = $_SESSION['uid']; 
     $firma_navn = $_POST['firma_navn'];
     $navn = $_POST['navn'];
     $adresse = $_POST['adresse'];
     $navn_lev = $_POST['navn_lev'];
     $adresse_lev = $_POST['adresse_lev'];
     $post_lev = $_POST['post_lev'];
     $land_lev = $_POST['land_lev'];
     $post = $_POST['post'];
     $d_ref = $_POST['d_ref'];
     $revk = $_POST['revk'];
     $land = $_POST['land'];
     $telefon = $_POST['telefon'];
     $mobil = $_POST['mobil'];
     $mail = $_POST['mail'];
     $fabrikat = $_POST['fabrikat'];
     $type = $_POST['type'];
     $maskine = $_POST['maskine'];
     $sn_nr = $_POST['sn_nr'];
     $pris_s = $_POST['pris_s'];
     $pris_n = $_POST['pris_n'];
     $pris_b = $_POST['pris_b'];
     $pris_k = $_POST['pris_k'];
     $baaf = $_POST['baaf'];
     $note = $_POST['note'];

        if ($_GET['id'] >= '500000'){
         mysqli_query($conn, "UPDATE `prosalg` SET `Navn_lev`='$navn_lev',`Adresse_lev`='$adresse_lev',`post_lev`='$post_lev',`land_lev`='$land_lev',`mail`='$mail',`firma_navn`='$firma_navn',`navn`='$navn',`adresse`='$adresse',`d_ref`='$d_ref',`post`='$post',`revk`='$revk',`land`='$land',`telefon`='$telefon',`mobil`='$mobil',`baaf`='$baaf',`note`='$note' WHERE id='$_GET[id]'"); 
         $result = mysqli_query($conn, "SELECT * FROM prosalg WHERE id=$_GET[id]");
         while($row = mysqli_fetch_assoc($result)) {
         $id2 = $row['id2'];
         echo $id2;
        mysqli_query($conn, "UPDATE `proservice` SET `Navn_lev`='$navn_lev',`Adresse_lev`='$adresse_lev',`post_lev`='$post_lev',`land_lev`='$land_lev',`mail`='$mail',`firma_navn`='$firma_navn',`navn`='$navn',`adresse`='$adresse',`d_ref`='$d_ref',`post`='$post',`revk`='$revk',`land`='$land',`telefon`='$telefon',`mobil`='$mobil',`fabrikat`='$fabrikat',`type`='$type',`maskine`='$maskine',`sn_nr`='$sn_nr',`pris_s`='$pris_s',`pris_n`='$pris_n',`pris_b`='$pris_b',`pris_k`='$pris_k',`baaf`='$baaf',`note`='$note' WHERE id='$id2'"); 
        } } else {
         mysqli_query($conn, "UPDATE `proservice` SET `Navn_lev`='$navn_lev',`Adresse_lev`='$adresse_lev',`post_lev`='$post_lev',`land_lev`='$land_lev',`mail`='$mail',`firma_navn`='$firma_navn',`navn`='$navn',`adresse`='$adresse',`d_ref`='$d_ref',`post`='$post',`revk`='$revk',`land`='$land',`telefon`='$telefon',`mobil`='$mobil',`fabrikat`='$fabrikat',`type`='$type',`maskine`='$maskine',`sn_nr`='$sn_nr',`pris_s`='$pris_s',`pris_n`='$pris_n',`pris_b`='$pris_b',`pris_k`='$pris_k',`baaf`='$baaf',`note`='$note' WHERE id='$id'"); 
        }
       $result = mysqli_query($conn, "SELECT * FROM proservice ORDER BY id DESC LIMIT 1");
       while($row = mysqli_fetch_assoc($result)) {
if($_GET['p_id'] == 'soeg'){
header("Location:index.php?side=soeg");
 }
if($_GET['p_id'] == 'ret'){
header("Location:index.php?side=hentrapport&id=$id");
 } 
if($_GET['p_id'] == 'fak1'){
header("Location:index.php?side=fak2&id=$id");
 } } } ?>

<?php
if(isset($_POST['godkend_kom']) || isset($_POST['fak3'])) {
     $errormsg = "";
     $service_rapport = $_GET['id'];
     if ($service_rapport >= '500000'){
     $result = mysqli_query($conn, "SELECT * FROM prosalg WHERE id = '$service_rapport'");
     while($row = mysqli_fetch_assoc($result)) {
     $service_rapport2 = $row['id2'];
     } }
     $tekstk = htmlspecialchars($_POST['kundet'],ENT_COMPAT,true);
     $tekstt = htmlspecialchars($_POST['testt'],ENT_COMPAT,true);
     $baofsql = htmlspecialchars($_POST['baof'],ENT_COMPAT,true);
     mysqli_query($conn, "UPDATE `proservice` SET `tekstk`= '$tekstk',`baof`= '$baofsql',`tekstt`='$tekstt' WHERE id='$service_rapport'");  
     if ($_POST['beskivsle']){
     $dato = $_POST['Dato'];
     $dato2 = date('Y-m-d', strtotime("$dato"));
     $ans = $_POST['ans'];
     $beskivsle = htmlspecialchars($_POST['beskivsle'],ENT_COMPAT,true);
     $timer = $_POST['timer'];
     $timer = str_replace(array(","),array("."),$timer);
     $timer50 = $_POST['o_t_50'];
     $timer50 = str_replace(array(","),array("."),$timer50);
     $timer100 = $_POST['o_t_100'];
     $timer100 = str_replace(array(","),array("."),$timer100);
     $bro = $_POST['bro'];
     $status = $_POST['status'];
     $bil = $_POST['bil'];
     $km = $_POST['km'];
     $dato_fl2 = date('y-m-d 15:30:00', strtotime($dato));
         mysqli_query($conn, "INSERT INTO `proservice_rapport` (`service_raport`, `dato`, `dato2`, `timer`, `timer50`, `timer100`, `ans`, `beskivsle`, `bil`, `km` ,`bro` ,`bro2` ) VALUES ('$service_rapport','$dato','$dato2','$timer','$timer50','$timer100','$ans','$beskivsle','$bil','$km','$status','$bro')");
	 $result = mysqli_query($conn, "SELECT * FROM proservice_rapport WHERE service_raport = '$service_rapport' ORDER BY id DESC LIMIT 1 "); while($row = mysqli_fetch_assoc($result)) { $serviceid = $row['id']; }
	if($service_rapport != 'DIV' AND $service_rapport != 'SYG' AND $service_rapport != 'FRI' AND $service_rapport <= '500000'){
	include('sql/dag/tiluni.php'); 
	 }
	if($service_rapport2 <= '500000'){

	} }
     if ($_POST['beskivsle2']){
     $dato = $_POST['Dato2'];
     $dato2 = date('Y-m-d', strtotime("$dato"));
     $ans = $_POST['ans2'];
     $beskivsle = htmlspecialchars($_POST['beskivsle2'],ENT_COMPAT,true);
     $timer = $_POST['timer2'];
     $timer = str_replace(array(","),array("."),$timer);
     $timer50 = $_POST['o_t_502'];
     $timer50 = str_replace(array(","),array("."),$timer50);
     $timer100 = $_POST['o_t_1002'];
     $timer100 = str_replace(array(","),array("."),$timer100);
     $bro = $_POST['bro2'];
     $status = $_POST['status2'];
     $bil = $_POST['bil2'];
     $km = $_POST['km2'];
         mysqli_query($conn, "INSERT INTO `proservice_rapport` (`service_raport`, `dato`, `dato2`, `timer`, `timer50`, `timer100`, `ans`, `beskivsle`, `bil`, `km` ,`bro` ,`bro2` ) VALUES ('$service_rapport','$dato','$dato2','$timer','$timer50','$timer100','$ans','$beskivsle','$bil','$km','$status','$bro')");
	 $result = mysqli_query($conn, "SELECT * FROM proservice_rapport WHERE service_raport = '$service_rapport' ORDER BY id DESC LIMIT 1 "); while($row = mysqli_fetch_assoc($result)) { $serviceid = $row['id']; }
	if($service_rapport != 'DIV' AND $service_rapport != 'SYG' AND $service_rapport != 'FRI' AND $service_rapport <= '500000'){
	include('sql/dag/tiluni.php'); 
	 }
}
     if ($_POST['beskivsle3']){
     $dato = $_POST['Dato3'];
     $dato2 = date('Y-m-d', strtotime("$dato"));
     $ans = $_POST['ans3'];
     $beskivsle = htmlspecialchars($_POST['beskivsle3'],ENT_COMPAT,true);
     $timer = $_POST['timer3'];
     $timer = str_replace(array(","),array("."),$timer);
     $timer50 = $_POST['o_t_503'];
     $timer50 = str_replace(array(","),array("."),$timer50);
     $timer100 = $_POST['o_t_1003'];
     $timer100 = str_replace(array(","),array("."),$timer100);
     $bro = $_POST['bro3'];
     $status = $_POST['status3'];
     $bil = $_POST['bil3'];
     $km = $_POST['km3'];
         mysqli_query($conn, "INSERT INTO `proservice_rapport` (`service_raport`, `dato`, `dato2`, `timer`, `timer50`, `timer100`, `ans`, `beskivsle`, `bil`, `km` ,`bro` ,`bro2` ) VALUES ('$service_rapport','$dato','$dato2','$timer','$timer50','$timer100','$ans','$beskivsle','$bil','$km','$status','$bro')");
	$result = mysqli_query($conn, "SELECT * FROM proservice_rapport WHERE service_raport = '$service_rapport' ORDER BY id DESC LIMIT 1 "); while($row = mysqli_fetch_assoc($result)) { $serviceid = $row['id']; }
	if($service_rapport != 'DIV' AND $service_rapport != 'SYG' AND $service_rapport != 'FRI' AND $service_rapport <= '500000'){
	include('sql/dag/tiluni.php'); 
	 }
}
     if ($_POST['beskivsle4']){
     $dato = $_POST['Dato4'];
     $dato2 = date('Y-m-d', strtotime("$dato"));
     $ans = $_POST['ans4'];
     $beskivsle = htmlspecialchars($_POST['beskivsle4'],ENT_COMPAT,true);
     $timer = $_POST['timer4'];
     $timer = str_replace(array(","),array("."),$timer);
     $timer50 = $_POST['o_t_504'];
     $timer50 = str_replace(array(","),array("."),$timer50);
     $timer100 = $_POST['o_t_1004'];
     $timer100 = str_replace(array(","),array("."),$timer100);
     $bro = $_POST['bro4'];
     $status = $_POST['status4'];
     $bil = $_POST['bil4'];
     $km = $_POST['km4'];
         mysqli_query($conn, "INSERT INTO `proservice_rapport` (`service_raport`, `dato`, `dato2`, `timer`, `timer50`, `timer100`, `ans`, `beskivsle`, `bil`, `km` ,`bro` ,`bro2` ) VALUES ('$service_rapport','$dato','$dato2','$timer','$timer50','$timer100','$ans','$beskivsle','$bil','$km','$status','$bro')");
	 $result = mysqli_query($conn, "SELECT * FROM proservice_rapport WHERE service_raport = '$service_rapport' ORDER BY id DESC LIMIT 1 "); while($row = mysqli_fetch_assoc($result)) { $serviceid = $row['id']; }
	if($service_rapport != 'DIV' AND $service_rapport != 'SYG' AND $service_rapport != 'FRI' AND $service_rapport <= '500000'){
	include('sql/dag/tiluni.php'); 
	 }
}
     if ($_POST['beskivsle5']){
     $dato = $_POST['Dato5'];
     $dato2 = date('Y-m-d', strtotime("$dato"));
     $ans = $_POST['ans5'];
     $beskivsle = htmlspecialchars($_POST['beskivsle5'],ENT_COMPAT,true);
     $timer = $_POST['timer5'];
     $timer = str_replace(array(","),array("."),$timer);
     $timer50 = $_POST['o_t_505'];
     $timer50 = str_replace(array(","),array("."),$timer50);
     $timer100 = $_POST['o_t_1005'];
     $timer100 = str_replace(array(","),array("."),$timer100);
     $bro = $_POST['bro5'];
     $status = $_POST['status5'];
     $bil = $_POST['bil5'];
     $km = $_POST['km5'];
         mysqli_query($conn, "INSERT INTO `proservice_rapport` (`service_raport`, `dato`, `dato2`, `timer`, `timer50`, `timer100`, `ans`, `beskivsle`, `bil`, `km` ,`bro` ,`bro2` ) VALUES ('$service_rapport','$dato','$dato2','$timer','$timer50','$timer100','$ans','$beskivsle','$bil','$km','$status','$bro')");
	 $result = mysqli_query($conn, "SELECT * FROM proservice_rapport WHERE service_raport = '$service_rapport' ORDER BY id DESC LIMIT 1 "); while($row = mysqli_fetch_assoc($result)) { $serviceid = $row['id']; }
	if($service_rapport != 'DIV' AND $service_rapport != 'SYG' AND $service_rapport != 'FRI' AND $service_rapport <= '500000'){
	include('sql/dag/tiluni.php'); 
	 }
} 
     if(isset($_POST['fak3'])) {
header("Location:index.php?side=fak3&id=$_GET[id]"); }
}


if(isset($_POST['bestil'])) {
header("Location:index.php?side=order_lister&afd=$_GET[afd]&list=be_li&lev=$_POST[levendor]");
die('died');
}
         ?>
