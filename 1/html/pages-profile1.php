<?php
use MrShan0\PHPFirestore\FirestoreClient;
require 'vendor/autoload.php';
session_start();

if (!isset($_SESSION['loggedin']) && !isset($_SESSION['userData1']) && !isset($_SESSION['userData'])) {
	header('Location: https://www.fibonia.com/fib.php');
	exit();
}

if (isset($_SESSION['guestlog']) || isset($_SESSION['loggedin'])){
    header('Location:https://www.fibonia.com/1/html/pages-profile.php');
}



if (isset($_SESSION['userData'])){

$firestoreClient =  new FirestoreClient('fibonia-83e34','AIzaSyDCl5yDLEEmgH3Sn-qH-rb8PVT0dLQFAWU', ['database' => '(default)',]);
$collections = $firestoreClient->listDocuments('users', ['pageSize' => 1000000]);
$counter = 0;
try{
while ($collections["documents"][$counter]->get('email') != NULL){
if ($collections["documents"][$counter]->get('email') == $_SESSION['userData']['email_id']){
    $fname = $collections["documents"][$counter]->get('firstName');
    $lname = $collections["documents"][$counter]->get('lastName');
    $apt = $collections["documents"][$counter]->get('transactionHistory');
    $aptcount = count($apt);
    $c = $fname." ".$lname;
    break;
}else{
}
$counter += 1;
}
}catch (\Throwable $t){
}

} elseif (isset($_SESSION['userData1'])){
$firestoreClient =  new FirestoreClient('fibonia-83e34','AIzaSyDCl5yDLEEmgH3Sn-qH-rb8PVT0dLQFAWU', ['database' => '(default)',]);
$collections = $firestoreClient->listDocuments('users', ['pageSize' => 1000000]);
$counter = 0;
try{
while ($collections["documents"][$counter]->get('email') != NULL){
if ($collections["documents"][$counter]->get('email') == $_SESSION['userData1']['email_id']){
    $fname = $collections["documents"][$counter]->get('firstName');
    $lname = $collections["documents"][$counter]->get('lastName');
    $c = $fname." ".$lname;
    $apt = $collections["documents"][$counter]->get('transactionHistory');
    $aptcount = count($apt);
    break;
}else{
}
$counter += 1;
}
}catch (\Throwable $t){
}
}


function username() {
    if (isset($_SESSION['loggedin'])) {
    return $_SESSION['name'];
} elseif (isset($_SESSION['userData'])) {
    return $_SESSION['userData']['email_id'];
} elseif (isset($_SESSION['guestlog'])) {
    return $_SESSION['guestuname'];
}else {
    return $_SESSION['userData1']['email_id'];
}
}

if (isset($_SESSION['userData'])) {
    $email = $_SESSION['userData']['email_id'];
} elseif (isset($_SESSION['userData1'])) {
    $email = $_SESSION['userData1']['email_id'];
}elseif (isset($_SESSION['loggedin'])){
    $email = "Yes";
}else{
    $email = "Yes123";
}

function picture(){
if (isset($_SESSION['loggedin'])) {
    return 'img.png';
} elseif (isset($_SESSION['userData'])) {


$firestoreClient =  new FirestoreClient('fibonia-83e34','AIzaSyDCl5yDLEEmgH3Sn-qH-rb8PVT0dLQFAWU', ['database' => '(default)',]);
$collections = $firestoreClient->listDocuments('users', ['pageSize' => 1000000]);
$counter = 0;
try{
while ($collections["documents"][$counter]->get('email') != NULL){
if ($collections["documents"][$counter]->get('email') == $_SESSION['userData']['email_id']){
    $googleimg = $collections["documents"][$counter]->get('img');
    break;
}else{
}
$counter += 1;
}
}catch (\Throwable $t){
}
    return $googleimg;
} elseif (isset($_SESSION['guestlog'])) {
    return 'img.png';
}else {

$firestoreClient =  new FirestoreClient('fibonia-83e34','AIzaSyDCl5yDLEEmgH3Sn-qH-rb8PVT0dLQFAWU', ['database' => '(default)',]);
$collections = $firestoreClient->listDocuments('users', ['pageSize' => 1000000]);
$counter = 0;
try{
while ($collections["documents"][$counter]->get('email') != NULL){
if ($collections["documents"][$counter]->get('email') == $_SESSION['userData1']['email_id']){
    $fbimg = $collections["documents"][$counter]->get('img');
    break;
}else{
}
$counter += 1;
}
}catch (\Throwable $t){
}
    return $fbimg;
} 
}



