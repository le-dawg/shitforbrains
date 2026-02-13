<?php
$date = "$year-01-11 00:00:00";
$test2 = date('Y-m-d H:i:s', strtotime($date. "first day of this month"));
$date = "$year-01-11 23:59:59";
$test = date('Y-m-d H:i:s', strtotime($date. "first day of next month"));
$test = date('Y-m-d H:i:s', strtotime($test. "-1day"));

$sql = "SELECT AVG(TO_SECONDS(dato3) - TO_SECONDS(dato2)) as avTime
FROM proservice WHERE dato3 >= '$test2' AND dato3 <= '$test' AND status_kode ='9' AND ind_kode != '5' AND ind_kode != '6' AND ind_kode != '61' AND ans != '1'";
$res = mysql_query($sql);
$timeDiff = mysql_result($res, 0, 'avTime');
$trt01 = $timeDiff/86400;  // 86400 seconds in one day
$trt01 = intval($trt01);

$sql = "SELECT AVG(TO_SECONDS(dato_fl) - TO_SECONDS(dato2)) as avTime
FROM proservice WHERE dato_fl >= '$test2' AND dato_fl <= '$test' AND ind_kode != '5' AND ind_kode != '6' AND ind_kode != '61' AND ans != '1'";
$res = mysql_query($sql);
$timeDiff = mysql_result($res, 0, 'avTime');
$flt01 = $timeDiff/86400;  // 86400 seconds in one day
$flt01 = intval($flt01);

$date = "$year-02-11 00:00:00";
$test2 = date('Y-m-d H:i:s', strtotime($date. "first day of this month"));
$date = "$year-02-11 23:59:59";
$test = date('Y-m-d H:i:s', strtotime($date. "first day of next month"));
$test = date('Y-m-d H:i:s', strtotime($test. "-1day"));

$sql = "SELECT AVG(TO_SECONDS(dato2) - TO_SECONDS(dato3)) as avTime
FROM proservice WHERE dato3 >= '$test2' AND dato3 <= '$test' AND status_kode ='9' AND ind_kode != '5' AND ind_kode != '6' AND ind_kode != '61' AND ans != '1'";
$res = mysql_query($sql);
$timeDiff = mysql_result($res, 0, 'avTime');
$trt02 = $timeDiff/86400;  // 86400 seconds in one day
$trt02 = $trt02 * -1;
$trt02 = intval($trt02);

$sql = "SELECT AVG(TO_SECONDS(dato_fl) - TO_SECONDS(dato2)) as avTime
FROM proservice WHERE dato_fl >= '$test2' AND dato_fl <= '$test' AND ind_kode != '5' AND ind_kode != '6' AND ind_kode != '61' AND ans != '1'";
$res = mysql_query($sql);
$timeDiff = mysql_result($res, 0, 'avTime');
$flt02 = $timeDiff/86400;  // 86400 seconds in one day
$flt02 = intval($flt02);

$date = "$year-03-11 00:00:00";
$test2 = date('Y-m-d H:i:s', strtotime($date. "first day of this month"));
$date = "$year-03-11 23:59:59";
$test = date('Y-m-d H:i:s', strtotime($date. "first day of next month"));
$test = date('Y-m-d H:i:s', strtotime($test. "-1day"));

$sql = "SELECT AVG(TO_SECONDS(dato2) - TO_SECONDS(dato3)) as avTime
FROM proservice WHERE dato3 >= '$test2' AND dato3 <= '$test' AND status_kode ='9' AND ind_kode != '5' AND ind_kode != '6' AND ind_kode != '61' AND ans != '1'";
$res = mysql_query($sql);
$timeDiff = mysql_result($res, 0, 'avTime');
$trt03 = $timeDiff/86400;  // 86400 seconds in one day
$trt03 = $trt03 * -1;
$trt03 = intval($trt03);

$sql = "SELECT AVG(TO_SECONDS(dato_fl) - TO_SECONDS(dato2)) as avTime
FROM proservice WHERE dato_fl >= '$test2' AND dato_fl <= '$test' AND ind_kode != '5' AND ind_kode != '6' AND ind_kode != '61' AND ans != '1'";
$res = mysql_query($sql);
$timeDiff = mysql_result($res, 0, 'avTime');
$flt03 = $timeDiff/86400;  // 86400 seconds in one day
$flt03 = intval($flt03);

$date = "$year-04-11 00:00:00";
$test2 = date('Y-m-d H:i:s', strtotime($date. "first day of this month"));
$date = "$year-04-11 23:59:59";
$test = date('Y-m-d H:i:s', strtotime($date. "first day of next month"));
$test = date('Y-m-d H:i:s', strtotime($test. "-1day"));

