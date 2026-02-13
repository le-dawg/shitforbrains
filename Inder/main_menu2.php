<! ø !>
<div class="hjemmesideplads">

    <div class="mindropdownmenu">
        <ul class="minulpunkta">
 	    <li><a id="top" href="index.php?side=velkommen">Infoside</a></li>
            <li><a href="index.php?side=dagseddel">Dagseddelbog</a></li>
            <li>
            <li>
                <input id="check01" type="checkbox" name="menu"/>
    		<label for="check01">Rapporter</label>
                <ul class="minulpunktb">
		  <li><a href="index.php?side=hentrapport">Se service rapport</a></li>
		  <li><a href="index.php?side=soeg">Søg i rapporter</a></li>
		  <li><a href="index.php?side=liste&liste=<?php echo $bruger_id; ?>&sort=id">Dine opgaver</a></li>
		  <li><a href="index.php?side=liste&liste=50&sort=id">UA Viby</a></li>
		  <li><a href="index.php?side=liste&liste=al&sort=id">Alle opg. Viby</a></li>
		  <li><a href="index.php?side=liste&liste=51&sort=id">UA Vejle</a></li>
		  <li><a href="index.php?side=liste&liste=av&sort=id">Alle opg. Vejle</a></li>
		  <li><a href="index.php?side=liste&liste=52&sort=id">UA Padborg</a></li>
		  <li><a href="index.php?side=liste&liste=ap&sort=id">Alle opg. Padborg</a></li>
		  <li><a href="index.php?side=liste&liste=pro&sort=id">Pro-Consult sager</a></li>

                </ul>
            </li>

            <li>
                <input id="check02" type="checkbox" name="menu"/>
    		<label for="check02">PROorder</label>
                <ul class="minulpunktb">
		  <li><a href="index.php?side=order_bestil">Indsæt vare/komponent</a></li>
                  <li><a href="../prosalg/index.php?side=kom" target="_blank">Opret komponent forespørgsel</a></li>
		  <li><a href="index.php?side=order_bestil&under=CCFL"">Indsæt CCFL</a></li>
		<li><a href="index.php?side=liste&liste=prosalg&sort=id&idid=procon">Forespørgsel Liste</a></li>
		  <li><a href="index.php?side=order_soeg">Søg i PROordre</a></li>
		  <li><a href="index.php?side=order_soegc5">Søg i lageret</a></li>
                
                <li>
                    <a><span class="sub">Bestilings lister</span></a>
                    <ul class="minulpunktc">
			  <li><a href="index.php?side=order_lister&afd=LJ">Liste Viby</a></li>
			  <li><a href="index.php?side=order_lister&afd=VJ">Liste Vejle</a></li>
			  <li><a href="index.php?side=order_lister&afd=PA">Liste Padborg</a></li>
			  <li><a href="index.php?side=order_lister&afd=LYT">Liste Lyt</a></li>
			  <li><a href="index.php?side=order_lister&afd=CCFL">Liste CCFL</a></li>
                    </ul>
                </li>
            </li>
		</ul>
            <li>
                <a>PROsalg</a>
                <ul class="minulpunktb">
                <li><a href="../prosalg/index.php" target="_blank">Opret PROsalg</a></li>
                <li><a href="../prosalg/index.php?side=fors" target="_blank">Opret kunde forespørgsel</a></li>
		<li><a href="index.php?side=liste&liste=prosalg&sort=id&idid=5">Forespørgsel Liste</a></li>
		<li><a href="index.php?side=liste&liste=lev">Afventer Levering</a></li>
                </ul>
            </li>

            <li>
                <a>Administation</a>
                <ul class="minulpunktb">
		  <li><a href="index.php?side=sagsrapport">Ind rapp. statestik</a></li>
		  <li><a href="index.php?side=800">Kollega oversigt</a></li>
                    <?php if($_SESSION['admin'] == 'ja'){ ?>  
               		 <li>
                   		 <a><span class="sub">undermenu 2</span></a>
                  		  <ul class="minulpunktc">
                 		       <li><a href="index.php?side=brugeadmin" class="knap2">Bruger Adminstation</a></li>
              			       <li><a href="index.php?side=velkommen" class="knap2">Besked styring (NO)</a></li>
               			       <li><a href="index.php?side=divtimer">Div. timer rapport</a></li>

       			          </ul>
             		</li>
                   <?php } ?>
                </ul>
            </li>
	    <li><a href="logaf.php">Logud</a></li>
            <li class="tekst3nr"><form method="post" action="" onsubmit="return v(this)"><input class="tekst2nr" type="text" name="hentrapid" placeholder="Indtast rapportnr"><input class="tekst2rap" type="submit" value="" name="hentrap"></form></li>

        </ul>
        <div class="clearboth"></div>
    </div>

</div>