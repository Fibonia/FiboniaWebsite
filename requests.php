<?php
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'abelo999_abelo';
$DATABASE_PASS = 'Mamagan9';
$DATABASE_NAME = 'abelo999_phplogin';
$conn = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if ($_GET['id'] == "someanswer" && $_GET['method'] == "insert"){
$q3 = "N/A";
$a3 = "N/A";
$activate =  "activated";
$expDate = NULL;
$code1 = uniqid();
$code2 = uniqid();
$code3 = uniqid();
$code = $code1.$code2.$code3;



$code21 = uniqid();
$code22 = uniqid();
$code23 = uniqid();
$code222 = $code21.$code22.$code23;

$code31 = uniqid();
$code32 = uniqid();
$code33 = uniqid();
$code333 = $code31.$code32.$code33;

$code41 = uniqid();
$code42 = uniqid();
$code43 = uniqid();
$code444 = $code41.$code42.$code43;

$stmt = $conn->prepare('SELECT id FROM tutor_accounts WHERE email = ?');
$stmt->bind_param('s', $_GET['studentemail']);
$stmt->execute();
$stmt->bind_result($id);
$stmt->fetch();
$stmt->close();

$stmt = $conn->prepare('SELECT id FROM accounts WHERE email = ?');
$stmt->bind_param('s', $_GET['tutoremail']);
$stmt->execute();
$stmt->bind_result($idtutor);
$stmt->fetch();
$stmt->close();

$null = NULL;

$uniqid1 = uniqid();
$uniqid2 = uniqid();
$uniqid3 = uniqid();
$true = true;
$accepted = "Accepted";
$accepted1 = "accepted";
$no = "No";
$notifmsg = "Paid";
$fibonia = "fibonia";
$stmt = $conn->prepare('INSERT INTO requests (studentid,sdate1,sdate2,tutorid,tdate1,tdate2,sixtoone,accept,changereq,reject,currstatus,class,stay,travel,readnotif,notifmsg,type,studentmsg,readnotifstudent,rating,uniqid,uniqid2,uniqid3,txn_id) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)');
$stmt->bind_param('ssssssssssssssssssssssss',$id, $_GET['date1'], $_GET['date2'],$idtutor ,$null,$null,$true,$uniqid1,$uniqid2,$uniqid3,$accepted,$_GET['class'],$true,$true,$no,$notifmsg,$fibonia,$accepted1,$no,$_GET['rating'],$code222,$code333,$code444,$_GET['txnid']);
$stmt->execute();
}
?>