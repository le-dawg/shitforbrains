  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <style>
  body {
    min-width: 520px;
  }
  .column {
    width: 20%;
    float: left;
    padding-bottom: 100px;
  }
  .portlet {
    margin: 0 1em 1em 0;
    padding: 0.3em;
  }
  .portlet-header {
    padding: 0.2em 0.3em;
    margin-bottom: 0.5em;
    position: relative;
  }
  .portlet-toggle {
    position: absolute;
    top: 50%;
    right: 0;
    margin-top: -8px;
  }
  .portlet-content {
    padding: 0.4em;
  }
  .portlet-placeholder {
    border: 1px dotted black;
    margin: 0 1em 1em 0;
    height: 50px;
  }
  </style>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( ".column" ).sortable({
      connectWith: ".column",
      handle: ".portlet-header",
      cancel: ".portlet-toggle",
      placeholder: "portlet-placeholder ui-corner-all"
    });
 
    $( ".portlet" )
      .addClass( "ui-widget ui-widget-content ui-helper-clearfix ui-corner-all" )
      .find( ".portlet-header" )
        .addClass( "ui-widget-header ui-corner-all" )
        .prepend( "<span class='ui-icon ui-icon-minusthick portlet-toggle'></span>");
 
    $( ".portlet-toggle" ).on( "click", function() {
      var icon = $( this );
      icon.toggleClass( "ui-icon-minusthick ui-icon-plusthick" );
      icon.closest( ".portlet" ).find( ".portlet-content" ).toggle();
    });
  } );
  </script>

<?php include_once('sql/list/retning.php'); 
include_once('sql/list/salgretning.php'); 
include_once('inder/list/menu.php');
include_once('inder/list/salgmenu.php');
if(isset($_GET['tag-ansvar'])) {
$_SESSION['tag-ansvar'] = $_GET['tag-ansvar'];
include('sql/liste_ansvar.php');
} ?>
<?php include_once('sql/liste_main.php');

if($_GET['liste'] == 'al'){
include_once('sql/liste_al.php');
$title = 'PROteknik :: Alle Opgaver Viby';

}elseif($_GET['liste'] == 'av'){
include_once('sql/liste_av.php');
$title = 'PROteknik :: Alle Opgaver Vejle';

}elseif($_GET['liste'] == 'pro'){
include_once('sql/liste_pro.php');
$title = 'PROteknik :: Pro-Consult Sager';

}elseif($_GET['liste'] == 'salg'){
$proli = "AND ind_kode='5' AND status_kode='9'";
$title = 'PROteknik :: Liste Salgssager';

}elseif($_GET['liste'] == '50' || $_GET['liste'] == '51'){
$proli = "AND ind_kode!='61' AND ind_kode!='6'";
$title = 'PROteknik :: Liste uden ansvar';

}else{
$title = 'PROteknik :: Dine opgaver';
}
$result  = mysqli_query($conn, "SELECT * FROM proservice WHERE $ans_sql AND status_kode!='9' $proli ORDER BY $sql $_SESSION[retning]");
while($row = mysqli_fetch_assoc($result)) {
	    $asap = $row['ASAP'];
	    $id = $row['id'];
	    $firma_navn = $row['ind_kode'];
	    $flag = $row['flag'];
            if($flag != 'ROD'){
	    $dato2 = $row['dato2'];
            $dato_1mrd = date('Y-m-d H:i:s', strtotime($dato2. "+1month"));
            if($dato_top >= $dato_1mrd) {
		$result2  = mysqli_query($conn, "SELECT * FROM proservice_rapport WHERE service_raport='$id' ORDER BY dato2 ASC");
            while($row2 = mysqli_fetch_assoc($result2)) {
		$dato3 = $row2['dato2']; }
            if(!isset($dato3)) {
		$dato3 = $dato2; }
            $dato_1mrd2 = date('Y-m-d 15:00:00', strtotime($dato3. "+2month"));
            if($dato_top >= $dato_1mrd2) {
	    $old = 'JA'; } else { $old = 'Nej'; } } else { $old = 'Nej'; } } else { $old = 'Nej'; }
            if($firma_navn == '6') { $old = 'Nej'; } 
include('inder/inder_no.php'); 

} if($_GET['liste'] == 'prosalg'){
$result  = mysqli_query($conn, "SELECT * FROM prosalg WHERE status_kode!='9' and status_kode!='99' $what ORDER BY $sql $_SESSION[retning]");
while($row = mysqli_fetch_assoc($result)) {
	    $asap = $row['ASAP'];
	    $id = $row['id'];
	    $firma_navn = $row['ind_kode'];
	    unset($nummer);
	    unset($nummer2);
	    unset($nummer3);
	    unset($pris);
include('inder/inder_prosalg.php'); 
} }

