<?php
session_start();

if (isset($_SESSION['loggedin']) || isset($_SESSION['userData1']) || isset($_SESSION['userData'])) {
	header('Location: home.php');
	exit();
}
?>
<!DOCTYPE html>
<html style="scroll-behavior:smooth;">

    <head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <link rel="icon" type="image/png" href="logo.png">
        <style>

        .loginhelp{
    z-index:10001;
    position:absolute;
    right:0%;
    width:100%;
    height:400%;
    top:-880px;
    background-color: rgba(0,0,0,0);
}

    @media screen and (max-height: 600px){
        #picsection{
            z-index:100 !important;
            top:-27% !important;
        }
        .loginhelp{
            top:-1050px;
        }
    }
        #overlay-back1 { 
    position   : absolute; 
    top        : 0; 
    left       : 0; 
    width      : 100%; 
    height     : 100%; 
    background : #000; 
    opacity    : 0.6; 
    filter     : alpha(opacity=60); 
    z-index    : 0;
} 
        </style>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>




function login() {
location.href = "#home";
    document.getElementById("overlay-back1").style.zIndex=9998;  
    
}

var x = false;

function move(){
  document.getElementById("iframe1").style.zIndex=10000;  
  document.getElementById("iframe1").style.opacity="1";  
  var c = document.getElementsByClassName("loginhelp");
  if (x == false){
     for (var i=0; i<c.length; i++) {
        c[i].style.animation = "moveup1 1s 1 normal forwards";
        x = true;
  } }else {
     for (var i=0; i<c.length; i++) {
        c[i].style.animation = "moveup2 1s 1 normal forwards";
        x = false;
  }
}
}







function login1() {
    document.getElementById("overlay-back1").style.zIndex=-1;  
}

var x = false;

