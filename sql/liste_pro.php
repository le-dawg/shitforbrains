<?php
$result  = mysqli_query($conn,"SELECT * FROM promed WHERE afd='vj'");
$test = array();
while($row = mysqli_fetch_assoc($result)) {
$ans2 = $row['id'];
$test[] = "ind_kode='61' AND status_kode!='9' or ind_kode='6' AND status_kode!='9'";
}

$ans_sql = implode(' OR ',$test);
?>