$sql = "SELECT AVG(TO_SECONDS(dato2) - TO_SECONDS(dato3)) as avTime
FROM proservice WHERE dato3 >= '$test2' AND dato3 <= '$test' AND status_kode ='9' AND ind_kode != '5' AND ind_kode != '6' AND ind_kode != '61' AND ans != '1'";
$res = mysql_query($sql);
$timeDiff = mysql_result($res, 0, 'avTime');
$trt04 = $timeDiff/86400;  // 86400 seconds in one day
$trt04 = $trt04 * -1;
$trt04 = intval($trt04);

$sql = "SELECT AVG(TO_SECONDS(dato_fl) - TO_SECONDS(dato2)) as avTime
FROM proservice WHERE dato_fl >= '$test2' AND dato_fl <= '$test' AND ind_kode != '5' AND ind_kode != '6' AND ind_kode != '61' AND ans != '1'";
$res = mysql_query($sql);
$timeDiff = mysql_result($res, 0, 'avTime');
$flt04 = $timeDiff/86400;  // 86400 seconds in one day
$flt04 = intval($flt04);

$date = "$year-05-11 00:00:00";
$test2 = date('Y-m-d H:i:s', strtotime($date. "first day of this month"));
$date = "$year-05-11 23:59:59";
$test = date('Y-m-d H:i:s', strtotime($date. "first day of next month"));
$test = date('Y-m-d H:i:s', strtotime($test. "-1day"));

$sql = "SELECT AVG(TO_SECONDS(dato2) - TO_SECONDS(dato3)) as avTime
FROM proservice WHERE dato3 >= '$test2' AND dato3 <= '$test' AND status_kode ='9' AND ind_kode != '5' AND ind_kode != '6' AND ind_kode != '61' AND ans != '1'";
$res = mysql_query($sql);
$timeDiff = mysql_result($res, 0, 'avTime');
$trt05 = $timeDiff/86400;  // 86400 seconds in one day
$trt05 = $trt05 * -1;
$trt05 = intval($trt05);

$sql = "SELECT AVG(TO_SECONDS(dato_fl) - TO_SECONDS(dato2)) as avTime
FROM proservice WHERE dato_fl >= '$test2' AND dato_fl <= '$test' AND ind_kode != '5' AND ind_kode != '6' AND ind_kode != '61' AND ans != '1'";
$res = mysql_query($sql);
$timeDiff = mysql_result($res, 0, 'avTime');
$flt05 = $timeDiff/86400;  // 86400 seconds in one day
$flt05 = intval($flt05);

$date = "$year-06-11 00:00:00";
$test2 = date('Y-m-d H:i:s', strtotime($date. "first day of this month"));
$date = "$year-06-11 23:59:59";
$test = date('Y-m-d H:i:s', strtotime($date. "first day of next month"));
$test = date('Y-m-d H:i:s', strtotime($test. "-1day"));

$sql = "SELECT AVG(TO_SECONDS(dato2) - TO_SECONDS(dato3)) as avTime
FROM proservice WHERE dato3 >= '$test2' AND dato3 <= '$test' AND status_kode ='9' AND ind_kode != '5' AND ind_kode != '6' AND ind_kode != '61' AND ans != '1'";
$res = mysql_query($sql);
$timeDiff = mysql_result($res, 0, 'avTime');
$trt06 = $timeDiff/86400;  // 86400 seconds in one day
$trt06 = $trt06 * -1;
$trt06 = intval($trt06);

$sql = "SELECT AVG(TO_SECONDS(dato_fl) - TO_SECONDS(dato2)) as avTime
FROM proservice WHERE dato_fl >= '$test2' AND dato_fl <= '$test' AND ind_kode != '5' AND ind_kode != '6' AND ind_kode != '61' AND ans != '1'";
$res = mysql_query($sql);
$timeDiff = mysql_result($res, 0, 'avTime');
$flt06 = $timeDiff/86400;  // 86400 seconds in one day
$flt06 = intval($flt06);

$date = "$year-07-11 00:00:00";
$test2 = date('Y-m-d H:i:s', strtotime($date. "first day of this month"));
$date = "$year-07-11 23:59:59";
$test = date('Y-m-d H:i:s', strtotime($date. "first day of next month"));
$test = date('Y-m-d H:i:s', strtotime($test. "-1day"));

$sql = "SELECT AVG(TO_SECONDS(dato2) - TO_SECONDS(dato3)) as avTime
FROM proservice WHERE dato3 >= '$test2' AND dato3 <= '$test' AND status_kode ='9' AND ind_kode != '5' AND ind_kode != '6' AND ind_kode != '61' AND ans != '1'";
$res = mysql_query($sql);
$timeDiff = mysql_result($res, 0, 'avTime');
$trt07 = $timeDiff/86400;  // 86400 seconds in one day
$trt07 = $trt07 * -1;
$trt07 = intval($trt07);

