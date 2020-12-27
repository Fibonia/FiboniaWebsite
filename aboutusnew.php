<?php
session_start();

if (!isset($_SESSION['loggedin']) && !isset($_SESSION['userData1']) && !isset($_SESSION['userData'])) {
	header('Location: aboutus.php');
	exit();
}
?>
<head>
<link rel="icon" type="image/png" href="logo.png">
</head>
<title>About Us | Fibonia</title>
<!DOCTYPE html>
<html lang="en">
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<link rel="icon" type="image/png" href="logo.png">
<body><script type='text/javascript' data-cfasync='false'>window.purechatApi = { l: [], t: [], on: function () { this.l.push(arguments); } }; (function () { var done = false; var script = document.createElement('script'); script.async = true; script.type = 'text/javascript'; script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript'; document.getElementsByTagName('HEAD').item(0).appendChild(script); script.onreadystatechange = script.onload = function (e) { if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) { var w = new PCWidget({c: '572a0b6b-4be8-43b0-b0ad-f1c8e6254bf5', f: true }); done = true; } }; })();</script>
  <div class="load">
  <hr/><hr/><hr/><hr/>
</div>
</body>
<style>
  body{background:#ECF0F1}

.load{position:absolute;top:50%;left:50%;transform:translate(-50%, -50%);
  /*change these sizes to fit into your project*/
  width:100px;
  height:100px;
  z-index:10000;
}

ul a
{
  color: #000;
  transition: color 0.3s ease;
}

ul a:hover
{
  color: #000;
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
<head>
    <link rel="icon" type="image/png" href="logo.png">
  <meta charset="utf-8">
  <title>About Us</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="about.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Kaushan+Script&amp;subset=latin-ext" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i&amp;subset=latin-ext"
    rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i&amp;subset=latin-ext" rel="stylesheet">

</head>

<link rel="icon" type="image/png" href="logo.png"><body><script type='text/javascript' data-cfasync='false'>window.purechatApi = { l: [], t: [], on: function () { this.l.push(arguments); } }; (function () { var done = false; var script = document.createElement('script'); script.async = true; script.type = 'text/javascript'; script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript'; document.getElementsByTagName('HEAD').item(0).appendChild(script); script.onreadystatechange = script.onload = function (e) { if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) { var w = new PCWidget({c: '572a0b6b-4be8-43b0-b0ad-f1c8e6254bf5', f: true }); done = true; } }; })();</script>
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
    height     : 456%; 
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
      <a href="home.php"><li>Home</li></a>
      <a href="offersnew.php"><li>Top Offers</li></a>
      <a href="aboutusnew.php"><li>About</li></a>
      <a href="contactusnew.php"><li>Contact Us</li></a>
      <a href="newsletternew.php"><li>Newsletter</li></a>
      <a href="phonepagenew.php"><li>iOS/Android</li></a>
      <a href="faqnew.php"><li>FAQ</li></a>
      <a href="privacynew.php"><li>Privacy</li></a>
      <a href="termsnew.php"><li>Terms</li></a>
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
<a href="logout.php" target="_self" class="icon-link sign-link fade-in" style = "color: white">Sign Out</a>
<a href="https://www.fibonia.com/1/html/pages-profile.php" target="_self" class="icon-link profile-link fade-in" style = "color: white">Profile</a>    <div class="content fade-in">
      <div class="header-top overflow fade-in">
        <a href="web2.html" class="header-company-name fade-in" style = "color: white">Fibonia</a>
             
            </a>
          </li>
        </ul>
      </div>
      <div class="title-group fade-in">
        <p class="title-group-top fade-in">About Us</p>
        <h1 class="title-group-main fade-in">Welcome to Fibonia</h1>
      </div>
      <a href="#down" class="header-button fade-in">
        Learn more
      </a>
  <div id="down">
  </div>
      <ol class="header-slider overflow fade-in">
        <li>
          <a href="#down">Intro</a>
        </li>
        <li>
          <a href="#down2">Stats</a>
        </li>
        <li>
          <a href="#down2">About</a>
        </li>
        <li>
          <a href="#down3">Individuals</a>
        </li>
      </ol>
    </div>
  </header>
  <section class="about-us fade-in">
    <div class="content fade-in">
      <div class="title-group fade-in">
        <p class="title-group-top fade-in">What we do</p>
        <h2 class="title-group-main fade-in">Story about us</h2>
      </div>
      <p class="story fade-in">The company was founded by a group of Computer Science students from the bay area receiving education at the University of California at Berkeley. After a year of hard-work, this company has been fully established as of June, 2020.</p>
      <article class="images-group clearfix fade-in">
        <div class="images-group-child1 fade-in">
          <div class="image-hover">
            <a href="">
              <img src="https://i.lensdump.com/i/8KtxWK.png">
              <p>Instagram</p>
            </a>
          </div>
        </div>
        <div class="images-group-child2 fade-in">
          <div class="image-hover">
            <a href="">
              <img src="https://i.lensdump.com/i/8KtxWK.png">
              <p>Facebook</p>
            </a>
          </div>
        </div>
        <div class="images-group-child3 fade-in">
          <div class="image-hover">
            <a href="">
              <img src="https://i.lensdump.com/i/8KtxWK.png">
              <p>Twitter</p>
            </a>
          </div>
        </div>
      </article>
    </div>
<p class = "story fade-in">The company "Fibonia" was developed by co-founders Abel Yagubyan and Gurkaran Goindi at the beginning of June,2019. The team now contains a strong team of 3 members that assure the best of service for you with the best security possible. The algorithm and the back-end work of the website was developed by co-founders Abel Yagubyan and Gurkarn Goindi. Marketing and rest of the work is developed by Druv Punjabi.</p>  </section>
<div id= "down2">
</div>
  <section class="facts fade-in">
    <div class="content fade-in">
      <article class="facts-group clearfix fade-in">
        <div class="facts-group-child1 fade-in">
          <p>120</p>
          <p>Satisfied Customer Reviews</p>
        </div>
        <div class="facts-group-child2 fade-in">
          <p>1.2k</p>
          <p>Trip Sales</p>
        </div>
        <div class="facts-group-child3 fade-in">
          <p>15</p>
          <p>Awards Won</p>
        </div>
        <div class="facts-group-child4 fade-in">
          <p>1</p>
          <p>Year in the making</p>
        </div>
        <div class="facts-group-child5 fade-in">
          <p>5</p>
          <p>Sponsors</p>
        </div>
      </article>
    </div>
  </section>

  <section class="service fade-in">
    <div class="content fade-in">
      <div class="title-group fade-in">
        <p class="title-group-top fade-in">We work with</p>
        <h2 class="title-group-main fade-in">Amazing services</h2>
      </div>

      <div class="features clearfix fade-in">
        <div class="block border_bottom fade-in">
          <img alt="logo" src="https://i.lensdump.com/i/8KROpF.png">
          <h3 class="service-header fade-in">Service Time</h3>
          <p class="fade-in">We always assure for quick service and response under any inconvenience presented to our customers.</p>
        </div>
        <div class="block border_bottom fade-in">
          <img alt="logo" src="https://i.lensdump.com/i/8KReoq.png">
          <h3 class="service-header fade-in">Trip Sales</h3>
          <p>Our trip sales and prices are the cheapest among all other service websites, along with very reasonable service fees.</p>
        </div>
        <div class="block border_bottom fade-in">
          <img alt="logo" src="https://i.lensdump.com/i/8KRHF3.png">
          <h3 class="service-header fade-in">Web Security</h3>
          <p>The web pages on this entire website are encrypted to assure best security for your account details and payment information.</p>
        </div>
        <div class="block fade-in">
          <img alt="logo" src="https://i.lensdump.com/i/8KR7Rr.png">
          <h3 class="service-header fade-in">Trip Offers</h3>
          <p>The web pages are updated daily to attract customers with our latest offers and to assure the best for the customers.</p>
        </div>
        <div class="block fade-in">
          <img alt="logo" src="https://i.lensdump.com/i/8KRzI0.png">
          <h3 class="service-header fade-in">Home Page</h3>
          <p>As previously mentioned, the home page is always updated dialy to display the best offers to oncoming customers.</p>
        </div>
        <div class="block fade-in">
          <img alt="logo" src="https://i.lensdump.com/i/8KRSBD.png">
          <h3 class="service-header fade-in">Digital Apps</h3>
          <p>Apps to use on mobile phones under iOS/Android are currently being developped and will be made public very soon.</p>
	</div>
      </div>
    </div>
  </section>
<section>
<div class="Our_Team fade-in">
	<div class="container fade-in">
		<div class="section_title fade-in">
			<h1>Our Team</h1>
			<p>Individuals that founded the company</p>
		</div>
		<div class="team fade-in">
			<div class="person fade-in">
				<img src="https://scontent-lax3-1.xx.fbcdn.net/v/t1.0-9/44144911_1126781074143218_5433298242651553792_n.jpg?_nc_cat=100&_nc_ohc=cFZcUYFIMagAQlEqGb9tiMUwMK4rbHKTWJhAijMbkY8xL_J6w10CwuUDA&_nc_ht=scontent-lax3-1.xx&oh=aaebdd027b812e82d28e56e7ce901db1&oe=5EB2CD1B">
				<h1>Gurkarn Goindi</h1>
				<span>Algorithm Developer</span>
				<div class="social-media fade-in">
					<a href="https://www.facebook.com/gurkaransingh.goindi" target="_blank"t><img src="https://cdn0.iconfinder.com/data/icons/social-media-2119/154/facebook-128.png"></a>
					<a href="https://twitter.com/" target="_blank"t><img src="https://cdn0.iconfinder.com/data/icons/social-media-2119/154/twitter-128.png"></a>
					<a href="https://www.linkedin.com/in/gurkaran-singh-goindi/" target="_blank"t><img src="https://cdn0.iconfinder.com/data/icons/social-media-2119/154/linkedin-128.png"></a>
				</div>
			</div>
			<div class="person fade-in">
				<img src="https://berkeley.learningu.org/media/uploaded/bio_pictures/19_02/photo.PNG">
				<h1>Abel Yagubyan</h1>
				<span>Algorithm and Web-page developer</span>
				<div class="social-media fade-in">
					<a href="https://www.facebook.com/yakubyan" target="_blank"t><img src="https://cdn0.iconfinder.com/data/icons/social-media-2119/154/facebook-128.png"></a>
					<a href="https://twitter.com/" target="_blank"t><img src="https://cdn0.iconfinder.com/data/icons/social-media-2119/154/twitter-128.png"></a>
					<a href="https://www.linkedin.com/in/abelyagubyan" target="_blank"t><img src="https://cdn0.iconfinder.com/data/icons/social-media-2119/154/linkedin-128.png"></a>
				</div>
			</div>
			<div class="person fade-in">
				<img src="https://media-exp1.licdn.com/dms/image/C5103AQFHZt1QTRICCw/profile-displayphoto-shrink_200_200/0?e=1586995200&v=beta&t=3vvzhPNMW7WzPMH54IhbIPv-cMOWTk5oxLfbzSvrHys">
				<h1>Druv Punjabi</h1>
				<span>Coder</span>
				<div class="social-media fade-in">
					<a href="https://www.facebook.com/druv.punjabi" target="_blank"t><img src="https://cdn0.iconfinder.com/data/icons/social-media-2119/154/facebook-128.png"></a>
					<a href="twitter.com" target="_blank"t><img src="https://cdn0.iconfinder.com/data/icons/social-media-2119/154/twitter-128.png"></a>
					<a href="https://www.linkedin.com/in/abelyagubyan" target="_blank"t><img src="https://cdn0.iconfinder.com/data/icons/social-media-2119/154/linkedin-128.png"></a>
				</div>
			</div>
			<div class="clear fade-in"></div>
		</div>
	</div>
</div>
</section>
<div id= "down3">
  <footer>
    <div class="content overflow">
      <div class="footer-1">
        <p class="footer-company-name">Fibonia</p>
        <p class="footer-company-description">Fibonia is a private-based company that assures the best quality for its customers. We do indeed reach out to customers outside of the website via Social Media and Blog posts, please find them here.</p>

        <div class="followers">
          <p class="followers-num">300</p>
          <p> followers</p>
        </div>

        <div class="follow">
          <p>Follow Us:</p>
          <ul class="follow-menu">
            <li>
              <a href="#" class="follow-menu-sprite sprite-facebook"></a>
            </li>
            <li>
              <a href="#" class="follow-menu-sprite sprite-twitter"></a>
            </li>
            <li>
              <a href="#" class="follow-menu-sprite sprite-instagram"></a>
            </li>
            <li>
              <a href="#" class="follow-menu-sprite sprite-pinterest"></a>
            </li>
            <li>
              <a href="#" class="follow-menu-sprite sprite-google-plus"></a>
            </li>
            <li>
              <a href="#" class="follow-menu-sprite sprite-youtube"></a>
            </li>
            <li>
              <a href="#" class="follow-menu-sprite sprite-dribbble"></a>
            </li>
            <li>
              <a href="#" class="follow-menu-sprite sprite-tumblr"></a>
            </li>
          </ul>
        </div>

        <form class="subscribe overflow">
          <input type="text" placeholder="Your Email..." id="subscribe">
          <input type="button" value="subscribe">
        </form>
      </div>
      <div>
        <h3 class="footer-caption">Blogs</h3>
        <a href="https://www.blog.fibonia.com/" class="footer-blog overflow">
          <img alt="pic" src="https://images.trvl-media.com/media/content/expus/graphics/launch/home/tvly/150324_flights-hero-image_1330x742.jpg">
          <div>
            <p class="blog-caption">Trip prices are cheaper than ever!</p>
            <p class="blog-date">Dec 9, 2019</p>
          </div>
        </a>

        <a href="https://www.blog.fibonia.com/" class="footer-blog overflow">
          <img alt="pic" src="https://cnet4.cbsistatic.com/img/9CGqDTDSgClHm88eqIUUVd66OCs=/868x488/2017/10/31/a22348c2-6d9b-4c45-9b4d-e5e2d1ce0344/iphone-x-comparisons-01.jpg">
          <div>
            <p class="blog-caption">The team has been working hard on an app!</p>
            <p class="blog-date">Oct 9, 2019</p>
          </div>
        </a>

        <a href="https://www.blog.fibonia.com/" class="footer-blog overflow">
          <img alt="pic" src="https://cdn-media-1.freecodecamp.org/images/1*rV6_99F42Jr7uR5YtLrHrQ.jpeg">
          <div>
            <p class="blog-caption">Website Development has been finally done!</p>
            <p class="blog-date">Sep 9, 2019</p>
          </div>
        </a>
      </div>
      <div>
        <h3 class="footer-caption">instagram</h3>
        <div class="footer-instagram">
          <a href=""><img src="https://scontent-lax3-1.xx.fbcdn.net/v/t1.0-9/52065949_2015941051774947_2922142619729395712_n.jpg?_nc_cat=102&_nc_ohc=Llny2H2I8nwAQkGI7xFcmeth9nzU1wp29JadVEJBjLoSrz8iAX63FWI7g&_nc_ht=scontent-lax3-1.xx&oh=dab43168cae99c244c933d3c9a17e34f&oe=5E66935F"></a>
          <a href=""><img src="https://scontent-lax3-1.xx.fbcdn.net/v/t1.0-9/52065949_2015941051774947_2922142619729395712_n.jpg?_nc_cat=102&_nc_ohc=Llny2H2I8nwAQkGI7xFcmeth9nzU1wp29JadVEJBjLoSrz8iAX63FWI7g&_nc_ht=scontent-lax3-1.xx&oh=dab43168cae99c244c933d3c9a17e34f&oe=5E66935F"></a>
          <a href=""><img src="https://scontent-lax3-1.xx.fbcdn.net/v/t1.0-9/52065949_2015941051774947_2922142619729395712_n.jpg?_nc_cat=102&_nc_ohc=Llny2H2I8nwAQkGI7xFcmeth9nzU1wp29JadVEJBjLoSrz8iAX63FWI7g&_nc_ht=scontent-lax3-1.xx&oh=dab43168cae99c244c933d3c9a17e34f&oe=5E66935F"></a>
          <a href=""><img src="https://scontent-lax3-1.xx.fbcdn.net/v/t1.0-9/52065949_2015941051774947_2922142619729395712_n.jpg?_nc_cat=102&_nc_ohc=Llny2H2I8nwAQkGI7xFcmeth9nzU1wp29JadVEJBjLoSrz8iAX63FWI7g&_nc_ht=scontent-lax3-1.xx&oh=dab43168cae99c244c933d3c9a17e34f&oe=5E66935F"></a>
          <a href=""><img src="https://scontent-lax3-1.xx.fbcdn.net/v/t1.0-9/52065949_2015941051774947_2922142619729395712_n.jpg?_nc_cat=102&_nc_ohc=Llny2H2I8nwAQkGI7xFcmeth9nzU1wp29JadVEJBjLoSrz8iAX63FWI7g&_nc_ht=scontent-lax3-1.xx&oh=dab43168cae99c244c933d3c9a17e34f&oe=5E66935F"></a>
          <a href=""><img src="https://scontent-lax3-1.xx.fbcdn.net/v/t1.0-9/52065949_2015941051774947_2922142619729395712_n.jpg?_nc_cat=102&_nc_ohc=Llny2H2I8nwAQkGI7xFcmeth9nzU1wp29JadVEJBjLoSrz8iAX63FWI7g&_nc_ht=scontent-lax3-1.xx&oh=dab43168cae99c244c933d3c9a17e34f&oe=5E66935F"></a>
          <a href=""><img src="https://scontent-lax3-1.xx.fbcdn.net/v/t1.0-9/52065949_2015941051774947_2922142619729395712_n.jpg?_nc_cat=102&_nc_ohc=Llny2H2I8nwAQkGI7xFcmeth9nzU1wp29JadVEJBjLoSrz8iAX63FWI7g&_nc_ht=scontent-lax3-1.xx&oh=dab43168cae99c244c933d3c9a17e34f&oe=5E66935F"></a>
          <a href=""><img src="https://scontent-lax3-1.xx.fbcdn.net/v/t1.0-9/52065949_2015941051774947_2922142619729395712_n.jpg?_nc_cat=102&_nc_ohc=Llny2H2I8nwAQkGI7xFcmeth9nzU1wp29JadVEJBjLoSrz8iAX63FWI7g&_nc_ht=scontent-lax3-1.xx&oh=dab43168cae99c244c933d3c9a17e34f&oe=5E66935F"></a>
          <a href=""><img src="https://scontent-lax3-1.xx.fbcdn.net/v/t1.0-9/52065949_2015941051774947_2922142619729395712_n.jpg?_nc_cat=102&_nc_ohc=Llny2H2I8nwAQkGI7xFcmeth9nzU1wp29JadVEJBjLoSrz8iAX63FWI7g&_nc_ht=scontent-lax3-1.xx&oh=dab43168cae99c244c933d3c9a17e34f&oe=5E66935F"></a>
     </div>
        <a href="https://www.instagram.com/abyac_999/" class="more-photos">View more photos</a>
      </div>
    </div>
  </footer>
<style>

html {

    background-color: white;
    font-size: 62.5%;
    font-weight: 400;
    font-style: normal;
    color: white;
    font-family: "Montserrat", sans-serif;
  }
  
  body,
  html {
    margin: 0;
    padding: 0;
  }
  
a {
    text-decoration: none;
    color: inherit;
    text-transform: uppercase;
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
 * at the top left of the screen
 */
#menu
{
  position: fixed;
  width: 210px;
  height: 1045px;
  margin: -100px 0 0 -50px;
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

  p {
    margin: 0;
    display: inline;
  }
  
.fade-in {
	opacity: 1;
	animation-name: fadeInOpacity;
	animation-iteration-count: 1;
	animation-timing-function: ease-in;
	animation-duration: 2s;
}

@keyframes fadeInOpacity {
	0% {
		opacity: 0;
	}
	100% {
		opacity: 1;
	}
}

  h1,
  h2,
  h3 {
    margin: 0;
    font-weight: unset;
  }
  
  .content {
    width: 1200px;
    min-width: 1200px;
    margin: 0 auto;
  }
  
  .overflow {
    overflow: hidden;
  }
  
  .title-group {
    text-align: center;
  }
  
  .title-group:after {
    content: "";
    width: 60px;
    display: block;
    margin: 0 auto;
    border-bottom: 3px solid #f38181;
  }
  
  .title-group-top {
    font-family: "Kaushan Script", sans-serif;
    display: block;
  }
  
  .title-group-main {
    font-weight: bold;
    text-transform: uppercase;
    transform: scale(0.95, 1);
  }
  
  .clearfix::after {
    content: "";
    display: block;
    clear: both;
  }
  
  /******************** HEADER ********************/
  header {
    background: linear-gradient(
        rgba(2, 129, 129, 0.9),
        rgba(252, 227, 138, 0.9)
      ),
      url("https://i.lensdump.com/i/8sklX9.jpg");
    background-position: top;
  }
  
  .header-top {
    padding-top: 20px;
  }
  
  header .title-group:after {
    margin-top: 54px;
    border-bottom-color: white;
  }
  
  .header-company-name {
    font-size: 3em;
    font-weight: bold;
    float: left;
    text-transform: none;
  }
  
  .header-menu {
    font-size: 1.4em;
    list-style: none;
    float: right;
  }
  
  ul.header-menu li {
    display: inline-block;
    margin-right: 52px;
    border-bottom: 2px solid transparent;
    padding-bottom: 7px;
  }
  
  ul.header-menu > li:nth-last-child(2) {
    margin-right: 36px;
    margin-left: -3px;
  }
  
  ul.header-menu > li:nth-last-child(1) {
    margin-right: 0;
  }
  
  ul.header-menu li:hover {
    border-color: #fce38a;
    color: #fce38a;
  }
  
  header .title-group {
    margin: 135px 180px 0 180px;
  }
  
  header .title-group-top {
    margin-bottom: 25px;
    font-size: 7.2em;
  }
  
  header .title-group-main {
    font-size: 15em;
    line-height: 140px;
  }
  
  header .title-divider {
    background-color: white;
    margin-top: 53px;
  }
  
  .header-menu-sprite {
    background-image: url(https://i.lensdump.com/i/83Op13.png);
    background-repeat: no-repeat;
    display: inline-block;
  }
  
  .sprite-cart {
    width: 18px;
    height: 15px;
    background-position: -5px -5px;
  }
  
  .sprite-search {
    width: 18px;
    height: 18px;
    background-position: -33px -5px;
  }
  
  .header-button {
    outline: 3px solid white;
    outline-offset: -3px;
    width: 160px;
    height: 40px;
    font-size: 1.4em;
    margin: 50px auto 155px auto;
    display: block;
    line-height: 40px;
    text-align: center;
    font-weight: bold;
    cursor: pointer;
    transition: 0.4s;
  }
  
  .header-button:hover {
    color: rgba(243, 129, 129, 1);
    outline-color: rgba(243, 129, 129, 1);
  }
  
  .header-button:active {
    background-color: rgba(243, 129, 129, 1);
    color: white;
  }
  
  .header-slider {
    counter-reset: item;
    list-style-type: none;
    padding: 0 0 20px 0;
  }
  
  .header-slider li {
    float: left;
    font-size: 1.8em;
    width: 23.12%;
    border-top: 3px solid white;
    padding-top: 20px;
    margin-right: 30px;
    opacity: 0.7;
    cursor: pointer;
  }
  
  .header-slider li a {
    margin-left: -50px;
  }
  
  .header-slider > li:nth-last-child(1) {
    margin-right: 0;
  }
  
  .header-slider > li:hover:before {
    transition: 0.5s;
    border-top: 3px solid #f38181;
  }
  
  .header-slider li:before {
    content: "0" counter(item) "  ";
    counter-increment: item;
    font-size: 1.3em;
    font-weight: bold;
    border-top: 3px solid transparent;
    padding-right: 50px;
    padding-top: 20px;
  }
  
  .header-slider li:hover {
    opacity: 1;
  }
  /******************** HEADER ********************/
  /******************** SECTION 1 ********************/
  .about-us {
    color: black;
  }
  .about-us .title-group {
    margin-top: 90px;
  }
  
  .about-us .title-group-top {
    font-size: 2.4em;
    margin-bottom: 10px;
  }
  
  .about-us .title-group-main {
    font-size: 3em;
  }
  
  .about-us .title-group:after {
    margin-top: 31px;
  }
  
  .about-us .story {
    color: #999999;
    font-family: "Roboto", sans-serif;
    font-size: 1.5em;
    line-height: 1.9em;
    text-align: center;
    margin: 36px auto 65px auto;
    width: 960px;
    display: block;
  }
  
  .about-us .images-group {
    margin-bottom: 110px;
  }
  
  .about-us .images-group [class^="images-group-child"] {
    width: 31.4%;
    height: 250px;
    float: left;
    vertical-align: middle;
    box-sizing: border-box;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
  }
  
  .about-us .image-hover {
    display: none;
  }
  
  .image-hover p {
    display: block;
  }
  
  .about-us [class^="images-group-child"]:hover .image-hover {
    color: white;
    font-weight: bold;
    font-size: 1.8em;
    z-index: 1;
    position: absolute;
    left: -10px;
    top: -10px;
    right: 10px;
    bottom: 10px;
    text-align: center;
    display: inherit;
  }
  
  .about-us .images-group-child1 {
    background: url("https://i.lensdump.com/i/83LYPo.jpg");
  }
  
  .about-us .images-group-child2 {
    background: url("https://i.lensdump.com/i/83LMKi.jpg");
  }
  
  .about-us .images-group-child3 {
    background: url("https://i.lensdump.com/i/83Luj9.jpg");
  }
  
  .about-us [class^="images-group-child"]:hover {
    background: #95e1d3;
  }
  
  .about-us [class^="images-group-child"]:hover .image-hover a {
    height: 100%;
    display: block;
  }
  
  .about-us [class^="images-group-child"]:hover .image-hover a img {
    display: block;
    margin: 0 auto;
    padding-top: 105px;
    padding-bottom: 7px;
  }
  
  .about-us .images-group .images-group-child2 {
    margin: 0 33px;
  }
  
  .about-us .images-group .images-group-child1:hover .image-hover {
    background: linear-gradient(
        rgba(243, 129, 129, 0.9),
        rgba(252, 227, 138, 0.9)
      ),
      url("https://i.lensdump.com/i/83LYPo.jpg");
  }
  
  .about-us .images-group .images-group-child2:hover .image-hover {
    background: linear-gradient(
        rgba(243, 129, 129, 0.9),
        rgba(252, 227, 138, 0.9)
      ),
      url("https://i.lensdump.com/i/83LMKi.jpg");
  }
  
  .about-us .images-group .images-group-child3:hover .image-hover {
    background: linear-gradient(
        rgba(243, 129, 129, 0.9),
        rgba(252, 227, 138, 0.9)
      ),
      url("https://i.lensdump.com/i/83Luj9.jpg");
  }
  /******************** SECTION 1 ********************/
  /******************** SECTION 2 ********************/
  
  .facts {
    background-color: #95e1d3;
  }
  
  .facts .facts-group [class^="facts-group-child"] {
    width: 20%;
    float: left;
    vertical-align: middle;
    box-sizing: border-box;
    text-align: center;
    padding: 95px 0;
    border-right: 1px solid rgba(255, 255, 255, 0.3);
    border-left: 1px solid rgba(255, 255, 255, 0.3);
  }
  
  .facts .facts-group [class^="facts-group-child"] p {
    display: block;
  }
  
  .facts .facts-group [class^="facts-group-child"] p:first-child {
    font-size: 7.2em;
    font-weight: bold;
  }
  
  .facts .facts-group [class^="facts-group-child"] p:last-child {
    font-size: 1.4em;
    text-transform: uppercase;
    margin: 10px 0;
  }
  /******************** SECTION 2 ********************/
  /******************** SECTION 3 ********************/
  .service {
    color: black;
  }
  .service .title-group {
    margin-top: 108px;
  }
  
  .service .title-group-top {
    font-size: 2.4em;
    margin-bottom: 10px;
  }
  
  .service .title-group-main {
    font-size: 3em;
  }
  
  .service .title-group:after {
    margin-top: 34px;
  }
  
  .features {
    margin-bottom: 50px;
    margin-top: 20px;
    display: inline-block;
  }
  
  .block {
    max-width: 31%;
    height: auto;
    padding: 44px 0 11px 28px;
    display: inline-block;
    vertical-align: top;
    margin-right: -0.25em;
  }
  
  div.border_bottom {
    border-bottom: 1px solid #e5e5e5;
    vertical-align: bottom;
  }
  
  .block img {
    float: left;
    margin-bottom: 70px;
  }
  
  .block p {
    color: #999999;
    font-size: 1.5em;
    font-family: "Roboto", sans-serif;
    margin: 0 20px 43px 61px;
    display: block;
    line-height: 1.5em;
  }
  
  .service-header {
    font-size: 1.4em;
    margin-bottom: 10px;
    text-transform: uppercase;
    color: #333333;
    margin-left: 61px;
  }
  /******************** SECTION 3 ********************/
  /******************** FOOTER ********************/
  footer {
    background-color: #f8f8f8;
    padding-top: 64px;
    margin-top: -20px;
    color: #333333;
  }
  
  footer .content {
    padding-bottom: 39px;
    border-bottom: 1px solid #e5e5e5;
  }
  
  footer .content > div {
    float: left;
    width: 40%;
    margin-right: 30px;
  }
  
  footer .content > div:nth-child(2) {
    width: 32.3%;
  }
  
  footer .content > div:nth-child(3) {
    width: 22.7%;
    margin-right: 0;
  }
  
  .footer-company-name {
    font-size: 4.6em;
    font-weight: bold;
    color: #cccccc;
    display: block;
  }
  
  .footer-company-description {
    font-size: 1.5em;
    font-family: "Roboto", sans-serif;
    color: #999999;
    line-height: 1.6em;
    margin: 20px 0;
    display: block;
  }
  
  footer .followers {
    font-size: 1.4em;
    margin-top: 45px;
    padding-bottom: 17px;
    border-bottom: 1px solid #e5e5e5;
  }
  
  footer .followers .followers-num {
    font-size: 1.29em;
    font-weight: bold;
  }
  
  footer .follow {
    font-family: "Roboto", sans-serif;
    font-size: 1.5em;
    font-weight: lighter;
    font-style: italic;
    line-height: 1.6em;
    margin-top: 13px;
  }
  
  .follow-menu {
    list-style: none;
    display: inline;
    margin-left: -20px;
  }
  
  .follow-menu-sprite {
    background-image: url("https://i.lensdump.com/i/8Kmtcc.png");
    background-repeat: no-repeat;
    display: block;
  }
  
  .sprite-dribbble {
    width: 16px;
    height: 16px;
    background-position: -5px -5px;
  }
  
  .sprite-facebook {
    width: 8px;
    height: 16px;
    background-position: -31px -5px;
  }
  
  .sprite-google-plus {
    width: 16px;
    height: 14px;
    background-position: -49px -5px;
  }
  
  .sprite-instagram {
    width: 16px;
    height: 16px;
    background-position: -75px -5px;
  }
  
  .sprite-pinterest {
    width: 13px;
    height: 16px;
    background-position: -101px -5px;
  }
  
  .sprite-tumblr {
    width: 10px;
    height: 16px;
    background-position: -124px -5px;
  }
  
  .sprite-twitter {
    width: 16px;
    height: 14px;
    background-position: -144px -5px;
  }
  
  .sprite-youtube {
    width: 16px;
    height: 12px;
    background-position: -170px -5px;
  }
  
  ul.follow-menu li {
    display: inline-block;
    margin-right: 12px;
  }
  
  .follow-menu-sprite:hover {
    transition: 2.4s;
    filter: saturate(8);
  }
  
  footer .subscribe {
    margin-top: 33px;
    height: 38px;
  }
  
  footer .subscribe input[type="text"] {
    border: 1px solid #e7e7e7;
    height: 34px;
    width: 205px;
    padding: 1px 10px;
    font-family: "Roboto", sans-serif;
    font-size: 1.5em;
    font-weight: lighter;
    font-style: italic;
    line-height: 1.6em;
    color: #cccccc;
    float: left;
  }
  
  footer .subscribe input[type="button"] {
    background-color: #95e1d3;
    border: none;
    outline: none;
    height: 100%;
    font-weight: bold;
    font-size: 1.4em;
    color: #ffffff;
    text-transform: uppercase;
    width: 150px;
    float: left;
    padding: 0;
    cursor: pointer;
  }
  
  footer .subscribe input[type="button"]:hover {
    transition: 0.4s;
    background-color: #69a096;
  }
  
  footer .subscribe input[type="button"]:active {
    background-color: #416761;
  }
  
  .footer-caption {
    text-transform: uppercase;
    font-size: 1.4em;
    color: #333333;
    margin-top: 10px;
    margin-bottom: 36px;
    display: block;
  }
  
  .footer-blog {
    display: inline-block;
    margin-bottom: 27px;
    padding-right: 30px;
  }

  .footer-blog:hover .blog-caption {
    color: black;
    font-weight: bold;
}
  
  .footer-blog img {
    width: 120px;
    height: 80px;
    float: left;
    margin-right: 20px;
  }
  
  .blog-date {
    font-family: "Roboto", sans-serif;
    font-size: 1.3em;
    font-weight: lighter;
    font-style: italic;
    line-height: 1.8em;
    text-transform: capitalize;
    color: #999999;
    margin: 0;
  }
  
  .blog-caption {
    text-transform: uppercase;
    font-size: 1.2em;
    color: #333333;
    line-height: 1.5em;
    padding-top: 18px;
    margin: 0;
    display: block;
  }
  
  /******************** FOOTER ********************/
  .footer-instagram {
    margin-bottom: 10px;
  }

  .footer-instagram img{
    width: 88px;
    height: 88px;
  }

.footer-instagram a:hover {
    filter: grayscale(100%);
  }

  .more-photos {
    text-transform: none;
    font-family: "Roboto", sans-serif;
    font-size: 1.3em;
    font-weight: lighter;
    font-style: italic;
    line-height: 1.8em;
    color: #333333;
  }

  .more-photos:hover {
    color: black;
    font-weight: bold;
  }
  
  .copyright {
      font-size: 1.4em;
      text-align: center;    
      margin-top: 20px;  
  }

  .copyright p {
    color: #333333;
}

.copyright a {
    color: #f38181;
    text-transform: none;
}

.copyright a:hover {
    color: #c21212;    
}
 #down {
  margin-top: 0%;
  padding-bottom: 0%;
 }

 #down1 {
 margin-top: 0%;
 padding-bottom: 10.9%;
}

 #down2 {
 margin-top: 0%;
 padding-bottom: 0%;
}

 #down3 {
 margin-top: 0%;
 padding-bottom: 0%;
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
  width: 100px;
  right: 1700px;
  top: 35px;
}

.profile-link {
  left: auto;
  width: 100px;
  right: 1620px;
  top: 35px
}

</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>
