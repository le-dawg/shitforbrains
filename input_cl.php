<?php
//create array to temporarily grab variables
$input_arr = array();
//grabs the $_POST variables and adds slashes
foreach ($_POST as $key => $input_arr) {
    $_POST[$key] = addslashes($input_arr);
}
?>