$sql = "SELECT AVG(TO_SECONDS(dato_fl) - TO_SECONDS(dato2)) as avTime
FROM proservice WHERE dato_fl >= '$test2' AND dato_fl <= '$test' AND ind_kode != '5' AND ind_kode != '6' AND ind_kode != '61' AND ans != '1'";
$res = mysql_query($sql);
$timeDiff = mysql_result($res, 0, 'avTime');
$flt07 = $timeDiff/86400;  // 86400 seconds in one day
$flt07 = intval($flt07);

$date = "$year-08-11 00:00:00";
$test2 = date('Y-m-d H:i:s', strtotime($date. "first day of this month"));
$date = "$year-08-11 23:59:59";
$test = date('Y-m-d H:i:s', strtotime($date. "first day of next month"));
$test = date('Y-m-d H:i:s', strtotime($test. "-1day"));

$sql = "SELECT AVG(TO_SECONDS(dato2) - TO_SECONDS(dato3)) as avTime
FROM proservice WHERE dato3 >= '$test2' AND dato3 <= '$test' AND status_kode ='9' AND ind_kode != '5' AND ind_kode != '6' AND ind_kode != '61' AND ans != '1'";
$res = mysql_query($sql);
$timeDiff = mysql_result($res, 0, 'avTime');
$trt08 = $timeDiff/86400;  // 86400 seconds in one day
$trt08 = $trt08 * -1;
$trt08 = intval($trt08);

$sql = "SELECT AVG(TO_SECONDS(dato_fl) - TO_SECONDS(dato2)) as avTime
FROM proservice WHERE dato_fl >= '$test2' AND dato_fl <= '$test' AND ind_kode != '5' AND ind_kode != '6' AND ind_kode != '61' AND ans != '1'";
$res = mysql_query($sql);
$timeDiff = mysql_result($res, 0, 'avTime');
$flt08 = $timeDiff/86400;  // 86400 seconds in one day
$flt08 = intval($flt08);

$date = "$year-09-11 00:00:00";
$test2 = date('Y-m-d H:i:s', strtotime($date. "first day of this month"));
$date = "$year-09-11 23:59:59";
$test = date('Y-m-d H:i:s', strtotime($date. "first day of next month"));
$test = date('Y-m-d H:i:s', strtotime($test. "-1day"));

$sql = "SELECT AVG(TO_SECONDS(dato2) - TO_SECONDS(dato3)) as avTime
FROM proservice WHERE dato3 >= '$test2' AND dato3 <= '$test' AND status_kode ='9' AND ind_kode != '5' AND ind_kode != '6' AND ind_kode != '61' AND ans != '1'";
$res = mysql_query($sql);
$timeDiff = mysql_result($res, 0, 'avTime');
$trt09 = $timeDiff/86400;  // 86400 seconds in one day
$trt09 = $trt09 * -1;
$trt09 = intval($trt09);

$sql = "SELECT AVG(TO_SECONDS(dato_fl) - TO_SECONDS(dato2)) as avTime
FROM proservice WHERE dato_fl >= '$test2' AND dato_fl <= '$test' AND ind_kode != '5' AND ind_kode != '6' AND ind_kode != '61' AND ans != '1'";
$res = mysql_query($sql);
$timeDiff = mysql_result($res, 0, 'avTime');
$flt09 = $timeDiff/86400;  // 86400 seconds in one day
$flt09 = intval($flt09);

$date = "$year-10-11 00:00:00";
$test2 = date('Y-m-d H:i:s', strtotime($date. "first day of this month"));
$date = "$year-10-11 23:59:59";
$test = date('Y-m-d H:i:s', strtotime($date. "first day of next month"));
$test = date('Y-m-d H:i:s', strtotime($test. "-1day"));

$sql = "SELECT AVG(TO_SECONDS(dato2) - TO_SECONDS(dato3)) as avTime
FROM proservice WHERE dato3 >= '$test2' AND dato3 <= '$test' AND status_kode ='9' AND ind_kode != '5' AND ind_kode != '6' AND ind_kode != '61' AND ans != '1'";
$res = mysql_query($sql);
$timeDiff = mysql_result($res, 0, 'avTime');
$trt10 = $timeDiff/86400;  // 86400 seconds in one day
$trt10 = $trt10 * -1;
$trt10 = intval($trt10);

