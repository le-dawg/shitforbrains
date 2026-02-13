<?php
$test = array();
while($row = mysqli_fetch_assoc($result)) {
$ans2 = $row['id'];
$test[] = "ind_kode='5'";
}

$ans_sql = implode(' OR ',$test);
?>