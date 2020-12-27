<?php 
session_start();
if (!isset($_SESSION['loggedin']) && !isset($_SESSION['userData']) && !isset($_SESSION['userData1']) && !isset($_SESSION['guestlog'])) {
	header('Location: https://www.fibonia.com/fib.php');
	exit();
}
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'abelo999_abelo';
$DATABASE_PASS = 'Mamagan9';
$DATABASE_NAME = 'abelo999_phplogin';

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());
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

function findid(){
if (isset($_SESSION['loggedin'])) {
    return $_SESSION['id'];
} elseif (isset($_SESSION['userData'])) {
    $DATABASE_HOST = 'localhost';
$DATABASE_USER = 'abelo999_abelo';
$DATABASE_PASS = 'Mamagan9';
$DATABASE_NAME = 'abelo999_phplogin';

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());
}
    $stmt = $con->prepare('SELECT oauthid FROM usersdata WHERE email_id = ?');
    $stmt->bind_param('s', $_SESSION['userData']['email_id']);
    $stmt->execute();
    $stmt->bind_result($googleid);
    $stmt->fetch();
    $stmt->close();
    return $googleid;
} elseif (isset($_SESSION['guestlog'])) {
    return $_SESSION['guestuname'];
}else {
    $DATABASE_HOST = 'localhost';
$DATABASE_USER = 'abelo999_abelo';
$DATABASE_PASS = 'Mamagan9';
$DATABASE_NAME = 'abelo999_phplogin';

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());
}
    $stmt = $con->prepare('SELECT oauthid FROM usersdata1 WHERE email_id = ?');
    $stmt->bind_param('s', $_SESSION['userData1']['email_id']);
    $stmt->execute();
    $stmt->bind_result($fbid);
    $stmt->fetch();
    $stmt->close();
    return $fbid;
}
}
$peoplecount = 3;
function picture(){
if (isset($_SESSION['loggedin'])) {
    return 'img.png';
} elseif (isset($_SESSION['userData'])) {
    $DATABASE_HOST = 'localhost';
$DATABASE_USER = 'abelo999_abelo';
$DATABASE_PASS = 'Mamagan9';
$DATABASE_NAME = 'abelo999_phplogin';

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());
}
    $stmt = $con->prepare('SELECT picture FROM usersdata WHERE email_id = ?');
    $stmt->bind_param('s', $_SESSION['userData']['email_id']);
    $stmt->execute();
    $stmt->bind_result($googleimg);
    $stmt->fetch();
    $stmt->close();
    return $googleimg;
} elseif (isset($_SESSION['guestlog'])) {
    return 'img.png';
}else {
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'abelo999_abelo';
$DATABASE_PASS = 'Mamagan9';
$DATABASE_NAME = 'abelo999_phplogin';

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());
}
    $stmt = $con->prepare('SELECT picture FROM usersdata1 WHERE email_id = ?');
    $stmt->bind_param('s', $_SESSION['userData1']['email_id']);
    $stmt->execute();
    $stmt->bind_result($fbimg);
    $stmt->fetch();
    $stmt->close();
    return $fbimg;
} 
}


if (isset($_SESSION['loggedin'])) {
    $fname = $_SESSION['name'];
    $lname = '';
} elseif (isset($_SESSION['userData'])) {
    $DATABASE_HOST = 'localhost';
$DATABASE_USER = 'abelo999_abelo';
$DATABASE_PASS = 'Mamagan9';
$DATABASE_NAME = 'abelo999_phplogin';

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());
}
    $stmt = $con->prepare('SELECT f_name,l_name FROM usersdata WHERE email_id = ?');
    $stmt->bind_param('s', $_SESSION['userData']['email_id']);
    $stmt->execute();
    $stmt->bind_result($fname,$lname);
    $stmt->fetch();
    $stmt->close();
} elseif (isset($_SESSION['guestlog'])) {
    $fname = $_SESSION['guestuname'];
    $lname = '';
}else {
    $DATABASE_HOST = 'localhost';
$DATABASE_USER = 'abelo999_abelo';
$DATABASE_PASS = 'Mamagan9';
$DATABASE_NAME = 'abelo999_phplogin';

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());
}
    $stmt = $con->prepare('SELECT f_name,l_name FROM usersdata1 WHERE email_id = ?');
    $stmt->bind_param('s', $_SESSION['userData1']['email_id']);
    $stmt->execute();
    $stmt->bind_result($fname,$lname);
    $stmt->fetch();
    $stmt->close();
} 

