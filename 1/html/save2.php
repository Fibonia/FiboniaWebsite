<?php
session_start();
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'abelo999_abelo';
$DATABASE_PASS = 'Mamagan9';
$DATABASE_NAME = 'abelo999_phplogin';
$conn = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

$count = 0;


if ($count == 0) {
	echo json_encode(array("statusCode"=>200));
}  else{
    echo json_encode(array("statusCode"=>202));
}
mysqli_close($conn);
?>