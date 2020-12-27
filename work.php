<?php
$_SESSION['user_is_loggedin'] = 1;
$cookiehash = md5(sha1(username . user_ip));
setcookie("uname",$cookiehash,time()+3600*24*365,'/','.fibonia.com');

$sql = "UPDATE `users` SET `login_session`='$cookiehash' WHERE `user_id`='$uid'";



function CheckCookieLogin() {
    $uname = $_COOKIE['uname']; 
    if (!empty($uname)) {   
        $sql = "SELECT * FROM `users` WHERE `login_session`='$uname'";
        $_SESSION['user_is_loggedin'] = 1;
        $_SESSION['cookie'] = $uname;
        setcookie("uname",$uname,time()+3600*24*365,'/','.fibonia.com');
    }
}
if(!isset($_SESSION['cookie']) && empty($_SESSION['user_is_loggedin'])) {
    CheckCookieLogin();
}
?>