if (isset($_SESSION['userData'])) {

$id = NULL;
$uniqid = NULL;

$firestoreClient =  new FirestoreClient('fibonia-83e34','AIzaSyDCl5yDLEEmgH3Sn-qH-rb8PVT0dLQFAWU', ['database' => '(default)',]);
$collections = $firestoreClient->listDocuments('users', ['pageSize' => 1000000]);
$counter = 0;
try{
while ($collections["documents"][$counter]->get('email') != NULL){
if ($collections["documents"][$counter]->get('email') == $_SESSION['userData']['email_id']){
    $id = $collections["documents"][$counter]->get('calEmail');
    $uniqid = $collections["documents"][$counter]->get('uid');
    break;
}else{
}
$counter += 1;
}
}catch (\Throwable $t){
}

if (strpos($email,"@berkeley.edu") !== false){
if ($id == NULL){
    $tutormsg = '<button onclick="becometutor();" type="button" class="btn btn-success">Become a Tutor (Only for Berkeley Students)</button>';
}else{
    $tutormsg = '<a href="https://www.work.fibonia.com/Facebook/authentication1.php?code='.$email.'"><button type="button" class="btn btn-success">Go to Tutor View</button></a>';
}}
    
}else{
$id = NULL;
$uniqid = NULL;

$firestoreClient =  new FirestoreClient('fibonia-83e34','AIzaSyDCl5yDLEEmgH3Sn-qH-rb8PVT0dLQFAWU', ['database' => '(default)',]);
$collections = $firestoreClient->listDocuments('users', ['pageSize' => 1000000]);
$counter = 0;
try{
while ($collections["documents"][$counter]->get('email') != NULL){
if ($collections["documents"][$counter]->get('email') == $_SESSION['userData1']['email_id']){
    $id = $collections["documents"][$counter]->get('calEmail');
    $uniqid = $collections["documents"][$counter]->get('uid');
    break;
}else{
}
$counter += 1;
}
}catch (\Throwable $t){
}

if (strpos($email,"@berkeley.edu") !== false){
if ($id == NULL){
    $tutormsg = '<button onclick="becometutor();" type="button" class="btn btn-success">Become a Tutor</button>';
}else{
    $tutormsg = '<a href="https://www.work.fibonia.com/Facebook/authentication1.php?code='.$email.'"><button type="button" class="btn btn-success">Go to Tutor View</button></a>';
}

}
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link href="message3.css" rel="stylesheet" id="bootstrap-css">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <meta name="author" content="">


<script src="https://www.gstatic.com/firebasejs/7.14.6/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.14.6/firebase-analytics.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.14.6/firebase-firestore.js"></script>
<script>
$(document).ready(function() {
	$('#butsave2').on('click', function() {
		var gradyear = $('#GradYear').val();
		var lang1 = $('#lang1').val();
		var level = $('#level').val();
		var pair = $('#normalemail').val();
		var FullName = $('#FullName').val();
		var imglink = document.getElementById("imglink").src;
					$.ajax({
				url: "becometutor.php",
				type: "POST",
				data: {
					gradyear:gradyear,
					lang1:lang1,
					level:level,
					imglink:imglink,
					pair:pair,
					FullName:FullName
				},
				cache: false,
				success: function(dataResult){
					var dataResult = JSON.parse(dataResult);
					if(dataResult.statusCode==200){
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
var correct = true;
db.collection("users").doc(pair).update({calEmail: pair});
var lst = []
if (lang1 ==""){
    lst = ["English"]
} else{
    lst = ["English",lang1]
}
db.collection("tutors").doc(pair).set({
         educationLevel:level,
         appointments:[],
         calEmail: pair,
         classes:[],
         zoom:"",
         subjects:[],
         setPrefs:false,
         preferences:{"languages":lst},
         img:imglink,
         transcript_date:"",
         gradyear:gradyear,
         firstlogin:false,
         prefTime:{},
         transcript_file:"",
         newsletter:false,
         uniqid:dataResult.uniqid,
         rating:0,
         experience:0,
         name:FullName,
         bio:"",
         transactionHistory:[],
         stripe_id:"",
         venmo_id:"",
         venmo_balance:0
     }).then(function(data){
      window.location.replace("pages-profile1.php?tutorsuccess");   
     });
					} else if (dataResult.statusCode==201){
					    document.getElementById("errormsg").textContent="";
					    document.getElementById("errormsg").textContent="Please enter your Berkeley email!";
					}else if (dataResult.statusCode == 202){
					    document.getElementById("errormsg").textContent="";
					    document.getElementById("errormsg").textContent="The email that you have entered is already in use!";
					}else if (dataResult.statusCode == 203){
					    document.getElementById("errormsg").textContent="";
					    document.getElementById("errormsg").textContent="Please use a valid email";
					} else if (dataResult.statusCode == 204){
					    document.getElementById("errormsg").textContent="";
					    document.getElementById("errormsg").textContent="Your graduation year should be between 1970-2035!";
					}
				}
			});
	});});
</script>




    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="logo.png">
    <title>Profile | Fibonia</title>
    <!-- Custom CSS -->
    <link href="dist/css/style.css" rel="stylesheet">
    <script>
function becometutor() {
document.getElementById("overlay-back").style.zIndex=9998;	
document.getElementById("overlay-back").style.opacity="0.6";	
document.getElementById("popup_this9").style.opacity="1";
document.getElementById("popup_this9").style.zIndex=9999;
}
</script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="skin-default-dark fixed-layout">
<div id="overlay-back"></div>

<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bPopup/0.11.0/jquery.bpopup.min.js"></script>
<div class="popup popup--icon -success js_success-popup popup--visible" id = "popup_this9">
  <div class="popup__background"></div>
  <div class="popup__content">
    <input type="hidden" value="<?php echo $c; ?>" id="FullName">
    <p>Great! But first, we need a bit more information</p>
    <input type="email" placeholder="Your Graduation Year" name="email" id="GradYear" autocomplete="off" required><br></br>

      <select class="security" name = "lang1" id="lang1" Placeholder="Preffered Language (Optional)">
        <option value="" disabled selected>Preferred Language (Optional)</option>
        <option value="Mandarin Chinese">Mandarin Chinese</option>
        <option value="Hindustani">Hindustani</option>
        <option value="Spanish">Spanish</option>
        <option value="Arabic">Arabic</option>
        <option value="Malay">Malay</option>   
        <option value="Russian">Russian</option>
        <option value="Bengali">Bengali</option>
        <option value="Portuguese">Portuguese</option>
        <option value="French">French</option>
     </select><br></br>
      <select class="security" name = "level" id="level" Placeholder="Level of Education" required>
        <option value="" disabled selected>Level of Education</option>
        <option value="Freshman">Freshman</option>
        <option value="Sophomore">Sophomore</option>
        <option value="Junior">Junior</option>
        <option value="Senior">Senior</option>
        <option value="Master's">Master's</option>
        <option value="PhD">PhD</option>
        <option value="Professor/Assistant Professor">Professor/Assistant Professor</option>
     </select><br></br>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<script>
var main = function(){
  $("#lang1").change(function(){
    var a = $('#lang1 option:selected').val();
    $("#lang2 option[value="+a+"]").hide().siblings().show();
  });
}
var main1 = function(){
  $("#question1").change(function(){
    var a = $('#question1 option:selected').val();
    $("#question2 option[value="+a+"]").hide().siblings().show();
  });
}
var main2 = function(){
  $("#lang2").change(function(){
    var a = $('#lang2 option:selected').val();
    $("#lang1 option[value="+a+"]").hide().siblings().show();
  });
}
var main3 = function(){
  $("#question2").change(function(){
    var a = $('#question2 option:selected').val();
    $("#question1 option[value="+a+"]").hide().siblings().show();
  });
}
$(document).ready(main);
$(document).ready(main1);
$(document).ready(main2);
$(document).ready(main3);
</script>
  <p style="color:red;font-size:100%;" id="errormsg"></p>
    <p>
      <button type="button" id="butsave2" class="button b-close button--success" data-for="js_success-popup"><span>SUBMIT</span></button>
    </p>
  </div>
</div>

<div class="popup popup--icon -success js_success-popup popup--visible" id = "popup_this191">
  <div class="popup__background"></div>
  <div class="popup__content">
    <h3 class="popup__content__title">
      Successful Request!
    </h3>
    <p>Your Tutor Account has been successfully set!</p>
    <p>
      <button style="right:42%;" onclick= "changeZIndex();" class="button b-close button--success" data-for="js_success-popup"><span>CLOSE</span></button>
    </p>
  </div>
</div>
<script>function changeZIndex() {
        document.getElementById("popup_this191").style.opacity="0";        
        document.getElementById("popup_this191").style.zIndex=-1;
}</script>
<script>if (document.URL.includes("?tutorsuccess")){
                        document.getElementById("popup_this191").style.opacity="1";        
                        document.getElementById("popup_this191").style.zIndex=10005;
};</script>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

	<script>
  $(window).load(function() {
    $('#bookload').fadeOut(2000);
  }); 
	</script>	
<style>
.book {
    --color: #fff;
    --duration: 6.8s;
    width: 32px;
    height: 12px;
    top:-5%;
    right:-7.5%;
    position: relative;
    margin: 32px 0 0 0;
    zoom: 1.5;
}

.book .inner {
    width: 32px;
    height: 12px;
    position: relative;
    transform-origin: 2px 2px;
    transform: rotateZ(-90deg);
    animation: book var(--duration) ease infinite;
}

.book .inner .left,
.book .inner .right {
    width: 60px;
    height: 4px;
    top: 0;
    border-radius: 2px;
    background: var(--color);
    position: absolute;
}

.book .inner .left:before,
.book .inner .right:before {
    content: '';
    width: 48px;
    height: 4px;
    border-radius: 2px;
    background: inherit;
    position: absolute;
    top: -10px;
    left: 6px;
}

.book .inner .left {
    right: 28px;
    transform-origin: 58px 2px;
    transform: rotateZ(90deg);
    animation: left var(--duration) ease infinite;
}

.book .inner .right {
    left: 28px;
    transform-origin: 2px 2px;
    transform: rotateZ(-90deg);
    animation: right var(--duration) ease infinite;
}

.book .inner .middle {
    width: 32px;
    height: 12px;
    border: 4px solid var(--color);
    border-top: 0;
    border-radius: 0 0 9px 9px;
    transform: translateY(2px);
}

.book ul {
    margin: 0;
    padding: 0;
    list-style: none;
    position: absolute;
    left: 50%;
    top: 0;
}

.book ul li {
    height: 4px;
    border-radius: 2px;
    transform-origin: 100% 2px;
    width: 48px;
    right: 0;
    top: -10px;
    position: absolute;
    background: var(--color);
    transform: rotateZ(0deg) translateX(-18px);
    animation-duration: var(--duration);
    animation-timing-function: ease;
    animation-iteration-count: infinite;
}

.book ul li:nth-child(0) {
    animation-name: page-0;
}

.book ul li:nth-child(1) {
    animation-name: page-1;
}

.book ul li:nth-child(2) {
    animation-name: page-2;
}

.book ul li:nth-child(3) {
    animation-name: page-3;
}

.book ul li:nth-child(4) {
    animation-name: page-4;
}

.book ul li:nth-child(5) {
    animation-name: page-5;
}

.book ul li:nth-child(6) {
    animation-name: page-6;
}

.book ul li:nth-child(7) {
    animation-name: page-7;
}

.book ul li:nth-child(8) {
    animation-name: page-8;
}

.book ul li:nth-child(9) {
    animation-name: page-9;
}

.book ul li:nth-child(10) {
    animation-name: page-10;
}

.book ul li:nth-child(11) {
    animation-name: page-11;
}

.book ul li:nth-child(12) {
    animation-name: page-12;
}

.book ul li:nth-child(13) {
    animation-name: page-13;
}

.book ul li:nth-child(14) {
    animation-name: page-14;
}

.book ul li:nth-child(15) {
    animation-name: page-15;
}

.book ul li:nth-child(16) {
    animation-name: page-16;
}

.book ul li:nth-child(17) {
    animation-name: page-17;
}

.book ul li:nth-child(18) {
    animation-name: page-18;
}

@keyframes page-0 {
    4% {
        transform: rotateZ(0deg) translateX(-18px);
    }
    13%,
    54% {
        transform: rotateZ(180deg) translateX(-18px);
    }
    63% {
        transform: rotateZ(0deg) translateX(-18px);
    }
}

@keyframes page-1 {
    5.86% {
        transform: rotateZ(0deg) translateX(-18px);
    }
    14.74%,
    55.86% {
        transform: rotateZ(180deg) translateX(-18px);
    }
    64.74% {
        transform: rotateZ(0deg) translateX(-18px);
    }
}

@keyframes page-2 {
    7.72% {
        transform: rotateZ(0deg) translateX(-18px);
    }
    16.48%,
    57.72% {
        transform: rotateZ(180deg) translateX(-18px);
    }
    66.48% {
        transform: rotateZ(0deg) translateX(-18px);
    }
}

@keyframes page-3 {
    9.58% {
        transform: rotateZ(0deg) translateX(-18px);
    }
    18.22%,
    59.58% {
        transform: rotateZ(180deg) translateX(-18px);
    }
    68.22% {
        transform: rotateZ(0deg) translateX(-18px);
    }
}

@keyframes page-4 {
    11.44% {
        transform: rotateZ(0deg) translateX(-18px);
    }
    19.96%,
    61.44% {
        transform: rotateZ(180deg) translateX(-18px);
    }
    69.96% {
        transform: rotateZ(0deg) translateX(-18px);
    }
}

@keyframes page-5 {
    13.3% {
        transform: rotateZ(0deg) translateX(-18px);
    }
    21.7%,
    63.3% {
        transform: rotateZ(180deg) translateX(-18px);
    }
    71.7% {
        transform: rotateZ(0deg) translateX(-18px);
    }
}

@keyframes page-6 {
    15.16% {
        transform: rotateZ(0deg) translateX(-18px);
    }
    23.44%,
    65.16% {
        transform: rotateZ(180deg) translateX(-18px);
    }
    73.44% {
        transform: rotateZ(0deg) translateX(-18px);
    }
}

@keyframes page-7 {
    17.02% {
        transform: rotateZ(0deg) translateX(-18px);
    }
    25.18%,
    67.02% {
        transform: rotateZ(180deg) translateX(-18px);
    }
    75.18% {
        transform: rotateZ(0deg) translateX(-18px);
    }
}

@keyframes page-8 {
    18.88% {
        transform: rotateZ(0deg) translateX(-18px);
    }
    26.92%,
    68.88% {
        transform: rotateZ(180deg) translateX(-18px);
    }
    76.92% {
        transform: rotateZ(0deg) translateX(-18px);
    }
}

@keyframes page-9 {
    20.74% {
        transform: rotateZ(0deg) translateX(-18px);
    }
    28.66%,
    70.74% {
        transform: rotateZ(180deg) translateX(-18px);
    }
    78.66% {
        transform: rotateZ(0deg) translateX(-18px);
    }
}

@keyframes page-10 {
    22.6% {
        transform: rotateZ(0deg) translateX(-18px);
    }
    30.4%,
    72.6% {
        transform: rotateZ(180deg) translateX(-18px);
    }
    80.4% {
        transform: rotateZ(0deg) translateX(-18px);
    }
}

@keyframes page-11 {
    24.46% {
        transform: rotateZ(0deg) translateX(-18px);
    }
    32.14%,
    74.46% {
        transform: rotateZ(180deg) translateX(-18px);
    }
    82.14% {
        transform: rotateZ(0deg) translateX(-18px);
    }
}

@keyframes page-12 {
    26.32% {
        transform: rotateZ(0deg) translateX(-18px);
    }
    33.88%,
    76.32% {
        transform: rotateZ(180deg) translateX(-18px);
    }
    83.88% {
        transform: rotateZ(0deg) translateX(-18px);
    }
}

@keyframes page-13 {
    28.18% {
        transform: rotateZ(0deg) translateX(-18px);
    }
    35.62%,
    78.18% {
        transform: rotateZ(180deg) translateX(-18px);
    }
    85.62% {
        transform: rotateZ(0deg) translateX(-18px);
    }
}

@keyframes page-14 {
    30.04% {
        transform: rotateZ(0deg) translateX(-18px);
    }
    37.36%,
    80.04% {
        transform: rotateZ(180deg) translateX(-18px);
    }
    87.36% {
        transform: rotateZ(0deg) translateX(-18px);
    }
}

@keyframes page-15 {
    31.9% {
        transform: rotateZ(0deg) translateX(-18px);
    }
    39.1%,
    81.9% {
        transform: rotateZ(180deg) translateX(-18px);
    }
    89.1% {
        transform: rotateZ(0deg) translateX(-18px);
    }
}

@keyframes page-16 {
    33.76% {
        transform: rotateZ(0deg) translateX(-18px);
    }
    40.84%,
    83.76% {
        transform: rotateZ(180deg) translateX(-18px);
    }
    90.84% {
        transform: rotateZ(0deg) translateX(-18px);
    }
}

@keyframes page-17 {
    35.62% {
        transform: rotateZ(0deg) translateX(-18px);
    }
    42.58%,
    85.62% {
        transform: rotateZ(180deg) translateX(-18px);
    }
    92.58% {
        transform: rotateZ(0deg) translateX(-18px);
    }
}

@keyframes page-18 {
    37.48% {
        transform: rotateZ(0deg) translateX(-18px);
    }
    44.32%,
    87.48% {
        transform: rotateZ(180deg) translateX(-18px);
    }
    94.32% {
        transform: rotateZ(0deg) translateX(-18px);
    }
}

@keyframes left {
    4% {
        transform: rotateZ(90deg);
    }
    10%,
    40% {
        transform: rotateZ(0deg);
    }
    46%,
    54% {
        transform: rotateZ(90deg);
    }
    60%,
    90% {
        transform: rotateZ(0deg);
    }
    96% {
        transform: rotateZ(90deg);
    }
}

@keyframes right {
    4% {
        transform: rotateZ(-90deg);
    }
    10%,
    40% {
        transform: rotateZ(0deg);
    }
    46%,
    54% {
        transform: rotateZ(-90deg);
    }
    60%,
    90% {
        transform: rotateZ(0deg);
    }
    96% {
        transform: rotateZ(-90deg);
    }
}

@keyframes book {
    4% {
        transform: rotateZ(-90deg);
    }
    10%,
    40% {
        transform: rotateZ(0deg);
        transform-origin: 2px 2px;
    }
    40.01%,
    59.99% {
        transform-origin: 30px 2px;
    }
    46%,
    54% {
        transform: rotateZ(90deg);
    }
    60%,
    90% {
        transform: rotateZ(0deg);
        transform-origin: 2px 2px;
    }
    96% {
        transform: rotateZ(-90deg);
    }
}

html {
    box-sizing: border-box;
    -webkit-font-smoothing: antialiased;
    overflow-y:hidden;
    overflow-x:hidden;
}

* {
    box-sizing: inherit;
}

*:before, *:after {
    box-sizing: inherit;
}

.bod {
    position:absolute;
    z-index:1000000000000;
    bottom:-10%;
    left:-10%;
    width:110%;
    height:110%;
    display: flex;
    justify-content: center;
    align-items: center;
    background: #275EFE;
}
#overlay-back { 	
    position   : absolute; 	
    top        : 0; 	
    left       : 0; 	
    width      : 100%; 	
    height     : 100%; 	
    background : #000; 	
    opacity    : 0; 	
    filter     : alpha(opacity=60); 	
    z-index    : -1;	
    transition:0.4s;	
}


