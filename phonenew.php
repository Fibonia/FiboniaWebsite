<?php
session_start();

if (!isset($_SESSION['loggedin']) && !isset($_SESSION['userData1']) && !isset($_SESSION['userData'])) {
	header('Location: phone.php');
	exit();
}
?>
<title>App Features | Fibonia</title>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="phone.js"></script>
<link href="phone.css" rel="stylesheet">
<link href="phone1.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
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
		// Animate loader off screen
		$(".load").fadeOut("slow");;
	});
</script>
<div class="preloader">
  <div class="preloader__cont">
    <div class="preloader__overlay"></div>
  </div>
</div>
<div class="main-content">
  <div class="main-content__inner">
    <div class="rotater"></div>
<div class="pages">
      <div class="page page-1">
        <div class="page__headings">
          <h2 class="page__headings-main">Responsive Sidebars</h2>
          <h4 class="page__headings-sub">
            Just scroll down!<br/> 
            You can download our apps on 
            <a href="#" target="_blank" class="page__headings-link">iOS/Android</a>
          </h4>
        </div>
      </div>
      <div class="page page-2">
        <h3 class="page__number">02</h3>
        <div class="page__headings">
          <h2 class="page__headings-main">Real-time updates on website</h2>
        </div>
      </div>
      <div class="page page-3">
        <h3 class="page__number">03</h3>
        <div class="page__headings">
          <h2 class="page__headings-main">Login/Registration system</h2>
        </div>
      </div>
      <div class="page page-4">
        <h3 class="page__number">04</h3>
        <div class="page__headings">
          <h2 class="page__headings-main">Activity and Order History Tabs</h2>
        </div>
      </div>
      <div class="page page-5">
        <h3 class="page__number">05</h3>
        <div class="page__headings">
          <h2 class="page__headings-main">Online Support</h2>
        </div>
      </div>
      <div class="page page-6">
        <h3 class="page__number">06</h3>
        <div class="page__headings">
          <h2 class="page__headings-main">Online Ticket Booking System</h2>
        </div>
      </div>
    </div>
  <!-- phone start -->
    <div class="phone">
      <div class="phone__bg"></div>
      <div class="phone__inner">
        <div class="phone__content">
          <div class="phone__iframes">
            <iframe class="phone__iframe phone__iframe-1" src="phone1.html"></iframe>
            <iframe class="phone__iframe phone__iframe-2" src="phone2.html"></iframe>
            <iframe class="phone__iframe phone__iframe-3" src="phone3.html"></iframe>
            <iframe class="phone__iframe phone__iframe-4" src="phone4.html"></iframe>
            <iframe class="phone__iframe phone__iframe-5" src="phone5.html"></iframe>
	    <iframe class="phone__iframe phone__iframe-6" src="phone6.html"></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- phone end -->
  </div>
  <nav class="pagination">
    <div class="pagination__arrow pagination__arrow--up js-up"></div>
    <div class="pagination__arrow pagination__arrow--down js-down"></div>
    <ul class="pagination__items">
      <li class="pagination__item active" data-page="1"</li>
      <li class="pagination__item" data-page="2"></li>
      <li class="pagination__item" data-page="3"></li>
      <li class="pagination__item" data-page="4"></li>
      <li class="pagination__item" data-page="5"></li>
      <li class="pagination__item" data-page="6"></li>
    </ul>
  </nav>
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
} 
</style>
<script>
function changeZIndex() {
      if (document.getElementById("x")) {
        document.getElementById("overlay-back").style.zIndex=10000;
        document.getElementById("overlay-back").style.opacity=0.6;
        document.getElementById("x").setAttribute("id", "y");
    }
    else {
        document.getElementById("overlay-back").style.zIndex= -1;
        document.getElementById("overlay-back").style.opacity=0;
        document.getElementById("y").setAttribute("id", "x");
    }
  
}
</script>
<div id="overlay-back"></div>
<nav role="navigation">
                        <div id="menuToggle">
    			 <input type="checkbox" style="left: -7px; top: -8px" id="x" onclick="changeZIndex();"/>
    			 <span></span>
    			 <span></span>
    			 <span></span>
    			  <ul id="menu" style="left: 6px; top: 56px">
      				<a href="home.php"><li text-decoration: None>Home</li></a>
      				<a href="offersnew.php"><li>Top Offers</li></a>
      				<a href="aboutnew.php"><li>About</li></a>
      				<a href="contactusnew.php"><li>Contact Us</li></a>
                                <a href="newsletternew.php"><li>Newsletters</li></a>
				<a href="phonepagenew.php"><li>iOS/Android</li></a>
				<a href="faqnew.php"><li>FAQ</li></a>
				<a href="privacynew.php"><li>Privacy</li></a>
				      <a href="termsnew.php"><li>Terms</li></a>
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
<a href="logout.php" target="_self" class="icon-link sign-link fade-in" style = "color: white">Sign Out</a>
<a href="https://www.fibonia.com/1/html/pages-profile.php" target="_self" class="icon-link profile-link fade-in" style = "color: white">Profile</a>
