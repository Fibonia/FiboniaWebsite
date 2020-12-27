<?php
session_start();

if (isset($_SESSION['loggedin']) || isset($_SESSION['userData1']) || isset($_SESSION['userData'])) {
	header('Location: phonepagenew.php');
	exit();
}
?>
<head>
    <meta name="description" content="Make sure to download our apps on any iOS and Android devices to always have Fibonia with you anywhere in the world!">
</head>
<title>Apps | Fibonia</title>
<html>
    <script type="text/javascript" src= "redirect.js"></script>
<script src = "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/scrollreveal.js/3.3.1/scrollreveal.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Heebo:400,500,700,900" rel="stylesheet"> 
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet"> 
<link rel="icon" type="image/png" href="logo.png"><body><script type='text/javascript' data-cfasync='false'>window.purechatApi = { l: [], t: [], on: function () { this.l.push(arguments); } }; (function () { var done = false; var script = document.createElement('script'); script.async = true; script.type = 'text/javascript'; script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript'; document.getElementsByTagName('HEAD').item(0).appendChild(script); script.onreadystatechange = script.onload = function (e) { if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) { var w = new PCWidget({c: '572a0b6b-4be8-43b0-b0ad-f1c8e6254bf5', f: true }); done = true; } }; })();</script> 
<script src="https://cdn.jsdelivr.net/scrollreveal.js/3.3.1/scrollreveal.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Heebo:400,500,700,900" rel="stylesheet"> 
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
 <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet"> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

	<script>
  $(window).load(function() {
    $('#bookload').fadeOut(1000);
        $("html").css('overflow-y','visible');
  }); 
	</script>	
<style>

ul a
{
  color: #000;
  transition: color 0.3s ease;
}

ul a:hover
{
  color: #000;
}

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

<link rel="icon" type="image/png" href="logo.png"><body><script type='text/javascript' data-cfasync='false'>window.purechatApi = { l: [], t: [], on: function () { this.l.push(arguments); } }; (function () { var done = false; var script = document.createElement('script'); script.async = true; script.type = 'text/javascript'; script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript'; document.getElementsByTagName('HEAD').item(0).appendChild(script); script.onreadystatechange = script.onload = function (e) { if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) { var w = new PCWidget({c: '572a0b6b-4be8-43b0-b0ad-f1c8e6254bf5', f: true }); done = true; } }; })();</script>

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
		$(".load").fadeOut("slow");;
		    $("html").css('overflow-y','visible');
	});
</script>
  <script>
function changeZIndex() {
      if (document.getElementById("x")) {
        document.getElementById("overlay-back").style.zIndex=10000;          
        document.getElementById("x").setAttribute("id", "y");
    }
    else {
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
    height     : 500%; 
    background : #000; 
    opacity    : 0.6; 
    filter     : alpha(opacity=60); 
    z-index    : -1;
} 
</style>
<div id="overlay-back"></div>
<header>
<div id="app"></div>
<nav role="navigation">
  <div class = "fade-in" id="menuToggle">
    <input type="checkbox" id="x" onclick="changeZIndex();"/>
    <span></span>
    <span></span>
    <span></span>
    <ul id="menu">
      <a href="fib.php"><li>Home</li></a>
      <a href="offers.html"><li>Top Offers</li></a>
      <a href="aboutus.html"><li>About</li></a>
      <a href="contactus.html"><li>Contact Us</li></a>
      <a href="newsletter.html"><li>Newsletter</li></a>
      <a href="phonepage.html"><li>iOS/Android</li></a>
      <a href="faq.html"><li>FAQ</li></a>
      <a href="privacy.html"><li>Privacy</li></a>
      <a href="terms.html"><li>Terms</li></a>
    </ul>
  </div>
</nav>
<a href="https://www.facebook.com/yakubyan" target="_blank" class="icon-link fade-in">
  <img src="https://translatorswithoutborders.org/wp-content/uploads/2016/01/Facebook_logo-7.png">
</a>
<a href="https://twitter.com/search?q=sub%202%20pewds&src=typd" target="_blank" class="icon-link icon-link--twitter fade-in">
  <img src="https://cdn1.iconfinder.com/data/icons/logotypes/32/twitter-128.png">
</a>
<a href="https://www.instagram.com/abyac_999/" target="_blank" class="icon-link icon-link--ig fade-in">
  <img src="">
</a>
<a href="login.php" target="_self" class="icon-link sign-link" style = "color: white">Sign in/Register</a><a target="_self" class="icon-link sign-link2" style = "color: white;opacity:0;z-index:-1;">Or</a><a href="" target="_self" class="icon-link sign-link1" style = "color: white;opacity:0;z-index:-1;">Continue As a Guest</a>

</header>
<div class="container">
	<div class="row">

		
   
  
		
  </div>
  <div class="row hero-banner-v2 gradient-animation">
    <div class="smoke"></div>
			<div class="column">
				<div class="logo">
          <div class="app-icon">F</div>Fibonia</div>
				<div class="tagline">The best job app you've (n)ever heard of.</div>
				
				<div class="cta"><i class="fa fa-apple" aria-hidden="true"></i><i class="fa fa-android" aria-hidden="true"></i>
Download</div>
        </div>
        <div class="column">
				<div class="phone iphone">
          <div class="screen"></div>
          </div>
      
        </div>
     
  
		</div>

  <div class="row">
		<div class="hero-banner hero-banner-v3">
			<div class="content">
				
				<div class="logo">
          <div class="app-icon">F</div>
          Fibonia</div>
				<div class="tagline">The best job app you've (n)ever heard of.</div>
				
				<div class="cta"><i class="fa fa-apple" aria-hidden="true"></i><i class="fa fa-android" aria-hidden="true"></i>Download</div>
        <div class="mask"></div>
			</div>
      <div class="belowfold">
	<div class="row">
	<div class="column">
	<h3>Over 1000+ Jobs</h3>
	You will have access to thousdands of skilled individuals that will help you fix your household issues within a very short amount of time along with very reasonable prices compared to the social competitors! The possibilities are endless.
	</div>
	<div class="column">
    <div class="gif-stagger">
    <div id="stagger-gif-1" class="gif" ></div>	
		<div  id="stagger-gif-2" class="gif"></div>	
		<div  id="stagger-gif-3" class="gif"></div>	
		
		</div>
	</div>	
	</div>
	<div class="row">
    <div class="column">
    <h3>Select your Job</h3>
    Once you've chosen your job requirement, you will be meet with various individuals skilled within their fields that will help fix your household issues with ease and comfortability, all these individuals are thoroughly checked. Besides the checking, you can also tap on the individuals profiles to:
    <ul>
    <li>View their ratings among the community members who also had previous experiences with the worker.</li>
    <li>View their service prices (reasonable costs too!).</li>
    <li>Contact them via message to setup a time and place to meet.</li>
      </ul>
    </div>
	<div class="column">
 
    
		<div class="gif-grid">
			<div class="gif" id="grid-gif-1"></div><div class="gif" id="grid-gif-2"></div><div class="gif" id="grid-gif-3"></div><div class="gif" id="grid-gif-4"></div>
		</div>
	</div>
	
	</div>	
	<div class="row">
	<div class="column">
		
    <h3>App features</h3>

The app (that is available on all platforms that use the App Store and Google Play) contains various helpful features to make your experience with Fibonia be at ease at all times and costs! Some features that are included are login/registration systems, real-time updates, etc!

	</div>	
    
	<div class="column">
		<div href="phone.html" class="phone iphone1"><div class="screen"></div></div>
      
	</div>
	</div>
	
	<div class="row">
	<div class="social-module social-row">
    <h3>Features of Fibonia App</h3>
    <div class="column">
    	&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<a href="phone.html"><div class="cta"><i class="fa fa-apple" aria-hidden="true"></i><i class="fa fa-android" aria-hidden="true"></i> Check it out!</div></a>
    </div></div>
	</div>
	<div id="bottom-cta-bg" class="row">
	<div class="cta"><i class="fa fa-apple" aria-hidden="true"></i><i class="fa fa-android" aria-hidden="true"></i> Download</div>
    <canvas id="canvas2d"></canvas>
	</div>
	<div class="row">
	<div class="footer">
    <a href="aboutus.html">About Us</a> | <a href="aboutus.html">Blog</a> | <a href="fib.php">Tutorials</a><br>
    <a href="https://facebook.com/yakubyan">Facebook</a> | <a href="https://www.instagram.com/abyac_999/">Instagram</a> | <a href="terms.html">Terms of Service</a> | <a href="privacy.html">Privacy Policy</a> </div>
	</div>
        
</div>
    </div></body>
<style>
body{
  margin:0; font-size:18px;
  font-family: "Heebo", sans-serif;
  color:#F5FAFA;
  background:#000020;
  line-height:1.5;
}
a
{
  color: #fff;
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
  width: 200px;
  top: 29px;
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
 */
#menu
{
  position: fixed;
  width: 200px;
  height: 120%;
  margin: -100px 0 0 -50px;

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
  padding: 10px 0;
  font-size: 22px;
}

#menu li:hover {
  transition: 0.3s;
  text-decoration: underline;
}

/*
 * And let's slide it in from the left
 */
#menuToggle input:checked ~ ul
{
  transform: none;
}


div{
  margin:0;
  padding:0;
}
.container{
  width:100%;

  height:100%;
  display:block;
  box-sizing: border-box;
}

  .content{
  padding:20px;

  height:100%;
 
  box-sizing: border-box;
  z-index:999;
  position:relative;
 
}

.hero-banner-v1 .content{
   text-align:center;
   background: linear-gradient(45deg, rgba(35,193,202,.5), rgba(236,24,155,.5));
background-size: 400% 400%;
animation: gradient-animation 15s ease infinite;
}
.hero-banner-v2{
   text-align:left;
}

.hero-banner-v3 .content{
  color:#000033;
 text-align:center; background:url("https://i.giphy.com/media/XR9Dp54ZC4dji/giphy.webp");
  background-size:cover;
  background-position:center;
}

.hero-banner-v3 .logo{
  z-index:9999;
  position:relative;
    max-width:250px;
  margin:auto;
  text-align:center;
  margin-top:40px;
  margin-bottom:-20px;
}

.mask{
  background:#fff;
  width:400px;
  height:400px;
  border-radius:50%;
  position:absolute;
  top:-10%;
 left: 0; 
  right: 0; 
  margin-left: auto; 
  margin-right: auto;
  margin-top:40px;
  
}
.logo{
  margin-top:20px;
  font-size:3em;
  font-family:"Heebo";
  font-weight:900;
}
.hero-banner-v1 .logo{
  margin:auto;
}
.hero-banner-v2 .logo{
 
}

.row{
 
  box-sizing: border-box;
  display: flex;
 position:relative; flex-wrap:wrap;
  justify-content:center;
background: linear-gradient(to bottom,#000033,#000020);
}

.hero-banner{
  height:400px;
  background:#000;
  width: 100%;
  box-sizing: border-box;
}

.column{
 position:relative;
  padding:20px;
  box-sizing: border-box; 
  flex:1 0 400px;
  max-width:400px;
  font-family:"Muli";
}

.cta{
  border: 1px solid #F5FAFA;
    background: radial-gradient(#000033,#000020);
    border-radius: 6px;
    color: #F5FAFA;
    transition: .4s;
    cursor: pointer;
    outline: none;
  display:inline-block;
  padding:15px 30px;
  border-radius: 12px;
  letter-spacing:4px;
 font-size:1em; 
  box-sizing: border-box;
  cursor: pointer;
  font-weight:400;
  text-transform:uppercase;
 font-family:"Heebo";
}

.cta:hover{

      transform: translateY(-2px);
}

.hero-banner-v1 .cta{
   margin:20px auto;
}
.hero-banner-v2 .cta{
   margin:60px 0;
}

.hero-banner-v3 .cta{
  margin-top:-60px;
 
}

.gif{
  background-size:contain;
  background-position:center;
  background-repeat:no-repeat;
}

.gif-stagger{
  display:block;
  position:relative;
  width:310px;
  min-height:290px;
  height:100%;
  padding:10px;
  margin:auto;
  top: 50%;
  transform: translateY(-50%);
}

.gif-stagger .gif{
  border:1px solid #000;
  width:150px;
  height:150px;
  display:block;
  position:absolute;
  background-size:contain;
  background-position:center;
  background-repeat:no-repeat;
  box-shadow:-4px -4px 0px rgba(0,0,0,0.5);
 
  
}
.gif-stagger #stagger-gif-1{
  margin-left:0px;
  margin-top:0px;
  z-index:9;
  background-image:url("https://resize.rbl.ms/simage/https%3A%2F%2Fassets.rbl.ms%2F21065719%2F980x.gif/980%2C980/fKzxIVUmir8RyLEW/img.gif");
   animation-name:slideDown;
  animation-duration:.5s;
  animation-delay:.5s;
}
.gif-stagger #stagger-gif-2{
  margin-left:80px;
  margin-top:80px;
  z-index:99;
   background-image:url("https://resize.rbl.ms/simage/https%3A%2F%2Fassets.rbl.ms%2F21065719%2F980x.gif/980%2C980/fKzxIVUmir8RyLEW/img.gif");
   animation-name:slideDown;
  animation-duration:.5s;
  animation-delay:1s;
}
.gif-stagger #stagger-gif-3{
  margin-left:160px;
  margin-top:160px;
  z-index:999;
   background-image:url("https://resize.rbl.ms/simage/https%3A%2F%2Fassets.rbl.ms%2F21065719%2F980x.gif/980%2C980/fKzxIVUmir8RyLEW/img.gif");
   animation-name:slideDown;
  animation-duration:.5s;
  animation-delay:1.5s;
}

.gif-grid{
  width:auto;
  max-width:450px;
  margin:auto;
display:block;
   position: relative;
  top: 50%;
  transform: translateY(-50%);
  padding:4px 2px;
}

.gif-grid .gif{

  display:inline-block;
 width: calc(50% - 8px);
    padding-bottom: calc(50% - 8px);
  margin:2px 4px 0px 4px;

  
}

#grid-gif-1{
 background-image:url("https://resize.rbl.ms/simage/https%3A%2F%2Fassets.rbl.ms%2F21065719%2F980x.gif/980%2C980/fKzxIVUmir8RyLEW/img.gif");
}
#grid-gif-2{
 background-image:url("https://resize.rbl.ms/simage/https%3A%2F%2Fassets.rbl.ms%2F21065719%2F980x.gif/980%2C980/fKzxIVUmir8RyLEW/img.gif");
  background-size:contain;
}
#grid-gif-3{
 background-image:url("https://resize.rbl.ms/simage/https%3A%2F%2Fassets.rbl.ms%2F21065719%2F980x.gif/980%2C980/fKzxIVUmir8RyLEW/img.gif");
}
#grid-gif-4{
 background-image:url("https://resize.rbl.ms/simage/https%3A%2F%2Fassets.rbl.ms%2F21065719%2F980x.gif/980%2C980/fKzxIVUmir8RyLEW/img.gif");
}

