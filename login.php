<?php
session_start();
include('config.php');

$dato = date('d-m-Y H:i:s');
$navn = $_POST['brugernavn'];
$kode = $_POST['password'];
if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}

if(!isset($_POST['login'])) {
    echo "Fejl!";
    }else{
       
        $resultat = mysqli_query($conn, "SELECT * FROM `promed` WHERE email = '".addslashes($_POST['brugernavn'])."' AND password = '".addslashes($_POST['password'])."' AND lukket != 'JA'");
        $number = mysqli_num_rows($resultat);
        $row = mysqli_fetch_array($resultat);
        $last = $row['now_login'];
        $now = date("Y-m-d H:i:s");
        if($number == 1) {
        $_SESSION['uid'] = $row['id'];
        $_SESSION['afdeling'] = $row['afd'];
        $id = $row['id'];
	$result = mysqli_query($conn, "UPDATE `promed` SET `last_login`='$last',`now_login`='$now' WHERE id='$id'"); 
	if (!$result) {
	    echo mysqli_errno() . ": " . mysqli_error() . "\n";
	    die();
	}
        mysqli_query($conn, "INSERT INTO `prologin` (`bruger`, `pass`, `ip`) VALUES ('$navn','$kode','$ip')");
        header("Location:index.php");

        }else{ 
        echo 'du har indtaste forkert kode ord';

require_once('class.phpmailer.php'); //where your phpmailer folder is
$mail = new PHPMailer();

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.office365.com'; 		      // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'oa@proconsult.as';                 // SMTP username
$mail->Password = 'P2R0Oc6o0n';                       // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->CharSet = 'UTF-8';
$mail->From = "oa@proconsult.as";
$mail->FromName = "PRO-CONSULT";
$mail->AddAddress("oa@proconsult.as");
$mail->AddReplyTo("oa@proconsult.as", "PRO-CONSULT");
// attach pdf that was saved in a folder
$mail->Subject = "Login forsog i Proteknik";
$mail->isHTML(true);       
$mail->Body = "Den $dato.<br> Har der vaeret et forsog paa at loggein i PROteknik<br><br>Brugernavn: $navn<br>Kodeord: $kode<br><br>Forsoget kom fra IP: $ip<br><br>PRO-CONSULT";

if(!$mail->Send())

{
}
        }}
?>
