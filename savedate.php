<?php
session_start();

$date1 = $_POST["date1"];
$date2 = $_POST["date2"];
$d1 = strtotime($date1);
$d2 = strtotime($date2);

if ($date1[9] == "T"){
    $monthday = $date1[8];
}else{
    $monthday = $date1[8].$date1[9];
}
$hours = ($d2 - $d1)/3600;
$day = date('l', $d1);
$month = date('F',$d1);
$tstdate1 = $date1[-5].$date1[-4].$date1[-2].$date1[-1];
$string = $day." ".$month." ".$monthday." ".$tstdate1;
$count = 1;
while ($count != $hours){
    $date1 = date("Y-m-d\TH:i",strtotime('+1 hour',strtotime($date1)));
    $tstd1 = $date1;
    $tstdate = $tstd1[-5].$tstd1[-4].$tstd1[-2].$tstd1[-1];
    $string = $string." ".$tstdate;
    $count += 1;
}

if ($_POST['date1'] != $_POST['date2']){
    
$date1 = strtotime($_POST['date1']);
$date2 = strtotime($_POST['date2']);
$diff = $date2 - $date1;
$minutes = $diff/60;
if ($minutes <= 0 || $minutes%60 != 0 || $minutes >= 600){
    echo json_encode(array("statusCode"=>201));
}else{

$uniqid = uniqid();
$uniqid1 = uniqid();
$uniqid2 = uniqid();
$uniqid3 = uniqid();
$uniqid4 = uniqid();
$uniqid5 = uniqid();
$substruniqid = substr($uniqid,2,10);
$substruniqid2 = substr($uniqid2,0,10);
$uniqid3 = substr($uniqid,1,10);
$alluniqid = $substruniqid.$substruniqid2.$uniqid3.$uniqid4.$uniqid5;
$alluniqid = substr($alluniqid,0,50);
$status = "In Works";


$_POST["id"] = (int)$_POST["id"];
if ($_POST["finval"] == true){
$email = $_SESSION['val1'][$_POST['id']];
}else{
    $email = $_SESSION['val2'][$_POST['id']];
}

if (isset($_SESSION['loggedin'])){

$email1 = $_SESSION['id'];
} else if (isset($_SESSION['userData'])){
    $email1 = $_SESSION['userData']['email_id'];
}else if (isset($_SESSION['userData1'])){
    $email1 = $_SESSION['userData1']['email_id'];
}

$activate_link1 = 'https://www.fibonia.com/response.php?email=' . $email . '&code=' . 	$substruniqid.'&class='.$_SESSION["class"];
$activate_link3 = 'https://www.fibonia.com/response.php?email=' . $email . '&code=' . 	$substruniqid2.'&class='.$_SESSION["class"];
$activate_link1 = str_replace(' ', '%20', $activate_link1);
$activate_link3 = str_replace(' ', '%20', $activate_link3);

$notifmsg = "sent_online";
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



require 'PHPMailer/PHPMailerAutoload.php';
$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = 'mail.fibonia.com';  
$mail->SMTPAuth = true;
$mail->Username = 'appointments@fibonia.com';
$mail->Password = 'GloriousCeiling!#%';
$mail->SMTPSecure = 'tls';                  
$mail->Port = 25;
$mail->setFrom('appointments@fibonia.com', 'Fibonia Team');
$mail->addAddress($email);
$mail->isHTML(true);
if ($_POST['sixtoone'] == false){
    $sixtoone = "are not";
}else if ($_POST['sixtoone'] == true){
    $sixtoone = "are";
}

if ($_POST["notes"] == NULL){
    $msg = "";
}else{
    $msg = " Moreover, they have left a note for you to know about what they would like to learn about:<ul><li>".$_POST['notes']."</li></ul>";
}
$output ='<p>Dear Tutor,</p><br></br><p>You have a new tutoring request for '.$_SESSION["class"].' from '.date( 'D, M j, Y \a\t g:ia', strtotime($_POST["date1"]) ).' GMT to '.date( 'D, M j, Y \a\t g:ia', strtotime($_POST["date2"]) ).' GMT and they '.$sixtoone.' willing to participate in group tutoring.'.$msg.'</p>';
$output .= '<p>Please click the following link if you would like to accept the request: <a href="' . $activate_link1 . '">' 	. $activate_link1 . '</a></p><br></br>';
$output .= '<p>Please click the following link if you would like to reject the request: <a href="' . $activate_link3 . '">' 	. $activate_link3 . '</a></p><br></br>';
$output .= '<p>Best Regards,</p>';
$output .= 'Fibonia Team';
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
$mail->Username = 'appointments@fibonia.com';
$mail->Password = 'GloriousCeiling!#%';
$mail->SMTPSecure = 'tls';                  
$mail->Port = 25;
$mail->setFrom('appointments@fibonia.com', 'Fibonia Team');
$mail->addAddress($email1);
$mail->isHTML(true);
$output ='<p>We have sent you this email to notify you that you have successfully signed up for tutoring in class '.$_SESSION["class"].'. Hang tight, we will notify you when we get updates from the tutor!</p>';
$body = $output;
$mail->Subject = 'Tutor Request - Fibonia Team';
$mail->Body    = $body;
if(!$mail->send()){} else {}



$time = gmdate('m-d-Y H:i'); 
echo json_encode(array("statusCode"=>200,"uniqid"=>$alluniqid,"uid"=>$uniqidval,"timeCreated"=>$time,"time"=>$string,"tutorEmail"=>$email));
}
}
?>