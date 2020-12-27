<?php
include('db.php');
$error="";
$pass1 = mysqli_real_escape_string($con,$_POST["pass1"]);
$pass2 = mysqli_real_escape_string($con,$_POST["pass2"]);
$email = $_POST["email"];


$curDate = date("Y-m-d H:i:s");
if ($pass1!=$pass2){
echo json_encode(array("statusCode"=>202));
  }
 
$pass1 = password_hash($pass1, PASSWORD_DEFAULT);
$stmt = $con->prepare('UPDATE accounts SET password = ? WHERE email = ?');
$stmt->bind_param('ss',$pass1,$email);
$stmt->execute();
$stmt->close();
$stmt = $con->prepare('DELETE FROM password_reset_temp WHERE email = ?');
$stmt->bind_param('s', $email);
$stmt->execute();
$stmt->close();
echo json_encode(array("statusCode"=>200,"password"=>$_POST['pass1'],"email"=>$email));
?>