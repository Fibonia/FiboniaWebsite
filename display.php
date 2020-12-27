<?php
session_start();

if (isset($_SESSION["loggedin"])){
    $semail = $_SESSION["id"];
}else if (isset($_SESSION["userData"])){
    $semail = $_SESSION["userData"]["email_id"];
}else if (isset($_SESSION["userData1"])){
    $semail = $_SESSION["userData1"]["email_id"];
}

echo '<head>
        <link rel="icon" type="image/png" href="logo.png">
        <title>Tutors | Fibonia</title>
                <link rel="icon" type="image/png" href="logo.png">
        <link href="message3.css" rel="stylesheet" id="bootstrap-css">
</head>';
echo '
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bPopup/0.11.0/jquery.bpopup.min.js"></script>
<script>
    $( document ).ready(function() {
$("#popup_this").removeAttr("style");
        
    });
$(document).ready(function(){
document.getElementById("dateInput").min = new Date().toISOString().slice(0,16);
document.getElementById("dateInput1").min = new Date().toISOString().slice(0,16);
});

</script>
<div class="popup popup--icon -success js_success-popup popup--visible" id = "popup_this9">
  <div class="popup__background"></div>
  <div class="popup__content">
    <h3 class="popup__content__title">
      Successful Request!
    </h3>
    <p>Your class request has been successfully sent!</p>
    <p>
      <button onclick= "changeZIndex9();" class="button b-close button--success" data-for="js_success-popup"><span>CLOSE</span></button>
    </p>
  </div>
</div>
<div class="popup popup--icon -success js_success-popup popup--visible" id = "popup_this">
  <div class="popup__background"></div>
  <div class="popup__content">
  <h3 style="font-size:12px;" id="preftime">
  </h3>
    <h3 class="popup__content__title">
      Choose your date and time for the appointment (Local Time)
    </h3>
    <p>FROM</p>
    <input type="datetime-local" step="60" id="dateInput" required>
    <p>TO</p>
    <input type="datetime-local" step="60" id="dateInput1" required><br></br><p></p>
    <input style="width:60%;" type="text" maxlength="100" placeholder="What particularly do you need help with?" id="notes" required>
    <br><div id="dateformat" class="dateformat" style="opacity:0;color:red;"><p>Please enter valid dates in increments of an hour</p></div>
    <p>
      <button id="savedate" class="button b-close button--success" data-for="js_success-popup"><span>Submit</span></button>
    </p>
  </div>
</div>
<style>
.dateformat{
    transition:1s;
}
</style>
';

use MrShan0\PHPFirestore\FirestoreClient;
require 'vendor/autoload.php';
echo '<style>.val1{z-index:1;opacity:1;}.val2{z-index:1;opacity:1;}.val3{z-index:-1;opacity:0;}.val4{z-index:-1;opacity:0;}</style>';
if ($_SESSION['save1'] == "true"){
foreach ($_SESSION['val1'] as $item=>$item_value){
   if  (in_array($item, $_SESSION['val2'])){
       $key = array_search($item, $_SESSION['val2']);
       unset($_SESSION['val2'][$key]);
   }
}
}elseif ($_SESSION['save2'] == "true"){
foreach ($_SESSION['val1'] as $item){
   if  (array_key_exists($item, $_SESSION['val2'])){
       unset($_SESSION['val2'][$item]);
   }
}
}

function clean($string) {
   $string = str_replace(' ', '-', $string);

   return preg_replace('/[^A-Za-z0-9\-]/', '', $string);
}
$count = 1;
echo '<style>
.b-close{
    right:45% !important;
}
.but {
    cursor:pointer;
}
html {
  background-color: #fefefe;
  box-sizing: border-box;
  font-family: "Roboto", sans-serif;
  font-size: 14px;
  font-weight: 500;
}

.button1 {
    flex: 1 1 auto;
    border-radius:100px;
    margin: 3.2vh 13.8vh 0;
    padding: 20px;
    border: 2px solid black;
    text-align: center;
    text-transform: uppercase;
    position: absolute;
    overflow: hidden;
    transition: .3s;
    z-index:10003;
}
.button1:after {
    position: absolute;
    transition: .3s;
    content: "";
    width: 0;
    left: 50%;
    bottom: 0;
    height: 3px;
    background: #f7f7f7;
}
.button1:nth-of-type(1):after {
    height: 120%;
    left: -10%;
    transform: skewX(15deg);
    z-index: -1;
}
.button1:hover {
    cursor: pointer;
}
.button1:hover:after {
    width: 100%;
    left: 0;
}
.button1:hover:nth-of-type(1) {
    color: #5bcaff;
}
.button1:hover:nth-of-type(1):after {
    left: -10%;
    width: 120%;
}
@media (max-width: 1600px) {
.button1 {
    flex: 1 1 auto;
    border-radius:100px;
    margin: 4.5vh 13.8vh 0;
    padding: 15px;
    border: 2px solid black;
    text-align: center;
    text-transform: uppercase;
    position: absolute;
    overflow: hidden;
    transition: .3s;
    z-index:10003;
}}
@media (max-width: 1366px) {
.button1 {
    flex: 1 1 auto;
    border-radius:100px;
    margin: 5.5vh 13.8vh 0;
    padding: 10px;
    border: 2px solid black;
    text-align: center;
    text-transform: uppercase;
    position: absolute;
    overflow: hidden;
    transition: .3s;
    z-index:10003;
}}
@media (max-width: 1024px) {
.button1 {
    flex: 1 1 auto;
    border-radius:100px;
    margin: 6.0vh 13.8vh 0;
    padding: 9px;
    border: 2px solid black;
    text-align: center;
    text-transform: uppercase;
    position: absolute;
    overflow: hidden;
    transition: .3s;
    z-index:10003;
}}
@media (min-width: 1024px) and (max-width:1024px) and (min-height: 600px) and (max-height:600px) {
.button1 {
    flex: 1 1 auto;
    border-radius:100px;
    margin: 6.0vh 13.8vh 0;
    padding: 9px;
    border: 2px solid black;
    text-align: center;
    text-transform: uppercase;
    position: absolute;
    overflow: hidden;
    transition: .3s;
    z-index:10003;
}}

