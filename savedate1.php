<?php
session_start();
if ($_POST['date1'] != $_POST['date2']){
$date1 = strtotime($_POST['date1']);
$date2 = strtotime($_POST['date2']);
$diff = $date2 - $date1;
$minutes = $diff/60;
if ($minutes <= 0 || $minutes%30 != 0 || $minutes >= 600){
    echo json_encode(array("statusCode"=>201));
}else{
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'abelo999_abelo';
$DATABASE_PASS = 'Mamagan9';
$DATABASE_NAME = 'abelo999_phplogin';
$conn = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

$stmt = $conn->prepare('SELECT studentid,sdate1,sdate2,tutorid,accept,reject,class FROM requests WHERE class = ? AND changereq = ?');
$stmt->bind_param('ss', $_POST['class1'],$_POST['code']);
$stmt->execute();
$stmt->bind_result($sid,$sdate1,$sdate2,$tid,$accept,$reject,$class);
$stmt->fetch();
$stmt->close();


$email = $tid;

if (isset($_SESSION['loggedin'])){	
$email1 = $_SESSION['id'];
$id = $_SESSION['id'];	
}else if (isset($_SESSION['userData']['email_id'])){	
$id = $_SESSION['userData']['email_id'];
$email1 = $_SESSION['userData']['email_id'];	
}else if (isset($_SESSION['userData1']['email_id'])){	
$id = $_SESSION['userData1']['email_id'];
$email1 = $_SESSION['userData1']['email_id'];	
}

$activate_link1 = 'https://www.fibonia.com/response1.php?email=' . $email1 . '&code=' . 	$accept;
$activate_link2 = 'https://www.fibonia.com/response1.php?email=' . $email1 . '&code=' . 	$reject;

$stmt = $conn->prepare('UPDATE requests set tdate1 = ?,tdate2 =  ? WHERE accept = ? AND reject = ? AND changereq = ?;');
$stmt->bind_param('sssss',$_POST['date1'],$_POST['date2'],$accept,$reject,$_POST['code']);

$stmt->execute();
require 'PHPMailer/PHPMailerAutoload.php';
$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = 'mail.fibonia.com';  
$mail->SMTPAuth = true;
$mail->Username = 'info@fibonia.com';
$mail->Password = 'Mamagan999';
$mail->SMTPSecure = 'tls';                  
$mail->Port = 25;
$mail->setFrom('info@fibonia.com', 'Fibonia Team');
$mail->addAddress($email1);
$mail->isHTML(true);
if ($_POST['sixtoone'] == "false"){
    $sixtoone = " NOT";
}else if ($_POST['sixtoone'] == "true"){
    $sixtoone = "";
}
$output ='<p>Good news! We have received an updated request for your tutor in class '.$class.'! They are requesting tutoring from '.date( 'D, M j, Y \a\t g:ia', strtotime($_POST["date1"]) ).' to '.date( 'D, M j, Y \a\t g:ia', strtotime($_POST["date2"]) ).' .</p><br></br>';
$output .= '<p>Please click the following link if you would like to accept the request: <a href="' . $activate_link1 . '">' 	. $activate_link1 . '</a></p><br></br>';
$output .= '<p>Please click the following link if you would like to reject the request and attempt to find a different tutor for the class: <a href="' . $activate_link2 . '">' 	. $activate_link2 . '</a></p><br></br>';
$body = $output; 
$mail->Subject = 'Tutor Request - Fibonia Team';
$mail->Body    = $body;
if(!$mail->send()) {
  
} else {
}

$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = 'mail.fibonia.com';  
$mail->SMTPAuth = true;
$mail->Username = 'info@fibonia.com';
$mail->Password = 'Mamagan999';
$mail->SMTPSecure = 'tls';                  
$mail->Port = 25;
$mail->setFrom('info@fibonia.com', 'Fibonia Team');
$mail->addAddress($email);
$mail->isHTML(true);
$output ='<p>We have sent you this email to notify you that you have successfully requested a change in time for tutoring in class '.$_POST['class1'].'. Hang tight, we will notify you when we get updates from the student!</p>';
$body = $output;
$mail->Subject = 'Tutor Request - Fibonia Team';
$mail->Body    = $body;

if(!$mail->send()) {
  
} else {
}
$stmt->close();
echo json_encode(array("statusCode"=>200));
}
}
?>