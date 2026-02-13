<?php
if(isset($_POST['upload'])) {

if (!file_exists("uploads/$rapport/")) {
    mkdir("uploads/$rapport/", 7777, true);
}

$target_dir = "uploads/$rapport/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$target_file2 = '/teknik/' . $target_file  ;
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) { ?>
    <div class="top">Filen fines i forvejen</div><?php
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "JPG" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "JPEG" &&
$imageFileType != "gif" && $imageFileType != "PNG" && $imageFileType != "GIF") { ?>
    <div class="top">Kun JPG, JPEG, PNG & GIF er tilladt</div><?php
    $uploadOk = 0;
}


// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
// if everything is ok, try to upload file
} else {

if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) { ?>
		<div class="top"><?php echo basename( $_FILES["fileToUpload"]["name"]); ?> blev uploadet</div><?php

    } else {
        echo "Sorry, there was an error uploading your file.";
    }
} }

?>