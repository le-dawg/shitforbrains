<! ø !>
<div class="top">PROordre -> Søg vare/kompont</div>
<form method="post" action="" onsubmit="return v(this)">
<div id="container2">
<div class="felt25">Dato:</div>
<div class="felt25"><input class="inhvid" type="text" name="dato" value=""></div>
<div class="felt25">Intialer:</div>
<div class="felt25"><input class="inhvid" type="text" name="intal" value=""></div>
</div>
<div id="container2">
<div class="felt25">Service reportnummer/andet Revk.:</div>
<div class="felt25"><input class="inhvid" type="text" name="service_report" value=""></div>
<div class="felt25">Bestilt Dato:</div>
<div class="felt25"><input class="inhvid" type="text" name="bestilt" value=""></div>
</div>
<div id="container2">
<div class="felt25">Vare nr.:</div>
<div class="felt25"><input class="inhvid" type="text" name="vare_nummer" value=""></div>
<div class="felt25">Vare beskrivelse:</div>
<div class="felt25"><input class="inhvid" type="text" name="vare_beskrivelse" value=""></div>
</div>
<div id="container2">
<div class="felt25">Leverandør:</div>
<div class="felt25"><?php include('lev.php'); ?></div>
<div class="felt25">Hvis anden levendør:</div>
<div class="felt25"><input class="inhvid" type="text" name="andre_lev" value=""></div>
</div>
<div id="container2">
<div class="felt25">Kapacitet (kun lyt).:</div>
<div class="felt25"><input class="inhvid" type="text" name="kapacitet" value=""></div>
<div class="felt25">Spænding (kun lyt):</div>
<div class="felt25"><input class="inhvid" type="text" name="spaending" value=""></div>
</div>
<div id="container2">
<div class="felt25">Diameter (lyt og ccfl):</div>
<div class="felt25"><input class="inhvid" type="text" name="diameter" value=""></div>
<div class="felt25">Højde (lyt og ccfl):</div>
<div class="felt25"><input class="inhvid" type="text" name="hojde" value=""></div>
</div>
<div id="container2">
<div class="felt25">Max antal vist</div>
<div class="felt25"><select size="1" name="max_antal" class="inhvid">
                <option value="25"> 25 vare</option>
                <option value="5"> 5 vare</option>
                <option value="10"> 10 vare</option>
                <option value="15"> 15 vare</option>
                <option value="20"> 20 vare</option>
                <option value="30"> 30 vare</option>
                <option value="40"> 40 vare</option>
                <option value="50"> 50 vare</option>
                <option value="100"> 100 vare</option></select></div>
<div class="felt25"></div>
<div class="felt25"></div>
</div>
<div id="container2">
<div class="felt100"><input class="in" type="submit" value="Søg" name="send"></div>

</div>
</form>
<p></p>