<! ø !>
<select name="levendor" class="in" id="hvid">
                <?php		if($_GET['side'] == 'order_soeg') { ?>
				<option value="NULL"></option>
				<?php } 
				if(!empty($_GET['lev'])) {
				$result = mysqli_query($conn, "SELECT * FROM proorder WHERE id=$_GET[id]");
				while($row = mysqli_fetch_assoc($result)) { ?>
				<option value="<?php echo $row['levendor']; ?>"><?php echo $row['levendor']; ?></option>
				<?php  } }
 				$result3 = mysqli_query($conn, "SELECT * FROM promed WHERE id = '$_SESSION[uid]'");
                                while($row3 = mysqli_fetch_assoc($result3)) { 
				$afd = $row3['afd'];
				$result2 = mysqli_query($conn, "SELECT * FROM proorder_levendor ORDER BY id ASC");
                                while($row2 = mysqli_fetch_assoc($result2)) { $lev = $row2[lev];?>
 `			<option value="<?php echo $row2['lev']; ?>"><?php $result  = mysqli_query($conn, "SELECT * FROM proorder WHERE levendor='$lev' and Bestilt='NEJ' and afd='$afd'");
                                         $num_rows = mysqli_num_rows($result);
                                               echo '( ';
                                               echo "$num_rows";
                                               echo ' Vare hos:)';
                                               echo "$row2[lev_t]"; ?> 


</option>
		<?php } } if($_GET['side'] == 'order_lister' || $_GET['side'] == 'hentrapport'){ ?>
		<option value="Foresporgsler">Forespørgsler</option>
                <option value="ANDRE">ANDEN LEVENDØR</option>
<?php } ?>
</select>