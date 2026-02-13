<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<script>
(function($){  
    $.fn.loaddata = function(options) {// Settings
        var settings = $.extend({
            loading_gif_url : "ajax-loader.gif", //url to loading gif
            end_record_text : 'No more records found!', //no more records to load
            data_url        : 'fetch_pages.php', //url to PHP page
            start_page      : 1 //initial page
        }, options);
       
        var el = this; 
        loading  = false;
        end_record = false;
        contents(el, settings); //initial data load
       
        $(window).scroll(function() { //detact scroll
            if($(window).scrollTop() + $(window).height() >= $(document).height()){ //scrolled to bottom of the page
                contents(el, settings); //load content chunk
            }
        });    
    };
    //Ajax load function
    function contents(el, settings){
        var load_img = $('<img/>').attr('src',settings.loading_gif_url).addClass('loading-image'); //create load image
        var record_end_txt = $('<div/>').text(settings.end_record_text).addClass('end-record-info'); //end record text
       
        if(loading == false && end_record == false){
            loading = true; //set loading flag on
            el.append(load_img); //append loading image
            $.post( settings.data_url, {'page': settings.start_page}, function(data){ //jQuery Ajax post
                if(data.trim().length == 0){ //no more records
                    el.append(record_end_txt); //show end record text
                    load_img.remove(); //remove loading img
                    end_record = true; //set end record flag on
                    return; //exit
                }
                loading = false;  //set loading flag off
                load_img.remove(); //remove loading img
                el.append(data);  //append content
                settings.start_page ++; //page increment
            })
        }
    }

})(jQuery);

$("#results").loaddata();
?>
</script>
<style type="text/css">
<! Ø !>
</style>
</head>
<body>
<div class="top">Søg i rapporter</div>
<center>
<p>
<?php $_SESSION['p_id'] = 'soeg'; $_SESSION['p2_id'] = 'soeg'?>
<form method="post" action="" onsubmit="return v(this)">
</form>
<?php

if(isset($_GET['tag-ansvar'])) {
$_SESSION['tag-ansvar'] = $_GET['tag-ansvar'];
include('sql/liste_ansvar.php');
} ?>
<?php if(isset($_GET['id'])) {
   $rapport = $_GET['id'];
     $test = 0;
   }
   if(isset($_SESSION['uid2'])) {
   $rapport = $_SESSION['uid2'];
     $test = 0;
   }