function move1(){
  var c = document.getElementsByClassName("loginhelp");
  if (x == false){
     for (var i=0; i<c.length; i++) {
        c[i].style.animation = "moveup3 1s 1 normal forwards";
        x = true;
  } }else {
     for (var i=0; i<c.length; i++) {
        c[i].style.animation = "moveup4 1s 1 normal forwards";
        x = false;
  }
}

  document.getElementById("iframe1").style.zIndex=-1;  
  document.getElementById("iframe1").style.opacity="0";
}
</script>
        <link rel="icon" type="image/png" href="logo.png">
        <meta name="description" content="Welcome to Fibonia, An easy one-stop destination for local services in California, providing a marketplace for freelance labor.">
    </head>
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
textarea:focus, input:focus{
    outline: none;
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
<iframe class="loginhelp hid" style="z-index:-1;opacity:0;" src="loginhome.php" id="iframe1" scrolling="no" allowTransparency="true" frameBorder="0"></iframe>
<div id="overlay-back1"></div>
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
<title>Home | Fibonia</title>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript" src= "web.js"></script>
<script type="text/javascript" src= "redirect.js"></script>
<!DOCTYPE html><html class=''>
<head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<style>
.chat-pop-up {
  background: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/1195544/element_wave.svg) center 35% no-repeat, linear-gradient(#FBCE3B 36%, #FFFFFF 36%);
  background-size: contain;
  border-radius: 6px;
  bottom: 75px;
  box-shadow: 0 3px 6px 0 rgba(75, 74, 75, 0.2);
  opacity: 0;
  right: 55px;
  padding: 10px;
  position: fixed;
  transform: translatey(20px);
  transition: opacity 0.25s ease, transform 0.25s ease-out;
  width: 402px;
  z-index: 100;
}

.chat-pop-up--heading {
  display: flex;
  align-items: flex-start;
  justify-content: space-between;
}

.chat-pop-up--heading h3 {
  color: #274666;
  font-family: "Galano Grotesque Alt", "Open Sans", sans-serif;
  font-size: 40px;
  font-weight: 700;
  line-height: 44px;
  margin: 10px 0 0;
}

.chat-pop-up--heading h3 span {
  display: block;
}

.chat-pop-up--heading figure {
  margin: 0;
}

.chat-pop-up h4 {
  color: #4A4A4A;
  font-family: "Galano Grotesque Alt", "Open Sans", sans-serif;
  font-size: 16px;
  font-weight: 300;
  line-height: 26px;
  margin: 20px 0;
}

.chat-pop-up a {
  background: #FF6B17;
  border-radius: 6px;
  color: #FFFFFF;
  display: flex;
  align-items: center;
  justify-content: center;
  font-family: "Galano Grotesque Alt", "Open Sans", sans-serif;
  font-size: 24px;
  font-weight: 600;
  max-width: 225px;
  padding: 12px;
  text-decoration: none;
  transition: background 0.2s ease;
}

.chat-pop-up a:hover, 
a:active {
  background: #FF8D4E;
}

.chat-pop-up a span {
  margin-right: 8px;
}

.toggle-chat {
  background:  #FBCE3B;
  border-radius: 30px;
  border-style: none;
  box-shadow: 0 3px 6px 0 rgba(75, 74, 75, 0.2);
  cursor: pointer;
  display: flex;
  flex-direction: column-reverse;
  align-items: center;
  justify-content: center;
  position: fixed;
  height: 60px;
  bottom: 10px;
  right: 55px;
  padding: 10px;
  transition: width 0.3s ease-in-out, background 0.2s ease;
  outline: none;
  width: 180px;
  z-index: 9999;
}

.toggle-chat:hover, 
.toggle-chat:active {
  background: #FFD95D;
}

.toggle-chat.chat-is-open {
  flex-direction: column;
  width: 60px;
}

.open-chat {
   display: flex;
  align-items: center;
  justify-content: space-between;
  color: #274666;
  font-family: "Galano Grotesque Alt", "Open Sans", sans-serif;
  font-size: 20px;
  font-weight: 600;
  line-height: 27px;
  transition: opacity 0.2s 0.2s ease-out;
  width: 144px; 
}

.open-chat {
  position:absolute;
  top:0%;
  right: 5%;
}

.close-chat {
   display: flex;
  align-items: center;
  justify-content: space-between;
  color: #274666;
  font-family: "Galano Grotesque Alt", "Open Sans", sans-serif;
  font-size: 50px;
  font-weight: 600;
  line-height: 27px;
  opacity: 1;
  transition: opacity 0.2s 0.2s ease-out;
  width: 144px;  

}

.open-chat {
  margin-top: 2px;
}


.toggle-chat.chat-is-open .open-chat {
  transition: none;
  opacity: 0;
}

.toggle-chat .close-chat {
  margin-top: 2px;
  opacity: 0;
  transform: rotate(-90deg);
}

.toggle-chat.chat-is-open .close-chat {
  position:absolute;
  top:25%;
  right: -163%;
  opacity: 1;
  transform: rotate(0deg);
}

.chat-display-on {
  display: block !important;
}

.chat-visible {
  opacity: 1;
  transform: translatey(0);
}
</style>

</head>
<link rel="icon" type="image/png" href="logo.png"><body>

<link href="message3.css" rel="stylesheet" id="bootstrap-css">
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bPopup/0.11.0/jquery.bpopup.min.js"></script>
<script>
    $( document ).ready(function() {
    $('#popup_this').bPopup();
});
</script>
<div class="popup popup--icon -error js_error-popup popup--visible" id = "popup_this">
  <div class="popup__background"></div>
  <div class="popup__content">
    <h3 class="popup__content__title">
      Error!
    </h3>
    <p>Please Log-in/Register to become a Tutor!</p>
    <p>
      <button onclick="changeZIndex4();" class="button b-close button--error" data-for="js_error-popup"><span>CLOSE</span></button>
    </p>
  </div>
</div>
<link rel="icon" type="image/png" href="logo.png"><body>
<script>
function changeZIndex3() {
      if (document.getElementById("x1")) {
        document.getElementById("popup_this").style.opacity="1";        
        document.getElementById("popup_this").style.zIndex=10005;
}}
function changeZIndex4() {
      if (document.getElementById("x1")) {
        document.getElementById("popup_this").style.opacity="0";        
        document.getElementById("popup_this").style.zIndex=-1;
}}
</script>

<style>
.button1 {
    flex: 1 1 auto;
    border-radius:100px;
    margin: 3.2vh 13.8vh 0;
    padding: 20px;
    border: 2px solid #f7f7f7;
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
    content: '';
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
.button2 {
    flex: 1 1 auto;
    border-radius:100px;
    margin: 3.2vh 35vh 0;
    padding: 20px;
    border: 2px solid #f7f7f7;
    text-align: center;
    text-transform: uppercase;
    position: absolute;
    overflow: hidden;
    transition: .3s;
    z-index:10003;
}
.button2:after {
    position: absolute;
    transition: .3s;
    content: '';
    width: 0;
    left: 50%;
    bottom: 0;
    height: 3px;
    background: #f7f7f7;
}
.button2:nth-of-type(1):after {
    height: 120%;
    left: -10%;
    transform: skewX(15deg);
    z-index: -1;
}
.button2:hover {
    cursor: pointer;
}
.button2:hover:after {
    width: 100%;
    left: 0;
}
.button2:hover:nth-of-type(1) {
    color: #5bcaff;
}
.button2:hover:nth-of-type(1):after {
    left: -10%;
    width: 120%;
}
</style>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="colorlib.com">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500" rel="stylesheet" />
    <link href="colorlib-search-2/css/main.css" rel="stylesheet" />
<style>
  body{background:#ECF0F1}

.load{position:absolute;top:50%;left:50%;transform:translate(-50%, -50%);
  /*change these sizes to fit into your project*/
  width:100px;
  height:100px;
  z-index:10000;
}
.load hr{border:0;margin:0;width:40%;height:40%;position:absolute;border-radius:50%;animation:spin 2s ease infinite}

.load :first-child{background:#19A68C;animation-delay:-1.5s}
.load :nth-child(2){background:#F63D3A;animation-delay:-1s}
.load :nth-child(3){background:#FDA543;animation-delay:-0.5s}
.load :last-child{background:#193B48}

@keyframes spin{
  0%,100%{transform:translate(0)}
  25%{transform:translate(160%)}
  50%{transform:translate(160%, 160%)}
  75%{transform:translate(0, 160%)}
}
</style>
<style>
html, body {
  height: 100%;
  min-height: 18em;
}
.frontend-side {
  background-image: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/74452/website-code.png");
  animation: moveleft 3s 1 normal forwards;
}
@keyframes moveleft {
    from { transform: translateX(1000px); }
    to   { transform: translateX(0px); }
}
@keyframes movedown {
    from { transform: translateX(0px); }
    to   { transform: translateX(-1000px); }
}
@keyframes moveup {
    from { transform: translateX(0px); }
    to   { transform: translateX(1000px); }
}
@keyframes moveup1 {
    from { transform: translateY(0px); }
    to   { transform: translateY(1000px); }
}
@keyframes moveup2 {
    from { transform: translateY(-1000px); }
    to   { transform: translateY(0px); }
}

@keyframes moveup3 {
    from { transform: translateY(1000px); }
    to   { transform: translateY(0px); }
}
@keyframes moveup4 {
    from { transform: translateY(0px); }
    to   { transform: translateY(-1000px); }
}
.uiux-side {
  background-image: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/74452/website-post-its.png");
  animation: moveright 3s 1 normal forwards;
}
    @keyframes moveright {
       from { transform: translateX(-1000px); }
       to   { transform: translateX(0px); }
    
    }
.split-pane {
  padding-top: 1em;
  top:-119%;
  z-index:100000000;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center center;
  height: 90%;
  min-height: 9em;
  font-size: 2em;
  color: white;
  font-family: 'Open Sans', sans-serif;
	font-weight:300;
;
}
@media(min-width: 500px) {
  .split-pane {
    padding-top: 2em;
    height: 117%;
  }
}
.split-pane > div {
  position: relative;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
  text-align: center;
}
.split-pane > div .text-content {
  line-height: 1.6em;
  margin-bottom: 1em;
}
.split-pane > div .text-content .big {
  font-size: 2em;
}
.split-pane > div img {
  height: 1.3em;
}
@media (max-width: 500px) {
  .split-pane > div img {
    display:none;
  }
}
.split-pane button, .split-pane a.button {
  font-family: 'Open Sans', sans-serif;
	font-weight:800;
  background: none;
  border: 1px solid white;
  -moz-border-radius: 5px;
  -webkit-border-radius: 5px;
  border-radius: 5px;
  width: 15em;
  padding: 0.7em;
  font-size: 0.5em;
  -moz-transition: all 0.2s ease-out;
  -o-transition: all 0.2s ease-out;
  -webkit-transition: all 0.2s ease-out;
  transition: all 0.2s ease-out;
  text-decoration: none;
  color: white;
  display: inline-block;
	cursor: pointer;
}
.split-pane button:hover, .split-pane a.button:hover {
  text-decoration: none;
  background-color: white;
  border-color: white;
	cursor: pointer;
}
.uiux-side.split-pane button:hover, .split-pane a.button:hover {
  color: violet;
}
.frontend-side.split-pane button:hover, .split-pane a.button:hover {
  color: blue;
}
#split-pane-or {
  font-size: 2em;
  color: white;
  font-family: 'Open Sans', sans-serif;
  text-align: center;
  width: 100%;
  position: absolute;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}
@media (max-width: 925px) {
  #split-pane-or {
    top:15%;
  }
}
#split-pane-or > div img {
  height: 2.5em;
}
@media (max-width: 500px) {
  #split-pane-or {
    position: absolute;
    top: 50px;
  }
  #split-pane-or > div img {
    height:2em;
  }
}
@media(min-width: 500px) {
  #split-pane-or {
    font-size: 3em;
  }
}
.big {
  font-size: 2em;
}
#slogan {
  position: absolute;
  width: 100%;
  z-index: 100;
  text-align: center;
  vertical-align: baseline;
  top: 0.5em;
  color: white;
  font-family: 'Open Sans', sans-serif;
  font-size: 1.4em;
}
@media(min-width: 500px) {
  #slogan {
    top: 5%;
    font-size: 1.8em;
  }
}
#slogan img {
  height: 0.7em;
}
.bold {
	text-transform:uppercase;
}
.big {
	font-weight:800;
}
.border iframe {
    border: none;
    width: 300px;
    height: 100px;
    margin: 0;
    padding: 0;
    opacity: 0.8;
    display:block; /* Add this */
}

