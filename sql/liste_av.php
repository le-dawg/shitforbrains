<?php
$result  = mysqli_query($conn,"SELECT * FROM promed WHERE afd='vj'");
$test = array();
while($row = mysqli_fetch_assoc($result)) {
$ans2 = $row['id'];
$test[] = "ans=$ans2 AND status_kode!='9' AND ind_kode!='61' AND ind_kode!='6' OR ans='51' AND status_kode!='9' AND ind_kode!='61' AND ind_kode!='6'";
}

$ans_sql = implode(' OR ',$test);

?>