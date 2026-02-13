<! ø !>
<div id="container2" style="border-top:2px solid black;">
                <div class="felt251">
                <?php include('modul\tilbagesystem\inder\tilbage.php'); ?>
		</div>
                <div class="felt251"> 
		<?php if ($row['status_kode'] != 9) { ?>
		<?php if ($ans != $_SESSION['uid']) {  ?>

                <a href="sql/hent/tag-ans.php">Tag ansvar</a><?php } ?>
                <?php if ($ans == $_SESSION['uid'] || $_SESSION['uid'] == '41' || $_SESSION['uid'] == '36' || $_SESSION['uid'] == '16') {  ?>
                <a href="index.php?side=hentrapport&id=<?php echo $row['id']?>&funk=ans-hent">Vidergiv ansvar</a><?php } } ?>
		</div>
                <div class="felt251"> 
		<?php if ($row['status_kode'] != 9) { ?>
		<a href="index.php?side=hentrapport&id=<?php echo $row['id']?>&funk=tekst-hent">Tilføj tekst</a>
		<?php } ?>
		</div>
                <div class="felt251"><?php if ($row['flag'] == 'ROD') { ?>
		<?php if ($row['status_kode'] != 9) { ?>
		<?php if ($ans == $_SESSION['uid'] || $_SESSION['uid'] == '20' || $_SESSION['uid'] == '41' || $_SESSION['uid'] == '36' || $_SESSION['uid'] == '16') {  ?>
		<a href="index.php?side=afslut&id=<?php echo $row['id']?>">Afslut rapport</a><?php } } }?></div><br style="clear:both">
</div>
<div id="container2">
                <div class="felt251"> 
		<?php if ($row['status_kode'] != 9  || $bruger_id == '1') { ?>
	        <?php if ($ans == $_SESSION['uid']  || $bruger_id == '1' || $_SESSION['uid'] == '41' || $_SESSION['uid'] == '36' || $_SESSION['uid'] == '16') { ?>
                <?php if ($row['flag'] != 'ROD') { ?>
		<a href="index.php?side=hentrapport&id=<?php echo $row['id']?>&funk=pris-hent">Tilføj eller ret priserne</a>
                <?php } } }?>   
		</div>
                <div class="felt251"> 
		<?php if ($row['status_kode'] != 9  || $bruger_id == '1') { ?>
	        <?php if ($ans == $_SESSION['uid']  || $bruger_id == '1' || $_SESSION['uid'] == '41' || $_SESSION['uid'] == '36' || $_SESSION['uid'] == '16') { ?>
                <a href="index.php?side=stam&id=<?php echo $row['id']?>&p_id=ret">Ret stamdata</a><?php } } ?></div>   
	
                <div class="felt251">
                <a href="index.php?side=komponter&id=<?php echo $row['id']?>&p_id=hentrapp">Komponentside</a>              
		</div>
                <div class="felt251">           
                <?php if ($row['status_kode'] != 9) { ?>
		<?php if ($row['flag'] != 'ROD') { ?>
		<?php if ($ans == $_SESSION['uid'] || $_SESSION['uid'] == '20' || $_SESSION['uid'] == '41' || $_SESSION['uid'] == '36' || $_SESSION['uid'] == '16') {  ?>
		<a href="index.php?side=stam&id=<?php echo $row['id']?>&p_id=fak1">Færdigør rapport</a><?php } } }?></div><br style="clear:both"> 
</form> 
</div>
<div id="container2">
                <div class="felt251">                 
		<?php if ($row['status_kode'] == 9) { ?>
		<?php if ($_SESSION['uid'] == '20' || $_SESSION['uid'] == '16' || $_SESSION['uid'] == '36' || $_SESSION['uid'] == '41') { ?><a href="index.php?side=hentrapport&id=<?php echo $row['id']?>&funk=genaaben">GenÃ¥ben</a><?php }} ?></div>
                <div class="felt251"> <a href="index.php?side=hentrapport&id=<?php echo $row['id']?>&funk=billed">Tilføre billeder</a></div>
                <div class="felt251"> <?php if ($row['flag'] != 'ROD') { ?><a href="servicerapport_ikkeafslut_pdf.php?id=<?php echo $row['id'] ;?>" target="_blank">Print rapport</a><?php } ?></div>
                <div class="felt251"> 
		<?php if ($row['ind_kode'] == 5 ) { ?>
                <a href="index.php?side=hentrapport&id=<?php echo $row['id']?>&funk=opdatertid">opdater leveringstid</a><?php } ?></div><br style="clear:both">
</div>
<div id="container2">
                <div class="felt251">                 
		<a href="sql/hent/vider.php?id=<?php echo $row['id']?> " target="_blank">Alle filer til sagen</a></div>
                <div class="felt251">
		<?php if ($row['status_kode'] != 9) { ?>
		<a href="../../prosalg/tilbudrep.php?id=<?php echo $row['id']?>" Target="_blank">Send tilbud</a><?php }  ?>
</div>
                <div class="felt251"></div>
                <div class="felt251"></div><br style="clear:both">
</div>