iframe {

    margin: none;
    padding: none;
    border: none;
    line-height: 0;
    float: left; 
}
    </style>
  </head>

<script src='//production-assets.codepen.io/assets/editor/live/console_runner-079c09a0e3b9ff743e39ee2d5637b9216b3545af0de366d4b9aad9dc87e26bfd.js'></script><script src='//production-assets.codepen.io/assets/editor/live/css_live_reload_init-2c0dc5167d60a5af3ee189d570b1835129687ea2a61bee3513dee3a50c115a77.js'></script><meta charset='UTF-8'><link rel="mask-icon" type="" href="//production-assets.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111" /><link rel="canonical" href="https://codepen.io/suez/pen/OjGQza?depth=everything&limit=all&order=popularity&page=59&q=icon&show_forks=false" />

<body>
  <link href='https://fonts.googleapis.com/css?family=Raleway:100,200,400,600' rel='stylesheet' type='text/css'>
  
  <link href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.7.4/jquery.fullPage.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">


<div class="nav-header">

  <div class="nav-brand">

    <a href="fib.php"><img style="border-radius:100%" src="https://i.imgur.com/SdOFtdE.png"></a>
   

    </div>

  <div class="waveWrapper waveAnimation">    
        
    <style>
.searchbody{
		width:100%;
		height:700px;
		box-sizing:border-box;
  z-index:100;
	}
.wrapper,.s12 {
  z-index:100;
	text-align: center;
	position: relative;
	height: 80px;
	font-size: 0;
	top: 50%;
	transform: translateY(-50%);
	width: 100px;
   margin-right: auto;
   margin-left: auto;
}

#wrapper{
	width: 100px;
   margin-right: auto;
   margin-left: auto;
}
</style>

    
    <div class="searchbody">

  <div class="wrapper">
 <div class="relative">
  <div class="absolute">


  </div>
</div> 
<div id="wrapper">
    <input class="search" type="hidden" id="search" />
		<input type="hidden" class="submit" style="font-size:18px;font-weight:bold;" value="Search" /></div></div>
    <link rel="stylesheet" href="webhost/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="webhost/css/animate.css">
    <link rel="stylesheet" href="webhost/css/owl.carousel.min.css">
    <link rel="stylesheet" href="webhost/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="webhost/css/magnific-popup.css">
    <link rel="stylesheet" href="webhost/css/aos.css">
    <link rel="stylesheet" href="webhost/css/ionicons.min.css">
    <link rel="stylesheet" href="webhost/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="webhost/css/jquery.timepicker.css">
    <link rel="stylesheet" href="webhost/css/flaticon.css">
    <link rel="stylesheet" href="webhost/css/icomoon.css">
    <link rel="stylesheet" href="webhost/css/style.css">
          <section id="picsection" style="z-index:1000;top:-5%;background-color:rgb(0,0,0,0)" class="home-slider owl-carousel">
      <div class="slider-item" >
        <div class="overlay"></div>
        <div class="container-fluid">
          <div class="row slider-text align-items-center" data-scrollax-parent="true">
            <div class="col-md-5 wrap col-sm-12 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
              <h1 class="mb-4 mt-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Fibonia makes finding and offering tutoring easy</h1>
              <p class="mb-4 mb-md-5 sub-p" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">With various features implemented into our website and app, students and tutor may easily pair up to collaborate over a course!</p>
              <p><a onclick="login(); move();" class="btn btn-primary p-3 px-xl-5 py-xl-3">Get started</a> <a onclick="login(); move();" class="btn btn-primary btn-primary-2 p-3 px-xl-5 py-xl-3">Login</a></p>
            </div>
            <div style="opacity:1;z-index:1001;" class="col-md-7 ftco-animate">
            	<img src="https://i.imgur.com/lDPf9Zi.png" class="img-fluid" alt="">
            </div>
          </div>
        </div>
      </div>
      <div class="slider-item" >
        <div class="overlay"></div>
        <div class="container-fluid">
          <div class="row slider-text align-items-center" data-scrollax-parent="true">
            <div class="col-md-5 wrap col-sm-12 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
              <h1 class="mb-4 mt-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Ready to become a tutor?</h1>
              <p class="mb-4 mb-md-5">If you would like to tutor other individuals and earn extra money, visit Fibonia's Work Page!</p>
              <p><a href="https://www.work.fibonia.com?login" class="btn btn-primary p-3 px-xl-5 py-xl-3">Get started</a> <a href="https://www.work.fibonia.com" class="btn btn-primary btn-primary-2 p-3 px-xl-5 py-xl-3">Visit</a></p>
            </div>
            <div style="opacity:1;z-index:1001;left:30%;" class="col-md-7 ftco-animate">
            	<img src="https://i.imgur.com/dxWgJX4.png" style="width:30%;height:30%;border-radius:10%;" class="img-fluid" alt="">
            </div>

          </div>
        </div>
      </div>
    </section>
