<?php
session_start();
use MrShan0\PHPFirestore\FirestoreClient;
require 'vendor/autoload.php';


if ($_POST["gradyear"] == ""){
        echo json_encode(array("statusCode"=>205));    
        exit();
}

$allowed = ['berkeley.edu'];
if (filter_var($_POST["pair"], FILTER_VALIDATE_EMAIL))
{
    $parts = explode('@', $_POST["pair"]);
    $domain = array_pop($parts);
    if ( ! in_array($domain, $allowed)){
        echo json_encode(array("statusCode"=>201));    
        exit();
    }
}
$gradnum = (int)$_POST["gradyear"];
if ($gradnum <= 1970 || $gradnum >= 2035){
    echo json_encode(array("statusCode"=>204));
    exit();
}


$firestoreClient =  new FirestoreClient('fibonia-83e34','AIzaSyDCl5yDLEEmgH3Sn-qH-rb8PVT0dLQFAWU', ['database' => '(default)',]);
$collections = $firestoreClient->listDocuments('users', ['pageSize' => 1000000]);
$counter = 0;
$count = 0;
try{
while ($collections["documents"][$counter]->get('email') != NULL){
if ($collections["documents"][$counter]->get('calEmail') == $_POST["pair"]){
    $count += 1;
    break;
}else{
}
$counter += 1;
}
}catch (\Throwable $t){
}


if ($count != 0){
        echo json_encode(array("statusCode"=>202));
        exit();
}else{
$uniqid = uniqid();
$uniqid1 = uniqid();
$uniqid2 = $uniqid.$uniqid1;
echo json_encode(array("statusCode"=>200,"uniqid"=>$uniqid2));
exit();
}
?>