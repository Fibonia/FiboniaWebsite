<?php
use MrShan0\PHPFirestore\FirestoreClient;
require 'vendor/autoload.php';
$firestoreClient =  new FirestoreClient('fibonia-83e34','AIzaSyDCl5yDLEEmgH3Sn-qH-rb8PVT0dLQFAWU', ['database' => '(default)',]);
$collections = $firestoreClient->listDocuments('users', ['pageSize' => 1000000]);
$email = NULL;
$counter = 0;

if ($_POST['email'] != $_POST['email1']){
    echo json_encode(array("statusCode"=>201));
    exit();
}

try{
while ($collections["documents"][$counter]->get('email') != NULL){
if ($collections["documents"][$counter]->get('email') == $_POST['email']){
    $email = $collections["documents"][$counter]->get('email');
    break;
}else{
    $counter += 1;
}
}
}catch (\Throwable $t){
}


if ($email == NULL){
    echo json_encode(array("statusCode"=>202));
}else{
    echo json_encode(array("statusCode"=>200,"email"=>$email));
}

?>