</style>

<div class="bod" id="bookload">
<div class="book">
    <div class="inner">
        <div class="left"></div>
        <div class="middle"></div>
        <div class="right"></div>
    </div>
    <ul>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
</div></div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="pages-profile.php">
                        <!-- Logo icon --><b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="../assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                            <!-- Light Logo icon -->
                            <img src="../assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text --><span>
                         <!-- dark Logo text -->
                         <img src="../assets/images/logo-text.png" alt="homepage" class="dark-logo" />
                         <!-- Light Logo text -->    
                         <img src="../assets/images/logo-light-text.png" class="light-logo" alt="homepage" /></span> </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto">
                        <!-- This is  -->
                        <li class="nav-item hidden-sm-up"> <a class="nav-link nav-toggler waves-effect waves-light" href="javascript:void(0)"><i class="ti-menu"></i></a></li>
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item search-box"> <a class="nav-link waves-effect waves-dark" href="javascript:void(0)"><i class="fa fa-search"></i></a>
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Search &amp; enter"> <a class="srh-btn"><i class="fa fa-times"></i></a>
                            </form>
                        </li>
                    </ul>
                    <ul class="navbar-nav my-lg-0">
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?php echo picture(); ?>" alt="user" class="img-circle" width="30"></a>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <div class="d-flex no-block nav-text-box align-items-center">
                <span><img src="../assets/images/logo-icon.png" alt="elegant admin template"></span>
                <a class="waves-effect waves-dark ml-auto hidden-sm-down" href="javascript:void(0)"><i class="ti-menu"></i></a>
                <a class="nav-toggler waves-effect waves-dark ml-auto hidden-sm-up" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
            </div>
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li> <a class="waves-effect waves-dark" href="pages-https://www.fibonia.com/1/html/pages-profile.php" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Dashboard</span></a></li>
                        <li> <a class="waves-effect waves-dark" href="classes.php" aria-expanded="false"><i class="fa fa-book"></i><span class="hide-menu">Classes</span></a></li>
                        <li> <a class="waves-effect waves-dark" href="chat.php" aria-expanded="false"><i class="fa fa-user-circle-o"></i><span class="hide-menu">Messages</span></a></li>
                        <div class="text-center m-t-30">
                            <a href="https://www.fibonia.com/home.php" class="btn waves-effect waves-light btn-success hidden-md-down">Go Back</a>
                        </div>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Profile</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Profile</li>
                            </ol>

                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            <div class="card-body">
                                <center class="m-t-30"> <img id="imglink" src="<?php echo picture(); ?>" class="img-circle" width="150" />
                                    <h4 class="card-title m-t-10"><?php echo " $c \n";  ?></h4>
                                    <h6 class="card-subtitle">User of Fibonia</h6>
                                    <div class="row text-center justify-content-md-center">
                                    </div>
                                </center>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <!-- Tab panes -->
                            <div class="card-body">
                                <form class="form-horizontal form-material">
                                    <div class="form-group">
                                        <label class="col-md-12">Full Name</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="<?php echo " $c \n";  ?>" class="form-control form-control-line">
                                            
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">Email</label>
                                        <div class="col-md-12">
                                            <input type="hidden" value="<?php echo $email; ?>" id = "normalemail">
                                            <input type="email" placeholder='<?php echo $email ?>' class="form-control form-control-line" name="example-email" id="example-email">
                                            
                                        </div>
                                    </div>
        <?php if ($tutormsg != ""){
                                        echo '
                                    <div class="form-group">
                                        <label class="col-md-12">Tutor</label>
                                        <div class="col-md-12">
                                            '.$tutormsg.'                                        </div>
                                    </div>';} ?>

                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer">
            ©2020 by Fibonia
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/node_modules/jquery/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/node_modules/popper/popper.min.js"></script>
    <script src="../assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="dist/js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="dist/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="../assets/node_modules/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="../assets/node_modules/sparkline/jquery.sparkline.min.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.min.js"></script>

</body>

</html>