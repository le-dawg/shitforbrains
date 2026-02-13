 <div class="top">Se service rapport</div>
<?php 
include('sql/hent/rap_styring.php');
// include('sql/soeg/time_fak.php');
include_once('sql/hent/tekst_paa.php');
include_once('sql/hent/salgfunk.php');
include_once('sql/hent/accept.php');
include_once('sql/hent/tilforevare.php');
include_once('sql/hent/sletvare.php');
include_once('sql/hent/retvare.php');
include_once('sql/hent/pris.php');
include_once('sql/hent/ansvar.php');
include_once('sql/hent/opluk.php');
include_once('sql/hent/luksalg.php');
include_once('sql/hent/opdatertid.php');
include_once('sql/hent/flyt.php');
include_once('modul/upload/upload.php');

if($rapport > '500000'){ $salgsql = 'prosalg'; } else { $salgsql = 'proservice'; }

   $result  = mysqli_query($conn, "SELECT * FROM $salgsql WHERE id='$rapport'");
             while ($row = mysqli_fetch_assoc($result)) {
            $pic_flag = $row['pic_flag'];
            $status_kode = $row['status_kode'];
            $flag_kode = $row['flag_kode'];
            $ans = $row['ans']; $flag = $row['flag'];
	    $dato = $row['dato'];
 	    $dato2 = $row['dato2'];
	    $dato3 = $row['dato3'];
	    $dref = $row['v_ref'];
            $datotilbud = $row['datotilbud'];
            $datoflag = $row['flag_dato'];
            $dato3 = date('d-m-Y H:i:s', strtotime("$dato3"));
	    If($dato2 != '0000-00-00 00:00:00') {
	    $dato = $dato2; 
            $dato = date('d-m-Y H:i:s', strtotime("$dato"));
            if($flag == 'SALG'){
	    $rapport2 = $rapport;
            } else {
	    $rapport2 = 'dummy';
            }

if($rapport > '500000'){             
	    $id2 = $row['id2'];
            $result20  = mysqli_query($conn, "SELECT * FROM proservice WHERE id='$id2'");
             while($row20 = mysqli_fetch_assoc($result20)) {
             $flag = $row20['flag'];
 } } } 
include('inder/hent/info-blok.php');?>
<p>
<?php 
include('inder/hent/opgave_info.php');
?>
<p>
<?php 
if($rapport > '500000' || $flag == 'SALG'){
include('inder/hent/menusalg.php');
} else {
include('inder/hent/menu.php');
}
if (isset($_GET['funk'])){
if ($_GET['funk'] == 'ans-hent') {
include('inder/hent/ans-hent.php');
} if ($_GET['funk'] == 'pris-hent') {
include('inder/hent/pris-hent.php');
} if ($_GET['funk'] == 'tekst-hent') {
include('inder/hent/tekst-hent.php');
} if ($_GET['funk'] == 'opdatertid') {
include('inder/hent/opdatertid.php');
} if ($_GET['funk'] == 'billed') {
include('modul/upload/tilfore-billed.php');
} if ($_GET['funk'] == 'tilfore') {
include('inder/hent/tilfore.php');
} if ($_GET['funk'] == 'flyt') {
include('inder/hent/flyt.php');
} if ($_GET['funk'] == 'ret') {
include('inder/hent/ret.php');
} if ($_GET['funk'] == 'tilbud') { 
?>
<br>
 <div class="top"><?php echo 'Tilbud '.$rapport.' sendt til '.$mailtilmig; ?></div>
	<script>
	window.open("../prosalg/tilbud.php?id=<?php echo $rapport; ?>");
	</script> 
<?php } }
?>
<p>  
<?php 
include('inder/hent/abj.php');
}
 ?>
<p><?php $title = 'PROteknik :: Rapport: '.$rapport.''; ?>