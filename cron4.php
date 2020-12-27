<?php
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

$firestoreClient =  new FirestoreClient('fibonia-83e34','AIzaSyDCl5yDLEEmgH3Sn-qH-rb8PVT0dLQFAWU', ['database' => '(default)',]);
$collections = $firestoreClient->listDocuments('tutors', ['pageSize' => 1000000]);
$counter = 0;
try{
while ($collections["documents"][$counter]->get('calEmail') != NULL){    
    $classes[$counter] = $collections["documents"][$counter]->get('classes');
    $counter += 1;
}
}catch (\Throwable $t){
}



$counter1 = 0;
$somearr = array();
$counter3 = 0;
$counter4 = 0;
while ($classes[$counter4] != NULL){
while ($classes[$counter4][$counter1] != NULL){
$firestoreClient =  new FirestoreClient('fibonia-83e34','AIzaSyDCl5yDLEEmgH3Sn-qH-rb8PVT0dLQFAWU', ['database' => '(default)',]);
$collections = $firestoreClient->listDocuments($classes[$counter4][$counter1], ['pageSize' => 1000000]);
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
$var[0]["timeCreated"][4] = $var[0]["timeCreated"][4] + 1; 
$date = DateTime::createFromFormat('m-d-Y H:i', $var[0]["timeCreated"]);
$date = $date->format('m-d-Y H:i');
if ($date < gmdate('m-d-Y h:i', time()) && $var[0]["tutor_read"] == false && $var[0]["student_read"] == true){
    $studentemail = $var[0]["studentEmail"];
    $tutoremail = $var[0]["tutorEmail"];
    echo '
<script src="https://www.gstatic.com/firebasejs/7.14.6/firebase-app.js"></script>
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
var db = firebase.firestore();
db.collection("tutors").doc("'.$tutoremail.'").get().then(function(doc) {
    if (doc.exists) {
    var i;
    for (i = 0; doc.data()["appointments"][i]["uid"] != "'.$uid.'"; i++) {
    }
var appointment = doc.data()["appointments"];
    appointment.splice(i,1);
    db.collection("tutors").doc("'.$tutoremail.'").update({"appointments": appointment}).then(function() {});
    }});
db.collection("users").doc("'.$studentemail.'").get().then(function(doc) {
    if (doc.exists) {
    var i;
    for (i = 0; doc.data()["appointments"][i]["uid"] != "'.$uid.'"; i++) {
    }
var appointment = doc.data()["appointments"];
appointment.splice(i,1);
        db.collection("users").doc("'.$studentemail.'").update({"appointments": appointment}).then(function() {});
    }});
db.collection("'.$classes[$counter4][$counter1].'").doc("'.$tutoremail.'").get().then(function(doc) {
    if (doc.exists) {
        var appointment = doc.data()["appointments"];
        appointment.splice('.$counter1.',1);
        db.collection("'.$classes[$counter4][$counter1].'").doc("'.$tutoremail.'").update({"appointments": appointment}).then(function() {});
    }});

</script>';
    
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
$mail->addAddress($studentemail);
$mail->isHTML(true);
$str1 = $var[0]["time"];
$str = preg_replace('/\W\w+\s*(\W*)$/', '$1', $str1);
$date = DateTime::createFromFormat('m-d-Y H:i', $str);
$date = $date->format('D, M j, Y \a\t g:ia');
$class = $var[0]["classname"];
$output ='<p>Dear Tutor,</p><br></br><p>Unfortunately, your requested tutor for class '.$class.' on '.$date.' GMT has not responded within the given period of time. Please attempt to find a different tutor for your requested class.</p><br></br>';
$output .= '<p>Best Regards,</p><br></br>';
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
$mail->Username = 'info@fibonia.com';
$mail->Password = 'Mamagan999';
$mail->SMTPSecure = 'tls';                  
$mail->Port = 25;
$mail->setFrom('info@fibonia.com', 'Fibonia Team');
$mail->addAddress($tutoremail);
$mail->isHTML(true);
$output ='<p>Dear Tutor,</p><br></br><p>Unfortunately, you received a tutoring request for class '.$class.' on '.$date.' GMT, however you did not respond within the given time of 1 day. Hence, we have decided to cancel the appointment request.</p><br></br>';
$output .= '<p>Best Regards,</p><br></br>';
$output .= 'Fibonia Team';
$body = $output; 
$mail->Subject = 'Tutor Request - Fibonia Team';
$mail->Body    = $body;
if(!$mail->send()) {
  
} else {
}
}else{
    
}
$counter5 += 1;
}
$counter += 1;
}
}catch (\Throwable $t){
}
$counter1 += 1;
}
$counter4 += 1;
}

?>