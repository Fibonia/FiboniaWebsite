<?php
session_start();

if (isset($_SESSION['loggedin']) || isset($_SESSION['userData1']) || isset($_SESSION['userData'])) {
	header('Location: privacynew.php');
	exit();
}
?>
<head>
    <meta name="description" content="Privacy terms of our established company, Fibonia.">
</head>
<title>Privacy | Fibonia</title>
<html>
    <script type="text/javascript" src= "redirect.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>


<link rel="icon" type="image/png" href="logo.png"><body><script type='text/javascript' data-cfasync='false'>window.purechatApi = { l: [], t: [], on: function () { this.l.push(arguments); } }; (function () { var done = false; var script = document.createElement('script'); script.async = true; script.type = 'text/javascript'; script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript'; document.getElementsByTagName('HEAD').item(0).appendChild(script); script.onreadystatechange = script.onload = function (e) { if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) { var w = new PCWidget({c: '572a0b6b-4be8-43b0-b0ad-f1c8e6254bf5', f: true }); done = true; } }; })();</script>
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<style>
@media only screen and (max-height: 600px) {p{font-size:1.6rem !important;}}
</style>
	<script>
  $(window).load(function() {
    $('#bookload').fadeOut(1000);
    $("html").css('overflow-y','visible');
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
    overflow-x:hidden;
    overflow-y:hidden;
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
</body>
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
<script>
  	$(window).load(function() {
		// Animate loader off screen
		$(".load").fadeOut("slow");;
	});
</script>
<link rel="icon" type="image/png" href="logo.png"><body>
    
    <script type='text/javascript' data-cfasync='false'>window.purechatApi = { l: [], t: [], on: function () { this.l.push(arguments); } }; (function () { var done = false; var script = document.createElement('script'); script.async = true; script.type = 'text/javascript'; script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript'; document.getElementsByTagName('HEAD').item(0).appendChild(script); script.onreadystatechange = script.onload = function (e) { if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) { var w = new PCWidget({c: '572a0b6b-4be8-43b0-b0ad-f1c8e6254bf5', f: true }); done = true; } }; })();</script>
<body>
<title>BRADENGELHARDT</title>
  <meta name="description" content="Web designer and front-end developer">
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
		min-width:100%;
		max-width:100%;
		min-height:100%;
		max-height:100%;
		box-sizing:border-box;
  z-index:100;
	}
.wrapper,.s12 {
  z-index:100;
	text-align: center;
	position: relative;
	height: 80px;
	font-size: 0;
	top: 8%;
	right:-6.5%;
	transform: translateY(-50%);
}
</style>

    
    <div class="searchbody">

  <div class="wrapper">
 <div class="relative">
  <div class="absolute">

  </div>
</div> 
<section class="content">
    <article>
      <header>
    <h2>Privacy Policy</h2>
  </header>
        <p>This Privacy Policy describes how our startup Fibonia and its subsidiaries collect, use, process and share personal information. This Policy applies to visitors and users (individually, “you”) of Fibonia’s webpages, applications, social media accounts, and other services (collectively, our “Services”). You can identify the Fibonia company that hosts a particular Service and is responsible for your information under this Policy here. Please note that your use of our Services is additionally subject to the Fibonia Terms and Conditions.
</p>
        <p>We use your information to provide our Services, tailor your experience, show you appointments and transactions made with our appointment system through Fibonia, send you marketing communications, provide you with more relevant updates and offers that may be of interest to you, and for other purposes described below. We share your information with our specialized list of recruiters as long as we receive consent from the user to share their information;with social networking services; with third-party services or applications you use to log into your Fibonia account; with service providers (including payment card processors such as Stripe).</p>
      </section>
      </div></div>
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
	background: url('https://thesuiteworld.com/wp-admin/maint/search-icon-white-png-540.png') no-repeat center center, white;
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
        <li data-menuanchor="fourthPage"><a href="fib.php#contact">CONTACT</a></li>
        <li data-menuanchor="secondPage"><a href="fib.php#about">ABOUT</a></li>
        <li data-menuanchor="firstPage"><a style="cursor:pointer;" href="https://www.fibonia.com/fib.php?login" target="_self">LOGIN/REGISTER</a></li>
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
<li data-menuanchor="firstPage"><a style="cursor:pointer;" href="https://www.fibonia.com/fib.php?login" target="_self">LOGIN/REGISTER</a></li>
        <li data-menuanchor="secondPage"><a href="fib.php#about">ABOUT</a></li>
        <li data-menuanchor="fourthPage"><a href="fib.php#contact">CONTACT</a></li>
        <li data-menuanchor="fifthPage"><a href="newsletter.php">NEWSLETTER</a></li>
        <li data-menuanchor="sixthPage"><a href="faq.php">FAQ</a></li>
        <li data-menuanchor="seventhPage"><a href="privacy.php">PRIVACY</a></li>
        <li data-menuanchor="eightPage"><a href="terms.php">TERMS</a></li>
      </ul>
    </div>
  </div>
  
</div>
<!-- begin fullpage -->

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
    font-size: 2rem;
    color: white;
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
<style>
 html,body {
	font-family: 'Open Sans', sans-serif;
    overflow-y: hidden; 
    overflow-x: hidden;
}
html { overflow-y: hidden; 
	overflow-y: hidden; 
}


.scrolled {
	background-color: rgba(0,0,0,.8);
}

.navbar-brand span {
  color: #ff8b38;
  z-index: 1000000001;
}
a
{
  color: #000;
  transition: color 0.3s ease;
}

a:hover
{
  color: #000;
}

#menuToggle
{
  display: block;
  position: relative;
  top: 40px;
  left: 55px;
  
  z-index: 10000001;
  
  -webkit-user-select: none;
  user-select: none;
}

#menuToggle input
{
  display: block;
  width: 40px;
  height: 32px;
  position: absolute;
  top: -7px;
  left: -5px;
  
  cursor: pointer;
  
  opacity: 0; /* hide this */
  z-index: 10000002; /* and place it over the hamburger */
  
  -webkit-touch-callout: none;
}

/*
 * Just a quick hamburger
 */
#menuToggle span
{
  display: block;
  width: 33px;
  height: 4px;
  margin-bottom: 5px;
  position: relative;
  
  background: #FFFFFF;
  border-radius: 3px;
  
  z-index: 10000001;
  
  transform-origin: 4px 0px;
  
  transition: transform 0.5s cubic-bezier(0.77,0.2,0.05,1.0),
              background 0.5s cubic-bezier(0.77,0.2,0.05,1.0),
              opacity 0.55s ease;
}

#menuToggle span:first-child
{
  transform-origin: 0% 0%;
}

#menuToggle span:nth-last-child(2)
{
  transform-origin: 0% 100%;
}

/* 
 * Transform all the slices of hamburger
 * into a crossmark.
 */
#menuToggle input:checked ~ span
{
  opacity: 1;
  transform: rotate(45deg) translate(-2px, -1px);
  background: #000;
}

/*
 * But let's hide the middle one.
 */
#menuToggle input:checked ~ span:nth-last-child(3)
{
  opacity: 0;
  transform: rotate(0deg) scale(0.2, 0.2);
}

/*
 * Ohyeah and the last one should go the other direction
 */
#menuToggle input:checked ~ span:nth-last-child(2)
{
  transform: rotate(-45deg) translate(0, -1px);
}

/*
 * Make this absolute positioned
 * at the top left of the screen
 */
#menu
{
  position: absolute;
  width: 220px;
  height: 2000px;
  margin: -100px 0 0 -60px;
  padding: 50px;
  padding-top: 125px;
  
  background: white;
  opacity: 1;
  list-style-type: none;
  -webkit-font-smoothing: antialiased;
  /* to stop flickering of text in safari */
  
  transform-origin: 0% 0%;
  transform: translate(-100%, 0);
  
  transition: transform 0.5s cubic-bezier(0.77,0.2,0.05,1.0);
}

#menu li
{
  padding: 10px 0;
  font-size: 22px;
}

/*
 * And let's slide it in from the left
 */
#menuToggle input:checked ~ ul
{
  transform: none;
}

<head><style class="cp-pen-styles">*, *:before, *:after {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}


/* ### End Nav ### */

/* ### Start Header ### */
.icon-link {
  transition: 0.4s;
  z-index: 1000000000000;
  position: absolute;
  right: 50px;
  top: 40px;
  width: 32px;
}
.icon-link:hover{
    -webkit-filter: brightness(70%);
	-moz-filter: brightness(70%);
	-o-filter: brightness(70%);
	-ms-filter: brightness(70%);
	filter: brightness(70%);

}
.icon-link img {
  width: 100%; 
  vertical-align: top;
}
.icon-link--twitter {
  left: auto;
  right: 5px;
  top: 40px
}
.icon-link--ig {
  left: auto;
  right: 95px;
  top: 40px
}
.sign-link {
  left: auto;
  width: 100px;
  right: 1700px;
  top: 40px
 
}

.sign-link1 {
  left: auto;
  width: 144px;
  right: 1490px;
  top: 40px;
}

.sign-link2 {
  left: auto;
  width: 20px;
  right: 1655px;
  top: 40px;
}

.profile-link {
  left: auto;
  width: 100px;
  right: 1620px;
  top: 30px
  white-space: nowrap;
}

#myVideo {
  position: fixed;
  right: 0;
  bottom: 0;
  min-width: 100%; 
  min-height: 100%;
}

header {
        background: url('video.mp4');
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;
	color: #FFF;
}

header .overlay {
	min-height: 100vh;
	background-color: rgba(0,0,0,.5);
  padding: 50px 0
}

header .center-vh {
	padding-top: 25vh
}



@media(max-width: 991px) {
	header .center-vh {
		padding-top: 60px
	}
}

header h1 {
	font-weight: bold;
	font-size: 65px
}

header h1 span {
	font-weight: normal;
	color: #fff;
}

header h1 ~ .lead {
	font-size: 30px;
}

header h1 ~ .lead:after {
	content: "";
	display: block;
	width: 70px;
	height: 2px;
	margin: 25px 0;
	background-color: #FFF;
}

@media(max-width: 991px) {
	header h1 ~ .lead:after {
		margin: 25px auto;
	}
}

header button {
	background: transparent;
	padding: 5px 15px;
	border: 2px solid #FFF;
	margin-top: 20px
}

@media(max-width: 991px) {
	header button {
		display: block;
		margin: 30px auto;
	}
}

header form {
	width: 360px;
	background-color: #FFF;
	border-radius: 5px;
	overflow: hidden;
}

@media( max-width: 400px) {
  
  header form {
    width: 100%;
  }
  
}

header form h2 {
	background-color: #F5f5f5;
	color: #333;
	font-size: 18px;
	padding: 15px 0;
	font-weight: bold;
	margin-top: 0;
	margin-bottom: 30px;
}

header form h2 span {
	font-weight: normal;
	color: #ff8b38;
}

header form .form-control {
	border-radius: 0;
	border: none;
	box-shadow: none;
	border-bottom: 1px solid #CCC;
	width: 80%;
	margin: 0 auto 40px
}

header form input[type="submit"] {
	background-color: #ff8b38;
	padding: 15px;
	border-radius: 0;
}

@media(max-width: 991px) {
	.header .text-center-xs {
       transition: 0.4s;
      -webkit-filter: brightness(75%);
	-moz-filter: brightness(75%);
	-o-filter: brightness(75%);
	-ms-filter: brightness(75%);
	filter: brightness(75%);
		text-align: center
	}
}

/* ### End Header ### */

/* ### start Social ### */

.social {
	padding: 10px;
	-webkit-box-shadow: -2px -5px 13px #000;
	-moz-box-shadow: -2px -5px 13px #000;
	-o-box-shadow: -2px -5px 13px #000;
	box-shadow: -2px -5px 13px #000;
}



.social h4 {
	font-weight: bold;
	margin-bottom: 5px;
}

.social p {
	color: #a1a1a1;
	line-height: 1.4
}

.social i {
	color: #CCC;
	margin: 20px 15px;
	-webkit-transition: all .3s ease-in-out;
	-moz-transition: all .3s ease-in-out;
	-o-transition: all .3s ease-in-out;
	transition: all .3s ease-in-out;
	cursor: pointer;

}

@media (max-width: 991px) {
	.social {
		text-align: center
	}
	.social h4 {
		margin-bottom: 10px;
	}
	.social i {
		margin: 10px 15px;
	}

}

.social .fa-facebook:hover {
	color: #3b5998
}
.social .fa-twitter:hover {
	color: #1da1f2
}
.social .fa-google-plus:hover {
	color: #dd4b39
}
.social .fa-pinterest:hover {
	color: #bd081c
}
.social .fa-instagram:hover {
	color: #405de6
}
.social .fa-stumbleupon:hover {
	color: #eb4924
}
.social .fa-rss:hover {
	color: #f26522
}

/* ### End Social ### */

/* ### Start Tabs ### */

.tabs {
	padding: 80px 0;
	background-color: #F5f5f5;
}
@media(max-width: 991px) {
	.tabs {
		text-align: center
	}
}
.tabs .tab-switch li {
	background-color: #333;
	color: #FFF;
	border-bottom: 1px solid #FFF;
	height: 110px;
	line-height: 110px;
	font-size: 20px;
	cursor: pointer;
}

.tabs .tab-switch li.active,
.tabs .tab-switch li:hover {
	background-color: #bd601e;
}

.tabs .tabs-content div:not(.tab-one) {
	display: none
}

.tabs .tabs-content h3 {
	margin-top: 0;
	font-weight: bold;
	letter-spacing: -1px;
	margin-bottom: 20px;
}

@media(max-width: 991px) {
	.tabs .tabs-content h3 {
		margin: 20px 0 30px
	}
}

.tabs .tabs-content .lead {
	line-height: 1.6;
	font-size: 18px;
	color: #7e7e7e;
}

.tabs .tabs-content button {
	background-color: #ff8b38;
	color: #FFF;
}

/* ### End Tabs ### */

/* ### Start Sublist ### */

.sublist {
	padding: 80px 0
}

@media(max-width: 991px) {
	.sublist {
		padding: 40px 0;
		text-align: center;
	}
}

.sublist .sub-img {
	margin-top: 50px
}

.sublist .sublist-head {
	font-weight: bold
}

.sublist .sublist-desc {
	color: #777;
	line-height: 1.6;
	margin-bottom: 30px;
}

.sublist .list-icon {
	margin-bottom: 30px
}

.sublist .list-icon i {
	width: 40px;
	height: 40px;
	border: 2px solid #ff8b38;
	line-height: 36px;
	color: #ff8b38;
	text-align: center;
	border-radius: 50%;
	margin-right: 30px;
	margin-top: 20px;
}

@media(max-width: 991px) {
	.sublist .list-icon i {
		float: none !important;
		margin: 10px 0;
	}
}

.sublist .list-icon .info-text {
	width: calc(100% - 70px);
}

@media(max-width: 991px) {
	.sublist .list-icon .info-text {
		float: none;
		width: 100%;
	}
}

.sublist .list-icon .info-text h4 {
	font-weight: bold
}
/* ### End Sublist ### */

/* ### Start Standard ### */


.standard {
	padding: 80px 0;
	background-color: #F5f5f5;
}

@media(max-width: 991px) {
	.standard {
		padding: 40px 0;
		text-align: center;
	}
}

.standard .standard-head {
	font-weight: bold;
	margin-top: 50px
}

.standard .standard-desc {
	color: #777;
	line-height: 1.6;
	margin-bottom: 30px;
}

/* ### Start Awesome ### */

.awesome {
	padding: 80px 0
}

@media(max-width: 991px) {
	.awesome .col-md-4 {
		margin-bottom: 30px;
	}
}

.awesome .awesome-head {
	font-weight: bold;
	font-size: 50px;
}

.awesome .awesome-desc {
	margin-bottom: 50px;
	color: #8e8f93
}

.awesome i {
	color: #ff8b38;
	width: 70px;
	height: 70px;
	line-height: 68px;
	border: 2px solid #ff8b38;
	border-radius: 50%
}

.awesome .fa-keyboard-o {
	font-size: 34px
}

.awesome .feat-head {
	font-weight: bold;
	margin-top: 20px;
	margin-bottom: 20px;
}

.awesome .feat-info {
	color: #a9aaac
}

/* ### End Awesome ### */

/* Start Pricing Options */

.price {
	padding: 80px 0;
	background-color: #F5f5f5
}

@media(max-width: 991px) {
	.price {
		padding: 40px;
	}
}

.price .price-head {
	font-weight: bold;
	font-size: 40px;
}

.price .price-desc {
	margin-bottom: 50px;
	color: #8e8f93
}

@media(max-width: 991px) {
	.price .price-desc {
		margin-bottom: 10px;
	}
}

.price .price-box {
	background-color: #FFF;
}

@media(max-width: 991px) {
	.price .price-box {
		margin-bottom: 30px;
	}
}

.price .price-box .plan-head {
	background-color: #333;
	color: #FFF;
	padding: 15px 0;
	margin: 0;
	font-weight: bold;
	border-bottom: 2px solid #FFF
}

.price .option-price {
	background-color: #333;
	padding: 10px 0 20px;
	color: #FFF;
	border-bottom: 5px solid #ff8b38
}

.price .option-price .pricing {
	font-size: 70px;
	color: #FFF;
	display: block;
	font-weight: bold
}

.price .option-price .usd  {
	font-size: 30px;
}

.price .option-price .period {
	color: #adadad;
	font-weight: bold;
	font-style: italic;
}

.price .most-pop {
	background-color: #ff8b38;
	color: #FFF;
	padding: 5px 10px 10px;
	margin-bottom: 0;
	font-weight: bold;
}

.price .config li {
	padding: 10px;
	border-bottom: 1px solid #F5f5f5;
	color: #8c8c8c
}
.price .basic,
.price .enterprise {
	margin-top: 35px;
}
/* End Pricing Options */

/* End Testimonials Options */

.testimonials {
	padding: 80px 0;
}

@media(max-width: 991px) {
	.price {
		padding: 40px 0;
	}
}

.testimonials .tes-desc {
	margin-bottom: 40px;
}

.testimonials .client-say {
	background-color: #F5f5f5;
	color: #8e8f93;
	padding: 20px;
	position: relative;
	margin-bottom: 20px
}

.testimonials .client-say:after {
	content: "";
	display: block;
	width: 0;
	height: 0;
	border-style: solid;
	border-width: 15px;
	border-color: #F5f5f5 transparent transparent;
	position: absolute;
	bottom: -28px;
	left: 26px
}

.testimonials .media-heading {
	font-weight: bold;
	margin-top: 20px;
}

@media(max-width: 991px) {
	.testimonials .media {
		margin-bottom: 20px;
	}
}

.testimonials .media-body p {
	color: #a9aaac
}
/* End Testimonials Options */

/* Start Stylish */

.stylish {
	background: url("https://github.com/Oaik/Axit/blob/master/img/stylish.jpg?raw=true") no-repeat top center;
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;
	color: #FFF
}

.stylish .overlay {
	background-color: rgba(0,0,0,.6);
	min-height: 320px;
	display: flex;
	justify-content: center;
	align-items: center
}

@media(max-width: 991px) {
	.stylish .overlay {
		padding: 30px 0;
	}
}

.stylish .stylish-desc {
	color: #CCC
}

.stylish .stylish-btn {
	margin: 30px auto;
	display: block;
	padding: 8px 20px;
	border: 2px solid #FFF;
	background-color: transparent;
	-webkit-transition: .5s all ease-in-out;
	-moz-transition: .5s all ease-in-out;
	-o-transition: .5s all ease-in-out;
	transition: .5s all ease-in-out;
}

.stylish .stylish-btn:hover {
	background-color: #bd601e;
	border-color: transparent;
}

.stylish .head-border-center:after {
	background-color: #fff;
}

/* End Stylish */

/* Start Contact */

.contact-us {
	padding: 80px 0;
}

@media(max-width: 991px) {
	.contact-us {
		padding: 30px 0;
	}
}

.contact-us .contact-desc {
	color: #8e8f93;
	margin-bottom: 40px
}

.contact-us form input[type="text"],
.contact-us form input[type="email"] {
	margin-bottom: 20px;
	border: none;
	box-shadow: none;
	border-bottom: 1px solid #e0e0e0;
	border-radius: 0
}

.contact-us form textarea {
	height: 178px;
	border: none;
	box-shadow: none;
	border-bottom: 1px solid #e0e0e0;
	border-radius: 0;
  resize: none;
}

.contact-us .contact-btn {
	margin: 30px auto;
	display: block;
	padding: 8px 20px;
	border: 2px solid #FFF;
	color: #FFF;
	background-color: #ff8b38;
	-webkit-transition: .5s all ease-in-out;
	-moz-transition: .5s all ease-in-out;
	-o-transition: .5s all ease-in-out;
	transition: .5s all ease-in-out;
	border-radius: 8px;
	font-size: 16px;
	font-weight: bold;
}

.stylish .stylish-btn:hover {
	background-color: #bd601e;
	border-color: transparent;
}

/* End Contact */

/* Start Footer */
footer {
	background-color: #000;
	color: #EEE;
	padding: 20px;
	font-size: 18px;
}
/* End Footer */

/* start framework */

.head-border:after {
	content: "";
	display: block;
	width: 65px;
	height: 3px;
	margin: 25px 0;
	background-color: #ff8b38;
}

@media(max-width: 991px) {
	.head-border:after {
		margin: 25px auto;
	}
}

.head-border-center:after {
	content: "";
	display: block;
	width: 65px;
	height: 3px;
	margin: 25px auto;
	background-color: #ff8b38;
}

@media (max-width: 767px) {
	.text-center-xs {
                       transition: 0.4s;
      -webkit-filter: brightness(75%);
	-moz-filter: brightness(75%);
	-o-filter: brightness(75%);
	-ms-filter: brightness(75%);
	filter: brightness(75%);
		text-align: center
	}
}
.text-center-xs {
                       transition: 0.4s;
}
.text-center-xs1{
                       transition: 0.4s;
}
.text-center-xs1:hover {
      -webkit-filter: brightness(75%);
	-moz-filter: brightness(75%);
	-o-filter: brightness(75%);
	-ms-filter: brightness(75%);
	filter: brightness(75%);
		text-align: center
}

html, body {
  font-family: 'Nunito', sans-serif;
  margin: 0;
  padding: 0;
  background-color: #161718;
    overflow-y: hidden;
    overflow-x: hidden;
}

html { overflow-y: hidden; 
	overflow-y: hidden; 
}

h1, h2, p, h3 {
  color: white;
}

p, .footer{
  font-weight: 300;
}

.container {
  max-width: 1000px;
  z-index: 1000000004
}

/***JUMBOTRON***/

.jumbotron {
  background: url("https://s3.amazonaws.com/codecademy-content/projects/bass/bg.jpg") no-repeat center center;
  background-size: cover;
  height: 550px;
}

.jumbotron img {
  padding-left: 10px;
}

.jumbotron .container h1 {
  padding-top: 80px;
  color: white;
}

.jumbotron li {
  display: inline;
  list-style: none;
  margin-left: 40px;
}
.jumbotron a {
  font-size: 15px;
}
.jumbotron a:hover {
  color: white;
}
.jumbotron .btn{
  background-color: #ff003d;
  color: white;
  border-radius: 0;
  border-color: #ff003d;
  padding: 7px 30px;
}

.jumbotron .btn:hover{
  color: inherit;
}

.jumbotron .download {
  margin-top: 20px;
}

/***SUPPORTING***/
.supporting{
  padding-bottom: 70px;
  padding-top: 70px;

}
.supporting .container{
  padding-left: 50px;
  padding-right: 50px;
}
.supporting img {
  margin: auto auto;
}

.supporting-2 {
  background: black;
}

.supporting-4{
  background: url("https://s3.amazonaws.com/codecademy-content/projects/bass/feature.jpg") no-repeat center center;
  background-size: cover;
  height: 350px;
  text-align: center;
}
.supporting-4 .container{
  padding-top: 110px;
}

/***FOOTER***/
.footer {
  background-color: #000;
  height: 220px;
}

.footer .container{
  padding-top: 50px;
}
.footer li {
  margin-top: 7px;
  list-style: none;
}

.footer h3{
  font-size: 17px;
}

.footer a{
  font-size: 13px;
  color: #aaa;

@media (max-width:768px){
  .footer {
    display: none;
  }
}
</style>
  <script>
function changeZIndex() {
      if (document.getElementById("x")) {
        document.getElementById("overlay-back").style.opacity=0.6;
        document.getElementById("overlay-back").style.zIndex= 10;
        document.getElementById("x").setAttribute("id", "y");
    }
    else {
        document.getElementById("overlay-back").style.opacity= 0; 
        document.getElementById("overlay-back").style.zIndex= -1;
        document.getElementById("y").setAttribute("id", "x");
    }
  
}
</script>
<style>
#overlay-back { 
    position   : absolute; 
    top        : 0; 
    left       : 0; 
    width      : 500%; 
    height     : 185%; 
    background : #000; 
    opacity    : 0; 
    filter     : alpha(opacity=60); 
    z-index    : -1;
} 
</style>

</body>
<style>
body { margin:0px; padding:0px; }

/* main */
header {
    height: 60px;
    z-index: 10;
}
.header-banner {
    background-color: #333;
    z-index: -1;
    background-image: url('termsbig.jpg');
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    width: 100%;
    height: 300px;
}

header h1 {
    background-color: rgba(18,72,120, 0.8);
    color: #fff;
    padding: 0 1rem;
    position: absolute;
    top: 2rem; 
    left: 2rem;
}

.fixed-header {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%; 
}

nav {
    width: 100%;
    height: 60px;
    background: #292f36;
    postion: fixed;
    z-index: 10;
}

nav div {
    color: white;
    font-size: 2rem;
    line-height: 60px;
    position: absolute;
    top: 0;
    left: 40%;
    visibility: visible;
}

nav1 {
    width: 100%;
    height: 60px;
    background: #292f36;
    postion: fixed;
    z-index: 10;
}

nav1 div {
    color: white;
    font-size: 2rem;
    line-height: 60px;
    position: absolute;
    top: 0;
    left: 40%;
    visibility: visible;
}
.visible-title {
    visibility: visible;
}


ul1 { 
    list-style-type: none;
    margin: 0 2% auto 0;
    padding-left: 0;
    text-align: left;
    max-width: 100%;
}
ul1 li { 
    display: inline-block; 
    line-height: 60px;
    margin-left: 10px;
}
ul1 li a {
    text-decoration: none; 
    color: #a9abae;
}

ul { 
    list-style-type: none;
    margin: 0 2% auto 0;
    padding-left: 0;
    text-align: right;
    max-width: 100%;
}
ul li { 
    display: inline-block; 
    line-height: 60px;
    margin-left: 10px;
}
ul li a {
    text-decoration: none; 
    color: #a9abae;
}

/* demo content */
body { 
    color: #292f36;
    font-family: helvetica;
    line-height: 1.6;
}
.content{ 
    margin: 0 auto;
    padding: 4rem 0;
    width: 960px;
    max-width: 100%;
}
article {
    float: left;
    width: 720px;
}
article p:first-of-type {
    margin-top: 0;
}
aside {
    float: right;
    width: 120px;
}
p img {
    max-width: 100%;
}

@media only screen and (max-width: 960px) {
    .content{ 
        padding: 2rem 0;
    }
    article {
        float: none;
        margin: 0 auto;
        width: 96%;
    }
    article:last-of-type {  
        margin-bottom: 3rem;
    }
    aside {  
        float: none;
        text-align: center;
        width: 100%;
    }
}

a
{
  color: #000;
  transition: color 0.3s ease;
  text-decoration: none;
}

a:hover
{
  color: #fff;
  text-decoration: underline;
}

#menu a
{
  color: #000;
  transition: color 0.3s ease;
  text-decoration: none;
}

#menu a:hover
{
  color: #000;
  text-decoration: underline;
}


#menuToggle
{
  display: block;
  position: fixed;
  width: 40px;
  top: 20px;
  left: 50px;
  
  z-index: 10001;
  
  -webkit-user-select: none;
  user-select: none;
}

#menuToggle input
{
  display: block;
  width: 40px;
  height: 32px;
  position: absolute;
  top: -7px;
  left: -5px;
  cursor: pointer;
  opacity: 0; /* hide this */
  z-index: 10000000002; /* and place it over the hamburger */
  -webkit-touch-callout: none;
}

/*
 * Just a quick hamburger
 */
#menuToggle span
{
  display: block;
  width: 33px;
  height: 4px;
  margin-bottom: 5px;
  position: relative;
  
  background: #fff;
  border-radius: 3px;
  
  z-index: 10001;
  
  transform-origin: 4px 0px;
  
  transition: transform 0.5s cubic-bezier(0.77,0.2,0.05,1.0),
              background 0.5s cubic-bezier(0.77,0.2,0.05,1.0),
              opacity 0.55s ease;
}

#menuToggle span:first-child
{
  transform-origin: 0% 0%;
}

#menuToggle span:nth-last-child(2)
{
  transform-origin: 0% 100%;
}

/* 
 * Transform all the slices of hamburger
 * into a crossmark.
 */
#menuToggle input:checked ~ span
{
  opacity: 1;
  transform: rotate(45deg) translate(-2px, -1px);
  background: #000;
}

/*
 * But let's hide the middle one.
 */
#menuToggle input:checked ~ span:nth-last-child(3)
{
  opacity: 0;
  transform: rotate(0deg) scale(0.2, 0.2);
}

/*
 * Ohyeah and the last one should go the other direction
 */
#menuToggle input:checked ~ span:nth-last-child(2)
{
  transform: rotate(-45deg) translate(0, -1px);
}

/*
 * Make this absolute positioned
 * at the top left of the screen
 */
#menu
{
  position: fixed;
  width: 220px;
  height: 120%;
  margin: -100px 0 0 -70px;
  padding: 50px;
  padding-top: 125px;
  
  background: white;
  opacity: 1;
  list-style-type: none;
  -webkit-font-smoothing: antialiased;
  /* to stop flickering of text in safari */
  
  transform-origin: 0% 0%;
  transform: translate(-100%, 0);
  
  transition: transform 0.5s cubic-bezier(0.77,0.2,0.05,1.0);
}

#menu li
{
  text-transform: none;
  font-family: helvetica;
  padding: 0px 0;
  font-size: 22px;
}

#menu li:hover {
  transition: 0.3s;
  text-decoration: underline;
}

/*
 * And let's slide it in from the left
 */
#menuToggle input:checked ~ ul1
{
  transform: none;
}

.icon-link {
  transition: 0.4s;
  z-index: 10000000;
  position: absolute;
  right: 50px;
  top: 20px;
  width: 32px;
}
.icon-link:hover{
    -webkit-filter: brightness(70%);
	-moz-filter: brightness(70%);
	-o-filter: brightness(70%);
	-ms-filter: brightness(70%);
	filter: brightness(70%);

}
.icon-link img {
  width: 100%; 
  vertical-align: top;
}
.icon-link--twitter {
  left: auto;
  right: 5px;
  top: 20px
}
.icon-link--ig {
  left: auto;
  right: 95px;
  top: 20px
}

.sign-link {
  z-index:1;
  left: auto;
  width: 120px;
  right: 1680px;
  top: 20px;
  text-size: 12px;
}

.sign-link1 {
  left: auto;
  width: 164px;
  right: 1450px;
  top: 20px;
    text-size: 12px;
}

.sign-link2 {
  left: auto;
  width: 20px;
  right: 1640px;
  top: 20px;
    text-size: 12px;
}

.profile-link {
z-index:5;
  left: auto;
  width: 100px;
  right: 1620px;
  top: 20px
}
</style>
<script>
$(window).scroll(function(){
    if ($(window).scrollTop() >= 300) {
        $('nav').addClass('fixed-header');
        $('nav div').addClass('visible-title');
    }
    else {
        $('nav').removeClass('fixed-header');
        $('nav div').removeClass('visible-title');
    }
});

</script>