include('inder/soeg/soeg.php');
 if(!isset($_SESSION['soge'])) {
     $_SESSION['soge'] = 'nej'; }
 if(isset($_POST['soeg_sql'])) { 
     $_SESSION['soge'] = 'ja'; 
include('sql/soeg/soeg_side.php');
include('sql/soeg/soeg.php');
         $qry = "SELECT COUNT(id) AS antal FROM proservice WHERE " . $where;
         $qry2 = mysqli_query($conn, "$qry");
 	 $row2 = mysqli_fetch_assoc($qry2);
	 $antalsog = $row2['antal'];
?>
<p>
<div class="opgave-div" style="width:100%; ">
		<div class="line_type_2">
                  <div class="info_felt">Antal resutaler:</div>                  
                  <div class="tekst_felt"><?php echo $antalsog; ?></div>
                </div>
		<div class="line_type_2">
                  <div class="info_felt">Antal Vises:</div>                  
                  <div class="tekst_felt" id="1100">1 - <?php if($antalsog > 100){echo '100';} else {echo $antalsog;}?></div>
                </div>
		<div class="line_type_2">
                  <div class="info_felt"></div>                  
                  <div class="tekst_felt"></div>
                </div>
		<div class="line_type_2" id="sidste">
                  <div class="info_felt"></div>                  
                  <div class="tekst_felt"><?php $for = $_GET['next']; if($antalsog > 100){ ?><a href="index.php?side=soeg&next=200">101 - 200</a><?php } ?></div>
		</div><br style="clear:both">
</div>
<?php

?>
<div id="sogedata"><?php include('inder/soeg/sogedata.php');?></div><?php } elseif($_SESSION['soge'] == 'ja') {

include('sql/soeg/soeg_auto.php');
include('sql/soeg/soeg.php');
if(isset($_GET['next'])){
$for = $_GET['next'] - 100;
         $result = mysqli_query($conn, "$query ORDER BY dato2 DESC LIMIT $for");
         while($row = mysqli_fetch_assoc($result)) {
$ide = $row['dato2']; 
}
         $qry = "SELECT COUNT(id) AS antal FROM proservice WHERE " . $where;
         $qry2 = mysqli_query($conn, "$qry");
 	 $row2 = mysqli_fetch_assoc($qry2);
	 $antalsog = $row2['antal'];
 ?>
<p>
<div class="opgave-div" style="width:100%; ">
		<div class="line_type_2">
                  <div class="info_felt">Antal resutaler:</div>                  
                  <div class="tekst_felt"><?php echo $antalsog; ?></div>
                </div>
		<div class="line_type_2">
                  <div class="info_felt">Antal Vises:</div>                  
                  <div class="tekst_felt" id="1100"><?php $for = $_GET['next'] - 99; echo $for; ;?> - <?php $max=$antalsog - ($_GET['next'] - 100); if($max > 100){echo $_GET['next'];} else {echo ($max + ($_GET['next'])-100);}?></div>
                </div>
		<div class="line_type_2">
                  <div class="info_felt"></div>                  
                  <div class="tekst_felt">
                             <?php $for = $_GET['next']; if($for == '200'){ ?><a href="index.php?side=soeg">1 - 100</a><?php } ?>
                             <?php $for = $_GET['next']; if($for > 200){ ?><a href="index.php?side=soeg&next=<?php $for = $_GET['next'] - 100; echo $for; ?>"><?php $for = $_GET['next'] - 199; echo $for;?> - <?php $for = $_GET['next'] - 100; echo $for; ?></a><?php } ?></div>
                </div>
		<div class="line_type_2" id="sidste">
                  <div class="info_felt"></div>                  
                  <div class="tekst_felt"><?php $for = $_GET['next']; if($antalsog > $for){ ?><a href="index.php?side=soeg&next=<?php $for = $_GET['next'] + 100; echo $for; ?>"><?php $for = $_GET['next'] + 1; echo $for;?> - <?php $max=$antalsog - ($_GET['next']); if($max > 100){echo ($_GET['next'] + 100);} else {echo ($max + $_GET['next']);}?></a><?php } ?></div>
		</div><br style="clear:both">
</div><?php
$result = mysqli_query($conn, "$query and dato2 < '$ide' ORDER BY dato2 DESC LIMIT 100" );
while($row = mysqli_fetch_assoc($result)) { 

include('sql/soeg/time_fak.php');
include('inder/inder_no.php');


} }else{ 
         $qry2 = mysqli_query($conn, "$qry");
 	 $row2 = mysqli_fetch_assoc($qry2);
	 $antalsog = $row2['antal'];
?>
<p>
<div class="opgave-div" style="width:100%; ">
		<div class="line_type_2">
                  <div class="info_felt">Antal resutaler:</div>                  
                  <div class="tekst_felt"><?php echo $antalsog; ?></div>
                </div>
		<div class="line_type_2">
                  <div class="info_felt">Antal Vises:</div>                  
                  <div class="tekst_felt" id="1100">1 - <?php if($antalsog > 100){echo '100';} else {echo $antalsog;}?></div>
                </div>
		<div class="line_type_2">
                  <div class="info_felt"></div>                  
                  <div class="tekst_felt"></div>
                </div>
		<div class="line_type_2" id="sidste">
                  <div class="info_felt"></div>                  
                  <div class="tekst_felt"><?php $for = $_GET['next']; if($antalsog > 100){ ?><a href="index.php?side=soeg&next=200">101 - 200</a><?php } ?></div>
		</div><br style="clear:both">
</div>
<?php

         $result = mysqli_query($conn, "$query ORDER BY dato2 DESC LIMIT 100");
         while($row = mysqli_fetch_assoc($result)) { 

include('sql/soeg/time_fak.php');
include('inder/inder_no.php'); } } }?>
<div class="wrapper">
        <ul id="results"><!-- results appear here as list --></ul>
</div>
<?php $title = 'PROteknik :: Søg Rapport'; ?>
</body>
</html>