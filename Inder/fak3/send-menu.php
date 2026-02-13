<! ø !>
<div id="container">
	<div class="top">Infomation til kunden ang. test status (Stå på forsendesleseddelen til kunden)</div>
        <div id="container2">
		<div class="felt50" style="background-color:#ffbb99;">Status:</div>
		<div class="felt50"><select style="background-color:#ffbb99;" id="s1" class="tekst" name="status">
			<option value="?"></option>
			<option value="info.1">Tested ok</option>
			<option value="info.2">Eftermålt ok</option>
			<option value="info.3">Skal testes hos kunden</option>
			<option value="info.4">Uden reparation</option>
			</select></div>
	</div>
</div><br>
<div id="container">
	<div class="top">Forsendesle infomationer</div>
        <div id="container2">
		<div class="felt50">Forsendesle type:</div>
		<div class="felt50">Vægt (hvis fragtmand skal er vælges pakke eller palle)</div>
	</div>
        <div id="container2">
		<div class="felt50">
			<select id="s1" class="tekst" name="forsendelse">
			<option value="?"></option>
			<option value="POST.STD.DK">Indland (Stardart)</option>
			<option value="POST.EKSP.DK">Indland (Ekspres)</option>
			<option value="POST.STD.EU">EU (Stardart)</option>
			<option value="POST.EKSP.EU">EU (Ekspres)</option>
			<option value="POST.EKSP.UD">Udland (Ekspres)</option>
                        <option>---Special forsendsler---</option>
			<option value="POST.STD.PALLE">Palle</option>
			<option value="POST.TAXA">TAXA</option>
			<option>DANFOSS</option>
                        <option>---Afslutinger uden fragt---</option>
			<option value="Afhenting">Afhenting</option>
			<option value="Afhenting (er hentet)">Afhenting (er hentet) / Aflevering</option>
			<option value="Anulleret/lukkeret (UB)">Anulleret/lukkeret (UB)/Skrottes</option>
                        <option>--- ---</option>
			<option>Sendes sammen med anden sag</option>
			</select></div>
		<div class="felt50">
			<select id="s1" class="tekst" name="vaegt">
			<option>-</option>
			<option value="05">0 - 5 Kg</option>
			<option value="10">5 - 10 Kg</option>
			<option value="20">10 - 20 Kg</option>
			<option value="30">20 - 30 Kg</option>
			<option value="70">30 - 70 Kg (Kun Ekspres)</option>
			</select>
		</div>
	</div>

	<div id="container2">
		<div class="felt100">Klik på send når du har tjekket at alt er iorden, <b><i><u>smid derefter rapport kort og/eller andre service rapporter med samme nummer ud</b></i></u></div>
	</div>
	<div id="container2">
		<div class="felt50"></div>
		<div class="felt50"><input type="submit" class="in" value="Send rapport" name="send_rapp"></div></form>
	</div>
</div>
        