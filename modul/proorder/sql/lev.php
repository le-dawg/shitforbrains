<! ø !>
<select name="levendor" class="in" id="hvid">
		<?php 		$result3 = mysqli_query($conn, "SELECT * FROM promed WHERE id = '$_SESSION[uid]'");
                                while($row3 = mysqli_fetch_assoc($result3)) { 
				$afd = $row3['afd'];
				$result2 = mysqli_query($conn, "SELECT * FROM proorder_levendor ORDER BY id ASC");
                                while($row2 = mysqli_fetch_assoc($result2)) { $lev = $row2[levendor];?>
 `			<option value="<?php echo $row2['lev']; ?>"><?php $result  = mysqli_query($conn,"SELECT * FROM proorder WHERE levendor='$lev' and Bestilt='NEJ' and afd='$afd'");
                                         $num_rows = mysqli_num_rows($result);
                                               echo '( ';
                                               echo "$num_rows";
                                               echo ' Vare hos:)';
                                               echo "$row2[lev_t]"; ?> 


</option>
		<?php } }?>
                <option value="ANDRE">ANDEN LEVENDØR</option></select>