<?php
session_start();
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'abelo999_abelo';
$DATABASE_PASS = 'Mamagan9';
$DATABASE_NAME = 'abelo999_phplogin';
$conn = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

$stmt = $conn->prepare('SELECT COUNT(DISTINCT id), answer1,email FROM accounts WHERE id = ? AND question1 = ?');
$stmt->bind_param('ss',$_SESSION['id'],$_POST['question']);
$stmt->execute();
$stmt->bind_result($count1,$a1,$email1);
$stmt->fetch();
$stmt->close();

$stmt = $conn->prepare('SELECT COUNT(DISTINCT id), answer2,email FROM accounts WHERE id = ? AND question2 = ?');
$stmt->bind_param('ss',$_SESSION['id'],$_POST['question']);
$stmt->execute();
$stmt->bind_result($count2, $a2,$email2);
$stmt->fetch();
$stmt->close();

if ($email1 == ""){
    $email = $email2;
}else{
    $email = $email1;
}

if ($count1 != 0) {
    if ($a1 === $_POST['usernameanswer']){
        $stmt = $conn->prepare('UPDATE accounts SET username = ? WHERE id = ?;');
         $stmt->bind_param('ss',$_POST['username'],$_SESSION['id']);
        $stmt->execute();
        $stmt->close();
        $count = 0;

    } else {
        $count = 1;
    }
}

if ($count2 != 0) {
    if ($a2 === $_POST['usernameanswer']){
        $stmt = $conn->prepare('UPDATE account SET username = ? WHERE id = ?;');
         $stmt->bind_param('ss',$_POST['username'],$_SESSION['id']);
        $stmt->execute();
        $stmt->close();
        $count = 0;

    } else {
        $count = 1;
    }
}


if ($count == 0) {
	echo json_encode(array("statusCode"=>200,"email"=>$email,"username"=>$_POST['username']));
}  else{
    echo json_encode(array("statusCode"=>202));
}
mysqli_close($conn);
?>