</div>
  <script src="webhost/js/jquery.min.js"></script>
  <script src="webhost/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="webhost/js/popper.min.js"></script>
  <script src="webhost/js/bootstrap.min.js"></script>
  <script src="webhost/js/jquery.easing.1.3.js"></script>
  <script src="webhost/js/jquery.waypoints.min.js"></script>
  <script src="webhost/js/jquery.stellar.min.js"></script>
  <script src="webhost/js/owl.carousel.min.js"></script>
  <script src="webhost/js/jquery.magnific-popup.min.js"></script>
  <script src="webhost/js/aos.js"></script>
  <script src="webhost/js/jquery.animateNumber.min.js"></script>
  <script src="webhost/js/bootstrap-datepicker.js"></script>
  <script src="webhost/js/jquery.timepicker.min.js"></script>
  <script src="webhost/js/scrollax.min.js"></script>
  <script src="webhost/js/main.js"></script>

<style>

input {
	box-sizing: border-box;
	font-size: 13px;
	vertical-align: top;
}

.search {
	padding: 0 30px;
	font-size: 18px;
	width: 60%;
	max-width: 400px;
	height: 80px;
	border: 1px solid darken(white, 30%);
	border-radius: 20px 0 0 20px;
}

.submit {
	cursor: pointer;
	border: none;
	background: url('') no-repeat center center, white;
	background-size: 35px 35px;
	border-radius: 0 20px 20px 0;
	padding: 15px 25px;
	display: inline-block;
	width: 150px;
	height: 80px;
	transition:0.4s;
}

.submit:hover {
	background-color:royalblue;
	transition:0.4s;
}
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
var ph = "Search for a Class e.g. \"COMPSCI 61A\"",
	searchBar = $('#search'),
	phCount = 0;
function randDelay(min, max) {
	return Math.floor(Math.random() * (max-min+1)+min);
}

function printLetter(string, el) {
	var arr = string.split(''),
		input = el,
		origString = string,
		curPlace = $(input).attr("placeholder"),
		placeholder = curPlace + arr[phCount];
		
	setTimeout(function(){
		$(input).attr("placeholder", placeholder);
		phCount++;
		if (phCount < arr.length) {
			printLetter(origString, input);
		}
	}, randDelay(50, 90));
}  

function placeholder() {
	$(searchBar).attr("placeholder", "");
	printLetter(ph, searchBar);
}

placeholder();
$('.submit').click(function(e){
	phCount = 0;
	e.preventDefault();
	placeholder();
});
</script>
    
  <div class="waveWrapperInner bgTop">
    
    <div class="wave waveTop" style="background-image: url('https://front-end-noobs.com/jecko/img/wave-top.png')"></div>
  </div>
  <div class="waveWrapperInner bgMiddle">
    <div class="wave waveMiddle" style="background-image: url('https://front-end-noobs.com/jecko/img/wave-mid.png')"></div>
  </div>
  <div class="waveWrapperInner bgBottom">
    <div class="wave waveBottom" style="background-image: url('https://front-end-noobs.com/jecko/img/wave-bot.png')"></div>
  </div>
</div>
  