h3{
  font-size:2em;

}

.social-module{
  height:auto;
  min-height:420px;
  display: flex;
  flex-wrap:wrap;
  width: 100%;
  justify-content: center;
}

.social-module h3{
  flex:0 0 stretch;
  width: 100%;
}



 .app-icon{
  background:linear-gradient(to bottom left, #E5189D, #41BAE1);
  width:100px;
  height:100px;
  border-radius:20px;
  line-height:107px;
  font-size:1.8em;
   box-sizing: border-box;
   text-shadow: 2px 2px 0px rgba(0,0,0,0.25);
   box-shadow:inset 0 0 0px 3px rgba(255,255,255,0.25);
}

.hero-banner-v1 .app-icon{
  margin:auto;
}

.hero-banner-v3 .app-icon, .hero-banner-v3 .cta {
  margin:auto;
  z-index:999999;
  position:relative;
  
}

.hero-banner-v3 .app-icon{
  text-align:center;
  margin-right: -40px;
  display:inline-block;
  transform:scale(.5);
  transform-origin: 20% 80%;
  color:#fff;
  
}



.hero-banner-v2 .app-icon{
  text-align:center;
  margin-right: -40px;
  display:inline-block;
left:-20px;
  transform:scale(.5);
  transform-origin: 0% 80%;
  
}


.hero-banner-v2 h1{
  display:inline-block;
}

.smoke{
  width:100%;
  height:100%;
  z-index:0;
  position:absolute;
  background-image:url("https://media.giphy.com/media/13bGgH9VnEDsuA/giphy.gif");
  bottom:0;
  left:0;
  background-size:cover;
  background-position:bottom;
  opacity:.5;
  mix-blend-mode: overlay;
  box-shadow:inset -6px 0 8px 20px rgba(255,255,255,1),;
}



.hero-banner-v3 .tagline{
  position:relative;
 max-width:200px;
margin:20px auto; 
  z-index:999999999;
}

.phone{
 margin:auto;
  width:570px;
  height:720px;
  margin-bottom:-20px;
 bottom:-2px;
  padding:65px 25px 0px 25px;
  box-sizing:border-box;
}

.iphone{
  background-image:url("https://i.imgur.com/x2fhpDR.png");
  background-position:top center;
  background-size:contain;
  top: 230px;
  background-repeat:no-repeat;
  z-index:9;
  position:relative;
}

.hero-banner-v1{
position:relative;
  overflow:hidden;
}
.hero-banner-v1 video{
  display:block;
position:absolute;
  top:0;
  margin:auto;
  width:100%;
}

.screen1{
background:url("https://i.ibb.co/d5R6Fb8/phone.png");
  background-size:100% auto;
  background-position:top center;
  top: 28.3px;
  right: -107px;
  background-repeat:no-repeat;
  width:59%;
  position:relative;
  height:94.6
  %;
z-index:-9;
 box-shadow:inset 0 -40px 20px 2px rgba(0,0,0,0.25);
}

@keyframes gradient-animation {
    0%{background-position:0% 84%}
    50%{background-position:100% 17%}
    100%{background-position:0% 84%}
}
.social-module .column{
  padding:0;
}
.instagram-post{
  width:calc(50% - 10px);
  padding-bottom:calc(50% - 10px);
  border-radius:3px;
  display:inline-block;
  margin:5px;
  background-size:contain;
  background-repeat:no-repeat;
}

.social-module h3{
  text-align:center;
}

.gradient-animation{
   height: 970px;
   background: linear-gradient(45deg, rgba(35,193,202,1), rgba(236,24,155,1));
background-size: 400% 400%;
animation: gradient-animation 15s ease infinite;
}


#bottom-cta-bg .cta{
  position:relative;
  margin:auto;
  margin-top:60px;
  margin-bottom:60px;
}