$sql = "SELECT AVG(TO_SECONDS(dato_fl) - TO_SECONDS(dato2)) as avTime
FROM proservice WHERE dato_fl >= '$test2' AND dato_fl <= '$test' AND ind_kode != '5' AND ind_kode != '6' AND ind_kode != '61' AND ans != '1'";
$res = mysql_query($sql);
$timeDiff = mysql_result($res, 0, 'avTime');
$flt10 = $timeDiff/86400;  // 86400 seconds in one day
$flt10 = intval($flt10);

$date = "$year-11-11 00:00:00";
$test2 = date('Y-m-d H:i:s', strtotime($date. "first day of this month"));
$date = "$year-11-11 23:59:59";
$test = date('Y-m-d H:i:s', strtotime($date. "first day of next month"));
$test = date('Y-m-d H:i:s', strtotime($test. "-1day"));

$sql = "SELECT AVG(TO_SECONDS(dato2) - TO_SECONDS(dato3)) as avTime
FROM proservice WHERE dato3 >= '$test2' AND dato3 <= '$test' AND status_kode ='9' AND ind_kode != '5' AND ind_kode != '6' AND ind_kode != '61' AND ans != '1'";
$res = mysql_query($sql);
$timeDiff = mysql_result($res, 0, 'avTime');
$trt11 = $timeDiff/86400;  // 86400 seconds in one day
$trt11 = $trt11 * -1;
$trt11 = intval($trt11);

$sql = "SELECT AVG(TO_SECONDS(dato_fl) - TO_SECONDS(dato2)) as avTime
FROM proservice WHERE dato_fl >= '$test2' AND dato_fl <= '$test' AND ind_kode != '5' AND ind_kode != '6' AND ind_kode != '61' AND ans != '1'";
$res = mysql_query($sql);
$timeDiff = mysql_result($res, 0, 'avTime');
$flt11 = $timeDiff/86400;  // 86400 seconds in one day
$flt11 = intval($flt11);

$date = "$year-12-11 00:00:00";
$test2 = date('Y-m-d H:i:s', strtotime($date. "first day of this month"));
$date = "$year-12-11 23:59:59";
$test = date('Y-m-d H:i:s', strtotime($date. "first day of next month"));
$test = date('Y-m-d H:i:s', strtotime($test. "-1day"));

$sql = "SELECT AVG(TO_SECONDS(dato2) - TO_SECONDS(dato3)) as avTime
FROM proservice WHERE dato3 >= '$test2' AND dato3 <= '$test' AND status_kode ='9' AND ind_kode != '5' AND ind_kode != '6' AND ind_kode != '61' AND ans != '1'";
$res = mysql_query($sql);
$timeDiff = mysql_result($res, 0, 'avTime');
$trt12 = $timeDiff/86400;  // 86400 seconds in one day
$trt12 = $trt12 * -1;
$trt12 = intval($trt12);

$sql = "SELECT AVG(TO_SECONDS(dato_fl) - TO_SECONDS(dato2)) as avTime
FROM proservice WHERE dato_fl >= '$test2' AND dato_fl <= '$test' AND ind_kode != '5' AND ind_kode != '6' AND ind_kode != '61' AND ans != '1'";
$res = mysql_query($sql);
$timeDiff = mysql_result($res, 0, 'avTime');
$flt12 = $timeDiff/86400;  // 86400 seconds in one day
$flt12 = intval($flt12);

$date = "$year-01-11 00:00:00";
$test2 = date('Y-m-d H:i:s', strtotime($date. "first day of this month"));
$date = "$year-12-11 23:59:59";
$test = date('Y-m-d H:i:s', strtotime($date. "first day of next month"));
$test = date('Y-m-d H:i:s', strtotime($test. "-1day"));

$sql = "SELECT AVG(TO_SECONDS(dato2) - TO_SECONDS(dato3)) as avTime
FROM proservice WHERE dato3 >= '$test2' AND dato3 <= '$test' AND status_kode ='9' AND ind_kode != '5' AND ind_kode != '6' AND ind_kode != '61' AND ans != '1'";
$res = mysql_query($sql);
$timeDiff = mysql_result($res, 0, 'avTime');
$trty = $timeDiff/86400;  // 86400 seconds in one day
$trty = $trty * -1;
$trty = intval($trty);

$sql = "SELECT AVG(TO_SECONDS(dato_fl) - TO_SECONDS(dato2)) as avTime
FROM proservice WHERE dato_fl >= '$test2' AND dato_fl <= '$test' AND ind_kode != '5' AND ind_kode != '6' AND ind_kode != '61' AND ans != '1'";
$res = mysql_query($sql);
$timeDiff = mysql_result($res, 0, 'avTime');
$flty = $timeDiff/86400;  // 86400 seconds in one day
$flty = intval($flty);
?>