*, *:before, *:after {
  box-sizing: inherit;
}

.container {
  margin: 50px auto 0;
  width: 700px;
}

.u-float-right {
  float: right;
}

.a {
    text-decoration:none; !important
}

.u-flex-center {
  display: -webkit-flex;
  display: flex;
  -webkit-justify-content: center;
  justify-content: center;
  -webkit-align-items: center;
  align-items: center;
}

.subtle {
  color: #888;
  font-size: 12px;
}

.card-media {
  border-radius: 2px;
  box-shadow: 0 2px 8px rgba(0, 0, 0, .12);
  height: 175px;
  margin-bottom: 25px;
  transition: all 300ms ease-out;
  width: 100%;
}

.card-media:hover {
  box-shadow: 0 5px 14px rgba(0, 0, 0, .2);
}

.card-media-object-container {
  background: none;
  float: left;
  height: 100%;
  width: 35%;
  position: relative;
}

.card-media-object {
  background-position: center center;
  background-size: cover;
  height: 100%;
}

.card-media-object:after {
  content: " ";
  display: block;
  height: 100%;
  left: 0;
  opacity: 0;
  position: absolute;
  right: 0;
  top: 0;
  transition: all 300ms ease-out;
  z-index: 10;
}

.card-media:hover .card-media-object:after {
  background: -moz-linear-gradient(top,  rgba(0,0,0,0) 0%, rgba(0,0,0,0) 52%, rgba(0,0,0,0.4) 100%);
  background: -webkit-linear-gradient(top,  rgba(0,0,0,0) 0%,rgba(0,0,0,0) 52%,rgba(0,0,0,0.4) 100%);
  background: linear-gradient(to bottom,  rgba(0,0,0,0) 0%,rgba(0,0,0,0) 52%,rgba(0,0,0,0.4) 100%);
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr="#00000000", endColorstr="#a6000000",GradientType=0 );
  opacity: 1;
}

.card-media-object-tag {
  background-color: #fff;
  border-radius: 2px;
  padding: 2px 7px;
  position: absolute;
  right: 10px;
  top: 10px;
}

.card-media-object-social-list {
  bottom: 4px;
  left: 10px;
  list-style-type: none;
  margin: 0;
  padding: 0;
  position: absolute;
  z-index: 20;
}

.card-media-object-social-list li {
  border-radius: 50%;
  display: inline-block;
  height: 30px;
  margin-right: 6px;
  opacity: 0;
  overflow: hidden;
  transform: translateY(5px);
  transition: all 300ms ease-out;
  width: 30px;
}

.card-media:hover .card-media-object-social-list li {
  opacity: 1;
  transform: translateY(0);
}

.card-media-object-social-list li:nth-child(1) {
  transition-delay: 0;
}
.card-media-object-social-list li:nth-child(2) {
  transition-delay: 75ms;
}
.card-media-object-social-list li:nth-child(3) {
  transition-delay: 150ms;
}

.card-media-object-social-list-item-additional {
  border: 1px solid #fff;
  color: #fff;
  font-size: 12px;
  padding-top: 7px;
  text-align: center;
}

.card-media-body {
  background-color: #fff;
  float: left;
  height: 100%;
  padding: 12px 15px;
  position: relative;
  width: 65%;
}

.card-media-body-top {
  display: block;
}

.card-media-body-top-icons {
  margin-top: -2px;
  opacity: 0;
  transition: all 300ms ease-out;
  transform: translateY(-5px);
}

.card-media:hover .card-media-body-top-icons {
  opacity: 1;
  transform: translateY(0);
}

.card-media-body-top-icons > svg {
  cursor: pointer;
  margin-left: 10px;
  transition: all 300ms ease-out;
}

.card-media-body-top-icons > svg:hover {
  fill: #444;
}

.card-media-body-heading {
  display: block;
  margin-top: 10px;
}

.card-media-body-supporting-bottom {
  position: absolute;
  bottom: 10px;
  left: 0;
  opacity: 1;
  padding: 0 15px;
  transition: all 300ms ease-out;
  width: 100%;
}

.card-media:hover .card-media-body-supporting-bottom {
  opacity: 0;
  transform: translateY(-8px);
}

.card-media-body-supporting-bottom-text {
  display: inline-block;
}

.card-media-body-supporting-bottom-reveal {
  opacity: 0;
  transform: translateY(8px);
  transition: all 300ms ease-out;
}