#bottom-cta-bg{
  background:none;
  position:relative;
}

#bottom-cta-bg canvas{
  position:absolute;
  top:0;
  left:0;
}

.iphone{ box-sizing:border-box;
  z-index:999;
  position:relative;
}

.iphone1{
  background-image:url("https://i.imgur.com/x2fhpDR.png");
  background-position:top center;
  background-size:contain;
  background-repeat:no-repeat;
  z-index:9;
  position:relative;
}
.iphone1{ box-sizing:border-box;
  z-index:999;
  position:relative;
}

.screen{
background:url("https://i.ibb.co/d5R6Fb8/phone.png");
  background-size:100% auto;
  background-position:top center;
  top: 48px;
  right: -75px;
  background-repeat:no-repeat;
  width:71%;
  position:relative;
  height:92.6%;
z-index:-9;
 box-shadow:inset 0 -40px 20px 2px rgba(0,0,0,0.25);
}

.column ul li{
  list-style:none;
  border-left:4px solid #fff;
  padding-left:10px;
  margin-left:-55px;
  margin-bottom:10px;
}


.row:after{
  display:block;
  content:"";
  width:100%;
  height:2px;
  margin:auto;
 background: linear-gradient(to right, rgba(255,255,255,0) 10%,rgba(255,255,255,.25) 50%,rgba(255,255,255,0) 90%);  
  position:absolute;
 
  bottom:0;
  left:0;
  right:0;
  z-index:999999;
}

