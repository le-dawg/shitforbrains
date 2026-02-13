<?php
include("config.php");
	//Connect to MySQL Server
$firma_navn = $_GET['t1'];
	// Escape User Input to help prevent SQL Injection
$firma_navn = mysqli_real_escape_string($firma_navn);
$firma_navn = strtoupper($firma_navn);
	//build query
$query = "SELECT * FROM proservice WHERE firma_navn = '$firma_navn' ORDER BY id DESC";
	//Execute query
$qry_result = mysqli_query($conn, $query) or die(mysqli_error());
$query2 = "SELECT * FROM proservice WHERE firma_navn = '$firma_navn' ORDER BY id DESC";
	//Execute query
$qry_result2 = mysqli_query($conn, $query2) or die(mysqli_error());
	//Build Result String

// Insert a new row in the table for each person returned
while($row2 = mysqli_fetch_array($qry_result2)){
	$info = $row2['by']; }
	if(!empty($info)) {
while($row = mysqli_fetch_array($qry_result)){
	$display_string = "<input class='in_5' id='t8' type='text' name='by' value='$row[by]' tabindex='2'>";		
}
echo $display_string;
} else {
	$display_string2 = "<input class='in_5' id='t8' type='text' name='by' value='' tabindex='2'>";		
echo $display_string2;
}
?>