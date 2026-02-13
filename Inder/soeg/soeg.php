<! ø !>
<div id="opgave" style="width:95%;">
		<div class="top" style="width:80%; float:left;">Søg maskine</div>
		<div class="top" style="width:20%; float:left; border-left:0px; border-bottom:2px solid black;">Filter</div>                          
			<form method="post" action="" onsubmit="return v(this)"> 
<div class="opgave-div" style="width:80%; float:left;" id="sog">
<! ------------------------------------------------------------------------- Repport info ------------------------------------------------------------------------------------------- !>
		<div class="top_felt">Kundenavn:<br>
                  <div class="firmanavn"><input class="in" id="hvid" type="text" name="firma_navn" value=""></div></div>
                <div class="top_felt2">Ansvarlig:<br>
                  <div class="firmanavn"><input  class="in" id="hvid" type="text" name="ans" value=""></div></div>
                <div class="top_felt3">Rapport nr.:<br>
                  <div class="firmanavn"><input  class="in" id="hvid" type="text" name="rapport" value=""></div></div><br style="clear:both">
<! ------------------------------------------------------------------------- line 1 ------------------------------------------------------------------------------------------------- !>
                <div class="line_type_2">
                  <div class="info_felt">Vores ref.:</div>                  
                  <div class="tekst_felt"><input class="tekst" type="text" name="v_ref" value=""></div>
                </div>
		<div class="line_type_2">
		  <div class="info_felt">Status kode:</div> 
		  <div class="tekst_felt"><input class="tekst" type="text" name="status" value=""></div>
		</div>
		<div class="line_type_2">
		  <div class="info_felt">Ind kode:</div> 
		  <div class="tekst_felt"><input class="tekst" type="text" name="ind" value=""></div>
		</div>
		<div class="line_type_2" id="sidste">
                  <div class="info_felt">Dato:</div>                  
                  <div class="tekst_felt"><input class="tekst" type="text" name="dato" value=""></div>
		</div><br style="clear:both">
<! ------------------------------------------------------------------------- line 1 ------------------------------------------------------------------------------------------------- !>
                <div class="line_type_438" id="graa">
		  Fakturerings Adresse
                </div>
                <div class="line_type_438" id="sidste-graa">
		  Leverings Adresse
                </div><br style="clear:both"> 
<! ------------------------------------------------------------------------- line 1 ------------------------------------------------------------------------------------------------- !>
               <div class="line_type_438">
                  <div class="info_felt">C/O Firmanavn: </div>                  
                  <div class="tekst_felt"><input class="tekst" type="text" name="navn" value=""></div>
                  <div class="clear"></div>
                </div>
                <div class="line_type_438" id="sidste">
                  <div class="info_felt">Firmanavn: </div>                  
                  <div class="tekst_felt"><input class="tekst" type="text" name="navn_lev" value=""></div>
                  <div class="clear"></div>
                </div><br style="clear:both">
<! ------------------------------------------------------------------------- line 2 ------------------------------------------------------------------------------------------------- !>
                <div class="line_type_438">
		  <div class="info_felt">Adresse: </div>  
		  <div class="tekst_felt"><input class="tekst" type="text" name="adresse" value=""></div></div>
		<div class="line_type_438" id="sidste">
		  <div class="info_felt">Adresse: </div>  
		  <div class="tekst_felt"><input class="tekst" type="text" name="adresse_lev" value=""></div></div><br style="clear:both">
<! ------------------------------------------------------------------------- line 3 ------------------------------------------------------------------------------------------------- !>
                <div class="line_type_438">
		  <div class="info_felt">POST/BY (XX-XXXX): </div>  
		  <div class="tekst_felt"><input class="tekst" type="text" name="post" value=""></div></div>
		<div class="line_type_438" id="sidste">
		  <div class="info_felt">POST/BY (XX-XXXX): </div>  
		  <div class="tekst_felt"><input class="tekst" type="text" name="post_lev" value=""></div></div><br style="clear:both">
<! ------------------------------------------------------------------------- line 4 ------------------------------------------------------------------------------------------------- !>                
                <div class="line_type_438">
		  <div class="info_felt">Land: </div>  
		  <div class="tekst_felt"><input class="tekst" type="text" name="land" value=""></div></div>
		<div class="line_type_438" id="sidste">
		  <div class="info_felt">Land: </div>  
		  <div class="tekst_felt"><input class="tekst" type="text" name="land_lev" value=""></div></div><br style="clear:both">