.footer{
  padding:40px;
  width: 100%;
  text-align: center;
}

@keyframes slideDown{
  from{transform:translateY(-50px);}
  to {transform:translateY(0px);}
}
.full-gif{
  width:100%;
  height:100%;
}
    
.belowfold .row:nth-child(even){
  flex-direction:row-reverse;
}

.icon-link {
  transition: 0.4s;
  z-index: 10000000;
  position: absolute;
  right: 50px;
  top: 30px;
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
  top: 30px
}
.icon-link--ig {
  left: auto;
  right: 95px;
  top: 30px
}

.sign-link {
  left: auto;
  width: 150px;
  right: 1650px;
  top: 29px;
  text-size: 12px;
}

.sign-link1 {
  left: auto;
  width: 194px;
  right: 1400px;
  top: 29px;
    text-size: 12px;
}

.sign-link2 {
  left: auto;
  width: 20px;
  right: 1625px;
  top: 29px;
    text-size: 12px;

}

.profile-link {
  left: auto;
  width: 100px;
  right: 1620px;
  top: 60px
}

</style>
<script>
 window.sr = ScrollReveal();
	  sr.reveal('.belowfold .row', { delay: 200, easing: 'ease', duration: 400, scale: 0, mobile: false });
	  
	  function fadeIn(obj) {
	      $(obj).fadeIn(1000);
	  }

