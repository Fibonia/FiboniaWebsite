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
$stmt = $conn->prepare('SELECT id FROM tutor_accounts WHERE email = ?');
$stmt->bind_param('s', $_GET['email']);
$stmt->execute();
$stmt->bind_result($id);
$stmt->fetch();
$stmt->close();

$true = true;
$no = "No";
$milage = ">25 Miles";
$stmt = $conn->prepare('INSERT INTO tutor_classes (id, location, class, distance, stay, travel, etutor, sixtoone, minprice, verified, face,prefer) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?)');
$stmt->bind_param('ssssssssssss',$id, $_GET['location'], $_GET['class'],$milage ,$true, $true ,$true,$true,$_GET['price'],$no,$true,$_GET['times']);
$stmt->execute();
}elseif ($_GET['id'] == "someanswer" && $_GET['method'] == "updatelocation"){
$stmt = $conn->prepare('UPDATE tutor_classes SET location=? WHERE id = ?');
$stmt->bind_param('ss',$_GET['location'],$id);
$stmt->execute();
$stmt->close();
}elseif ($_GET['id'] == "someanswer" && $_GET['method'] == "updatetimes"){
$stmt = $conn->prepare('UPDATE tutor_classes SET prefer=? WHERE id = ?');
$stmt->bind_param('ss',$_GET['times'],$id);
$stmt->execute();
}elseif ($_GET['id'] == "someanswer" && $_GET['method'] == "updateprice"){
$stmt = $conn->prepare('UPDATE tutor_classes SET price=? WHERE id = ?');
$stmt->bind_param('ss',$_GET['price'],$id);
$stmt->execute();
}elseif ($_GET['id'] == "someanswer" && $_GET['method'] == "deleteclass"){
$stmt = $conn->prepare('DELETE FROM tutor_classes WHERE id = ?;');
$stmt->bind_param('s',$id);
$stmt->execute();
}
?>