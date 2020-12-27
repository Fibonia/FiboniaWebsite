<?php
session_start();

use MrShan0\PHPFirestore\FirestoreClient;
require 'vendor/autoload.php';
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'abelo999_abelo';
$DATABASE_PASS = 'Mamagan9';
$DATABASE_NAME = 'abelo999_phplogin';
$conn = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

$firestoreClient =  new FirestoreClient('fibonia-83e34','AIzaSyDCl5yDLEEmgH3Sn-qH-rb8PVT0dLQFAWU', ['database' => '(default)',]);
$collections = $firestoreClient->listDocuments('users', ['pageSize' => 1000000]);
$counter = 0;
$count = 0;
try{
while ($collections["documents"][$counter]->get('email') != NULL){
if ($collections["documents"][$counter]->get('email') == $_POST['username']){
    $count += 1;
    break;
}else{
}
$counter += 1;
}
}catch (\Throwable $t){
}

if ($count == 0) {
	echo json_encode(array("statusCode"=>200));
}  else{
    echo json_encode(array("statusCode"=>202));
}
mysqli_close($conn);
?>