$c = $fname." ".$lname; 
if ($peoplecount == 2){

function messagepicture(){
if (isset($_SESSION['loggedin'])) {
    return 'img.png';
} elseif (isset($_SESSION['userData'])) {
    $DATABASE_HOST = 'localhost';
$DATABASE_USER = 'abelo999_abelo';
$DATABASE_PASS = 'Mamagan9';
$DATABASE_NAME = 'abelo999_phplogin';

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());
}
    $stmt = $con->prepare('SELECT picture FROM usersdata WHERE oauthid = ?');
    $stmt->bind_param('s', $id2);
    $stmt->execute();
    $stmt->bind_result($googleimg);
    $stmt->fetch();
    $stmt->close();
    return $googleimg;
} elseif (isset($_SESSION['guestlog'])) {
    return 'img.png';
}else {
    $DATABASE_HOST = 'localhost';
$DATABASE_USER = 'abelo999_abelo';
$DATABASE_PASS = 'Mamagan9';
$DATABASE_NAME = 'abelo999_phplogin';

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());
}
    $stmt = $con->prepare('SELECT picture FROM usersdata1 WHERE oauthid = ?');
    $stmt->bind_param('s', $id2);
    $stmt->execute();
    $stmt->bind_result($fbimg);
    $stmt->fetch();
    $stmt->close();
    return $fbimg;
}
}

if (findid() == "1482691695235802"){
    $stmt = $con->prepare('SELECT id2,type2 FROM friends WHERE id1 = ?');
    $stmt->bind_param('s', findid());
    $stmt->execute();
    $stmt->bind_result($id2,$type);
    $stmt->fetch();
    $stmt->close();
} else if (findid() == "110830529648869097048"){
    $stmt = $con->prepare('SELECT id1,type1 FROM friends WHERE id2 = ?');
    $stmt->bind_param('s', findid());
    $stmt->execute();
    $stmt->bind_result($id2,$type);
    $stmt->fetch();
    $stmt->close();
}


if (isset($_SESSION['loggedin'])) {
    $stmt = $con->prepare('SELECT username FROM accounts WHERE id = ?');
    $stmt->bind_param('s', $id2);
    $stmt->execute();
    $stmt->bind_result($loginid);
    $stmt->fetch();
    $stmt->close();
    $usersval = $loginid;
} elseif ($type == "googlelogin") {
    $stmt = $con->prepare('SELECT email_id FROM usersdata WHERE oauthid = ?');
    $id2 = $id2;
    $stmt->bind_param('s', $id2);
    $stmt->execute();
    $stmt->bind_result($googleid);
    $stmt->fetch();
    $stmt->close();
    $usersval = $googleid;
} elseif (isset($_SESSION['guestlog'])) {
    $usersval = $_SESSION['guestuname'];
}else {
    $stmt = $con->prepare('SELECT email_id FROM usersdata1 WHERE oauthid = ?');
    $id2 = $id2;
    $stmt->bind_param('s', $id2);
    $stmt->execute();
    $stmt->bind_result($fbid);
    $stmt->fetch();
    $stmt->close();
    $usersval = $fbid;
}}else{

if (findid() == "2610063112362735"){
    $stmt = $con->prepare('SELECT id2,type2,id3,type3 FROM friends1 WHERE id1 = ?');
    $stmt->bind_param('s', findid());
    $stmt->execute();
    $stmt->bind_result($id2,$type2,$id3,$type3);
    $stmt->fetch();
    $stmt->close();
} else if(findid() == "1484025891752066"){
    $stmt = $con->prepare('SELECT id1,type1,id3,type3 FROM friends1 WHERE id2 = ?');
    $stmt->bind_param('s', findid());
    $stmt->execute();
    $stmt->bind_result($id2,$type2,$id3,$type3);
    $stmt->fetch();
    $stmt->close();
}else{
    $stmt = $con->prepare('SELECT id1,type1,id2,type2 FROM friends1 WHERE id3 = ?');
    $stmt->bind_param('s', findid());
    $stmt->execute();
    $stmt->bind_result($id2,$type2,$id3,$type3);
    $stmt->fetch();
    $stmt->close();
}


if ($type2 == "login") {
    $stmt = $con->prepare('SELECT username FROM accounts WHERE id = ?');
    $stmt->bind_param('s', $id2);
    $stmt->execute();
    $stmt->bind_result($loginid1);
    $stmt->fetch();
    $stmt->close();
    $usersval = $loginid1;
} elseif ($type2 == "googlelogin") {
    $stmt = $con->prepare('SELECT email_id FROM usersdata WHERE oauthid = ?');
    $id2 = $id2;
    $stmt->bind_param('s', $id2);
    $stmt->execute();
    $stmt->bind_result($googleid1);
    $stmt->fetch();
    $stmt->close();
    $usersval = $googleid1;
} elseif (isset($_SESSION['guestlog'])) {
    $usersval = $_SESSION['guestuname'];
}elseif ($type2 == "fblogin") {
    $stmt = $con->prepare('SELECT email_id FROM usersdata1 WHERE oauthid = ?');
    $id2 = $id2;
    $stmt->bind_param('s', $id2);
    $stmt->execute();
    $stmt->bind_result($fbid1);
    $stmt->fetch();
    $stmt->close();
    $usersval = $fbid1;
}

if ($type3 == "login") {
    $stmt = $con->prepare('SELECT username FROM accounts WHERE id = ?');
    $stmt->bind_param('s', $id3);
    $stmt->execute();
    $stmt->bind_result($loginid2);
    $stmt->fetch();
    $stmt->close();
    $usersval1 = $loginid2;
} elseif ($type3 == "googlelogin") {
    $stmt = $con->prepare('SELECT email_id FROM usersdata WHERE oauthid = ?');
    $id3 = $id3;
    $stmt->bind_param('s', $id3);
    $stmt->execute();
    $stmt->bind_result($googleid2);
    $stmt->fetch();
    $stmt->close();
    $usersval1 = $googleid2;
} elseif (isset($_SESSION['guestlog'])) {
    $usersval1 = $_SESSION['guestuname'];
}elseif ($type3 == "fblogin") {
    $stmt = $con->prepare('SELECT email_id FROM usersdata1 WHERE oauthid = ?');
    $id3 = $id3;
    $stmt->bind_param('s', $id3);
    $stmt->execute();
    $stmt->bind_result($fbid2);
    $stmt->fetch();
    $stmt->close();
    $usersval1 = $fbid2;
}}

