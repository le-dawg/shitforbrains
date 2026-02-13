$result  = mysqli_query($conn,"SELECT * FROM prosalg WHERE status_kode!='9' and status_kode!='99' $what limit 10");
while($row = mysqli_fetch_assoc($result)) {
	    $asap = $row['ASAP'];
	    $id = $row['id'];
	    $firma_navn = $row['ind_kode'];
echo $id;