<! ------------------------------------------------------------------------- line 4 ------------------------------------------------------------------------------------------------- !>                
                <div class="line_type_438">
		  <div class="info_felt">Deres ref.: </div>  
		  <div class="tekst_felt"><input class="tekst" type="text" name="d_ref" value=""></div></div>
		<div class="line_type_438" id="sidste">
		  <div class="info_felt">Rekv. nr.: </div>  
		  <div class="tekst_felt"><input class="tekst" type="text" name="revk" value=""></div></div><br style="clear:both">
<! ------------------------------------------------------------------------- line 4 ------------------------------------------------------------------------------------------------- !>                
                <div class="line_type_2">
                  <div class="info_felt">Telefon:</div>                  
                  <div class="tekst_felt"><input class="tekst" type="text" name="telefon" value=""></div></div>
                <div class="line_type_2">
                  <div class="info_felt">Mobil:</div>                  
                  <div class="tekst_felt"><input class="tekst" type="text" name="mobil" value=""></div></div>
		<div class="line_type_438" id="sidste">
		  <div class="info_felt">E-mail: </div>  
		  <div class="tekst_felt"><input class="tekst" type="text" name="mail" value=""></div></div><br style="clear:both">
<! ------------------------------------------------------------------------- line 5 ------------------------------------------------------------------------------------------------- !>
                <div class="line_type_2" id="graa">Fabrikat</div>
                <div class="line_type_2" id="graa">Type</div>
                <div class="line_type_2" id="graa">Maskine</div>
                <div class="line_type_2" id="sidste-graa">Serie Nr.</div><br style="clear:both">
<! ------------------------------------------------------------------------- line 6 ------------------------------------------------------------------------------------------------- !>
                <div class="line_type_2"><input style="width:100%;" class="tekst" type="text" name="fabrikat" value=""></div>
                <div class="line_type_2"><input style="width:100%;" class="tekst" type="text" name="type" value=""></div>
                <div class="line_type_2"><input style="width:100%;" class="tekst" type="text" name="maskine" value=""></div>
                <div class="line_type_2" id="sidste"><input style="width:100%;" class="tekst" type="text" name="sn_nr" value=""></div><br style="clear:both">        

<! ------------------------------------------------------------------------- line 15 ------------------------------------------------------------------------------------------------ !>            
</div>
<div class="opgave-div" style="width:20%; border: 0px; border-top:2px solid black;  float:left; " id="sog">
		<div class="top_felt" style="width:100%;"><input class="soegfil" id="contactChoice" type="checkbox" name="gender" value="5"><label for="contactChoice">Se kun salgsrapporter</label></div>
		<div class="top_felt4"><input class="soegfil"  id="contactChoice1" type="checkbox" name="gender1" value="5"><label for="contactChoice1">Se kun Reparation rapporter</label></div>
		<div class="top_felt4"><input class="soegfil" id="contactChoice2" type="checkbox" name="gender2" value="male"><label for="contactChoice2">Se kun Rode rapporter</label></div>
		<div class="top_felt4"><input class="soegfil" id="contactChoice3" type="checkbox" name="gender3" value="male"><label for="contactChoice3">Se kun Mine rapporter</label></div>
		<div class="top_felt4"><input class="soegfil" id="contactChoice4" type="checkbox" name="gender4" value="male"><label for="contactChoice4">Se kun Lukket</label></div>
		<div class="top_felt4"><input class="soegfil" id="contactChoice5" type="checkbox" name="gender5" value="male"><label for="contactChoice5">Se kun Åberne</label></div>
</div>
<div class="opgave-div" style="width:80%; border: 0px; border-left:2px solid black; border-right:2px solid black; border-top:0px solid black; float:left; ">
		<div class="line_type_2"><a href="<?php echo $_SERVER['HTTP_REFERER'] ?>">Tilbage</a></div>
                <div class="line_type_2"><br></div>
                <div class="line_type_2"><div class="in" id="soeg" onclick="sogefrem()">Søge maskine vis</div></div>
                <div class="line_type_2" id="sidste"><div class="in" id="soeg" onclick="sogevaek()">Søge maskine skjul</div></div><br style="clear:both"> 
</div><div class="opgave-div" style="width:20%; border: 0px; border-top:0px solid black;float:left; ">
                <div class="top_felt4" style="width:100%; height:22px;"><input id="soeg" class="in" type="submit" value="Søg" name="soeg_sql" ></div><br style="clear:both"> 
                </form>
                </div><br style="clear:both">
