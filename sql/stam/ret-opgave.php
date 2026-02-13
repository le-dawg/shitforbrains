<?php 
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
     $by = $_POST['by'];
     $by_lev = $_POST['by_lev'];
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
     $emb = $_POST['emb'];
     $dok = $_POST['dok'];
     $asap = $_POST['asap'];
     $cvr = $_POST['CVR'];
     $ean = $_POST['EAN'];
     $fakmail = $_POST['FAKMAIL'];
     $uniid = $_POST['uniid'];
        if ($_GET['id'] >= '500000'){
         mysqli_query($conn,"UPDATE `prosalg` SET `CVR`='$cvr',`EAN`='$ean',`FAKMAIL`='$fakmail',`Navn_lev`='$navn_lev',`Adresse_lev`='$adresse_lev',`post_lev`='$post_lev',`land_lev`='$land_lev',`mail`='$mail',`firma_navn`='$firma_navn',`navn`='$navn',`adresse`='$adresse',`d_ref`='$d_ref',`post`='$post',`by`='$by',`by_lev`='$by_lev',`revk`='$revk',`land`='$land',`telefon`='$telefon',`mobil`='$mobil',`baaf`='$baaf',`note`='$note' WHERE id='$_GET[id]'"); 
         $result = mysqli_query($conn,"SELECT * FROM prosalg WHERE id=$_GET[id]");
         while($row = mysqli_fetch_assoc($result)) {
         $id2 = $row['id2'];
         echo $id2;
        mysqli_query($conn,"UPDATE `proservice` SET `CVR`='$cvr',`EAN`='$ean',`FAKMAIL`='$fakmail',`Navn_lev`='$navn_lev',`Adresse_lev`='$adresse_lev',`post_lev`='$post_lev',`land_lev`='$land_lev',`mail`='$mail',`firma_navn`='$firma_navn',`navn`='$navn',`adresse`='$adresse',`d_ref`='$d_ref',`post`='$post',`revk`='$revk',`land`='$land',`telefon`='$telefon',`mobil`='$mobil',`fabrikat`='$fabrikat',`type`='$type',`maskine`='$maskine',`sn_nr`='$sn_nr',`pris_s`='$pris_s',`pris_n`='$pris_n',`pris_b`='$pris_b',`pris_k`='$pris_k',`baaf`='$baaf',`note`='$note',`ASAP`='$asap',`dok_retur`='$dok',`med_emb`='$emb',`by`='$by',`by_lev`='$by_lev' WHERE id='$id2'"); 
        } } else {
         mysqli_query($conn,"UPDATE `proservice` SET `CVR`='$cvr',`EAN`='$ean',`FAKMAIL`='$fakmail', `Navn_lev`='$navn_lev',`Adresse_lev`='$adresse_lev',`post_lev`='$post_lev',`land_lev`='$land_lev',`mail`='$mail',`firma_navn`='$firma_navn',`navn`='$navn',`adresse`='$adresse',`d_ref`='$d_ref',`post`='$post',`revk`='$revk',`land`='$land',`telefon`='$telefon',`mobil`='$mobil',`fabrikat`='$fabrikat',`type`='$type',`maskine`='$maskine',`sn_nr`='$sn_nr',`pris_s`='$pris_s',`pris_n`='$pris_n',`pris_b`='$pris_b',`pris_k`='$pris_k',`baaf`='$baaf',`note`='$note',`ASAP`='$asap',`dok_retur`='$dok',`med_emb`='$emb',`by`='$by',`by_lev`='$by_lev' WHERE id='$id'"); 
        }
       // include('upuni.php');
       $result = mysqli_query($conn,"SELECT * FROM proservice ORDER BY id DESC LIMIT 1");
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