//TEST
?>


<div class="opgavetest">
<div class="column">Nye Sager
<?php
if($_GET['liste'] == 'prosalgtest'){
$result  = mysqli_query($conn, "SELECT * FROM prosalg WHERE status_kode!='9' and status_kode!='99' AND flag_kode = '0' ORDER BY $sql $_SESSION[retning]");
while($row = mysqli_fetch_assoc($result)) {
	    $asap = $row['ASAP'];
	    $id = $row['id'];
	    $firma_navn = $row['ind_kode'];
	    unset($nummer);
	    unset($nummer2);
	    unset($nummer3);
	    unset($pris);
?>
<?php
include('inder/inder_prosalgtest.php');
} }
?>
</div>
<div class="column">Forspørsle hos lev.
<?php
if($_GET['liste'] == 'prosalgtest'){
$result  = mysqli_query($conn, "SELECT * FROM prosalg WHERE status_kode!='9' and status_kode!='99' AND flag_kode = '1' ORDER BY $sql $_SESSION[retning]");
while($row = mysqli_fetch_assoc($result)) {
	    $asap = $row['ASAP'];
	    $id = $row['id'];
	    $firma_navn = $row['ind_kode'];
	    unset($nummer);
	    unset($nummer2);
	    unset($nummer3);
	    unset($pris);
?>
<?php
include('inder/inder_prosalgtest.php');
} }
?>
</div>
<div class="column">Tilbud sendt
<?php
if($_GET['liste'] == 'prosalgtest'){
$result  = mysqli_query($conn, "SELECT * FROM prosalg WHERE status_kode!='9' and status_kode!='99' AND flag_kode = '2' ORDER BY $sql $_SESSION[retning]");
while($row = mysqli_fetch_assoc($result)) {
	    $asap = $row['ASAP'];
	    $id = $row['id'];
	    $firma_navn = $row['ind_kode'];
	    unset($nummer);
	    unset($nummer2);
	    unset($nummer3);
	    unset($pris);
?>
<?php
include('inder/inder_prosalgtest.php');
} }
?>
</div>
<div class="column">order oprette
<?php
if($_GET['liste'] == 'prosalgtest'){
$result  = mysqli_query($conn, "SELECT * FROM prosalg WHERE status_kode!='9' and status_kode!='99' AND flag_kode = '3' ORDER BY $sql $_SESSION[retning]");
while($row = mysqli_fetch_assoc($result)) {
	    $asap = $row['ASAP'];
	    $id = $row['id'];
	    $firma_navn = $row['ind_kode'];
	    unset($nummer);
	    unset($nummer2);
	    unset($nummer3);
	    unset($pris);
?>
<?php
include('inder/inder_prosalgtest.php');
} }
?>
</div>
<div class="column">Vare Bestilt
<?php
if($_GET['liste'] == 'prosalgtest'){
$result  = mysqli_query($conn, "SELECT * FROM prosalg WHERE status_kode!='9' and status_kode!='99' AND flag_kode = '4' ORDER BY $sql $_SESSION[retning]");
while($row = mysqli_fetch_assoc($result)) {
	    $asap = $row['ASAP'];
	    $id = $row['id'];
	    $firma_navn = $row['ind_kode'];
	    unset($nummer);
	    unset($nummer2);
	    unset($nummer3);
	    unset($pris);
?>
<?php
include('inder/inder_prosalgtest.php');
} }
?>
</div>
</div>
</body>
</html>