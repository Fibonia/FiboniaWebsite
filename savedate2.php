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
$uniqid = uniqid();
$uniqid1 = uniqid();
$uniqid2 = uniqid();
$status = "In Works";

$email = $_POST['id'];


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


$activate_link1 = 'https://www.fibonia.com/response.php?email=' . $email . '&code=' . 	$uniqid;
$activate_link2 = 'https://www.fibonia.com/response.php?email=' . $email . '&code=' . 	$uniqid1;
$activate_link3 = 'https://www.fibonia.com/response.php?email=' . $email . '&code=' . 	$uniqid2;
$notifmsg = "sent_face";

$type = "fibonia";
$type1 = "google";
$type2 = "facebook";

$id1 = uniqid();
$id2 = uniqid();
$id3 = uniqid();
$uniqidval = $id1.$id2.$id3;
$id4 = uniqid();
$id5 = uniqid();
$id6 = uniqid();
$uniqidval2 = $id4.$id5.$id6;
if (isset($_SESSION['loggedin'])){
$stmt = $conn->prepare('INSERT INTO requests (studentid,tutorid,sdate1,sdate2,sixtoone,accept,changereq,reject,currstatus,class,notifmsg,type,uniqid2,uniqid3,notes) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);');
$stmt->bind_param('sssssssssssssss',$_SESSION['id'],$_POST['id'],$_POST['date1'],$_POST['date2'],$_POST['sixtoone'],$uniqid,$uniqid1,$uniqid2,$status,$_SESSION['class'],$notifmsg,$type,$uniqidval,$uniqidval2,$_POST['notes']);
$stmt->execute();
$stmt->close();
}else if (isset($_SESSION['userData']['email_id'])){
$stmt = $conn->prepare('INSERT INTO requests (studentid,tutorid,sdate1,sdate2,sixtoone,accept,changereq,reject,currstatus,class,notifmsg,type,uniqid2,uniqid3,notes) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);');
$stmt->bind_param('sssssssssssssss',$id,$_POST['id'],$_POST['date1'],$_POST['date2'],$_POST['sixtoone'],$uniqid,$uniqid1,$uniqid2,$status,$_SESSION['class'],$notifmsg,$type1,$uniqidval,$uniqidval2,$_POST['notes']);
$stmt->execute();
$stmt->close();
}else if (isset($_SESSION['userData1']['email_id'])){
$stmt = $conn->prepare('INSERT INTO requests (studentid,tutorid,sdate1,sdate2,sixtoone,accept,changereq,reject,currstatus,class,notifmsg,type,uniqid2,uniqid3,notes) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);');
$stmt->bind_param('sssssssssssssss',$id,$_POST['id'],$_POST['date1'],$_POST['date2'],$_POST['sixtoone'],$uniqid,$uniqid1,$uniqid2,$status,$_SESSION['class'],$notifmsg,$type2,$uniqidval,$uniqidval2,$_POST['notes']);
$stmt->execute();
$stmt->close();
}

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
$mail->addAddress($email);
$mail->isHTML(true);
if ($_POST['travel'] == "false"){
    $travel = " NOT";
}else if ($_POST['travel'] == "true"){
    $travel = "";
}
if ($_POST['stay'] == "false"){
    $stay = " NOT";
}else if ($_POST['stay'] == "true"){
    $stay = "";
}
$output ='<p>Good news! We have found a student for you to tutor face-to-face in class '.$_SESSION['class'].'! They are requesting tutoring from '.date( 'D, M j, Y \a\t g:ia', strtotime($_POST["date1"]) ).' to '.date( 'D, M j, Y \a\t g:ia', strtotime($_POST["date2"]) ).' , and they are'.$travel.' willing to travel to your preferred location for tutoring. Moreover, they are'.$stay.' willing to stay at home for tutoring.</p><br></br>';
$output .= '<p>Please click the following link if you would like to accept the request: <a href="' . $activate_link1 . '">' 	. $activate_link1 . '</a></p><br></br>';
$output .= '<p>Please click the following link if you would like to request for a change in time: <a href="' . $activate_link2 . '">' 	. $activate_link2 . '</a></p><br></br>';
$output .= '<p>Please click the following link if you would like to reject the request: <a href="' . $activate_link3 . '">' 	. $activate_link3 . '</a></p><br></br>';
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
$mail->addAddress($email1);
$mail->isHTML(true);
$output ='<p>We have sent you this email to notify you that you have successfully signed up for tutoring in class '.$_SESSION['class'].'. Hang tight, we will notify you when we get updates from the tutor!</p>';
$body = $output;
$mail->Subject = 'Tutor Request - Fibonia Team';
$mail->Body    = $body;
if(!$mail->send()) {
  
} else {
}

echo json_encode(array("statusCode"=>200));
}
}
?>