.card-media:hover .card-media-body-supporting-bottom-reveal {
  opacity: 1;
  transform: translateY(0);
}

.card-media-link {
  color: #41C1F2;
  text-decoration: none;
}
  </style>';
echo '<a href="home.php" style="color:black;" target="_self" ><div class="button1">&#8592; Go Back</div></a>';
echo '<br></br><br></br>';
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

if ($_SESSION['save2'] == "true") {
foreach ($_SESSION['val1'] as $item=>$item_value){




$firestoreClient =  new FirestoreClient('fibonia-83e34','AIzaSyDCl5yDLEEmgH3Sn-qH-rb8PVT0dLQFAWU', ['database' => '(default)',]);
$collections = $firestoreClient->listDocuments($_SESSION['class'], ['pageSize' => 1000000]);
$counter = 0;

try{
while ($collections["documents"][$counter]->get('calEmail') != NULL){    
if ($collections["documents"][$counter]->get('calEmail') == $item_value){
    $group = $collections["documents"][$counter]->get('group_tutor');
    $fullname = $collections["documents"][$counter]->get('name');
    $price = $collections["documents"][$counter]->get('price');
    $rating = $collections["documents"][$counter]->get('rating');
    if ($rating == 0){
        $rating = "No ratings yet!";
    }else{
        $rating = $rating."&#9734;";
    }
    break;
}else{
    $counter += 1;
}
}
}catch (\Throwable $t){
}


$firestoreClient =  new FirestoreClient('fibonia-83e34','AIzaSyDCl5yDLEEmgH3Sn-qH-rb8PVT0dLQFAWU', ['database' => '(default)',]);
$collections = $firestoreClient->listDocuments("tutors", ['pageSize' => 1000000]);
$counter = 0;

try{
while ($collections["documents"][$counter]->get('calEmail') != NULL){    
if ($collections["documents"][$counter]->get('calEmail') == $item_value){
    $preftime = $collections["documents"][$counter]->get('prefTime');
    break;
}else{
    $counter += 1;
}
}
}catch (\Throwable $t){
}


$var = $preftime;
$array = (array) $var;
ob_start();
var_dump($array);
$array = ob_get_clean();
$array1 = substr($array, 0, -3);
$arraynew = substr($array1, 71, strlen($array1));
$var = unvar_dump($arraynew);

$i = 0;
$msg = "The tutor's preferred times (in GMT Timezone):<br></br>";
while ($i != 7){
    if ($i == 0){
        $msg1 = "Monday: ";
    }elseif ($i == 1){
        $msg1 = "Tuesday: ";
    }elseif ($i == 2){
        $msg1 = "Wednesday: ";
    }elseif ($i == 3){
        $msg1 = "Thursday: ";
    }elseif ($i == 4){
        $msg1 = "Friday: ";
    }elseif ($i == 5){
        $msg1 = "Saturday: ";
    }elseif ($i == 6){
        $msg1 = "Sunday: ";
    }
    $j = 0;

    while ($j != count($var[0][$i])){

        $time = $var[0][$i][$j];
        $timestr = strval($time);

        $timeval = strlen($timestr);
        $time = str_split($time);
        if ($timeval == 1){
            $time = "00:00"."AM";
        }elseif ($timeval == 2){
            $time = "00:".$time[0].$time[1]."AM";
        }elseif ($timeval == 3){
            $time = "0".$time[0].":".$time[1].$time[2]."AM";
        }elseif ($timeval == 4){

            $time = $time[0].$time[1].":".$time[2].$time[3]."PM";
        }

        if ($j == count($var[0][$i]) - 1){
        $msg1 = $msg1.$time."<br></br>";            
        }else{
        $msg1 = $msg1.$time." ";}
        $j+=1;
    }
    if ($j == 0){
        $msg = $msg.$msg1."None<br></br>";
    }else{
    $msg = $msg.$msg1;}
    $i+=1;
}





$studentemail = $_SESSION['id'];

$firestoreClient =  new FirestoreClient('fibonia-83e34','AIzaSyDCl5yDLEEmgH3Sn-qH-rb8PVT0dLQFAWU', ['database' => '(default)',]);
$collections = $firestoreClient->listDocuments('tutors', ['pageSize' => 1000000]);
$oursqlcount = 0;
try{
while ($collections["documents"][$oursqlcount]->get('calEmail') != NULL){
if ($collections["documents"][$oursqlcount]->get('calEmail') == $item_value){
    $lvl = $collections["documents"][$oursqlcount]->get('educationLevel');
    $langs = $collections["documents"][$oursqlcount]->get('preferences');
}
$oursqlcount += 1;
}
}catch (\Throwable $t){
}



if ($l2 == ""){
    $langmsg = " English";
}else{
    $langmsg = " English and ".$l2;
}

if ($oursqlcount != 0){
if ($group == false) {
    $stay = "No";
}else{
    $stay = "Yes";
}


$lst = array();
$simple_string = "but".strval($item); 
$ciphering = "AES-128-CTR"; 
$iv_length = openssl_cipher_iv_length($ciphering); 
$options = 0; 
$encryption_iv = '1234567891011121'; 
$encryption_key = "button".strval($item_value);
$encryption = openssl_encrypt($simple_string, $ciphering, 
            $encryption_key, $options, $encryption_iv); 
$decryption_iv = '1234567891011121'; 
$decryption_key = "button".strval($item);
$decryption=openssl_decrypt ($encryption, $ciphering,$decryption_key, $options, $decryption_iv); 

$encryption = clean($encryption);
$lst[$encryption] = $item;
$divid = "#".$encryption;

echo '<link href="message3.css" rel="stylesheet" id="bootstrap-css">';
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
echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>';

echo '<div id="val1" class="val1"><div type="hidden" class="but" id="'.$encryption.'"><input type="hidden" value="'.$stay.'" id="'.$item.'"> <div class="container"><div class="card-media"><div class="card-media-object-container"><div class="card-media-object" style="background-image: url(https://gammas.org/wp-content/uploads/elementor/thumbs/ucb-nr8ngabnugcealvx9dgt2fpoa8nm5rr6745j70qz4o.png);"></div><ul class="card-media-object-social-list"></ul></div><div class="card-media-body"><div class="card-media-body-top"><span class="subtle">Full Name:'.$fullname.'<br></br></span><span class="subtle">Preferred Languages:'.$langmsg.'<br></br>      Level Of Education: '.$lvl.'</span><div class="card-media-body-top-icons u-float-right"></div></div><span class="card-media-body-heading">Tutor Of Class: '.$_SESSION['class'].'</span><div class="card-media-body-supporting-bottom"><span class="card-media-body-supporting-bottom-text subtle"><br></br></span><span class="card-media-body-supporting-bottom-text subtle">Rating: '.$rating.'</span><br></br><span class="card-media-body-supporting-bottom-text subtle">Willing to tutor three people at once? '.$stay.'</span><span class="card-media-body-supporting-bottom-text subtle u-float-right">Price Per Hour (in $): '.$price.'</span></div><div class="card-media-body-supporting-bottom card-media-body-supporting-bottom-reveal"><a href="#/" class="card-media-body-supporting-bottom-text card-media-link u-float-right">VIEW TUTOR</a></div></div></div></div></div></div>';

echo '<script>var id = 0; $(document).ready(function() {$("'.$divid.'").on("click", function() {if(5 == 5){id = '.$lst[$encryption].';document.getElementById("preftime").innerHTML = "'.$msg.'";document.getElementById("popup_this").style.opacity="1";document.getElementById("popup_this").style.zIndex=10005;$.ajax({url: "",type: "POST",data: {id: id},cache: false,success: function(dataResult){var dataResult = JSON.parse(dataResult);if(dataResult.statusCode==200){}}});}});})</script>';

echo '<script>$(document).ready(function() {$("#savedate").on("click", function() {if(5 == 5){var date1 = $("#dateInput").val();var date= new Date(date1);date = new Date(date.getTime());date1 = date.toISOString().slice(0,16);var notes = $("#notes").val();var date2 = $("#dateInput1").val();var date= new Date(date2);date = new Date(date.getTime());date2 = date.toISOString().slice(0,16);var sixtoone = $("'.$item.'").val();finval = true; if (sixtoone == "No"){sixtoone=false}else{sixtoone=true}; $.ajax({url: "savedate.php",type: "POST",data: {id: id,sixtoone:sixtoone, finval:finval,date1:date1,date2:date2,notes:notes},cache: false,success: function(dataResult){var dataResult = JSON.parse(dataResult);if(dataResult.statusCode==200){






var studentName = "";
var tutorFN = "";
db.collection("users").where("email", "==","'.$semail.'") .get() .then(function(querySnapshot) { querySnapshot.forEach(function(doc) {var firstname = doc.data()["firstName"];var lastname = doc.data()["lastName"];studentName = firstname.concat(" ",lastname);}); 
db.collection("tutors").where("calEmail", "==",dataResult.tutorEmail).get().then(function(querySnapshot) { querySnapshot.forEach(function(doc) {var fN = doc.data()["name"]; tutorFN = fN.replace(/ */,"");}); var totalWords = "'.$_SESSION["class"].'"; var firstWord = totalWords.replace(/ .*/,""); var ourappt = {classname: "'.$_SESSION["class"].'",notes:notes,studentEmail:"'.$semail.'",studentName:studentName,pay_created:false,subject:firstWord,time:dataResult.time,tutorEmail:dataResult.tutorEmail,rated:false,group_tutoring:sixtoone,uniqid:dataResult.uniqid,tutorFN:tutorFN,tutor_read:false,student_read:true,txn_id:"",uid:dataResult.uid,timeCreated:dataResult.timeCreated}; 
db.collection("users").doc("'.$semail.'").get().then(function(doc) { if (doc.exists) { var appts = doc.data()["appointments"]; appts.push(ourappt); db.collection("users").doc("'.$semail.'").update({"appointments": appts}).then(function() {}); }});  
db.collection("tutors").doc(dataResult.tutorEmail).get().then(function(doc) { if (doc.exists) { var appts = doc.data()["appointments"]; appts.push(ourappt); db.collection("tutors").doc(dataResult.tutorEmail).update({"appointments": appts}).then(function() {}); }});
db.collection("'.$_SESSION["class"].'").doc(dataResult.tutorEmail).get().then(function(doc) { if (doc.exists) { var appts = doc.data()["appointments"]; appts.push(ourappt); db.collection("'.$_SESSION["class"].'").doc(dataResult.tutorEmail).update({"appointments": appts}).then(function() {
window.location.replace("display.php?success");    
}); }});});
    
    
    
});
}else if(dataResult.statusCode==201){document.getElementById("dateformat").style.opacity="1";}}});}});})</script>';
$count ++;
} else {
    
}
}