// Customizing a reveal set
sr.reveal('.gif-stagger .gif', { duration: 200, origin: 'top' }, 250);

sr.reveal('.gif-grid .gif', { 
  duration: 600,
  origin: 'left',
  rotate: { x: 200, y: 30, z: 0 }
}, 50);

sr.reveal('.instagram-post', { 
  duration: 600,
  origin: 'left',
  rotate: { x: 200, y: 30, z: 0 }
}, 50);

sr.reveal('.belowfold .phone', { 
  duration: 1000,
  origin: 'bottom'}, 150);



/**
 * The stars in our starfield!
 * Stars coordinate system is relative to the CENTER of the canvas
 * @param  {number} x 
 * @param  {number} y
 */
var Star = function(x, y, maxSpeed) {
    this.x = x;
    this.y = y;
    this.slope = y / x; // This only works because our origin is always (0,0)
    this.opacity = 0;
    this.speed = Math.max(Math.random() * maxSpeed, 1);
};

/**
 * Compute the distance of this star relative to any other point in space.
 * 
 * @param  {int} originX
 * @param  {int} originY
 * 
 * @return {float} The distance of this star to the given origin
 */
Star.prototype.distanceTo = function(originX, originY) {
    return Math.sqrt(Math.pow(originX - this.x, 2) + Math.pow(originY - this.y, 2));
};

