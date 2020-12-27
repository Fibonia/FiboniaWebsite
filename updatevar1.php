<?php
session_start();
$_SESSION['var1'] = $_POST['var1'];
echo json_encode(array("statusCode"=>200));
?>