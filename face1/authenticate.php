<?php 
session_start();
$_SESSION['userData1'] = Array();
$_SESSION['userData1']['email_id'] = $_POST["email"];
$_SESSION['user_is_loggedin2'] = TRUE;
echo json_encode(array("statusCode"=>200));
?>