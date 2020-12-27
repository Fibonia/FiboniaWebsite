<?php
session_start();
use MrShan0\PHPFirestore\FirestoreClient;
require 'vendor/autoload.php';
require_once 'stripe-php/init.php';

if (empty($_POST['email']) || empty($_POST['password']) || empty($_POST['answer1'])|| empty($_POST['answer2']) || empty($_POST["txtConfirmPassword"])) {
	echo json_encode(array("statusCode"=>"200","msg"=>"Please enter all of the fields!"));
	exit();
}
if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
	echo json_encode(array("statusCode"=>"200","msg"=>"Please enter a valid Email!"));
	exit();
}

$string = "$@#!%*?&";
$MsgAry1 = str_split($string);
$count = 0;
foreach (str_split($_POST['password']) as $char) {
        if (in_array($char, $MsgAry1)) {
            break;
        }else{
            $count += 1;
        }
}


if ($count == strlen($_POST["password"])){
    	echo json_encode(array("statusCode"=>"200","msg"=>"A password must contain 8-20 characters and at least 1 number and 1 symbol!"));
	exit();
}

if ($_POST['password'] != $_POST['txtConfirmPassword']){
    echo json_encode(array("statusCode"=>"200","msg"=>"Passwords do not match!"));
	exit();
}

if (strlen($_POST['password']) > 20 || strlen($_POST['password']) < 8 ||  0 === preg_match('~[0-9]~', $_POST['password'])) {
    	echo json_encode(array("statusCode"=>"200","msg"=>"A password must contain 8-20 characters and at least 1 number and 1 symbol!"));
    	exit();
}

$firestoreClient =  new FirestoreClient('fibonia-83e34','AIzaSyDCl5yDLEEmgH3Sn-qH-rb8PVT0dLQFAWU', ['database' => '(default)',]);
$collections = $firestoreClient->listDocuments('users', ['pageSize' => 1000000]);
$counter = 0;
$count = 0;
try{
while ($collections["documents"][$counter]->get('email') != NULL){
if ($collections["documents"][$counter]->get('email') == $_POST['email']){
    $count += 1;
    break;
}else{
}
$counter += 1;
}
}catch (\Throwable $t){
}
	if ($count > 0) {
    	echo json_encode(array("statusCode"=>"200","msg"=>"The user with the given email already exists!"));
    		exit();
	} else {
$stripe = new \Stripe\StripeClient(
  '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'
);
\Stripe\Stripe::setApiKey('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');
$customer = \Stripe\Customer::create([]);
$stripe_id = $customer->id;
        echo json_encode(array("statusCode"=>"201","stripeid"=>$stripe_id));
}
?>