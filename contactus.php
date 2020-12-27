<?php
session_start();

if (isset($_SESSION['loggedin']) || isset($_SESSION['userData1']) || isset($_SESSION['userData'])) {
	header('Location: contactusnew.php');
	exit();
}
?>
<head><title>Contact Us | Fibonia</title>
<meta name="viewport" content ="width=device-width,initial-scale=0.4,user-scalable=yes" />
<meta name="description" content="Do you have any questions/issues or have any suggestions for us? Then please leave a message for us to know!">
</head><script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="default.js"></script>
<script type="text/javascript" src= "redirect.js"></script>
<link href="default.css" rel="stylesheet">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
<script src="contact.js"></script>
<link rel="stylesheet" href="https://bigbangburger.com/css/fonts.css">
<link rel="stylesheet" href="form.css" >
<link href="contact.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
<script src="contact.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>


<link rel="icon" type="image/png" href="logo.png"><body><script type='text/javascript' data-cfasync='false'>window.purechatApi = { l: [], t: [], on: function () { this.l.push(arguments); } }; (function () { var done = false; var script = document.createElement('script'); script.async = true; script.type = 'text/javascript'; script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript'; document.getElementsByTagName('HEAD').item(0).appendChild(script); script.onreadystatechange = script.onload = function (e) { if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) { var w = new PCWidget({c: '572a0b6b-4be8-43b0-b0ad-f1c8e6254bf5', f: true }); done = true; } }; })();</script><script type='text/javascript' data-cfasync='false'>window.purechatApi = { l: [], t: [], on: function () { this.l.push(arguments); } }; (function () { var done = false; var script = document.createElement('script'); script.async = true; script.type = 'text/javascript'; script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript'; document.getElementsByTagName('HEAD').item(0).appendChild(script); script.onreadystatechange = script.onload = function (e) { if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) { var w = new PCWidget({c: '572a0b6b-4be8-43b0-b0ad-f1c8e6254bf5', f: true }); done = true; } }; })();</script>
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

	<script>
  $(window).load(function() {
    $('#bookload').fadeOut(1000);
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
<nav role="navigation">
                        <div id="menuToggle">
    			 <input type="checkbox" id="x" onclick="changeZIndex();" style="left: -7px; top: -7px" />
    			 <span></span>
    			 <span></span>
    			 <span></span>
    			  <ul id="menu">
      				<a href="fib.php"><li>Home</li></a>
      				<a href="offers.html"><li>Top Offers</li></a>
      				<a href="aboutus.html"><li>About</li></a>
      				<a href="contactus.html"><li>Contact Us</li></a>
                                <a href="newsletter.html"><li>Newsletters</li></a>
                                <a href="phonepage.html"><li>iOS/Android</li></a>
			        <a href="faq.html"><li>FAQ</li></a>
			        <a href="privacy.html"><li>Privacy</li></a>
			      <a href="terms.html"><li>Terms</li></a>
    			  </ul>
  			</div>
			</nav> 
<a href="https://www.facebook.com/yakubyan" target="_blank" class="icon-link">
  <img src="Facebook_logo-7.png">
</a>
<a href="https://twitter.com/search?q=sub%202%20pewds&src=typd" target="_blank" class="icon-link icon-link--twitter">
  <img src="twitter-128.png">
</a>
<a href="https://www.instagram.com/abyac_999/" target="_blank" class="icon-link icon-link--ig">
  <img src="580b57fcd9996e24bc43c521.png">
</a>


<div class="main">
  <div class="sidebar-hover">
    <p class="pagination">
      <span class="page">01</span> / <span class="total-pages">08</span>
    </p>
  </div>
  <div class="sidebar-real">
    <div data-page="1" class="nav-elem nav-1 active"></div>
    <div data-page="2" class="nav-elem nav-2"></div>
  </div>
  <div class="sections">
    <div class="section section-1">
      <div class="left-part"></div>
      <div class="content">
        <div class="bg-part"></div>
        <div class="bg-part"></div>
        <div class="bg-part"></div>
        <div class="bg-part"></div>
        <div class="bg-part"></div>
        <div class="bg-part"></div>
        <div class="bg-part"></div>
        <div class="bg-part"></div>
<a href="login.php" target="_self" class="icon-link sign-link" style = "color: white">Sign in/Register</a>
        <h2 class="section-heading">Contact Us</h2>
        <p class="additional-text">Please contact us!</p>
<div class="container">
            <div id="form-main">
                <div id="form-div">
                    <form class="montform" id="reused_form" method="post" action="contactus1.php" style="width: 812px" >
                        <p class="name">
                            &nbsp;</p>
						<p1>
                            <strong><span class="auto-style1">&nbsp; </span>
							<span class="auto-style2">  &nbsp  &nbsp Please submit a question 
							or comment</span></strong></p1>
						<p class="name">
                            <input name="name" type="text" class="feedback-input" required placeholder="First Name" id="name" style="width: 47%"/>
                            <input name="name0" type="text" class="feedback-input"  placeholder="Last Name" id="name0" style="width: 51%; margin-left: 410/></p>
  <p class="name">
                            <input name="phone" type="text" class="feedback-input"  placeholder="Telephone Number (Include international number)" id="name" />
                        </p>                      <p class="email">
                            <input name="email" type="email" class="feedback-input" required id="email" placeholder="Email" />
                        </p>
                        <p class="text">
                            <textarea name="message" class="feedback-input" id="comment" placeholder="Message" required></textarea>
                        </p>
                        <div class="submit">
                            <button type="submit" class="button-blue">SUBMIT</button>
                            <div class="ease"></div>
                        </div>
                    </form>
                </div>
		<?php if ($response): ?>
		<p><?php echo $response; ?></p>
		<?php endif; ?>
  
      </div>
    </div>
      </div>
      </div>
    <div class="section section-2">
      <div class="left-part"></div>
      <div class="content">
        <div class="bg-part"></div>
        <div class="bg-part"></div>
        <div class="bg-part"></div>
        <div class="bg-part"></div>
        <div class="bg-part"></div>
        <div class="bg-part"></div>
        <div class="bg-part"></div>
        <div class="bg-part"></div>
        <h2 class="section-heading">Office</h2>
        <p class="additional-text">Office Location</p>
      </div>
    </div>
  <h2 class="scroll-down">Scroll down</h2>
		<div class="content grid_12 contactmap" id="contact-map">
			<div class="grid_8 omega">
			<div class="vis">
			<div class="container1">						<p1>
                            <strong><span class="auto-style1"></span>
							<span class="auto-style2"> You may contact us at phone number (530)364-1284 or find us at 2401 Durant Avenue , Berkeley</span></strong></p1>
							</div>
				<div id="map_canvas"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12598.641709335381!2d-122.26995905432894!3d37.86823517587949!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80857c289fe9c1ab%3A0x2b2c1e272181fc70!2s2401%20Durant%20Ave%2C%20Berkeley%2C%20CA%2094704!5e0!3m2!1sen!2sus!4v1578798546241!5m2!1sen!2sus" width="810" height="550" frameborder="0" style="border:0;" allowfullscreen=""></iframe></div>
			</div>
			</div>
		</div>
</div>
</div>
<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
<link href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css' rel='stylesheet' type='text/css'>
<link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css' rel='stylesheet' type='text/css'>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script>
!function(a,b,c){"undefined"!=typeof module&&module.exports?module.exports=c():a[b]=c()}(this,"verge",function(){function a(){return{width:k(),height:l()}}function b(a,b){var c={};return b=+b||0,c.width=(c.right=a.right+b)-(c.left=a.left-b),c.height=(c.bottom=a.bottom+b)-(c.top=a.top-b),c}function c(a,c){return a=a&&!a.nodeType?a[0]:a,a&&1===a.nodeType?b(a.getBoundingClientRect(),c):!1}function d(b){b=null==b?a():1===b.nodeType?c(b):b;var d=b.height,e=b.width;return d="function"==typeof d?d.call(b):d,e="function"==typeof e?e.call(b):e,e/d}var e={},f="undefined"!=typeof window&&window,g="undefined"!=typeof document&&document,h=g&&g.documentElement,i=f.matchMedia||f.msMatchMedia,j=i?function(a){return!!i.call(f,a).matches}:function(){return!1},k=e.viewportW=function(){var a=h.clientWidth,b=f.innerWidth;return b>a?b:a},l=e.viewportH=function(){var a=h.clientHeight,b=f.innerHeight;return b>a?b:a};return e.mq=j,e.matchMedia=i?function(){return i.apply(f,arguments)}:function(){return{}},e.viewport=a,e.scrollX=function(){return f.pageXOffset||h.scrollLeft},e.scrollY=function(){return f.pageYOffset||h.scrollTop},e.rectangle=c,e.aspect=d,e.inX=function(a,b){var d=c(a,b);return!!d&&d.right>=0&&d.left<=k()},e.inY=function(a,b){var d=c(a,b);return!!d&&d.bottom>=0&&d.top<=l()},e.inViewport=function(a,b){var d=c(a,b);return!!d&&d.bottom>=0&&d.right>=0&&d.top<=l()&&d.left<=k()},e});

$(document).ready(function() {

  // import view port library function
  jQuery.extend(verge);

  // smooth scrolling of viewport to target
  $('a[href^="#"]').click(function(event) {
    event.preventDefault();
    $('html,body').animate({
      scrollTop: $(this.hash).offset().top - 50
    }, 900);
  });

  $('#down').click(function() {
    $('html,body').animate({
      scrollTop: $('#about').offset().top - 50
    }, 900);
  });

  var currentTime = new Date();
  var year = currentTime.getFullYear();

  // data for the portfolio cards front and back
  var projectData = [{
      title: 'Quotes',
      text: '<p>A FreeCodeCamp project, <a href="https://www.freecodecamp.com/challenges/zipline-build-a-random-quote-machine" target="_blank"><i>Build a Random Quote Machine</i></a>. The user is able to show a new random quote and send that quote to Twitter. <strong>Quotes</strong> was designed and optimized to be a mobile web app first.</p> <strong>Code:</strong> HTML5, CSS3, Javascript, jQuery<br> <strong>Layout:</strong> Bootstrap<br> <strong>Graphics Editor:</strong> Gimp, pixlr.com<br> <strong>Images:</strong> lorempixel.com<br> <strong>Fonts:</strong> Font-awesome<br> <strong>Data:</strong> random famous quotes API',

      image: ['http://2am.ninja/img/quotes.jpg'],
      site: [
        ['CodePen', 'fa-codepen', 'https://s.codepen.io/MutantSpore/full/dojjre'],
        ['Live Site', 'fa-link', 'http://2am.ninja/quotes/']
      ]
    }, {
      title: 'Twitch TV',
      text: '<p>A FreeCodeCamp project, <a href="https://www.freecodecamp.com/challenges/zipline-use-the-twitchtv-json-api" target="_blank"><i>Use the Twitchtv JSON API</i></a>. A user can see if Free Code Camp is currently streaming on Twitch.tv.</p> <strong>Code:</strong> HTML5, CSS3, Javascript, jQuery<br> <strong>Layout:</strong> Bootstrap<br> <strong>Fonts:</strong> Ubuntu Mono<br> <strong>Data:</strong> Twitchtv API',

      image: ['http://2am.ninja/img/twitch3.jpg'],
      site: [
        ['CodePen', 'fa-codepen', 'https://s.codepen.io/MutantSpore/full/jrEBgq']
  //      ,['Live Site', 'fa-link', 'http://2am.ninja/twitch/']
      ]
    }, {
      title: 'Wiki Search',
      text: '<p>A FreeCodeCamp project, <a href="https://www.freecodecamp.com/challenges/zipline-build-a-wikipedia-viewer" target="_blank"><i>Build a Wikipedia Viewer</i></a>. A user can search Wikipedia entries in a search box and see the resulting Wikipedia entries.</p> <strong>Code:</strong> HTML5, CSS3, Javascript, jQuery<br> <strong>Layout:</strong> Bootstrap<br> <strong>Graphics Editor:</strong> pixlr.com<br> <strong>Images:</strong> unsplash.com<br> <strong>Data:</strong> Wikipedia API',

      image: ['http://2am.ninja/img/wiki.jpg'],
      site: [
        ['CodePen', 'fa-codepen', 'https://s.codepen.io/MutantSpore/full/rVRwor']
      ]
    }, {
      title: 'Pomodoro Timer',
      text: '<p>A FreeCodeCamp project, <a href="https://www.freecodecamp.com/challenges/zipline-build-a-pomodoro-clock" target="_blank"><i>Build a Pomodoro Clock</i></a>. A user can start a 25 minute pomodoro, and the timer will go off once 25 minutes has elapsed. <strong>Pomodoro Timer</strong> was designed and optimized to be a mobile web app first.</p> <strong>Code:</strong> HTML5, HTML5 Canvas, CSS3, Javascript, jQuery, ion.sound<br> <strong>Layout:</strong> Bootstrap, HTML5 Canvas<br> <strong>Fonts:</strong> IcoMoon',

      image: ['http://2am.ninja/img/timer.jpg'],
      site: [
        ['CodePen', 'fa-codepen', 'https://s.codepen.io/MutantSpore/full/WvVZyM'],
        ['Live Site', 'fa-link', 'http://2am.ninja/timer/']
      ]
    }, {
      title: 'Local Weather',
      text: '<p>A FreeCodeCamp project, <a href="https://www.freecodecamp.com/challenges/zipline-show-the-local-weather" target="_blank"><i>Show the Local Weather</i></a>. A user can see the weather in my current location.. <strong>Local Weather</strong> was designed and optimized to be a mobile web app first.</p> <strong>Code:</strong> HTML5, CSS3, Javascript, jQuery<br> <strong>Layout:</strong> Bootstrap<br> <strong>Images:</strong> flickr.com<br> <strong>Fonts:</strong> Climacons, Open Sans<br> <strong>Data:</strong> Open Weather Map API, IP-API.com Geolocation API',

      image: ['http://2am.ninja/img/weather.jpg'],
      site: [
        ['CodePen', 'fa-codepen', 'https://codepen.io/MutantSpore/full/oXaoxb/']
      ]
    },
    /*                    
                        {
         title: 'Camper News',
         text: '<p>A FreeCodeCamp project, <a href="https://www.freecodecamp.com/challenges/zipline-stylize-stories-on-camper-news" target="_blank"><i>Stylize Stories on Camper News</i></a>. The user can browse recent posts from Camper News.</p> <strong>Code:</strong> HTML5, CSS3, Javascript, jQuery<br> <strong>Layout:</strong> Bootstrap, Masonary<br> <strong>Graphics Editor:</strong> Gimp, pixlr.com<br> <strong>Images:</strong> unsplash.com<br>  <strong>Data:</strong> Free Code Camp news API',

         image: ['http://2am.ninja/img/news.jpg'],
         site: [
           ['CodePen', 'fa-codepen', 'https://s.codepen.io/MutantSpore/debug/vOvBqY']
         ]
       }, 
     */
    {
      title: 'Bar Graph',
      text: '<p>A FreeCodeCamp project, <a href="https://www.freecodecamp.com/challenges/visualize-data-with-a-bar-chart" target="_blank"><i>Visualize Data with a Bar Chart </i></a>. The user can see US Gross Domestic Product by quarter, over time, with a mouse over tooltip.</p> <strong>Code:</strong> HTML5, CSS3, D3, SVG, Javascript, jQuery<br> <strong>Layout:</strong> Bootstrap',

      image: ['http://2am.ninja/img/bar-graph.jpg'],
      site: [
        ['CodePen', 'fa-codepen', 'https://s.codepen.io/MutantSpore/full/PNJMpg']
      ]
    }, {
      title: 'Heat Map',
      text: '<p>A FreeCodeCamp project, <a href="https://www.freecodecamp.com/challenges/visualize-data-with-a-heat-map" target="_blank"><i>Visualize Data with a Heat Map</i></a>. The user can view a heat map with data represented both on the Y and X axis, with mouse over tooltip.</p> <strong>Code:</strong> HTML5, CSS3, D3, SVG, Javascript, jQuery<br> <strong>Layout:</strong> Bootstrap',

      image: ['http://2am.ninja/img/heat-map.jpg'],
      site: [
        ['CodePen', 'fa-codepen', 'https://s.codepen.io/MutantSpore/full/VeKNEa']
      ]
    },
    /*                 
                     {
      title: 'Force Graph',
      text: '<p>A FreeCodeCamp project, <a href="https://www.freecodecamp.com/challenges/show-relationships-with-a-force-directed-graph" target="_blank"><i>Show Relationships with a Force Directed Graph</i></a>. The user can see a Force-directed Graph that shows which campers are posting links on Camper News to which domains.</p> <strong>Code:</strong> HTML5, CSS3, D3, SVG, Javascript, jQuery<br> <strong>Layout:</strong> Bootstrap<br>  <strong>Data:</strong> Free Code Camp news API',

      image: ['http://2am.ninja/img/force-graph.jpg'],
      site: [
        ['CodePen', 'fa-codepen', 'https://s.codepen.io/MutantSpore/debug/KVdbMO']
      ]
    }, 
    
    */
    {
      title: 'Tic-Tac-Toe',
      text: '<p>A FreeCodeCamp project, <a href="https://www.freecodecamp.com/challenges/build-a-tic-tac-toe-game" target="_blank"><i>Build a Tic Tac Toe Game</i></a>. The user can play a game of Tic Tac Toe with the computer.</p> <strong>Code:</strong> HTML5, CSS3, Javascript, jQuery<br> <strong>Layout:</strong> Materialize.css',

      image: ['http://2am.ninja/img/ttt.jpg'],
      site: [
        ['CodePen', 'fa-codepen', 'https://s.codepen.io/MutantSpore/full/jWWYLo']
      ]
    }
  ];

  // add listener to all the cards for click flipping
  function addListener() {
    var cards = document.querySelectorAll(".card.effect_click");

    for (var i = 0; i < cards.length; i++) {
      clickListener(cards[i]);
    }

    function clickListener(card) {
      card.addEventListener("click", function() {
        this.classList.toggle("flipped");
      });
    }
  }

  // create, populate and show portfolio project cards
  function showProjectCards() {
    var html = '';

    projectData.forEach(function(project) {
      html += '<div class="col-sm-6 col-md-4">';
      html += '<div class="card effect_click"><div class="card_front">';
      html += '<figure><img class="img-responsive" src="' + project.image[0] + '">';
      html += '<figcaption class="project-title">';
      html += project.title;
      html += '</figcaption></figure></div>';

      html += '<div class="card_back"><figure>';
      html += '<div class="project-title">' + project.title + '</div>';
      html += '<figcaption">';
      html += '<div class="project-body">' + project.text + '</div>';
      html += '<div><a data-toggle="tooltip" title="' + project.site[0][0] + '" data-placement="top" href="' + project.site[0][2] + '" target="_blank" class="btn btn-primary btn-lg btn-circle btn-lnk btn-lnk0"><i class="fa ' + project.site[0][1] + '" aria-hidden="true"></i></a>';

      if (typeof project.site[1] !== 'undefined') {
        html += '<a data-toggle="tooltip" title="' + project.site[1][0] + '" data-placement="top" href="' + project.site[1][2] + '" target="_blank" class="btn btn-primary btn-lg btn-circle btn-lnk btn-lnk1"><i class="fa ' + project.site[1][1] + '" aria-hidden="true"></i></a>';
      }

      html += '</div></figcaption></figure></div>';
      html += '</div>';
      html += '</div>';
    });

    $('#theProjects').append(html);
    addListener();
  }

  showProjectCards();
  $(".copyright").append("<span>© " + "2020" + " Fibonia. All rights reserved</span>");

  // turn on bootstrap tooltips
  $('[data-toggle="tooltip"]').tooltip();

  
});
</script>
<style>
#social-footer {
  width: 100%;
  text-align: center;
  color: white;
  background-color: black;
  opacity:0.8;    
}

.fa-stack-1x, .fa-stack-2x {
    left:-1000%;
    top:-110%;
}

#social-footer ul {
  margin: 0;
  padding: 0;
  list-style-type: none;
}