<style>
@keyframes move_wave {
    0% {
        transform: translateX(0) translateZ(0) scaleY(1)
    }
    50% {
        transform: translateX(-25%) translateZ(0) scaleY(0.55)
    }
    100% {
        transform: translateX(-50%) translateZ(0) scaleY(1)
    }
}
.waveWrapper {
    overflow: hidden;
    position: absolute;
    left: 0;
    right: 0;
    bottom: 0;
    top: 0;
    margin: auto;
}
.waveWrapperInner {
    position: absolute;
    width: 100%;
    overflow: hidden;
    height: 100%;
    bottom: -1px;
    background-image: linear-gradient(to top, royalblue 20%, #27273c 80%);
}
.bgTop {
    z-index: 15;
    opacity: 0.5;
}
.bgMiddle {
    z-index: 10;
    opacity: 0.75;
}
.bgBottom {
    z-index: 5;
}
.wave {
    position: absolute;
    left: 0;
    width: 200%;
    height: 100%;
    background-repeat: repeat no-repeat;
    background-position: 0 bottom;
    transform-origin: center bottom;
}
.waveTop {
    background-size: 50% 100px;
}
.waveAnimation .waveTop {
  animation: move-wave 3s;
   -webkit-animation: move-wave 3s;
   -webkit-animation-delay: 1s;
   animation-delay: 1s;
}
.waveMiddle {
    background-size: 50% 120px;
}
.waveAnimation .waveMiddle {
    animation: move_wave 10s linear infinite;
}
.waveBottom {
    background-size: 50% 100px;
}
.waveAnimation .waveBottom {
    animation: move_wave 15s linear infinite;
}
</style>


  <i class="fa fa-bars fa-3x"></i>
    <div class="header-links">
      
      <ul>
        <li data-menuanchor="eigthPage"><a href="terms.php">TERMS</a></li>
        <li data-menuanchor="seventhPage"><a href="privacy.php">PRIVACY</a></li>
        <li data-menuanchor="sixthPage"><a href="faq.php">FAQ</a></li>
        <li data-menuanchor="fifthPage"><a href="newsletter.php">NEWSLETTER</a></li>
        <li data-menuanchor="fourthPage"><a href="#contact">CONTACT</a></li>
        <li data-menuanchor="secondPage"><a href="#about">ABOUT</a></li>
        <li data-menuanchor="firstPage"><a style="cursor:pointer;" onclick="login(); move();" target="_self">LOGIN/REGISTER</a></li>
      </ul>
    </div>
  </div>
</div>
<!-- end navbar header -->

<!-- sidebar slider -->
<div class="nav-screen">
  
  <i class="fa fa-times fa-3x"></i>
  <div class="nav-container">
    <div class="nav-links">
      <ul id='myMenu'>
<li data-menuanchor="firstPage"><a style="cursor:pointer;" onclick="login(); move();" target="_self">LOGIN/REGISTER</a></li>
        <li data-menuanchor="secondPage"><a href="#about">ABOUT</a></li>
        <li data-menuanchor="fourthPage"><a href="#contact">CONTACT</a></li>
        <li data-menuanchor="fifthPage"><a href="newsletter.php">NEWSLETTER</a></li>
        <li data-menuanchor="sixthPage"><a href="faq.php">FAQ</a></li>
        <li data-menuanchor="seventhPage"><a href="privacy.php">PRIVACY</a></li>
        <li data-menuanchor="eightPage"><a href="terms.php">TERMS</a></li>
      </ul>
    </div>
  </div>
  
</div>
<!-- end navbar slider -->
<!-- begin fullpage -->

<div id="fullpage">

  <!-- begin section -->
  
  <div class="section aboutme" data-anchor="aboutme">
    <div style="z-index:100;" class="opaque-bg animated fadeInDown">
      <h1 style="color:white;">BRAD<span style="color:royalblue">/</span>ENGELHARDT</h1>
      
      <p><span id="holder"></span><span class="blinking-cursor">|</span></p>
    </div>
      <i style="z-index:10000000;"  id="moveDown" class="fa fa-chevron-down fa-3x bounce"></i>
  </div>
  <!-- end section -->

  <!-- begin section -->

  <div class="section" data-anchor="skills">
    <div class="content">
      <h1 class="wow fadeInDown" data-wow-delay="0.2s">ABOUT US</h1>
      <p class="wow fadeInDown" data-wow-delay="0.2s">Fibonia is the first-of-its-kind platform that connects college students looking for that extra help in their courses, to their peers who’ve taken those exact courses and are willing to help their peers do well in that exam, turn in that project, or simply answer any questions that office hours and discussions couldn’t answer!<br></br> 

Given the rigour and complexity that college courses operate, especially here at Cal, we believe that the best people to answer student questions would be other students themselves, and so we’ve created the first-ever tutoring platform that allows students to learn at the level of complexity and specificity to their coursework that they need to succeed.<br></br>

Fibonia was founded in August 2020 by UC Berkeley juniors Abel Yagubyan and Gurkaran Goindi and is based out of Berkeley, CA. Feel free to shoot us an email at info@fibonia.com for any inquiries, questions, concerns, or if you just want to talk!<br></br>

Happy learning!</p>
<div style="display:flex;">
<div style="margin-right:25%;margin-left:10%;" class="raspberry">
<img style="width:190%;border-radius:100%;" src="https://berkeley.learningu.org/media/uploaded/bio_pictures/19_02/photo.PNG">
<p style="cursor:default;margin-left:10%;width:164%;">&nbsp;&nbsp;Abel Yagubyan</p>
  </div><p style="display:inline;cursor:default;"></p>
<div class="raspberry1">
<img style="width:40%;border-radius:100%;" src="https://i.imgur.com/S4095b6.jpg">
<p >Gurkaran Goindi</p>
</div>
      </div>
    </div>
  </div>
  <!-- end section -->
  <!-- begin section -->
  <!-- end section -->
  <!-- begin section -->
  <div class="section" data-anchor="contact">
    <div class="content wow fadeInDown" data-wow-delay="0.2s">
      <h1>CONTACT ME</h1>
        <p>If you have any questions or issues, please type in your message and credentials below.</p>
        <br>
      <div class="contact-form">
        <div id="form-messages"></div>
        <form id="ajax-contact" method="post" role="form" action="contactus2.php" data-toggle="validator">
          <div class="form-group has-feedback wow fadeInLeft" data-wow-delay="0.6s" >
            <input type="text" class="form-control" id="name" name="name" placeholder="NAME" data-error="Field can't be blank!" required>
            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
            <div class="help-block with-errors"></div>
          </div>
          <div class="form-group has-feedback wow fadeInRight" data-wow-delay="0.8s" >
            <input type="email" class="form-control" id="email" name="email" placeholder="EMAIL" data-error="Field can't be blank!" required>
            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
            <div class="help-block with-errors"></div>
          </div>
          <div class="form-group has-feedback wow fadeInLeft" data-wow-delay="1s">
            <textarea data-minlength="10" class="form-control" id ="message" name="message" placeholder="MESSAGE" data-error="Minimum of 10 characters" required></textarea>
            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
            <div class="help-block with-errors"></div>
          </div>
          <div class="hidden">
            <input type="text" class="form-control" id="human" name="human" placeholder="">
          </div>
          <div class="wow fadeInUp" data-wow-delay="1s">
            <button type="submit" id="submit" name="submit" class="btn btn-lg">SEND MESSAGE</button>
          </div>
        </form> 
      <br>
      </div>
  </div>
 </div>
 <!-- end section -->
  <!-- begin section -->
  <div class="section fp-auto-height">
    <div class="footer">
      <p>CONNECT WITH ME</p>
      <div class="social-links">
        <p style="display:inline;">© 2020 Fibonia. All rights reserved</p>
        <span><a href="https://www.instagram.com/fibonia/" target="_blank"><i class="fa fa-instagram fa-2x"></i></a></span>
        <span><a target="_blank" href="https://twitter.com/Fibonia1" target="_blank"><i class="fa fa-twitter fa-2x"></i></a></span>
        <span><a href="https://www.facebook.com/fibonia/" target="_blank"><i class="fa fa-facebook fa-2x"></i></a></span>
      </div>
    </div>
  </div>
  <!-- end section -->
</div>
<!-- end fullpage -->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://s3-us-west-2.amazonaws.com/parallax-theme/assets/wow.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.7.4/jquery.fullPage.min.js"></script>
</body>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

<style>
    /* general styles */

  body {
    font-family: 'Raleway', sans-serif !important;
  }




  ul
  {
      list-style-type: none;
  }

div.raspberry {
    float: left;
    margin: 2px;
}
div.raspberry1 {
    float: left;
    margin: 2px;
}


  a {
    text-decoration: none !important;
  }

  h1 {
    color: royalblue;
    font-weight: bold;
  }

  p {
    font-size: 20px;
    color: #484848;
  }

  .section {
    text-align: center;
  }

  .skillbar {
    cursor: pointer;
  }
.relative {
  margin: 0 auto;
  position: relative;
  width: 300px;
  z-index:1000;
}

.absolute {
  position: absolute;
  right: 65%;
  top: -50%;
  width: 100%;
}

.fixed-feedback {
  color:white;
  position: fixed;
  top: -150px;
  right:0px;
  width: 100%;
}
  .hide {
    display: none;
  }

  .display {
    display: block;
  }


  /* flash alert styles */

  .flash-container {
    width: 100%;
    position: fixed;
    z-index: 700;
    padding-top: 20px;
    font-weight: bold;
  }

  .alert {
    text-align: center !important;
    width: 500px !important;
    margin-left: auto !important;
    margin-right: auto !important;
    color: #211809 !important;
  }

  /* Nav Screen */

  .nav-screen {
    height: 100%;
    z-index: 500;
    position: fixed;
    background-color: #000;
    opacity: 1;
     right: -285px;  /* start off behind the scenes */
    -webkit-font-smoothing: antialiased;
    position: fixed;
    width: 285px;
  }

  .nav-screen .active {
    display: block;
  }


  /* nav header links */

  .nav-brand {
    position: fixed;
    left: 0;
    z-index: 600;
    padding: 10px;
  }

  .nav-brand img {
    width: 50px;
  }

  .fa-bars {
    display: none !important;
    color: #royalblue;
    float: right;
    padding: 20px;
    position: fixed;
    right: 0;
    z-index: 500;
    cursor: pointer;
  }

  .fa-times {
    color: royalblue;
    float: right;
    padding: 20px;
    right: 0;
    z-index: 600;
    cursor: pointer;
  }

  .header-links {
   position: fixed;
  width: 100%;
  z-index: 500;
  }

  .header-links li {
    color: white;
    display: inline;
    float: right;
    padding: 15px;
    font-size: 16px;
  }

  .header-links a {
    color: #757575;
    -webkit-transition: all 0.2s ease-in;
  }

  .header-links a:hover {
    color: royalblue !important;
  }

  /* slide out nav menu styles */

  .nav-container {
    padding-top: 10%;
  }

  .nav-links {
    width: 250px;
    text-align: center;
    margin-left: auto;
    margin-right: auto;
  }

  .nav-links ul {
    margin-top: 15%;
    text-align: center;
    padding-top: 10%;
  }


  .nav-links a {
    color: #FFFFFF;
    font-size: 30px;
    line-height: 2.5;
    font-weight: bold;
    text-decoration: none;
    margin-left: auto;
    margin-right: auto;
  }

  .nav-links a:hover {
    color: royalblue;
    -webkit-transition: all 0.6s ease-in-out;
    -o-transition: all 0.6s ease-in-out;
    -ms-transition: all 0.6s ease-in-out;
    -moz-transition: all 0.6s ease-in-out;
    transition: all 0.6s ease-in-out;
  }

  #fp-nav ul li .fp-tooltip {
    color: #5F5F5F !important;
  }

  /* Expanding border effect */

  .header-links a::after {
    display: block;
      margin: 0 auto;
    margin-top: 5px;
    width: 0;
      height: 2px;
      background-color: #fff;
      content: '';
    opacity: 0;
    -webkit-transition: width 0.6s, opacity 0.8s;
    -moz-transition: width 0.6s, opacity 0.8s;
    transition: width 0.6s, opacity 0.8s;
  }

  .header-links a:hover::after,
  .header-links a:focus::after {
    opacity: 1;
    width: 100%;
  }

  /* main header section */

  .opaque-bg {
    margin-left: auto;
    margin-right: auto;
    max-width: 380px;
    padding: 1px 1px 5px 5px;
  }

  .aboutme {
    background: url("https://s3-us-west-2.amazonaws.com/files.bradengelhardt.com/brad-bg-main.jpg") no-repeat;
    background-size: cover;
  }

  .aboutme p {
    color: white;
    font-weight: 100;
    font-size: 17.4px;
  }

  /* bouncing arrow */


  .fa-chevron-down {
    color: royalblue !important;
    bottom: 10px;
    margin-left: -30px;
    cursor: pointer;
    position: absolute;
    opacity: 0;
    -webkit-transition: 1.2s ease;
  }


  /* Scroll down indicator (bouncing) */

  @-webkit-keyframes bounce {
    0%, 20%, 50%, 80%, 100% {
      -webkit-transform: translateY(0);
      transform: translateX(0);
    }
    40% {
      -webkit-transform: translateY(-30px);
      transform: translateY(-30px);
    }
    60% {
      -webkit-transform: translateY(-15px);
      transform: translateY(-15px);
    }
  }

  @-moz-keyframes bounce {
    0%, 20%, 50%, 80%, 100% {
      transform: translateY(0);
    }
    40% {
      transform: translateY(-30px);
    }
    60% {
      transform: translateY(-15px);
    }
  }

  @keyframes bounce {
    0%, 20%, 50%, 80%, 100% {
      -ms-transform: translateY(0);
      transform: translateY(0);
    }
    40% {
      -ms-transform: translateY(-30px);
      transform: translateY(-30px);
    }
    60% {
      -ms-transform: translateY(-15px);
      transform: translateY(-15px);
    }
  }

  .bounce {
    -webkit-animation: bounce 2s infinite;
    animation: bounce 2s infinite;
  }

  /* about section */

  /* Skill bars */

