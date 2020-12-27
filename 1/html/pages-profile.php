<?php
session_start();
use MrShan0\PHPFirestore\FirestoreClient;
require 'vendor/autoload.php';
if (!isset($_SESSION['loggedin']) && !isset($_SESSION['userData1']) && !isset($_SESSION['userData'])) {
	header('Location: https://www.fibonia.com/fib.php');
	exit();
}

if (isset($_SESSION['userData']) || isset($_SESSION['userData1'])){
    header('Location:https://www.fibonia.com/1/html/pages-profile1.php');
}




$username = $_SESSION['id'];

$loc = "https://www.fibonia.com/1/html/";

$email = $_SESSION['id'];

$firestoreClient =  new FirestoreClient('fibonia-83e34','AIzaSyDCl5yDLEEmgH3Sn-qH-rb8PVT0dLQFAWU', ['database' => '(default)',]);
$collections = $firestoreClient->listDocuments('users', ['pageSize' => 1000000]);
$counter = 0;
try{
while ($collections["documents"][$counter]->get('email') != NULL){
if ($collections["documents"][$counter]->get('email') == $_SESSION['id']){
    $imgpic = $collections["documents"][$counter]->get('img');
    $firstname = $collections["documents"][$counter]->get('firstName');
    $lastname = $collections["documents"][$counter]->get('lastName');
    break;
}else{
}
$counter += 1;
}
}catch (\Throwable $t){
}

$c = $firstname." ".$lastname;
$num = rand(1,2);
if ($num == 1){
    $q = $q1;
    $a = $a1;
} else if ($num == 2){
    $q = $q2;
    $a = $a2;
}
$qfin = $q;
switch ($q) {
    case 1:
        $q = "What was your childhood nickname?";
        break;
    case 2:
        $q = "What is the name of your favorite childhood friend?";
        break;
    case 3:
        $q = "In what city or town did your mother and father meet?";
        break;
    case 4:
        $q = "What is your favorite sports team?";
        break;
    case 5:
        $q = "What is your favorite movie?";
        break;
    case 6:
        $q = "What was your favorite sport in high school?";
        break;
    case 7:
        $q = "What was your favorite food as a child?";
        break;
    case 8:
        $q = "What was the make and model of your first car?";
        break;
    case 9:
        $q = "What was the name of the hospital where you were born?";
        break;
    case 10:
        $q = "Who is your childhood sports hero?";
        break;
    case 11:
        $q = "What school did you attend for sixth grade?";
        break;
};


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


$email = $_SESSION['id'];





$id = NULL;
$uniqid = NULL;

