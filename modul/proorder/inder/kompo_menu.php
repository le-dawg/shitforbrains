<! ø !>
<ul>
<li class="topmenu">PROorder</li>
  <li><a href="index.php?side=order_bestil">Indsæt vare/komponent</a></li>
  <li><a href="index.php?side=order_bestil&under=FORS">Komponent forespÃ¸rgsel</a></li>
  <li><a href="index.php?side=order_bestil&under=LYT">Indsæt Lyt</a></li>
  <li><a href="index.php?side=order_bestil&under=CCFL"">Indsæt CCFL</a></li>
  <li><a href="index.php?side=order_soeg">Søg i PROordre</a></li>
  <li><a href="?retur">Tilbage</a></li>
<p>
<li class="topmenu">PROorder</li>
  <li><a href="index.php?side=order_lister&afd=LJ">Liste Lejre</a></li>
  <li><a href="index.php?side=order_lister&afd=VJ">Liste Vejle</a></li>
  <li><a href="index.php?side=order_lister&afd=LYT">Liste Lyt</a></li>
  <li><a href="index.php?side=order_lister&afd=CCFL">Liste CCFL</a></li>
  <li>
<p>
<div id="menu">
          <div>PROteknik</diV><div class="hvid">V.<?php $result  = mysqli_query($conn, "SELECT * FROM prover WHERE id='2'");
                                                 while($row = mysqli_fetch_assoc($result)) { 
                                                 echo ''.$row['ver2'].' <i>'.$row['dato'].'</i>'; } ?></b><br>
            &copy; <b>Otto Algreen</b> 2012 - <?php echo date('Y'); ?><br>Udviklet til <b>Pro-Consult A/S</div>
</div>
</li>
</ul>