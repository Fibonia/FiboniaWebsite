<?php 
session_start();
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'abelo999_abelo';
$DATABASE_PASS = 'Mamagan9';
$DATABASE_NAME = 'abelo999_phplogin';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());
}
function random_username($string) {
$pattern = " ";
$firstPart = $string;
$nrRand = rand(0, 100);
$nrRand1 = rand(0, 100);
$nrRand2 = rand(0,100);
$nrRand3 = rand(0,100);
$nrRand4 = rand(0,100);
$nrRand5 = rand(0,100);

$username = trim($firstPart).trim($nrRand).trim($nrRand1).trim($nrRand2).trim($nrRand3).trim($nrRand4).trim($nrRand5);
return $username;
}
function randomPassword() {
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array(); 
    $alphaLength = strlen($alphabet) - 1;
    for ($i = 0; $i < 19; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass);
}

$uname = random_username('guest');
$pass = randomPassword();
$pass = password_hash($pass, PASSWORD_DEFAULT);
$_SESSION['guestuname'] = $uname;
$stmt = $con->prepare('INSERT INTO guests (username, password) VALUES(?,?)');
$stmt->bind_param('ss', $uname, $pass);
$stmt->execute();
$stmt->close();
$_SESSION['user_is_loggedin3'] = TRUE;
$_SESSION['guestlog'] = TRUE;
header('Location: https://www.fibonia.com/home.php');
die();
?>