$firestoreClient =  new FirestoreClient('fibonia-83e34','AIzaSyDCl5yDLEEmgH3Sn-qH-rb8PVT0dLQFAWU', ['database' => '(default)',]);
$collections = $firestoreClient->listDocuments('users', ['pageSize' => 1000000]);
$counter = 0;
try{
while ($collections["documents"][$counter]->get('email') != NULL){
if ($collections["documents"][$counter]->get('email') == $_SESSION['id']){
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
    $tutormsg = '<a href="https://www.work.fibonia.com/Facebook/authentication1.php?code='.$_SESSION["id"].'"><button type="button" class="btn btn-success">Go to Tutor View</button></a>';
}
}else{

if ($id == NULL){
    $tutormsg = '<button onclick="becometutor1();" type="button" class="btn btn-success">Become a Tutor</button>';
}else{
    $tutormsg = '<button onclick="tutorview()" type="button" class="btn btn-success">Go to Tutor View</button>';
}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="logo.png">
    <title>Profile | Fibonia</title>
    <!-- Custom CSS -->
    <link href="dist/css/style.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="skin-default-dark fixed-layout">
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



</style>
<script>
function becometutor() {
document.getElementById("overlay-back").style.zIndex=9998;	
document.getElementById("overlay-back").style.opacity="0.6";	
document.getElementById("popup_this901").style.opacity="1";
document.getElementById("popup_this901").style.zIndex=9999;
}

function becometutor1() {
document.getElementById("overlay-back").style.zIndex=9998;	
document.getElementById("overlay-back").style.opacity="0.6";	
document.getElementById("popup_this902").style.opacity="1";
document.getElementById("popup_this902").style.zIndex=9999;
}


</script>
	<iframe class="hid hid1" src="upload.html" scrolling="no" allowTransparency="true" style="position:absolute;right:-40%;width:100%;height:310%;top:30%;background-color: rgba(0,0,0,0);" frameBorder="0"></iframe>	
<div id="overlay-back"></div>

<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bPopup/0.11.0/jquery.bpopup.min.js"></script>
<div class="popup popup--icon -success js_success-popup popup--visible" id = "popup_this901">
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










<div style="z-index:-1;opacity:0;" class="popup popup--icon -success js_success-popup popup--visible" id = "popup_this902">
  <div class="popup__background"></div>
  <div class="popup__content">
    <input type="hidden" value="<?php echo $c; ?>" id="FullName1">
    <p>Great! But first, we need a bit more information</p>
    <input type="email" placeholder="Your Berkeley Email" name="email" id="email1" autocomplete="off" required><br></br>
    <input type="email" placeholder="Your Graduation Year" name="gradyear" id="GradYear1" autocomplete="off" required><br></br>

      <select class="security" name = "lang1" id="lang11" Placeholder="Preffered Language (Optional)">
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
      <select class="security" name = "level" id="level1" Placeholder="Level of Education" required>
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

</script>
  <p style="color:red;font-size:100%;" id="errormsg11"></p>
    <p>
      <button type="button" id="butsave21" class="button b-close button--success" data-for="js_success-popup"><span>SUBMIT</span></button>
    </p>
  </div>
</div>
















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
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img id="imglink" src="<?php echo $imgpic; ?>" alt="user" class="img-circle" width="30"></a>
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
                        <li> <a class="waves-effect waves-dark" href="pages-profile.php" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Dashboard</span></a></li>
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
                                                    <script>	
                        function changeZIndex() {
        document.getElementById("popup_this191").style.opacity="0";        
        document.getElementById("popup_this191").style.zIndex=-1;
}

                        function changeZIndex192() {
        document.getElementById("popup_this192").style.opacity="0";        
        document.getElementById("popup_this192").style.zIndex=-1;
}
                        function popit(){	
                            	var c = document.getElementsByClassName("hid1");	
                                for (var i=0; i<c.length; i++) {	
                                c[i].style.zIndex = 10001;	
                                c[i].style.opacity = "1";	
                                document.getElementById("overlay-back").style.zIndex=9998;	
                                document.getElementById("overlay-back").style.opacity="0.6";	
                        }	
                        }	
                    </script>
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            <div class="card-body">
                                <center class="m-t-30"> <img src="<?php echo $imgpic; ?>" class="img-circle" width="150" />
                                    <h4 class="card-title m-t-10"><?php echo $firstname." ".$lastname;  ?></h4>
                                    <h6 class="card-subtitle">User of Fibonia</h6>
          <button type="button"  onclick="popit();" name = "submit" class = "btn btn-success">Update Profile Picture</button>
                                </center>
                            </div>
                        </div>
                    </div>
                                        <style>
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
.hid1{	
    z-index:-1;	
    opacity:0;	
    transition:0.4s;	
}	
</style>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <!-- Tab panes -->
                            <div class="card-body">
                                <form method="post" class="form-horizontal form-material">
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">Email</label>
                                        <div class="col-md-12">
                                            <input type="hidden" value="<?php echo $email; ?>" id = "normalemail">
                                            <input id="email" type="email" placeholder='<?php echo $email ?>' class="form-control form-control-line" name="example-email" id="example-email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">First Name</label>
                                        <div class="col-md-12">
                                            <input id="firstname" type="email" placeholder='<?php echo $firstname ?>' class="form-control form-control-line" name="example-email123" id="example-email123">
                                            <button type="button" id="butsave307" class="btn btn-success">Update First Name</button>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">Last Name</label>
                                        <div class="col-md-12">
                                            <input id="lastname" type="email" placeholder='<?php echo $lastname ?>' class="form-control form-control-line" name="example-email1234" id="example-email1234">
                                            <button type="button" id="butsave308" class="btn btn-success">Update Last Name</button>
                                        </div>
                                    </div>
        <?php if ($tutormsg != ""){
                                        echo '
                                    <div class="form-group">
                                        <label class="col-md-12">Tutor</label>
                                        <div class="col-md-12">
                                            '.$tutormsg.'                                        </div><p></p>
                                            <p style="color:red" id="tutorview"></p>
                                    </div>';} ?>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
<link href="message3.css" rel="stylesheet" id="bootstrap-css">
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bPopup/0.11.0/jquery.bpopup.min.js"></script>

<div class="popup popup--icon -error js_error-popup popup--visible" id = "popup_this">
  <div class="popup__background"></div>
  <div class="popup__content">
    <h3 class="popup__content__title">
      Error!
    </h3>
    <p>The username/answer you have entered is invalid!</p>
    <p>
      <button onclick="changeZIndex4();" class="button b-close button--error" data-for="js_error-popup"><span>CLOSE</span></button>
    </p>
  </div>
</div>

<div class="popup popup--icon -error js_error-popup popup--visible" id = "popup_this12">
  <div class="popup__background"></div>
  <div class="popup__content">
    <h3 class="popup__content__title">
      Error!
    </h3>
    <p>The email/answer you have entered is invalid!</p>
    <p>
      <button onclick="changeZIndex7();" class="button b-close button--error" data-for="js_error-popup"><span>CLOSE</span></button>
    </p>
  </div>
</div>

<div class="popup popup--icon -error js_error-popup popup--visible" id = "popup_this2">
  <div class="popup__background"></div>
  <div class="popup__content">
    <h3 class="popup__content__title">
      Error!
    </h3>
    <p>The language already exists in your profile!</p>
    <p>
      <button onclick="changeZIndex6();" class="button b-close button--error" data-for="js_error-popup"><span>CLOSE</span></button>
    </p>
  </div>
</div>



<div class="popup popup--icon -success js_success-popup popup--visible" id = "popup_this10">
  <div class="popup__background"></div>
  <div class="popup__content">
    <form method="post">
    <p><?php echo $q; ?></p>
    <input type="text" id="emailanswer" class="form-control" placeholder="Search &amp; enter" required>
    <p>
      <button type="button" id="butsave6" class="button b-close button--success" data-for="js_success-popup"><span>SUBMIT</span></button>
    </p>
    </form>
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


<div style="z-index:-1; opacity:0;" class="popup popup--icon -success js_success-popup popup--visible" id = "popup_this192">
  <div class="popup__background"></div>
  <div class="popup__content">
    <h3 class="popup__content__title">
      Successful Request!
    </h3>
    <p>Please verify your email before you sign in!</p>
    <p>
      <button style="right:42%;" onclick= "changeZIndex192();" class="button b-close button--success" data-for="js_success-popup"><span>CLOSE</span></button>
    </p>
  </div>
</div>

<script>
    $( document ).ready(function() {
    $('#popup_this').bPopup();
});

function changeZIndex4() {
        document.getElementById("popup_this").style.opacity="0";        
        document.getElementById("popup_this").style.zIndex=-1;
}

function changeZIndex7() {
        document.getElementById("popup_this12").style.opacity="0";        
        document.getElementById("popup_this12").style.zIndex=-1;
}
function changeZIndex6() {
        document.getElementById("popup_this2").style.opacity="0";        
        document.getElementById("popup_this2").style.zIndex=-1;
}

</script>
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
    <script src="https://www.gstatic.com/firebasejs/7.14.6/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.14.6/firebase-analytics.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.14.6/firebase-firestore.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.14.6/firebase-auth.js"></script>

<script>
if (document.URL.includes("?tutorsuccess")){
                        document.getElementById("popup_this191").style.opacity="1";        
                        document.getElementById("popup_this191").style.zIndex=10005;
};

if (document.URL.includes("?tutorsuc1")){
                        document.getElementById("popup_this192").style.opacity="1";        
                        document.getElementById("popup_this192").style.zIndex=10005;
};

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
  
function tutorview(){
firebase.auth().signInWithEmailAndPassword("<?php echo $id; ?>", "<?php echo $_SESSION["password"]; ?>").then(function(){
        if (firebase.auth().currentUser.emailVerified){
            var str1 = "https://www.work.fibonia.com/Facebook/authentication1.php?code="
            var str2 = "<?php echo $id?>"
            var str = str1.concat(str2)
            window.location.replace(str);
        }else{
document.getElementById("tutorview").textContent="Please verify your email!";   
        }
    
});
}
$(document).ready(function() {
	$('#butsave1').on('click', function() {
		var username = $('#username').val();
					$.ajax({
				url: "save1.php",
				type: "POST",
				data: {
					username: username
				},
				cache: false,
				success: function(dataResult){
					var dataResult = JSON.parse(dataResult);
					if(username != "" && username.length > 4 && dataResult.statusCode==200){
					       document.getElementById("popup_this9").style.opacity="1";        
                             document.getElementById("popup_this9").style.zIndex=10005;	
					} else{
                             document.getElementById("popup_this").style.opacity="1";        
                             document.getElementById("popup_this").style.zIndex=10005;	
					}
					
				}
			});
	});
	
	$("#firstname").keyup(function(event) {
    if (event.keyCode === 13) {
        $("#butsave307").click();
    }
});

$("#lastname").keyup(function(event) {
    if (event.keyCode === 13) {
        $("#butsave308").click();
    }
});
	
		$('#butsave3').on('click', function() {
		var lang1 = $('#lang1').val();
					$.ajax({
				url: "save2.php",
				type: "POST",
				data: {
					lang1: lang1
				},
				cache: false,
				success: function(dataResult){
					var dataResult = JSON.parse(dataResult);
					if(lang1 != <?php echo json_encode($l1fin); ?>  && dataResult.statusCode==200 && lang1 != <?php echo json_encode($l2fin); ?> && lang1 != 0){
					       window.location.replace("pages-profile.php?success");
					} else{
                             document.getElementById("popup_this2").style.opacity="1";        
                             document.getElementById("popup_this2").style.zIndex=10005;	
					}
				}
			});
	});
	

	$('#butsave5').on('click', function() {
		var email = $('#email').val();
					$.ajax({
				url: "save4.php",
				type: "POST",
				data: {
					email: email
				},
				cache: false,
				success: function(dataResult){
					var dataResult = JSON.parse(dataResult);
					var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
					if(re.test(String(email).toLowerCase()) && dataResult.statusCode==200){
					       document.getElementById('butsave6').click();	
					} else{
                             document.getElementById("popup_this12").style.opacity="1";        
                             document.getElementById("popup_this12").style.zIndex=10005;	
					}
					
				}
			});
	});
	
	$('#butsave307').on('click', function() {
	    var db = firebase.firestore();
	    var firstname = $('#firstname').val();
db.collection("users").doc("<?php echo $_SESSION["id"]; ?>").update({
  "firstName": firstname})
  window.location.replace("pages-profile.php?success");
})
	$('#butsave308').on('click', function() {
	    var db = firebase.firestore(); 
	    var lastname = $('#lastname').val();
	    db.collection("users").doc("<?php echo $_SESSION["id"]; ?>").update({
  "lastName": lastname})
  window.location.replace("pages-profile.php?success");
})


	
		$('#butsave6').on('click', function() {
		var emailanswer = $('#emailanswer').val();
		var email = $('#email').val();
					$.ajax({
				url: "save5.php",
				type: "POST",
				data: {
					emailanswer: emailanswer,
					email: email
				},
				cache: false,
				success: function(dataResult){
					var dataResult = JSON.parse(dataResult);
					if(emailanswer == <?php echo json_encode($a); ?> && dataResult.statusCode==200){
function newemail(oldemail,newemail,password){ 
var db = firebase.firestore(); 
firebase.auth().signInWithEmailAndPassword(oldemail, password).then(function(userCredential) {
        userCredential.user.updateEmail(newemail)
    })

var docRef = db.collection("users").doc(oldemail);
docRef.get().then(function(doc) {
    if (doc.exists) {
        var address = doc.get("address");
        var appointments = doc.get("appointments");
        var calEmail = doc.get("calEmail");
        var city = doc.get("city");
        var email = doc.get("email");
        var firstName = doc.get("firstName");
        var lastName = doc.get("lastName");
        var state = doc.get("state");
        var subjects = doc.get("subjects");
        var tutor = doc.get("tutor");
        var uid = doc.get("uid");
        var zip = doc.get("zip");
db.collection("users").doc(newemail).set({
         address: address,
         appointments:appointments,
         calEmail: calEmail,
         city: city,
         email: newemail,
         firstName: firstName,
         lastName: lastName,
         state: state,
         subjects: subjects,
         tutor: tutor,
         uid: uid,
         zip: zip
     });
db.collection("users").doc(oldemail).delete();
    }

    
});
};
					    newemail(dataResult.oldemail,dataResult.newemail,dataResult.password);
					    window.location.replace("pages-profile.php?success");
					} else{
					        document.getElementById("popup_this12").style.opacity="1";        
                             document.getElementById("popup_this12").style.zIndex=10005;

					}
					
				}
			});
	});
	
	$('#butsave2').on('click', function() {
		var gradyear = Number($('#GradYear').val());
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
      window.location.replace("pages-profile.php?tutorsuccess");   
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
					}else if (dataResult.statusCode == 205){
					    document.getElementById("errormsg11").textContent="";
					    document.getElementById("errormsg11").textContent="Please choose your Level of Education";
					}
				}
			});
	});
	
	
	$('#butsave21').on('click', function() {
		var gradyear = Number($('#GradYear1').val());
		var lang1 = $('#lang11').val();
		var level = $('#level1').val();
		var pair = $('#email1').val();
		var FullName = $('#FullName').val();
		var imglink = document.getElementById("imglink").src;
					$.ajax({
				url: "becometutor1.php",
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

firebase.auth().createUserWithEmailAndPassword(pair, "<?php echo $_SESSION['password']; ?>").catch(function(error) {}).then(function(userData){
uid = userData.user.uid;
var correct = true;
userData.user.sendEmailVerification();
var db = firebase.firestore();
var correct = true;
db.collection("users").doc("<?php echo $_SESSION['id']; ?>").update({calEmail: pair});
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
      window.location.replace("pages-profile.php?tutorsuc1");   
     });
					})} else if (dataResult.statusCode==201){
					    document.getElementById("errormsg11").textContent="";
					    document.getElementById("errormsg11").textContent="Please enter your Berkeley email!";
					}else if (dataResult.statusCode == 202){
					    document.getElementById("errormsg11").textContent="";
					    document.getElementById("errormsg11").textContent="The email that you have entered is already in use!";
					}else if (dataResult.statusCode == 203){
					    document.getElementById("errormsg11").textContent="";
					    document.getElementById("errormsg11").textContent="Please use a valid email";
					} else if (dataResult.statusCode == 204){
					    document.getElementById("errormsg11").textContent="";
					    document.getElementById("errormsg11").textContent="Your graduation year should be between 1970-2035!";
					}else if (dataResult.statusCode == 205){
					    document.getElementById("errormsg11").textContent="";
					    document.getElementById("errormsg11").textContent="Please choose your Level of Education";
					}
				}
			});
	});
	
});
</script>
</html>