.container-skillbar {
    width:100%;
    padding-top:30px;
    padding-right: 2%;
    padding-left: 2%;
    height:auto;
    overflow:none;
  }
  .skillbar {
    position:relative;
    display:block;
    margin-bottom:15px;
    width:100%;
    background:#efefef;
    height:30px;
    border-radius:3px;
    -moz-border-radius:3px;
    -webkit-border-radius:3px;
    -webkit-transition:0.4s linear;
    -moz-transition:0.4s linear;
    -ms-transition:0.4s linear;
    -o-transition:0.4s linear;
    transition:0.4s linear;
    -webkit-transition-property:width, background-color;
    -moz-transition-property:width, background-color;
    -ms-transition-property:width, background-color;
    -o-transition-property:width, background-color;
    transition-property:width, background-color;
  }

  .skillbar-title {
    position:absolute;
    top:0;
    left:0;
    width:110px;
    font-weight:bold;
    font-size:13px;
    color:#fff;
    background:#6adcfa;
    -webkit-border-top-left-radius:3px;
    -webkit-border-bottom-left-radius:4px;
    -moz-border-radius-topleft:3px;
    -moz-border-radius-bottomleft:3px;
    border-top-left-radius:3px;
    border-bottom-left-radius:3px;
  }

  .skillbar-title span {
    display:block;
    background:rgba(0, 0, 0, 0.15);
    padding:0 20px;
    height:30px;
    line-height:30px;
    -webkit-border-top-left-radius:3px;
    -webkit-border-bottom-left-radius:3px;
    -moz-border-radius-topleft:3px;
    -moz-border-radius-bottomleft:3px;
    border-top-left-radius:3px;
    border-bottom-left-radius:3px;
  }

  .skillbar-bar {
    height:30px;
    width:0px;
    border-radius:3px;
    -moz-border-radius:3px;
    -webkit-border-radius:3px;
  }

  .skill-bar-percent {
    position:absolute;
    right:10px;
    top:0;
    font-size:11px;
    height:30px;
    line-height:30px;
    color:#ffffff;
    color:rgba(0, 0, 0, 0.5);
  }

  /* portfolio section */

  .content {
    margin-left: auto;
    margin-right: auto;
    max-width: 800px;
  }

  .content-slide {
    margin-left: auto;
    margin-right: auto;
    max-width: 800px;
  }

  .content-slide img {
    width: 70%;
  }

  .fp-controlArrow.fp-next {
    border-color: transparent transparent transparent royalblue !important;
    right: 45px !important;
  }

  .fp-controlArrow.fp-prev {
    border-color: transparent royalblue transparent transparent !important;
    left: 45px !important;
  }

  #fp-nav ul li a span, .fp-slidesNav ul li a span{
    background: rgba(0, 0, 0, 0.62) !important;
  }


  /* contact us styles */

  .fa-paper-plane {
    color: #484848;
  }

  /* paper plane shake on hover */

  .plane-animated {
    animation-duration: 6s;
    animation-fill-mode: both;
    animation-iteration-count: infinite;
    animation-play-state: paused;
  }

  .fa-paper-plane:hover {
  /* Toggle our animation play state to running when we are hovering over our sticker */
  animation-play-state: running;
}

    @keyframes shake {
    0%, 100% {transform: translateX(0);}
    10%, 30%, 50%, 70%, 90% {transform: translateX(-10px);}
    20%, 40%, 60%, 80% {transform: translateX(10px);}
  }
    .shake {
      animation-name: shake;
    }


  /* input field styles */

