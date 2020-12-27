<?php
session_start();
$servername = "localhost";
$username = "abelo999_abelo";
$password = "Mamagan9";
$db = "abelo999_phplogin";
$googleappid = "378676020754-nhj0arsfj30d80u7svepqkp02ole1vgk.apps.googleusercontent.com"; 
$googleappsecret = "8C20NQHCDBdYuVCKPh9TXVPV"; 
$redirectURL="https://www.fibonia.com/google1/authenticate.php"; 
$conn = new mysqli($servername, $username, $password, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
include_once 'src/Google/Google_Client.php';
include_once 'src/Google/contrib/Google_Oauth2Service.php';
$googleClient = new Google_Client();
$googleClient->setApplicationName('Login to Fibonia.com');
$googleClient->setClientId($googleappid);
$googleClient->setClientSecret($googleappsecret);
$googleClient->setRedirectUri($redirectURL);
$google_oauthV2 = new Google_Oauth2Service($googleClient);
$_SESSION['googledata'] = TRUE;
?>