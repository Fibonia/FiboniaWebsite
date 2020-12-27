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

$code41 = uniqid();
$code42 = uniqid();
$code43 = uniqid();
$code4 = $code41.$code42.$code43;


$stmt = $conn->prepare('SELECT password FROM accounts WHERE email = ?');
$stmt->bind_param('s', $_GET['email']);
$stmt->execute();
$stmt->bind_result($password);
$stmt->fetch();
$stmt->close();

$expDate1 = true;
$stmt = $conn->prepare('INSERT INTO tutoraccounts (username, password, email, activation_code, exp_date, question1, answer1, question2, answer2, question3, answer3, lang1, lang2, lvl, recruit,uniqid,GradYear) VALUES (?,?,? ,?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?,?,?,?)');
$stmt->bind_param('sssssssssssssssss',$code, $password, $_GET['email'], $activate, $expDate ,$q3,$a3,$q3,$a3,$q3,$a3,$expDate,$expDate,$expDate,$expDate1,$code4,$expDate);
$stmt->execute();
}elseif ($_GET['id'] == "someanswer" && $_GET['method'] == "updatemail"){

$stmt = $conn->prepare('UPDATE tutoraccounts SET email=? WHERE email = ?');
$stmt->bind_param('ss',$_GET['newemail'],$_GET['oldemail']);
$stmt->execute();
$stmt->close();
}elseif ($_GET['id'] == "someanswer" && $_GET['method'] == "updatepassword"){
$stmt = $conn->prepare('UPDATE tutoraccounts SET password=? WHERE email = ?');
$stmt->bind_param('ss',$password,$_GET['email']);
$stmt->execute();
}
?>