.contact-form {
    padding: 0px 15px 0px 15px;
  }


  .form-control {
    border: 2px solid rgba(0, 0, 0, 0.27);
    width: 100%;
    max-width: 100%;
    height: 3em;
    font-size: 16px;
    padding: 1em;
    margin: .5em 0 2em 0;
    font-weight: bold;
  }

  textarea {
    min-height: 10em;
  }

  label {
    display: inline-block;
    max-width: 100%;
    margin-bottom: 5px;
    font-size: 18px;
    text-transform: uppercase;
    font-weight: 500;
  }

  #submit {
    outline: none;
    padding: 12px;
    min-width: 200px;
    border-radius: 2px;
    border: 2px solid royalblue;
    text-align: center;
    font-size: 1em;
    color: royalblue;
    background-color: white;
    text-decoration: none;
    text-transform: uppercase;
    font-weight: bold;
  }

  #submit:hover {
    background-color: royalblue;
    color: white;
    -webkit-transition: all 0.3s ease-out;
    -o-transition: all 0.3s ease-out;
    -ms-transition: all 0.3s ease-out;
    -moz-transition: all 0.3s ease-out;
    transition: all 0.3s ease-out;
  }

  /* footer styles */

  .footer {
    background-color: #484848;
    height: 100px;
    padding-top: 10px;
  }

  .footer p{
    color: white;
    font-weight: bold;
    font-size: 16px;
  }

  .social-links a{
    color: white;
    padding: 0px 5px 0px 5px;
  }

  .social-links a:hover {
    color: royalblue;
    -webkit-transition: all 0.2s ease-in-out;
    -o-transition: all 0.2s ease-in-out;
    -ms-transition: all 0.2s ease-in-out;
    -moz-transition: all 0.2s ease-in-out;
    transition: all 0.2s ease-in-out;
  }

  /* smaller resolution styles */

  @media (min-width: 100px) and (max-width: 500px) {

    .fa-bars {
      display: block !important;
    }

    .header-links {
      display: none;
    }   
  }

  /* mobile styles */

  @media (min-width: 100px) and (max-width: 400px) {

    .content {
      max-width: 300px;
    }

    .aboutme h1 {
      font-size: 28px;
    }

  }

/* loading screen animation */

  .spinner {
    position: fixed;
    width: 100%;
    height: 100%;
    padding: 25%;
    background-color: #2F2F2F;
    text-align: center;
    font-size: 10px;
    z-index: 1000;
  }

  .spinner > div {
    background-color: royalblue;
    height: 100%;
    width: 6px;
    display: inline-block;
    
    -webkit-animation: sk-stretchdelay 1.2s infinite ease-in-out;
    animation: sk-stretchdelay 1.2s infinite ease-in-out;
  }

  .spinner .rect2 {
    -webkit-animation-delay: -1.1s;
    animation-delay: -1.1s;
  }

  .spinner .rect3 {
    -webkit-animation-delay: -1.0s;
    animation-delay: -1.0s;
  }

  .spinner .rect4 {
    -webkit-animation-delay: -0.9s;
    animation-delay: -0.9s;
  }

  .spinner .rect5 {
    -webkit-animation-delay: -0.8s;
    animation-delay: -0.8s;
  }

  @-webkit-keyframes sk-stretchdelay {
    0%, 40%, 100% { -webkit-transform: scaleY(0.4) }  
    20% { -webkit-transform: scaleY(1.0) }
  }

  @keyframes sk-stretchdelay {
    0%, 40%, 100% { 
      transform: scaleY(0.4);
      -webkit-transform: scaleY(0.4);
    }  20% { 
      transform: scaleY(1.0);
      -webkit-transform: scaleY(1.0);
    }
  }


  .blinking-cursor {
    font-weight: 500;
    margin-left: 4px;
    font-size: 20px;
    color: white !important;
    -webkit-animation: 1s blink step-end infinite;
    -moz-animation: 1s blink step-end infinite;
    -ms-animation: 1s blink step-end infinite;
    -o-animation: 1s blink step-end infinite;
    animation: 1s blink step-end infinite;
  }

@keyframes "blink" {
  from, to {
    color: transparent;
  }
  50% {
    color: white;
  }
}

@-moz-keyframes blink {
  from, to {
    color: transparent;
  }
  50% {
    color: white;
  }
}

@-webkit-keyframes "blink" {
  from, to {
    color: transparent;
  }
  50% {
    color: white;
  }
}

