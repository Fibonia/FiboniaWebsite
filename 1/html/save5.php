<?php
session_start();
echo json_encode(array("statusCode"=>200,"oldemail"=>$email,"newemail"=>$_POST['email'],"password"=>$_SESSION['password']));
?>