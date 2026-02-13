<! ø !>
<?php 
if ($firmanavn == 'PRO-CONSULT A/S' AND $statuskodeku == '85'){
?>
<div id="container2" style="border-top:2px solid black;">
                <div class="felt251" style="width:50%;">
                <a style="background:green; color:#FFF;" href="index.php?side=hentrapport&id=<?php echo $rapport?>&funk=accept">Accept pris</a></div>
                <div class="felt251" style="width:50%;">
                <a style="background:red; color:#FFF; "href="index.php?side=hentrapport&id=<?php echo $rapport?>&funk=luksalg">Lukke uden ordre</a></div><br style="clear:both"> 
</div>
<p>
<?php } ?>

<div id="container2" style="border-top:2px solid black;">
                <div class="felt251">
                <a href="sql/hent/vider.php?id=<?php echo $rapport?> " target="_blank">Sagens filer</a></div>
                <div class="felt251">  
		<a href="index.php?side=stam&id=<?php echo $rapport?>&p_id=ret">Ret stamdata</a></div>   
                <div class="felt251"> 
		<a href="index.php?side=hentrapport&id=<?php echo $rapport?>&funk=tilfore">Tilføj vare</a></div>
                <div class="felt251">
		<a href="index.php?side=hentrapport&id=<?php echo $rapport?>&funk=tekst-hent">Tilføj opdatering</a></div><br style="clear:both"> 
</div>
<div id="container2">
                <div class="felt251">
                <a href="index.php?side=komponter&id=<?php echo $rapport2?>&p_id=hentrapp">Komponentside</a>              
		</div>    
                <div class="felt251">
                <a href="#"></a>                
		</div>   
                <div class="felt251">
                <a href="#"></a>                
		</div>   
                <div class="felt251">
                <a href="#"></a>              
		</div>     
</div>
<p>
<div id="container2" style="border-top:2px solid black;">
                <div class="felt251">
                <a href="index.php?side=hentrapport&id=<?php echo $rapport?>&funk=kontaklev">Kontakte Leverandær</a></div>
                <div class="felt251"> 
		<a href="index.php?side=hentrapport&id=<?php echo $rapport?>&funk=ryklev">Rykket Leverandær</a></div>
		<div class="felt251"> 
		<a href="index.php?side=hentrapport&id=<?php echo $rapport?>&funk=tilbudtele">Givet tilbud per telefon</a></div>
		<div class="felt251"> 
		<a href="index.php?side=hentrapport&id=<?php echo $rapport?>&funk=rykkunde">Rykket kunde</a></div>
<br style="clear:both"> 
</div>
<div id="container2">
                <div class="felt251">
                <a href="index.php?side=hentrapport&id=<?php echo $rapport?>&funk=luksalg">Lukke uden ordre</a></div>
                <div class="felt251"> 
		<a href="../../prosalg/tilbud.php?id=<?php echo $rapport?>" Target="_blank">Send tilbud</a></div>
		<div class="felt251"> 
		<a href="../prosalg/index.php?side=afslut&id=<?php echo $rapport?>" target="_blank">Lave til PROsalg</a></div>
		<div class="felt251"> 
		<a href="../../prosalg/orderconfirmationnylev.php?id=<?php echo $rapport?>" Target="_blank">Send Ny Leverings Dato</a></div>
<br style="clear:both"> 
</form> 
</div>
