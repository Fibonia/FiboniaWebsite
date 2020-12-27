<?php
session_start();
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'abelo999_abelo';
$DATABASE_PASS = 'Mamagan9';
$DATABASE_NAME = 'abelo999_phplogin';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
$notif = "Yes";
$stmt = $con->prepare('UPDATE requests SET readnotifstudent = ? WHERE accept = ?');
$stmt->bind_param('ss',$notif,$_POST['ourid']);
$stmt->execute();
$stmt->close();
echo json_encode(array("statusCode"=>200));
?>