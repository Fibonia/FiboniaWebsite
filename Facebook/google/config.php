<?php
##### DB Configuration #####
$servername = "localhost";
$username = "root";
$password = "";
$db = "phplogin";

##### Google App Configuration #####
$googleappid = "378676020754-nhj0arsfj30d80u7svepqkp02ole1vgk.apps.googleusercontent.com"; 
$googleappsecret = "8C20NQHCDBdYuVCKPh9TXVPV"; 
// $redirectURL="http://localhost/phpmylogin/login.html"; 
$redirectURL="http://localhost/phpmylogin/login.html"; 

##### Create connection #####
$conn = new mysqli($servername, $username, $password, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
##### Required Library #####
include_once 'src/Google/Google_Client.php';
include_once 'src/Google/contrib/Google_Oauth2Service.php';

$googleClient = new Google_Client();
$googleClient->setApplicationName('Login to CodeCastra.com');
$googleClient->setClientId($googleappid);
$googleClient->setClientSecret($googleappsecret);
$googleClient->setRedirectUri($redirectURL);

$google_oauthV2 = new Google_Oauth2Service($googleClient);

?>