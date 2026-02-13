<! ø !>
		<?php if ($row['ASAP'] == 'JA') {  ?>
		<div style="background-color:darkred; color:#ffffff;" class="top">HASTER</div>
<?php } ?>
		<?php if ($status_kode == 9) {
if ($flag == 'SALG') {
  ?>            <div class="top" style="background-color:SteelBlue ; color:#fff;">Salg oprette den <?php echo $dato; ?> af <?php echo $dref; ?>. </div>
<?php } else { ?>
		<div class="top">Denne sag blev afsluttet den <?php echo $dato3; ?>. </div>
<?php } } ?>
		<?php if ($ans != $_SESSION['uid']) {  ?>
		<div class="top">Denne sag har du ikke ansvaret for klik på "tag ansvar" for at overtage sagen</div>
<?php } ?>
		<?php if ($status_kode == 85) {  ?>
		<div class="top" style="background-color:green; color:#fff;">Tilbud er sendt den <?php echo $datotilbud; ?></div>
<?php } ?>
		<?php if ($status_kode == 99) {  ?>
		<div class="top" style="background-color:red; color:#fff;">Lukket uden orderer</div>
<?php } ?>
		<?php if ($flag_kode == 1) {  ?>
		<div class="top" style="background-color:green; color:#fff;">Leverandør kontakte <?php echo $datoflag; ?></div>
<?php } ?>
		<?php if ($flag_kode == 4) {  ?>
		<div class="top" style="background-color:green; color:#fff;">Leverandør rykket sidst <?php echo $datoflag; ?></div>
<?php } ?>
		<?php if ($flag_kode == 3) {  ?>
		<div class="top" style="background-color:green; color:#fff;">Kunde rykket sidst <?php echo $datoflag; ?></div>
<?php } ?>