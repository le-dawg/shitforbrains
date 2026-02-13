<?php function getUserIP()
{
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];
    if(filter_var($client, FILTER_VALIDATE_IP))
    { $ip = $client; }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    { $ip = $forward; }
    else
    { $ip = $remote; }
    return $ip;
}
$user_ip = getUserIP();
echo $user_ip;

     $result = mysqli_query($conn,"SELECT * FROM promed WHERE IP ='$user_ip'");
     while($row = mysqli_fetch_assoc($result)) {
     $id = $row['id']; 
     $_SESSION['afdeling'] = $row['afd'];
     $last = $row['now_login'];
     }
     $now = date("Y-m-d H:i:s");
     $result2 = mysqli_query($conn,"UPDATE `promed` SET `last_login`='$last',`now_login`='$now' WHERE id='$id'"); 
if (isset($id)){
$_SESSION['uid'] = $id;
}
?>