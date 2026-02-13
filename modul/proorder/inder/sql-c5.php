<! ø !>
<?php
if(isset($_GET['c5id'])) { 
$idc5 = $_GET['c5id']; 
$con2 = odbc_connect("Driver={SQL Server};Server=PROSERVER\BKUPEXEC;Database=C530; CharacterSet => UTF-8", 'proteknik2', 'pro2060');

$json_str = file_get_contents("http://localhost:8080/?table=InvItemClientUser&filters=Item=20");
$test = json_decode($json_str, true);
	
}
}
echo $test;
?>
