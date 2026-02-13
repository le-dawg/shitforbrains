<! ø !>
<! ------------------------------------------------------------------------- line 14 ------------------------------------------------------------------------------------------------ !>
<div id="container2">
                <div class="felt251"> 
                <?php include('modul\tilbagesystem\inder\tilbage.php'); ?>
		</div>
                <div class="felt251"> </div>
                <div class="felt251"> </div>
                <div class="felt251"><?php if($_GET['p_id'] == 'ret' OR $_GET['p_id'] == 'soeg'){ ?>
                <input class="in" type="submit" value="Gem og vend retur" name="sql_ret_opgaver"><?php } if($_GET['p_id'] == 'fak1'){ ?>
		<input class="in" type="submit" value="Næste side" name="sql_ret_opgaver"><?php } ?>
		</div><br style="clear:both"> 
<! ------------------------------------------------------------------------- line 15 ------------------------------------------------------------------------------------------------ !>            
                </div></form>
                </div>