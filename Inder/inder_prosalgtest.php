
<! ø !>
<?php if($row['ASAP'] == 'JA') {
$asaprod = 'asap';
} 
if($row['firma_navn'] == 'PRO-CONSULT A/S') {
$asaprod = 'pro';
} 
if($row['status_kode'] == '85') {
$asaprod = 'tilsend';
} 
$old_s = 'opgave1';
$old_s1 = 'firmanavn';
?> 


 <form method="post" action="" onsubmit="return v(this)">
  <div class="portlet">
    <div class="portlet-header" id="<?php echo $asaprod; ?>"><a href="sql/hent/se_rep.php?id=<?php echo $id;?>"><?php echo ''.$row['id'].''; ?></a></div>
    <div class="portlet-content"><?php echo ''.$row['firma_navn'].''; ?></div>
  </div>
 </form>
