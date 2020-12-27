<?php
session_start();

use MrShan0\PHPFirestore\FirestoreClient;
require 'vendor/autoload.php';
function unvar_dump($str) {
    if (strpos($str, "\n") === false) {
        //Add new lines:
        $regex = array(
            '#(\\[.*?\\]=>)#',
            '#(string\\(|int\\(|float\\(|array\\(|NULL|object\\(|})#',
        );
        $str = preg_replace($regex, "\n\\1", $str);
        $str = trim($str);
    }
    $regex = array(
        '#^\\040*NULL\\040*$#m',
        '#^\\s*array\\((.*?)\\)\\s*{\\s*$#m',
        '#^\\s*string\\((.*?)\\)\\s*(.*?)$#m',
        '#^\\s*int\\((.*?)\\)\\s*$#m',
        '#^\\s*bool\\(true\\)\\s*$#m',
        '#^\\s*bool\\(false\\)\\s*$#m',
        '#^\\s*float\\((.*?)\\)\\s*$#m',
        '#^\\s*\[(\\d+)\\]\\s*=>\\s*$#m',
        '#\\s*?\\r?\\n\\s*#m',
    );
    $replace = array(
        'N',
        'a:\\1:{',
        's:\\1:\\2',
        'i:\\1',
        'b:1',
        'b:0',
        'd:\\1',
        'i:\\1',
        ';'
    );
    $serialized = preg_replace($regex, $replace, $str);
    $func = create_function(
        '$match', 
        'return "s:".strlen($match[1]).":\\"".$match[1]."\\"";'
    );
    $serialized = preg_replace_callback(
        '#\\s*\\["(.*?)"\\]\\s*=>#', 
        $func,
        $serialized
    );
    $func = create_function(
        '$match', 
        'return "O:".strlen($match[1]).":\\"".$match[1]."\\":".$match[2].":{";'
    );
    $serialized = preg_replace_callback(
        '#object\\((.*?)\\).*?\\((\\d+)\\)\\s*{\\s*;#', 
        $func, 
        $serialized
    );
    $serialized = preg_replace(
        array('#};#', '#{;#'), 
        array('}', '{'), 
        $serialized
    );

    return unserialize($serialized);
}
if (isset($_GET['email'], $_GET['code'],$_GET['class'])) {



$counter1 = 0;
$somearr = array();
$counter3 = 0;
$counter4 = 0;

$firestoreClient =  new FirestoreClient('fibonia-83e34','AIzaSyDCl5yDLEEmgH3Sn-qH-rb8PVT0dLQFAWU', ['database' => '(default)',]);
$collections = $firestoreClient->listDocuments($_GET["class"], ['pageSize' => 1000000]);
$counter = 0;
try{
while ($collections["documents"][$counter]->get('appointments') != NULL){
$counter5 = 0;
while ($collections["documents"][$counter]->get('appointments')[$counter5] != NULL){
$var = $collections["documents"][$counter]->get('appointments')[$counter5];
$array = (array) $var;
ob_start();
var_dump($array);
$array = ob_get_clean();
$array1 = substr($array, 0, -3);
$arraynew = substr($array1, 71, strlen($array1));
$var = unvar_dump($arraynew);
if ($_GET["code"] == substr($var[0]["uniqid"],0,10)){
    $val1 = substr($var[0]["uniqid"],0,10);
    $tutorid = $var[0]["tutorEmail"];
    $email1 = $var[0]["studentEmail"];
    $class = $var[0]["classname"];
    $uid = $var[0]["uid"];
    $price = $var[0]["uid"];
}else if ($_GET["code"] == substr($var[0]["uniqid"],10,10)){
    $val3 = substr($var[0]["uniqid"],10,10);
    $tutorid = $var[0]["tutorEmail"];
    $email1 = $var[0]["studentEmail"];
    $class = $var[0]["classname"];
    $uid = $var[0]["uid"];
}
else{
    
}
$counter5 += 1;
}
$counter += 1;
}
}catch (\Throwable $t){
}





if ($val1 == $_GET["code"] && $val3 != $_GET["code"]){
$accept = "Requested Change";
$unread = "Yes";
$notifmsg = "accepted_straight";


echo '<script src="https://www.gstatic.com/firebasejs/7.14.6/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.14.6/firebase-analytics.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.14.6/firebase-firestore.js"></script>
<script>
  var firebaseConfig = {
    apiKey: "AIzaSyDCl5yDLEEmgH3Sn-qH-rb8PVT0dLQFAWU",
    authDomain: "fibonia-83e34.firebaseapp.com",
    databaseURL: "https://fibonia-83e34.firebaseio.com",
    projectId: "fibonia-83e34",
    storageBucket: "fibonia-83e34.appspot.com",
    messagingSenderId: "588850587483",
    appId: "1:588850587483:web:4eb45758ccf907a87a1c7e",
    measurementId: "G-66NVK8XV01"
  };
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();
var db = firebase.firestore();</script>';



echo '
<script>
db.collection("tutors").doc("'.$tutorid.'").get().then(function(doc) {
    if (doc.exists) {
    var i;
    for (i = 0; doc.data()["appointments"][i]["uid"] != "'.$uid.'"; i++) {
    }
    var appt = doc.data()["appointments"];
    appt[i]["tutor_read"] = true;

    db.collection("tutors").doc("'.$tutorid.'").update({"appointments": appt}).then(function() {});
    }});

db.collection("users").doc("'.$email1.'").get().then(function(doc) {
    if (doc.exists) {
    var i;
    for (i = 0; doc.data()["appointments"][i]["uid"] != "'.$uid.'"; i++) {
    }
    var appt = doc.data()["appointments"];
    appt[i]["tutor_read"] = true;
        db.collection("users").doc("'.$email1.'").update({"appointments": appt}).then(function() {});
    }});

db.collection("'.$class.'").doc("'.$email1.'").get().then(function(doc) {
    if (doc.exists) {
    var i;
    for (i = 0; doc.data()["appointments"][i]["uid"] != "'.$uid.'"; i++) {
    }
    var appt = doc.data()["appointments"];
    appt[i]["tutor_read"] = true;
        db.collection("'.$class.'").doc("'.$email1.'").update({"appointments": appt}).then(function() {});
    }});</script>
';

echo '<link href="message3.css" rel="stylesheet" id="bootstrap-css">';
echo '<div class="popup popup--icon -success js_success-popup popup--visible" id = "popup_this9"><div class="popup__background"></div><div class="popup__content"><h3 class="popup__content__title">Accepting Request</h3><p>Your class request has been successfully accepted!</p><p><button onclick="changewindow();" type="submit" class="button b-close button--success" data-for="js_success-popup"><span>CLOSE</span></button></p></div></div>';
echo '<style>document.getElementById("popup_this9").style.opacity="1";document.getElementById("popup_this9").style.zIndex=10005;</style>';
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
$mail->addAddress($email1);
$mail->isHTML(true);
if ($price == 0){
$output ='<p>Dear Student,</p><br></br><p>Good news! Your request for an appointment in class {className} at {time} GMT on {date} has been accepted! You may join your tutor’s Zoom meeting using the following link: {zoom}.</p><br></br><p>Best Regards,</p><br></br><p>Fibonia Team</p>';    
}else{
$output ='<p>Dear Student,</p><br></br><p>Good news! Your request for an appointment in class {className} at {time} GMT on {date} has been accepted! You may join your tutor’s Zoom meeting using the following link: {zoom}. You will be prompted to pay by the tutor at the beginning of your appointment. Please login to the website or the app to finalize your payment.</p><br></br><p>{NOTE: Do not pay for an appointment unless you’ve confirmed your appointment request with the tutor during your tutoring session.}</p><br></br><p>Best Regards,</p><br></br><p>Fibonia Team</p>';
}
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
$mail->addAddress($tutorid);
$mail->isHTML(true);
if ($price == 0){
$output ='<p>Dear Tutor,</p><br></br><p>This email has been sent to notify you that you will be tutoring in class {className} at {time} GMT on {date}!</p><br></br><p>Best Regards,</p><br></br><p>Fibonia Team</p>';    
}else{
$output ='<p>Dear Tutor,</p><br></br><p>This email has been sent to notify you that you will be tutoring in class {className} at {time} GMT on {date}!</p><br></br><p>NOTE: Please login to the Fibonia app or website to request a payment from the student that you will be tutoring (If you will login to the website, you may find this in Profile/Appointments). Moreover, do not proceed with the meeting until the student has paid for the appointment and you have received a confirmation email from the Fibonia team.</p><br></br><p>Best Regards,</p><br></br><p>Fibonia Team</p>';
}
$body = $output;
$mail->Subject = 'Tutor Request - Fibonia Team';
$mail->Body    = $body;
if(!$mail->send()) {
    
} else {
}
} else if ($val1 != $_GET["code"] && $val3 == $_GET["code"]){
    
echo '<script src="https://www.gstatic.com/firebasejs/7.14.6/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.14.6/firebase-analytics.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.14.6/firebase-firestore.js"></script>
<script>
  var firebaseConfig = {
    apiKey: "AIzaSyDCl5yDLEEmgH3Sn-qH-rb8PVT0dLQFAWU",
    authDomain: "fibonia-83e34.firebaseapp.com",
    databaseURL: "https://fibonia-83e34.firebaseio.com",
    projectId: "fibonia-83e34",
    storageBucket: "fibonia-83e34.appspot.com",
    messagingSenderId: "588850587483",
    appId: "1:588850587483:web:4eb45758ccf907a87a1c7e",
    measurementId: "G-66NVK8XV01"
  };
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();
var db = firebase.firestore();</script>';



echo '
<script>
db.collection("tutors").doc("'.$tutorid.'").get().then(function(doc) {
    if (doc.exists) {
    var i;
    for (i = 0; doc.data()["appointments"][i]["uid"] != "'.$uid.'"; i++) {
    }
var appointment = doc.data()["appointments"];
    appointment.splice(i,1);
    db.collection("tutors").doc("'.$tutorid.'").update({"appointments": appointment}).then(function() {});
    }});
db.collection("users").doc("'.$email1.'").get().then(function(doc) {
    if (doc.exists) {
    var i;
    for (i = 0; doc.data()["appointments"][i]["uid"] != "'.$uid.'"; i++) {
    }
var appointment = doc.data()["appointments"];
appointment.splice(i,1);
        db.collection("users").doc("'.$email1.'").update({"appointments": appointment}).then(function() {});
    }});
db.collection("'.$class.'").doc("'.$email1.'").get().then(function(doc) {
    if (doc.exists) {
    var i;
    for (i = 0; doc.data()["appointments"][i]["uid"] != "'.$uid.'"; i++) {
    }
var appointment = doc.data()["appointments"];
appointment.splice(i,1);
        db.collection("'.$class.'").doc("'.$email1.'").update({"appointments": appointment}).then(function() {});
    }});</script>
';
    
    
$reject = "Rejected";
$unread = "Yes";
$notifmsg = "rejected";

echo '<link href="message3.css" rel="stylesheet" id="bootstrap-css">';
echo '<div class="popup popup--icon -success js_success-popup popup--visible" id = "popup_this9"><div class="popup__background"></div><div class="popup__content"><h3 class="popup__content__title">Rejecting Request</h3><p>Your class request has been successfully rejected!</p><p><button onclick="changewindow();" type="submit" class="button b-close button--success" data-for="js_success-popup"><span>CLOSE</span></button></p></div></div>';
echo '<style>document.getElementById("popup_this9").style.opacity="1";document.getElementById("popup_this9").style.zIndex=10005;</style>';
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
$mail->addAddress($email1);
$mail->isHTML(true);
$output ='<p>Dear Student,</p><p>Unfortunately, your request for an appointment in class '.$class.' has been rejected.Please login to the Fibonia app or website to find any other suitable tutors for yourself.</p><p>Best Regards,</p><p>Fibonia Team</p>';
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
.dateformat{
    transition:1s;
}
</style>
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