@-ms-keyframes "blink" {
  from, to {
    color: transparent;
  }
  50% {
    color: white;
  }
}

@-o-keyframes "blink" {
  from, to {
    color: transparent;
  }
  50% {
    color: white;
  }
}

.success {
  padding: 1em;
  margin-bottom: 0.75rem;
  text-shadow: 0 1px 0 rgba(255, 255, 255, 0.5);
  color: #468847;
  background-color: #dff0d8;
  border: 1px solid #d6e9c6;
  -webkit-border-radius: 4px;
     -moz-border-radius: 4px;
          border-radius: 4px;
}

.error {
  padding: 1em;
  margin-bottom: 0.75rem;
  text-shadow: 0 1px 0 rgba(255, 255, 255, 0.5);
  color: #b94a48;
  background-color: #f2dede;
  border: 1px solid rgba(185, 74, 72, 0.3);
  -webkit-border-radius: 4px;
     -moz-border-radius: 4px;
          border-radius: 4px;
}
</style>
<script type='text/javascript' data-cfasync='false'>window.purechatApi = { l: [], t: [], on: function () { this.l.push(arguments); } }; (function () { var done = false; var script = document.createElement('script'); script.async = true; script.type = 'text/javascript'; script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript'; document.getElementsByTagName('HEAD').item(0).appendChild(script); script.onreadystatechange = script.onload = function (e) { if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) { var w = new PCWidget({c: '572a0b6b-4be8-43b0-b0ad-f1c8e6254bf5', f: true }); done = true; } }; })();</script>
<script>
$(document).ready(function() {

  // typing animation
  (function($) {
    $.fn.writeText = function(content) {
        var contentArray = content.split(""),
            current = 0,
            elem = this;
        setInterval(function() {
            if(current < contentArray.length) {
                elem.text(elem.text() + contentArray[current++]);
            }
        }, 80);
    };
    
  })(jQuery);

  // input text for typing animation 
  $("#holder").writeText("WEB DESIGNER + FRONT-END DEVELOPER");

  // initialize wow.js
  new WOW().init();
    
  // Push the body and the nav over by 285px over
  var main = function() {
    $('.fa-bars').click(function() {
      $('.nav-screen').animate({
        right: "0px"
      }, 200);

      $('body').animate({
        right: "285px"
      }, 200);
    });

    // Then push them back */
    $('.fa-times').click(function() {
      $('.nav-screen').animate({
        right: "-285px"
      }, 200);

      $('body').animate({
        right: "0px"
      }, 200);
    });

    $('.nav-links a').click(function() {
      $('.nav-screen').animate({
        right: "-285px"
      }, 500);

      $('body').animate({
        right: "0px"
      }, 500);
    });
  };

  $(document).ready(main);
  
  // initiate full page scroll

  $('#fullpage').fullpage({
    scrollBar: true,
    responsiveWidth: 400,
    navigation: true,
    navigationTooltips: ['home', 'about', 'contact', 'connect'],
    anchors: ['home', 'about', 'contact', 'connect'],
    menu: '#myMenu',
    fitToSection: false,

    afterLoad: function ( anchorLink, index){
      var loadedSection = $(this);


      //using index
      if(index==1){
        /* add opacity to arrow */
        $('.fa-chevron-down').each(function(){
          $(this).css('opacity','1')
        });
        $('.header-links a').each(function(){
          $(this).css('color','white')
        });
        $('.header-links').css("background-color","transparent");
      }

      else if(index!=1){
        $('.header-links a').each(function(){
          $(this).css('color','black')
        });
        $('.header-links').css('background-color', 'white');
      }

      //using index
      if(index == 2){

        /* animate skill bars */
        $('.skillbar').each(function(){
          $(this).find('.skillbar-bar').animate({
            width: $(this).attr('data-percent')
          },2500);
        });
      }
    }
  });
 

  // move section down one
  $(document).on('click', '#moveDown', function(){
    $.fn.fullpage.moveSectionDown();
  });

  // fullpage.js link navigation
  $(document).on('click', '#skills', function(){
    $.fn.fullpage.moveTo(2);
  });

  $(document).on('click', '#projects', function(){
    $.fn.fullpage.moveTo(3);
  });

  $(document).on('click', '#contact', function(){
    $.fn.fullpage.moveTo(4);
  });

  // smooth scrolling
  $(function() {
    $('a[href*=#]:not([href=#])').click(function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
          $('html,body').animate({
            scrollTop: target.offset().top
          }, 700);
          return false;
        }
      }
    });
  });

function login() {
location.href = "#home";
    document.getElementById("overlay-back1").style.zIndex=9998;  
    
}

var x = false;

function move(){
  document.getElementById("iframe1").style.zIndex=10000;  
  document.getElementById("iframe1").style.opacity="1";  
  var c = document.getElementsByClassName("loginhelp");
  if (x == false){
     for (var i=0; i<c.length; i++) {
        c[i].style.animation = "moveup1 1s 1 normal forwards";
        x = true;
  } }else {
     for (var i=0; i<c.length; i++) {
        c[i].style.animation = "moveup2 1s 1 normal forwards";
        x = false;
  }
}
}
if (window.location.href == "https://www.fibonia.com/fib.php?login"){
    login();
    move();
    
}

  //ajax form
  $(function() {

    // Get the form.
    var form = $('#ajax-contact');

    // Get the messages div.
    var formMessages = $('#form-messages');

    // Set up an event listener for the contact form.
    $(form).submit(function(e) {
      // Stop the browser from submitting the form.
      e.preventDefault();

      // Serialize the form data.
      var formData = $(form).serialize();

      // Submit the form using AJAX.
      $.ajax({
        type: 'POST',
        url: $(form).attr('action'),
        data: formData
      })
      .done(function(response) {
        // Make sure that the formMessages div has the 'success' class.
        $(formMessages).removeClass('error');
        $(formMessages).addClass('success');

        // Set the message text.
        $(formMessages).text(response);

        // Clear the form.
        $('#name').val('');
        $('#email').val('');
        $('#message').val('');
      })
      .fail(function(data) {
        // Make sure that the formMessages div has the 'error' class.
        $(formMessages).removeClass('success');
        $(formMessages).addClass('error');

        // Set the message text.
        if (data.responseText !== '') {
          $(formMessages).text(data.responseText);
        } else {
          $(formMessages).text('Oops! An error occured and your message could not be sent.');
        }
      });

    });

  });

});

</script>