#social-footer ul li {
  display: inline;
  padding: 0.4em;
}

#social-footer a {
/*  color: #939393 !important; */
  color: white !important;
}

.blacktext {
  color: black;
}

footer {
  width: 100vw;
  position: fixed;
  bottom: -8.3%;
  left: 0;
  padding: 1% 5%;
  text-align: center;
  background-color: #000;
  opacity: 1;
  z-index: 100;

}




.fa-stack {
  margin: -2px;
}

.copyright {
  padding-bottom: 8px;
  padding-top: 2px;
  color: #555;
}

#down {
  position: absolute;
  opacity: 0.20;
  left: 50%;
  bottom: 10%;
  cursor: pointer;
}

.card {
  position: relative;
  width: 300px;
  height: 365px;
  margin-left: auto;
  margin-right: auto;
  margin-bottom: 20px;
  -webkit-perspective: 2000px;
  -moz-perspective: 2000px;
  perspective: 2000px;
  cursor: pointer;
}

.card img {
  width: calc(300px - 0px);
  height: calc(365px - 45px);
  border-top-left-radius: 6px;
  border-top-right-radius: 6px;
  border-style: solid;
  border-color: rgba(0,0,0,0.16);
  border-bottom-width: 1px;
}

.card_front, .card_back {
  position: absolute;
  left: 0px;
  top: 0px;
  width: inherit;
  height: inherit;
  border-style: solid;
  border-width: 0px;
  border-radius: 6px;
  border-color: #666;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  -webkit-transition: -webkit-transform 0.9s ease-in-out;
  transition: transform 0.9s ease-in-out;
  -webkit-transform-style: preserve-3d;
  -moz-transform-style: preserve-3d;
  transform-style: preserve-3d;
  box-shadow: 0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12)
}


