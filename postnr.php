
<?php
# connect to a DSN "mydb" with a user and password "marin" 
$connect = odbc_connect("DRIVER={ODBC Driver 11 for SQL Server};Server=PROSERVER\BKUPEXEC;Database=C530;Client_CSet=UTF-8;" . 
                    "Server_CSet=Windows-1252", "proteknik2", "pro2060");

$con2 = odbc_connect("Driver={SQL Server};Server=PROSERVER\BKUPEXEC;Database=C530; CharacterSet => UTF-8", 'proteknik2', 'pro2060');
	$querySQL = "SELECT POSTBY FROM DEBKART WHERE DATASET='DAT' GROUP BY POSTBY" ;
	$resultSQL = odbc_exec($con2, $querySQL);
	while(odbc_fetch_row($resultSQL)){

$navn = odbc_result($resultSQL, 1);
$rap_firma_navn = odbc_result($resultSQL, 1);
$rap_firma_navn = iconv("ISO-8859-1", "UTF-8//TRANSLIT//IGNORE", $rap_firma_navn);

$qry = "SELECT COUNT(POSTBY) AS ind0 FROM DEBKART WHERE DATASET='DAT' AND POSTBY='$navn'";
$result2 = odbc_exec($connect, $qry);
$ind0 = odbc_result($result2, 1);
?>
<font size="1">
<?php
  echo("Antal $ind0 kunde fra $rap_firma_navn");
?>
<br>
</font>
<?php
}

# close the connection

?>