/**
 * Reinitializes this star's attributes, without re-creating it 
 * 
 * @param  {number} x 
 * @param  {number} y
 * 
 * @return {Star} this star
 */
Star.prototype.resetPosition = function(x, y, maxSpeed) {
    Star.apply(this, arguments);
    return this;
};

/**
 * The BigBang factory creates stars (Should be called StarFactory, but that is
 * a WAY LESS COOL NAME! 
 * @type {Object}
 */
var BigBang = {
    /**
     * Returns a random star within a region of the space.
     * 
     * @param  {number} minX minimum X coordinate of the region
     * @param  {number} minY minimum Y coordinate of the region
     * @param  {number} maxX maximum X coordinate of the region
     * @param  {number} maxY maximum Y coordinate of the region
     * 
     * @return {Star} The random star
     */
    getRandomStar: function(minX, minY, maxX, maxY, maxSpeed) {
        var coords = BigBang.getRandomPosition(minX, minY, maxX, maxY);
        return new Star(coords.x, coords.y, maxSpeed);
    },

    /**
     * Gets a random (x,y) position within a bounding box
     * 
     * 
     * @param  {number} minX minimum X coordinate of the region
     * @param  {number} minY minimum Y coordinate of the region
     * @param  {number} maxX maximum X coordinate of the region
     * @param  {number} maxY maximum Y coordinate of the region
     * 
     * @return {Object} An object with random {x, y} positions
     */
    getRandomPosition: function(minX, minY, maxX, maxY) {
        return {
            x: Math.floor((Math.random() * maxX) + minX),
            y: Math.floor((Math.random() * maxY) + minY)
        };
    }
};

