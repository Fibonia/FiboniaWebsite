<?php
session_start();
##### DB Configuration #####
$servername = "localhost";
$username = "abelo999_abelo";
$password = "Mamagan9";
$db = "abelo999_phplogin";

$token="";
##### FB App Configuration #####
$fbappid = "1164838017057888"; 
$fbappsecret = "697594a685a2cbd6c3e1c93f539fd513";  
$redirectURL = "https://www.fibonia.com/home.php"; 
$fbPermissions = ['email']; 

##### Create connection #####
$conn = new mysqli($servername, $username, $password, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
##### Required Library #####
require_once 'autoload.php';
use Facebook\Facebook;
use Facebook\Exceptions\FacebookResponseException;
use Facebook\Exceptions\FacebookSDKException;

$facebook = new Facebook(array('app_id' => $fbappid, 'app_secret' => $fbappsecret, 'default_graph_version' => 'v2.10', ));
$helper = $facebook->getRedirectLoginHelper();
##### Check facebook token stored or get new access token #####
try {
	if(isset($_SESSION['fb_token'])){
		$accessToken = $_SESSION['fb_token'];
	}else{
  		$accessToken = $helper->getAccessToken();
	}
} catch(FacebookResponseException $e) {
 	echo 'Facebook Responser error: ' . $e->getMessage();
  	exit;
} catch(FacebookSDKException $e) {
	echo 'Facebook SDK error: ' . $e->getMessage();
  	exit;
}
?>