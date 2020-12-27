<?php 
session_start();
$_SESSION['userData'] = Array();
$_SESSION['userData']['email_id'] = $_POST['email'];
$_SESSION['user_is_loggedin1'] = TRUE;
echo json_encode(array("statusCode"=>200));
?>