/**
 * Constructor function of our starfield. This just prepares the DOM nodes where
 * the scene will be rendered.
 * 
 * @param {string} canvasId The DOM Id of the <div> containing a <canvas> tag
 */
var StarField = function(containerId) {
    this.container = document.getElementById(containerId);
    this.canvasElem = this.container.getElementsByTagName('canvas')[0];
    this.canvas = this.canvasElem.getContext('2d');

    this.width = this.container.offsetWidth;
    this.height = this.container.offsetHeight;

    this.starField = [];
};

/**
 * Updates the properties for every star for the next frame to be rendered
 */
StarField.prototype._updateStarField = function() {
    var i, 
        star, 
        randomLoc, 
        increment;

    for (i = 0; i < this.numStars; i++) {
        star = this.starField[i];
        
        increment = Math.min(star.speed, Math.abs(star.speed / star.slope));
        star.x += (star.x > 0) ? increment : -increment;
        star.y = star.slope * star.x;
        
        star.opacity += star.speed / 100;
        
        // Recycle star obj if it goes out of the frame
        if ((Math.abs(star.x) > this.width / 2) || 
            (Math.abs(star.y) > this.height / 2)) {
            //randomLoc = BigBang.getRandomPosition(
            //    -this.width / 2, -this.height / 2, 
            //       this.width, this.height
            //);
            randomLoc = BigBang.getRandomPosition(
                -this.width / 10, -this.height / 10, 
                   this.width / 5, this.height / 5
            );
            star.resetPosition(randomLoc.x, randomLoc.y, this.maxStarSpeed);
        }
    }
};

/**
 * Renders the whole starfield (background + stars)
 * This method could be made more efficient by just blipping each star,
 * and not redrawing the whole frame
 */
StarField.prototype._renderStarField = function() {
    var i,
        star;
    // Background
    this.canvas.fillStyle = "#000033";
    this.canvas.fillRect(0, 0, this.width, this.height);
    // Stars
    for (i = 0; i < this.numStars; i++) {
        star = this.starField[i];
        this.canvas.fillStyle = "rgba(255, 255, 255, " + star.opacity + ")";
        this.canvas.fillRect(
            star.x + this.width / 2, 
            star.y + this.height / 2, 
            2, 2);
    }
};

/**
 * Function that handles the animation of each frame. Update the starfield
 * positions and re-render
 */
