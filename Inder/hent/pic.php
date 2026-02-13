
<?php 
if(!isset($rapport2)){
$rapport2 = $rapport;
}
$dirname = "uploads/$rapport/";
$dirname3 = "uploads/$rapport2/";
$dirname2 = "uploads/";

if (file_exists($dirname)) {
$fi = new FilesystemIterator("uploads/$rapport/", FilesystemIterator::SKIP_DOTS);
$count = iterator_count($fi); 

} else {
$fi = '0';
}
$images = glob($dirname2."$rapport*.{jpg,png,gif,JPG,PNG,GIF,jpeg,JPEG}", GLOB_BRACE);

foreach($images as $image) {
$count = $count + '1';
}

$images = glob($dirname2."$rapport2*.{jpg,png,gif,JPG,PNG,GIF,jpeg,JPEG}", GLOB_BRACE);

foreach($images as $image) {
$count = $count + '1';
}
?>

<?php if($pic_flag == 'JA' OR !empty($row['pic1']) OR !empty($row['pic2']) OR !empty($row['pic3']) OR !empty($row['pic4']) OR !empty($row['pic5']) OR $count != '0'){ ?>
	        <div class="line_type_3" id="graa">Billed(er)</div><br style="clear:both"> 

<! ------------------------------------------------------------------------- line 13 ------------------------------------------------------------------------------------------------ !>
                <div class="line_type_5">
<p style="text-align:center; margin-top:0px; margin-bottom:0px; padding:0px;">
<?php if($pic_flag == 'JA'){ ?>
<a href="/proservice/indpic/<?php echo ''.$rapport.''; ?>.jpg" target="_blank"><img src="/proservice/indpic/<?php echo ''.$rapport.''; ?>.jpg" alt="billed"></a>
<?php } ?>
<?php if(!empty($row['pic1'])){ ?>
<a href="<?php echo $row['pic1']; ?>." target="_blank"><img src="<?php echo $row['pic1']; ?>" alt="billed"></a>
<?php } ?>
<?php if(!empty($row['pic2'])){ ?>
<a href="<?php echo $row['pic2']; ?>." target="_blank"><img src="<?php echo $row['pic2']; ?>" alt="billed"></a>
<?php } ?>
<?php if(!empty($row['pic3'])){ ?>
<a href="<?php echo $row['pic3']; ?>." target="_blank"><img src="<?php echo $row['pic3']; ?>" alt="billed"></a>
<?php } ?>
<?php if(!empty($row['pic4'])){ ?>
<a href="<?php echo $row['pic4']; ?>." target="_blank"><img src="<?php echo $row['pic4']; ?>" alt="billed"></a>
<?php } ?>
<?php if(!empty($row['pic5'])){ ?>
<a href="<?php echo $row['pic5']; ?>." target="_blank"><img src="<?php echo $row['pic5']; ?>" alt="billed"></a>
<?php } ?>
<?php

$images = glob($dirname."*.{jpg,png,gif,JPG,PNG,GIF,jpeg,JPEG}", GLOB_BRACE);


foreach($images as $image) {
    echo '<a href="'.$image.'" target="_blank"><img src="'.$image.'"></a>';
}


$images = glob($dirname3."*.{jpg,png,gif,JPG,PNG,GIF,jpeg,JPEG}", GLOB_BRACE);


foreach($images as $image) {
    echo '<a href="'.$image.'" target="_blank"><img src="'.$image.'"></a>';
}

$images = glob($dirname2."$rapport*.{jpg,png,gif,JPG,PNG,GIF,jpeg,JPEG}", GLOB_BRACE);

foreach($images as $image) {
    echo '<a href="'.$image.'" target="_blank"><img src="'.$image.'"></a>';
}

$images = glob($dirname2."$rapport2*.{jpg,png,gif,JPG,PNG,GIF,jpeg,JPEG}", GLOB_BRACE);


foreach($images as $image) {
   echo '<a href="'.$image.'" target="_blank"><img src="'.$image.'"></a>';
}

?><font color="#fff">,</font>
</div><br style="clear:both">
<div class="line_type_3" id="graa">Dokumenter</div><br style="clear:both"> 
                <div class="line_type_5">
<p style="text-align:center; margin-top:0px; margin-bottom:0px; padding:0px;">
<?php

$images = glob($dirname."*.{pdf,PDF}", GLOB_BRACE);


foreach($images as $image) {
    echo '<a href="'.$image.'" target="_blank"><img src="img/pdf.png" title="'.$image.'"></a>';
}

$images = glob($dirname."*.{xlsb,XLSB,xls,XLS,xlsx,XLSX,ods,ODS}", GLOB_BRACE);


foreach($images as $image) {
    echo '<a href="'.$image.'" target="_blank"><img src="img/Execl.png" title="'.$image.'"></a>';
}
?>

<font color="#fff">,</font>
</p>
</div><br style="clear:both"> <?php } ?>