.card_front:hover, .card_back:hover {
  left: -4px;
  top: -4px;
  box-shadow: 4px 4px 10px 0px rgba(0, 0, 0, 0.5);
}

.card_front {
  background-color: white;
}

.card_back {
  background-color: #fafffc;
  -webkit-transform: rotateY(179deg);
  -ms-transform: rotateY(179deg);
  transform: rotateY(179deg);
}

.card.effect_click.flipped .card_front {

  -webkit-transform: rotateY(-179deg);
  -ms-transform: rotateY(-179deg);
  transform: rotateY(-179deg);
}

.card.effect_click.flipped .card_back {

  -webkit-transform: rotateY(0deg);
  -ms-transform: rotateY(0deg);
  transform: rotateY(0deg);
}

.highlight {
  opacity: 0.6;
}

.highlight:hover {
  opacity: 1;
}



@media only screen and (max-width: 768px) {
  #contact {
    background-attachment: scroll;
  }

  #twoam {
    background-attachment: scroll;
  }

  .tagline1 {
    font-size: 1.2em;
  }

  .tagline2 {
    font-size: 2.8em;
  }

  .tagline3a, .tagline3b, .tagline3c {
    font-size: 1em;
  }

  .section-title {
    font-size: 2.6em;
  }

  .line {
    height: 2px;
    width: 70px;
    position: relative;
    top: -10px;
    display: inline-block;
    background-color: #666;
  }

  .icon-me {
    font-size: 7.5empx;
    padding-top: 10px;
    padding-bottom: 15px;
  }

  .icon-contact {
    font-size: 4.5em;
    padding-top: 10px;
    padding-bottom: 10px;
  }
}
</style>
</head>
<link rel="icon" type="image/png" href="logo.png"><body>
    <footer id='social-footer'>

