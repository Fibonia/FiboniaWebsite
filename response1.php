<?php
session_start();
if (isset($_GET['email'], $_GET['code'])) {
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'abelo999_abelo';
$DATABASE_PASS = 'Mamagan9';
$DATABASE_NAME = 'abelo999_phplogin';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
$stmt = $con->prepare('SELECT accept,currstatus FROM requests WHERE accept = ?');
$stmt->bind_param('s', $_GET['code']);
$stmt->execute();
$stmt->bind_result($val1,$status);
$stmt->fetch();
$stmt->close();
$stmt = $con->prepare('SELECT changereq,currstatus FROM requests WHERE changereq = ?');
$stmt->bind_param('s', $_GET['code']);
$stmt->execute();
$stmt->bind_result($val2,$status);
$stmt->fetch();
$stmt->close();
$stmt = $con->prepare('SELECT reject,currstatus FROM requests WHERE reject = ?');
$stmt->bind_param('s', $_GET['code']);
$stmt->execute();
$stmt->bind_result($val3,$status);
$stmt->fetch();
$stmt->close();
if ($val1 != "" && $val2 == "" && $val3 == "" && $status == "Requested Change"){
$stmt = $con->prepare('SELECT uniqid2 FROM requests WHERE accept = ?');
$stmt->bind_param('s', $val1);
$stmt->execute();
$stmt->bind_result($ouruniqid);
$stmt->fetch();
$stmt->close();
$redirectpg1 = "Location: https://www.fibonia.com/payment/index.php?code=".$ouruniqid;
header($redirectpg1); 
exit();
}else if ($val3 != "" && $val2 == "" && $val1 == "" && $status == "Requested Change"){
$reject = "Rejected";
$unread = "Yes";
$stmt = $con->prepare('UPDATE requests SET currstatus = ?, readnotifstudent = ? WHERE reject=?');
$stmt->bind_param('sss',$reject,$unread,$_GET['code']);

$stmt->execute();
$stmt->close();
$stmt = $con->prepare('SELECT tutorid,class FROM requests WHERE reject = ?');
$stmt->bind_param('s', $_GET['code']);
$stmt->execute();
$stmt->bind_result($id,$class);
$stmt->fetch();
$stmt->close();


$email1 = $id;
echo '<link href="message3.css" rel="stylesheet" id="bootstrap-css">';
echo '<div class="popup popup--icon -success js_success-popup popup--visible" id = "popup_this9"><div class="popup__background"></div><div class="popup__content"><h3 class="popup__content__title">Rejecting Request</h3><p>Your class request has been successfully rejected!</p><p><button onclick="changewindow();" type="submit" class="button b-close button--success" data-for="js_success-popup"><span>CLOSE</span></button></p></div></div>';
echo '<style>document.getElementById("popup_this9").style.opacity="1";document.getElementById("popup_this9").style.zIndex=10005;</style>';
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
$notifmsg = "rejected_after_change";
$stmt = $con->prepare('UPDATE requests SET notifmsg = ? WHERE reject=?');
$stmt->bind_param('ss',$notifmsg, $_GET['code']);
$stmt->execute();
$stmt->close();
$output ='<p>We have sent you this email to notify you that your requested change in time for tutoring in class '.$class.' was rejected by the student, unfortunately. Hang in tight till we find you an another student to tutor!</p>';
$body = $output;
$mail->Subject = 'Tutor Request - Fibonia Team';
$mail->Body    = $body;
if(!$mail->send()) {
  
} else {
}

}else{
echo '<link href="message3.css" rel="stylesheet" id="bootstrap-css">';
echo '<div class="popup popup--icon -error js_error-popup popup--visible" id = "popup_this9"><div class="popup__background"></div><div class="popup__content"><h3 class="popup__content__title">Error!</h3><p>There was an error whilst running this link!</p><p><button onclick="changewindow();" class="button b-close button--error" data-for="js_error-popup"><span>CLOSE</span></button></p></div></div>';
echo '<style>document.getElementById("popup_this9").style.opacity="1";document.getElementById("popup_this9").style.zIndex=10005;</style>';
}
}
else{
}
?>
        <link href="message3.css" rel="stylesheet" id="bootstrap-css">

<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bPopup/0.11.0/jquery.bpopup.min.js"></script>
<div class="popup popup--icon -success js_success-popup popup--visible" id = "popup_this10">
  <div class="popup__background"></div>
  <div class="popup__content">
    <h3 class="popup__content__title">
      Successful Request!
    </h3>
    <p>Your class request has been successfully sent!</p>
    <p>
      <button onclick= "changewindow();" class="button b-close button--success" data-for="js_success-popup"><span>CLOSE</span></button>
    </p>
  </div>
</div>
<script>if (document.URL.includes("?success")){
                                document.getElementById("popup_this10").style.opacity="1";        
                            document.getElementById("popup_this10").style.zIndex=10005;
};</script>
<head>
        <link rel="icon" type="image/png" href="logo.png">
        <link rel="icon" type="image/png" href="logo.png">
<title>Request | Fibonia</title>
</head>
<style>
.b-close{
    right:45%;
}
#popup_this9{
    z-index:1;
    opacity:1;
}
#popup_this10 {
    z-index:-1;
    opacity:0;
}
#popup_this{
    z-index:1;
    opacity:1;
}
</style>
<script>
function changewindow(){
    window.location.href = "home.php";
}
</script>
