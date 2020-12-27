<?php
session_start();
$_SESSION['loggedin'] = TRUE;
$_SESSION['name'] = $_POST['email'];
$_SESSION['id'] = $_POST['email'];
$_SESSION['user_is_loggedin'] = 1;
$_SESSION['password'] = $_POST['password'];
echo json_encode(array("statusCode"=>200));
?>