<div class="text-center copyright">
        </div>
        <ul>

            <li class='highlight'>
                <a class="fa-stack fa-1x" data-toggle="tooltip" title="Email" data-placement="top" href="mailto:2am.ninja@outlook.com">
                    <i class="fa fa-square fa-stack-2x"></i>
                    <i class="fa fa-envelope fa-stack-1x blacktext"></i>
                </a>
            </li>

            <li class='highlight'>
                <a class="fa-stack fa-1x" data-toggle="tooltip" title="FreeCodeCamp" data-placement="top" href="https://www.freecodecamp.com/mutantspore" target="_blank">
                    <i class="fa fa-square fa-stack-2x"></i>
                    <i class="fa fa-fire fa-stack-1x blacktext"></i>
                </a>
            </li>

            <li class='highlight'>
                <a class="fa-stack fa-1x" data-toggle="tooltip" title="Linkedin" data-placement="top" href="https://www.linkedin.com/in/brucewilliamyoung" target="_blank"><i class="fa fa-linkedin-square fa-stack-2x"></i></a>
            </li>

            <li class='highlight'>
                <a class="fa-stack fa-1x" data-toggle="tooltip" title="Twitter" data-placement="top" href="https://twitter.com/mutantspore" target="_blank"><i class="fa fa-twitter-square fa-stack-2x"></i></a>
            </li>

            <li class='highlight'>
                <a class="fa-stack fa-1x" data-toggle="tooltip" title="GitHub" data-placement="top" href="https://github.com/mutantspore" target="_blank"><i class="fa fa-github-square fa-stack-2x"></i></a>
            </li>

            <li class='highlight'>
                <a class="fa-stack fa-1x" data-toggle="tooltip" title="CodePen" data-placement="top" href="https://codepen.io/MutantSpore/" target="_blank">
                    <i class="fa fa-square fa-stack-2x"></i>
                    <i class="fa fa-codepen fa-stack-1x blacktext"></i>
                </a>
            </li>

            <li class='highlight'>
                <a class="fa-stack fa-1x" data-toggle="tooltip" title="Facebook" data-placement="top" href="https://www.facebook.com/bruce.young.7505" target="_blank"><i class="fa fa-facebook-square fa-stack-2x"></i></a>
            </li>

            <li class='highlight'>
                <a class="fa-stack fa-1x" data-toggle="tooltip" title="Google+" data-placement="top" href="https://plus.google.com/102948303758999079100/posts/p/pub?hl=en" target="_blank"><i class="fa fa-google-plus-square fa-stack-2x"></i></a>
            </li>

        </ul>



        <


    </footer>
</body>