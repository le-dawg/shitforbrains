<! ø !>
<select name="levendor" class="in" id="hvid">
		<?php		$afd = $_GET['afd'];
				$result2 = mysqli_query($conn, "SELECT * FROM proorder where flag !='LYT' and flag !='CCFL' and bestilt='NEJ' and afd='$_GET[afd]' GROUP BY levendor ORDER BY asap ASC, levendor ASC");
                                while($row2 = mysqli_fetch_assoc($result2)) { $lev = $row2[levendor]; $asap = $row2[asap];?>
 `			<option value="<?php echo $row2['levendor']; ?>"><?php $result  = mysqli_query($conn, "SELECT * FROM proorder WHERE levendor='$lev' and Bestilt='NEJ' and afd='$afd'");
                                         $num_rows = mysqli_num_rows($result);
						if($asap == 'JA'){
					       echo 'HASTER ';
						}
                                               echo "$row2[levendor] Har " ; 
					       echo '( ';
                                               echo "$num_rows";
                                               echo ' Vare som ikke er bestilt) ';
					


?> 
</option>
<?php } ?>
</select>