StarField.prototype._renderFrame = function(elapsedTime) {
    var timeSinceLastFrame = elapsedTime - (this.prevFrameTime || 0);
    
    window.requestAnimationFrame(this._renderFrame.bind(this));

    // Skip frames unless at least 30ms have passed since the last one
    // (Cap to ~30fps)
    if (timeSinceLastFrame >= 30 || !this.prevFrameTime) {
        this.prevFrameTime = elapsedTime;
        this._updateStarField();
        this._renderStarField();
    }
};

/**
 * Makes sure that the canvas size fits the size of its container
 */
StarField.prototype._adjustCanvasSize = function(width, height) {
    // Set the canvas size to match the container ID (and cache values)
    this.width = this.canvasElem.width = width || this.container.offsetWidth;
    this.height = this.canvasElem.height = height || this.container.offsetHeight;
};

/**
 * This listener compares the old container size with the new one, and caches
 * the new values.
 */
StarField.prototype._watchCanvasSize = function(elapsedTime) {
    var timeSinceLastCheck = elapsedTime - (this.prevCheckTime || 0),
        width,
        height;

    window.requestAnimationFrame(this._watchCanvasSize.bind(this));

    // Skip frames unless at least 333ms have passed since the last check
    // (Cap to ~3fps)
    if (timeSinceLastCheck >= 333 || !this.prevCheckTime) {
        this.prevCheckTime = elapsedTime;
        width = this.container.offsetWidth;
        height = this.container.offsetHeight;
        if (this.oldWidth !== width || this.oldHeight !== height) {
            this.oldWidth = width;
            this.oldHeight = height;
            this._adjustCanvasSize(width, height);
        }
    }
};

/**
 * Initializes the scene by resizing the canvas to the appropiate value, and
 * sets up the main loop.
 * @param {int} numStars Number of stars in our starfield
 */
StarField.prototype._initScene = function(numStars) {
    var i;
    for (i = 0; i < this.numStars; i++) {
        this.starField.push(
            BigBang.getRandomStar(-this.width / 2, -this.height / 2, this.width, this.height, this.maxStarSpeed)
        );
    }

    // Intervals not stored because I don't plan to detach them later...
    window.requestAnimationFrame(this._renderFrame.bind(this));
    window.requestAnimationFrame(this._watchCanvasSize.bind(this));
};

/**
 * Kicks off everything!
 * @param {int} numStars The number of stars to render
 * @param {int} maxStarSpeed Maximum speed of the stars (pixels / frame)
 */
StarField.prototype.render = function(numStars, maxStarSpeed) {
    this.numStars = numStars || 100;
    this.maxStarSpeed = maxStarSpeed || 3;

    this._initScene(this.numStars);
};

/**
 * requestAnimationFrame shim layer with setTimeout fallback
 * @see https://paulirish.com/2011/requestanimationframe-for-smart-animating
 */
(function() {
    var lastTime = 0;
    var vendors = ['ms', 'moz', 'webkit', 'o'];
    for(var x = 0; x < vendors.length && !window.requestAnimationFrame; ++x) {
        window.requestAnimationFrame = window[vendors[x]+'RequestAnimationFrame'];
        window.cancelAnimationFrame = 
          window[vendors[x]+'CancelAnimationFrame'] || window[vendors[x]+'CancelRequestAnimationFrame'];
    }
 
    if (!window.requestAnimationFrame)
        window.requestAnimationFrame = function(callback, element) {
            var currTime = new Date().getTime();
            var timeToCall = Math.max(0, 16 - (currTime - lastTime));
            var id = window.setTimeout(function() { callback(currTime + timeToCall); }, 
              timeToCall);
            lastTime = currTime + timeToCall;
            return id;
        };
 
    if (!window.cancelAnimationFrame)
        window.cancelAnimationFrame = function(id) {
            clearTimeout(id);
        };
}());

// Kick off!
var starField = new StarField('bottom-cta-bg').render(333, 3);
</script>