?>


<!-- minified snippet to load TalkJS without delaying your page -->
<script>
(function(t,a,l,k,j,s){
s=a.createElement('script');s.async=1;s.src="https://cdn.talkjs.com/talk.js";a.head.appendChild(s)
;k=t.Promise;t.Talk={v:3,ready:{then:function(f){if(k)return new k(function(r,e){l.push([f,r,e])});l
.push([f])},catch:function(){return k&&new k()},c:l}};})(window,document,[]);
</script>









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
.NoticeBar {opacity:0;}

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
                    <a class="navbar-brand" href="pages-https://www.fibonia.com/1/html/pages-profile.php">
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
                        <li> <a class="waves-effect waves-dark" href="chat.php" aria-expanded="false"><i class="fa fa-user-circle-o"></i><span class="hide-menu">Messages</span></a></li>
                        <li> <a class="waves-effect waves-dark" href="map-google.php" aria-expanded="false"><i class="fa fa-globe"></i><span class="hide-menu"></span>Map</a></li>
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
                        <h4 class="text-themecolor">Messages</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Messages</li>
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
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->

            <div id="talkjs-container" style="width: 90%; margin: 30px; height: 70%">
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        </div>
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








<!-- container element in which TalkJS will display a chat UI -->


<!-- TalkJS initialization code, which we'll customize in the next steps -->







<script>
var x = 1;
if (x==2){
    
}else{
Talk.ready.then(function() {
var me = new Talk.User(
    <?php echo json_encode(array(
        "id" => findid(),
        "name" => username(),
        "email" => username()
    )); ?>
);
    window.talkSession = new Talk.Session({
        appId: "tiSkPmO8",
        me: me
    });

var other1 = new Talk.User(
    <?php echo json_encode(array(
        "id" => $id2,
        "name" => $usersval,
        "email" => $usersval
    )); ?>
);

var other2 = new Talk.User(
    <?php echo json_encode(array(
        "id" => $id3,
        "name" => $usersval1,
        "email" => $usersval1
    )); ?>
);
    var conversation = window.talkSession.getOrCreateConversation("123456");
    conversation.setParticipant(me);
    conversation.setParticipant(other1);
    conversation.setParticipant(other2);
    conversation.setAttributes({
        photoUrl: "https://www.incimages.com/uploaded_files/image/970x450/getty_883231284_200013331818843182490_335833.jpg",
        subject: "Online Tutoring System"
    })

    var chatbox = talkSession.createChatbox(conversation);
    chatbox.mount(document.getElementById("talkjs-container"));
});}
</script>