$emptyarr = array();
if ($_SESSION['val2'] != $emptyarr){
echo '<style>.notfound{width:700px;margin:50px auto 0;} .blackline{border-bottom: 3px solid black;width:700px;margin:10px auto 0;}</style>';
echo '<div class="notfound">&#9747; We could not find any other tutors with your preferences, however, we have found other tutors that you might like.</div><div class="blackline"></div>';
}
foreach ($_SESSION['val2'] as $item=>$item_value){
$firestoreClient =  new FirestoreClient('fibonia-83e34','AIzaSyDCl5yDLEEmgH3Sn-qH-rb8PVT0dLQFAWU', ['database' => '(default)',]);
$collections = $firestoreClient->listDocuments($_SESSION['class'], ['pageSize' => 1000000]);
$counter = 0;

try{
while ($collections["documents"][$counter]->get('calEmail') != NULL){    
if ($collections["documents"][$counter]->get('calEmail') == $item_value){
    $group = $collections["documents"][$counter]->get('group_tutor');
    $fullname = $collections["documents"][$counter]->get('name');
    $price = $collections["documents"][$counter]->get('price');
    $rating = $collections["documents"][$counter]->get('rating');
    if ($rating == 0){
        $rating = "No ratings yet!";
    }else{
        $rating = $rating."&#9734;";
    }
    break;
}else{
    $counter += 1;
}
}
}catch (\Throwable $t){
}





$studentemail = $_SESSION['id'];

$firestoreClient =  new FirestoreClient('fibonia-83e34','AIzaSyDCl5yDLEEmgH3Sn-qH-rb8PVT0dLQFAWU', ['database' => '(default)',]);
$collections = $firestoreClient->listDocuments('tutors', ['pageSize' => 1000000]);
$oursqlcount = 0;
try{
while ($collections["documents"][$oursqlcount]->get('calEmail') != NULL){
if ($collections["documents"][$oursqlcount]->get('calEmail') == $item_value){
    $lvl = $collections["documents"][$oursqlcount]->get('educationLevel');
    $langs = $collections["documents"][$oursqlcount]->get('preferences');
}
$oursqlcount += 1;
}
}catch (\Throwable $t){
}



if ($l2 == ""){
    $langmsg = " English";
}else{
    $langmsg = " English and ".$l2;
}

if ($oursqlcount != 0){
if ($group == false) {
    $stay = "No";
}else{
    $stay = "Yes";
}


$lst = array();
$simple_string = "but".strval($item); 
$ciphering = "AES-128-CTR"; 
$iv_length = openssl_cipher_iv_length($ciphering); 
$options = 0; 
$encryption_iv = '1234567891011121'; 
$encryption_key = "button".strval($item_value);
$encryption = openssl_encrypt($simple_string, $ciphering, 
            $encryption_key, $options, $encryption_iv); 
$decryption_iv = '1234567891011121'; 
$decryption_key = "button".strval($item);
$decryption=openssl_decrypt ($encryption, $ciphering,$decryption_key, $options, $decryption_iv); 

$encryption = clean($encryption);
$lst[$encryption] = $item;
$divid = "#".$encryption;

echo '<link href="message3.css" rel="stylesheet" id="bootstrap-css">';
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
echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>';

echo '<div id="val1" class="val1"><div type="hidden" class="but" id="'.$encryption.'"><input type="hidden" value="'.$stay.'" id="'.$item.'"> <div class="container"><div class="card-media"><div class="card-media-object-container"><div class="card-media-object" style="background-image: url(https://gammas.org/wp-content/uploads/elementor/thumbs/ucb-nr8ngabnugcealvx9dgt2fpoa8nm5rr6745j70qz4o.png);"></div><ul class="card-media-object-social-list"></ul></div><div class="card-media-body"><div class="card-media-body-top"><span class="subtle">Full Name:'.$fullname.'<br></br></span><span class="subtle">Preferred Languages:'.$langmsg.'<br></br>      Level Of Education: '.$lvl.'</span><div class="card-media-body-top-icons u-float-right"></div></div><span class="card-media-body-heading">Tutor Of Class: '.$_SESSION['class'].'</span><div class="card-media-body-supporting-bottom"><span class="card-media-body-supporting-bottom-text subtle"><br></br></span><span class="card-media-body-supporting-bottom-text subtle">Rating: '.$rating.'</span><br></br><span class="card-media-body-supporting-bottom-text subtle">Willing to tutor three people at once? '.$stay.'</span><span class="card-media-body-supporting-bottom-text subtle u-float-right">Price Per Hour (in $): '.$price.'</span></div><div class="card-media-body-supporting-bottom card-media-body-supporting-bottom-reveal"><a href="#/" class="card-media-body-supporting-bottom-text card-media-link u-float-right">VIEW TUTOR</a></div></div></div></div></div></div>';

echo '<script>var id = 0; $(document).ready(function() {$("'.$divid.'").on("click", function() {if(5 == 5){id = '.$lst[$encryption].';document.getElementById("popup_this").style.opacity="1";document.getElementById("popup_this").style.zIndex=10005;$.ajax({url: "",type: "POST",data: {id: id},cache: false,success: function(dataResult){var dataResult = JSON.parse(dataResult);if(dataResult.statusCode==200){}}});}});})</script>';

echo '<script>$(document).ready(function() {$("#savedate").on("click", function() {if(5 == 5){var date1 = $("#dateInput").val();var date= new Date(date1);date = new Date(date.getTime());date1 = date.toISOString().slice(0,16);var notes = $("#notes").val();var date2 = $("#dateInput1").val();var date= new Date(date2);date = new Date(date.getTime());date2 = date.toISOString().slice(0,16);var sixtoone = $("'.$item.'").val();finval = false; if (sixtoone == "No"){sixtoone=false}else{sixtoone=true}; $.ajax({url: "savedate.php",type: "POST",data: {id: id,sixtoone:sixtoone, finval:finval,date1:date1,date2:date2,notes:notes},cache: false,success: function(dataResult){var dataResult = JSON.parse(dataResult);if(dataResult.statusCode==200){






var studentName = "";
var tutorFN = "";
db.collection("users").where("email", "==","'.$semail.'") .get() .then(function(querySnapshot) { querySnapshot.forEach(function(doc) {var firstname = doc.data()["firstName"];var lastname = doc.data()["lastName"];studentName = firstname.concat(" ",lastname);}); 
db.collection("tutors").where("calEmail", "==",dataResult.tutorEmail).get().then(function(querySnapshot) { querySnapshot.forEach(function(doc) {var fN = doc.data()["name"]; tutorFN = fN.replace(/ */,"");}); var totalWords = "'.$_SESSION["class"].'"; var firstWord = totalWords.replace(/ .*/,""); var ourappt = {classname: "'.$_SESSION["class"].'",notes:notes,studentEmail:"'.$semail.'",studentName:studentName,pay_created:false,subject:firstWord,time:dataResult.time,tutorEmail:dataResult.tutorEmail,rated:false,group_tutoring:sixtoone,uniqid:dataResult.uniqid,tutorFN:tutorFN,tutor_read:false,student_read:true,txn_id:"",uid:dataResult.uid,timeCreated:dataResult.timeCreated}; 
db.collection("users").doc("'.$semail.'").get().then(function(doc) { if (doc.exists) { var appts = doc.data()["appointments"]; appts.push(ourappt); db.collection("users").doc("'.$semail.'").update({"appointments": appts}).then(function() {}); }});  
db.collection("tutors").doc(dataResult.tutorEmail).get().then(function(doc) { if (doc.exists) { var appts = doc.data()["appointments"]; appts.push(ourappt); db.collection("tutors").doc(dataResult.tutorEmail).update({"appointments": appts}).then(function() {}); }});
db.collection("'.$_SESSION["class"].'").doc(dataResult.tutorEmail).get().then(function(doc) { if (doc.exists) { var appts = doc.data()["appointments"]; appts.push(ourappt); db.collection("'.$_SESSION["class"].'").doc(dataResult.tutorEmail).update({"appointments": appts}).then(function() {
window.location.replace("display.php?success");    
}); }});});
    
    
    
});
}else if(dataResult.statusCode==201){document.getElementById("dateformat").style.opacity="1";}}});}});})</script>';
$count ++;
} else {
    
}
}

}else{

foreach ($_SESSION['val3'] as $item) {
$firestoreClient =  new FirestoreClient('fibonia-83e34','AIzaSyDCl5yDLEEmgH3Sn-qH-rb8PVT0dLQFAWU', ['database' => '(default)',]);
$collections = $firestoreClient->listDocuments('tutors', ['pageSize' => 1000000]);
$counter = 0;
try{
while ($collections["documents"][$counter]->get('calEmail') != NULL){    
if ($collections["documents"][$counter]->get('calEmail') == $item){
    $lst = $collections["documents"][$counter]->get('preferences');
    break;
}else{
    $counter += 1;
}
}
}catch (\Throwable $t){
}

$array = (array) $lst;
ob_start();
var_dump($array);
$result = ob_get_clean();
$arr = explode("bool(", $result, 2);
$second = $arr[1];
$arr = explode(")", $second, 2);
$var1 = $arr[0];
$var2 = explode("bool(",$arr[1],2);
$tst1 = $var2[1];
$arr = explode(")",$tst1,2);
if ($var1 == "true"){
    $var1 = true;
}else{
    $var1 = false;
}

if ($arr[0] == "true"){
    $arr[0] = true;
}else{
    $arr[0] = false;
}


$sixtoone = $arr[0];

$firestoreClient =  new FirestoreClient('fibonia-83e34','AIzaSyDCl5yDLEEmgH3Sn-qH-rb8PVT0dLQFAWU', ['database' => '(default)',]);
$collections = $firestoreClient->listDocuments($_SESSION['class'], ['pageSize' => 1000000]);
$counter1 = 0;
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

$var = $collections["documents"][$counter1]->get('info');
$array = (array) $var;
ob_start();
var_dump($array);
$array = ob_get_clean();
$array1 = substr($array, 0, -3);
$arraynew = substr($array1, 71, strlen($array1));
$var = unvar_dump($arraynew);
try{
while ($var[$counter1]["email"] != NULL){    
if ($var[$counter1]["email"] == $item){
    $price = $collections["documents"][$counter1]->get('price');
    break;
}else{
    $counter1 += 1;
}
}
}catch (\Throwable $t){
}


$firestoreClient =  new FirestoreClient('fibonia-83e34','AIzaSyDCl5yDLEEmgH3Sn-qH-rb8PVT0dLQFAWU', ['database' => '(default)',]);
$collections = $firestoreClient->listDocuments('tutors', ['pageSize' => 1000000]);
$counter = 0;
try{
while ($collections["documents"][$counter]->get('calEmail') != NULL){    
if ($collections["documents"][$counter]->get('calEmail') == $item){
    $lvl = $collections["documents"][$counter]->get('educationLvl');
    break;
}else{
    $counter += 1;
}
}
}catch (\Throwable $t){
}

$studentemail = $_SESSION['id'];


$firestoreClient =  new FirestoreClient('fibonia-83e34','AIzaSyDCl5yDLEEmgH3Sn-qH-rb8PVT0dLQFAWU', ['database' => '(default)',]);
$collections = $firestoreClient->listDocuments('tutors', ['pageSize' => 1000000]);
$oursqlcount = 0;
try{
while ($collections["documents"][$oursqlcount]->get('calEmail') != NULL){    
    $oursqlcount += 1;
}
}catch (\Throwable $t){
}


if ($oursqlcount != 0){
if ($sixtoone == "false") {
    $sixtoone = "No";
}else{
    $sixtoone = "Yes";
}
$lst = array();
$simple_string = "but".strval($item); 
$ciphering = "AES-128-CTR"; 
$iv_length = openssl_cipher_iv_length($ciphering); 
$options = 0; 
$encryption_iv = '1234567891011121'; 
$encryption_key = "button".strval($item);
$encryption = openssl_encrypt($simple_string, $ciphering, 
            $encryption_key, $options, $encryption_iv); 
$decryption_iv = '1234567891011121'; 
$decryption_key = "button".strval($item);
$decryption=openssl_decrypt ($encryption, $ciphering,$decryption_key, $options, $decryption_iv); 

$encryption = clean($encryption);
$lst[$encryption] = $item;
$divid = "#".$encryption;

echo '<link href="message3.css" rel="stylesheet" id="bootstrap-css">';
echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>';
echo '<div id="val3" class="val3"><div type="hidden" class="but" id="'.$encryption.'"><div class="container"> <div class="card-media"><div class="card-media-object-container"><div class="card-media-object" style="background-image: url(https://gammas.org/wp-content/uploads/elementor/thumbs/ucb-nr8ngabnugcealvx9dgt2fpoa8nm5rr6745j70qz4o.png);"></div><ul class="card-media-object-social-list"></ul></div><div class="card-media-body"><div class="card-media-body-top"><span class="subtle">Preferred Languages:'.$l1.' and '.$l2.'<br></br>      Level Of Education: '.$lvl.'</span><div class="card-media-body-top-icons u-float-right"></div></div><span class="card-media-body-heading">Tutor Of Class: '.$_SESSION['class'].'</span><div class="card-media-body-supporting-bottom"><span class="card-media-body-supporting-bottom-text subtle">Willing to tutor 6 students at once? '.$sixtoone.'</span><span class="card-media-body-supporting-bottom-text subtle u-float-right">Price Per Hour (in $): '.$price.'</span></div><div class="card-media-body-supporting-bottom card-media-body-supporting-bottom-reveal"><a href="#/" class="card-media-body-supporting-bottom-text card-media-link u-float-right">VIEW TUTOR</a></div></div></div></div></div></div>';
echo '<script>var id = 0; $(document).ready(function() {$("'.$divid.'").on("click", function() {if(5 == 5){id = '.$lst[$encryption].';document.getElementById("popup_this").style.opacity="1";document.getElementById("popup_this").style.zIndex=10005;$.ajax({url: "",type: "POST",data: {id: id},cache: false,success: function(dataResult){var dataResult = JSON.parse(dataResult);if(dataResult.statusCode==200){}}});}});})</script>';
echo '<script>$(document).ready(function() {$("#savedate").on("click", function() {if(5 == 5){var date1 = $("#dateInput").val();var date= new Date(date1);date = new Date(date.getTime());date1 = date.toISOString().slice(0,16);var sixtoone = $("#sixtoone").val();var notes = $("#notes").val(); var date2 = $("#dateInput1").val(); var date= new Date(date2);date = new Date(date.getTime());date2 = date.toISOString().slice(0,16); $.ajax({url: "savedate.php",type: "POST",data: {id: id,sixtoone:sixtoone, date1:date1,date2:date2,notes:notes},cache: false,success: function(dataResult){var dataResult = JSON.parse(dataResult);if(dataResult.statusCode==200){window.location.replace("display.php?success");}else if(dataResult.statusCode==201){document.getElementById("dateformat").style.opacity="1";}}});}});})</script>';
$count ++;
} else {
    
}
}
$emptyarr = array();


foreach ($_SESSION['val4'] as $item=>$item_value){



$firestoreClient =  new FirestoreClient('fibonia-83e34','AIzaSyDCl5yDLEEmgH3Sn-qH-rb8PVT0dLQFAWU', ['database' => '(default)',]);
$collections = $firestoreClient->listDocuments('tutors', ['pageSize' => 1000000]);
$counter = 0;
try{
while ($collections["documents"][$counter]->get('calEmail') != NULL){    
if ($collections["documents"][$counter]->get('calEmail') == $item){
    $lvl = $collections["documents"][$counter]->get('educationLvl');
    break;
}else{
    $counter += 1;
}
}
}catch (\Throwable $t){
}


$studentemail = $_SESSION['id'];


$firestoreClient =  new FirestoreClient('fibonia-83e34','AIzaSyDCl5yDLEEmgH3Sn-qH-rb8PVT0dLQFAWU', ['database' => '(default)',]);
$collections = $firestoreClient->listDocuments('tutors', ['pageSize' => 1000000]);
$oursqlcount = 0;
try{
while ($collections["documents"][$oursqlcount]->get('calEmail') != NULL){    
    $oursqlcount += 1;
}
}catch (\Throwable $t){
}


if ($oursqlcount != 0){
if ($stay == "false") {
    $stay = "No";
}else{
    $stay = "Yes";
}
if ($travel == "false") {
    $travel = "No";
}else{
    $travel = "Yes";
}





$lst = array();
$simple_string = "but".strval($item); 
$ciphering = "AES-128-CTR"; 
$iv_length = openssl_cipher_iv_length($ciphering); 
$options = 0; 
$encryption_iv = '1234567891011121'; 
$encryption_key = "button".strval($item);
$encryption = openssl_encrypt($simple_string, $ciphering, 
            $encryption_key, $options, $encryption_iv); 
$decryption_iv = '1234567891011121'; 
$decryption_key = "button".strval($item);
$decryption=openssl_decrypt ($encryption, $ciphering,$decryption_key, $options, $decryption_iv); 

$encryption = clean($encryption);
$lst[$encryption] = $item;
$divid = "#".$encryption;

echo '<link href="message3.css" rel="stylesheet" id="bootstrap-css">';
echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>';
echo '<div id="val4" class="val4"><div type="hidden" class="but" id="'.$encryption.'"> <div class="container"><div class="card-media"><div class="card-media-object-container"><div class="card-media-object" style="background-image: url(https://gammas.org/wp-content/uploads/elementor/thumbs/ucb-nr8ngabnugcealvx9dgt2fpoa8nm5rr6745j70qz4o.png);"></div><ul class="card-media-object-social-list"></ul></div><div class="card-media-body"><div class="card-media-body-top"><span class="subtle">Preferred Languages:'.$l1.' and '.$l2.'<br></br>      Level Of Education: '.$lvl.'</span><div class="card-media-body-top-icons u-float-right"></div></div><span class="card-media-body-heading">Tutor Of Class: '.$_SESSION['class'].'</span><div class="card-media-body-supporting-bottom"><span class="card-media-body-supporting-bottom-text subtle">Willing to travel for tutoring? '.$travel.'</span><br></br><span class="card-media-body-supporting-bottom-text subtle">Willing to tutor at home? '.$stay.'</span><span class="card-media-body-supporting-bottom-text subtle u-float-right">Distance From Your Location: '.$item_value.' </span><span class="card-media-body-supporting-bottom-text subtle u-float-right">Price Per Hour (in $): '.$price.'</span></div><div class="card-media-body-supporting-bottom card-media-body-supporting-bottom-reveal"><a href="#/" class="card-media-body-supporting-bottom-text card-media-link u-float-right">VIEW TUTOR</a></div></div></div></div></div></div>';
echo '<script>var id = 0; $(document).ready(function() {$("'.$divid.'").on("click", function() {if(5 == 5){id = '.$lst[$encryption].';document.getElementById("popup_this").style.opacity="1";document.getElementById("popup_this").style.zIndex=10005;$.ajax({url: "",type: "POST",data: {id: id},cache: false,success: function(dataResult){var dataResult = JSON.parse(dataResult);if(dataResult.statusCode==200){}}});}});})</script>';
echo '<script>$(document).ready(function() {$("#savedate").on("click", function() {if(5 == 5){var date1 = $("#dateInput").val();var date= new Date(date1);date = new Date(date.getTime());date1 = date.toISOString().slice(0,16);var stay = $("#stay").val();var travel = $("travel").val();var notes = $("#notes").val();var date2 = $("#dateInput1").val();var date= new Date(date2);date = new Date(date.getTime());date2 = date.toISOString().slice(0,16);  $.ajax({url: "savedate.php",type: "POST",data: {id: id,stay:stay,travel:travel, date1:date1,date2:date2,notes:notes},cache: false,success: function(dataResult){var dataResult = JSON.parse(dataResult);if(dataResult.statusCode==200){window.location.replace("display.php?success");}else if(dataResult.statusCode==201){document.getElementById("dateformat").style.opacity="1";}}});}});})</script>';
$count ++;
} else {
    
}
}
}
?>

<script>function changeZIndex9() {
        document.getElementById("popup_this9").style.opacity="0";        
        document.getElementById("popup_this9").style.zIndex=-1;
}</script>

<script>if (document.URL.includes("?success")){
                                document.getElementById("popup_this9").style.opacity="1";        
                            document.getElementById("popup_this9").style.zIndex=10005;
};</script>
