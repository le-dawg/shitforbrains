<?php
$result  = mysqli_query($conn,"SELECT * FROM promed WHERE afd='lj'");
$test = array();
while($row = mysqli_fetch_assoc($result)) {
$ans2 = $row['id'];
$test[] = "ans=$ans2 AND status_kode!='9'";
}

$ans_sql = implode(' OR ',$test);
?>