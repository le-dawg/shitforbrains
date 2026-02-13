<div class="top">Dagsseddel</div>
<! ø !>
<! SQL !>

<?php 
include('sql/dag/dato_person.php');
include('sql/dag/indsaet.php');
include('sql/dag/ret.php');
include('sql/dag/slet.php');
include('sql/dag/send.php');
if ($_GET['sendt'] == 'ja'){ ?>
<div class="top">Dagseddel er sendt til Kontoret</div>
<?php } ?>
<! indhold !>
<?php 
include('inder/dag/dato_person.php');
include('sql/dag/tjek.php');
include('inder/dag/line.php');?>
<p>
<?php include('inder/fak2/indsaet.php');?>
	<div id="container2">
		<div class="felt33"><input class="in" type="submit" value="Tilføj linjer til dagseddel" name="tildag"></div>
 		<div class="felt33"><input class="in" type="submit" value="Send dagseddel" name="send_seddel"></div></form>
		<div class="felt331""><a href="<?php echo $_SERVER['HTTP_REFERER'] ?>">Tilbage</a></div>

 		
</div>
        </form>
</div>
<p>
<?php $title = 'PROteknik :: Dagsseddelsbog'; ?>