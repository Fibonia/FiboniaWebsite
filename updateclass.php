<?php
session_start();
if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
	echo json_encode(array("statusCode"=>201));
}else{
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'abelo999_abelo';
$DATABASE_PASS = 'Mamagan9';
$DATABASE_NAME = 'abelo999_phplogin';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
$stmt = $con->prepare('INSERT INTO update_class (email, class) VALUES (?, ?)');
$stmt->bind_param('ss',$_POST['email'], $_POST['ourclass']);
$stmt->execute();
echo json_encode(array("statusCode"=>200,"email"=>$_POST['email'],"class"=>$_POST['ourclass']));
}
?>