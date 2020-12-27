<html>
<head>
<script>
function isPasswordMatch() {
    var password = $("#password").val();
    var confirmPassword = $("#txtConfirmPassword").val();

    if (password != confirmPassword) $("#divCheckPassword").html("Passwords do not match!");
    else $("#divCheckPassword").html("Passwords match!");
}

$(document).ready(function () {
    $("#txtConfirmPassword").keyup(isPasswordMatch);
});


function myFunction() {
    document.getElementById('cover').setAttribute('style', 'margin:0 0 0 0%');
    document.getElementById("cover").style.zIndex=1000;  
      var c = document.getElementsByClassName("sign-up");
  for (var i=0; i<c.length; i++) {
    c[i].style.display = "none";
  }
        var c1 = document.getElementsByClassName("sign-in");
  for (var i=0; i<c1.length; i++) {
    c1[i].style.display = "inline-block";
  }
}
function myFunction1() {
    document.getElementById('cover').setAttribute('style', 'margin:0 0 0 50%');
    document.getElementById("cover").style.zIndex=1000;  
      var c = document.getElementsByClassName("sign-in");
  for (var i=0; i<c.length; i++) {
    c[i].style.display = "none";
  }
        var c1 = document.getElementsByClassName("sign-up");
  for (var i=0; i<c1.length; i++) {
    c1[i].style.display = "";
  }
}
</script>
<title>Reset | Fibonia</title>
</head>
<style>
@import url('https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900');

* {
  margin: 0;
  padding: 0;
}

html{
    overflow:hidden;
}

body {
  background: #f0f4f3;
  font-family: 'Roboto', sans-serif;
}

.button1 {
  border: 1px solid #fff;
  border-radius: 20px;
  color: #fff;
  font-size: 11px;
  font-weight: 500;
  letter-spacing: 1px;
  padding: 15px 60px;
  text-decoration: none;
  text-transform: uppercase;
}

.button1:hover{
           transition: 0.4s;
      -webkit-filter: brightness(75%);
	-moz-filter: brightness(75%);
	-o-filter: brightness(75%);
	-ms-filter: brightness(75%);
	filter: brightness(75%);
}
input[type="email"],
input[type="username"],
input[type="password"],
input[type="text"],
select
{
  background: #f4f8f7;
  border: none;
  font-weight: 300;
  margin: 5px;
  padding: 10px;
  width: 280px;
}

.submit-btn {
  border: none;
  border-radius: 25px;
  color: #fff;
  cursor: pointer;
  font-size: 11px;
  letter-spacing: 1px;
  margin-top: 20px;
  padding: 15px 50px;
  text-transform: uppercase;
}

.submit-btn:hover {
           transition: 0.4s;
      -webkit-filter: brightness(75%);
	-moz-filter: brightness(75%);
	-o-filter: brightness(75%);
	-ms-filter: brightness(75%);
	filter: brightness(75%);
}

#login .submit-btn {
  background: royalblue;
}

#register .submit-btn {
  background: #3aaf9f;
  margin-top:10px;
}

#container {
  background: #ededed;
  border-radius: 10px;
  height: 600px;
  margin: 12% auto;
  overflow: hidden;
  width: 1000px;
}

.social-login {
  border: 1px solid #ccc;
  border-radius: 50px;
  height: 35px;
  padding: 10px;
  width: 35px;
}

.social-login:hover{
           transition: 0.4s;
      -webkit-filter: brightness(75%);
	-moz-filter: brightness(75%);
	-o-filter: brightness(75%);
	-ms-filter: brightness(75%);
	filter: brightness(75%);
}

#login {
  background: #fff;
  float: left;
  height: 100%;
  position: relative;
  width: 50%;
  text-align: center;
  top: -550px;
  z-index: 1;
}

#register {
  background: #fff;
  float: right;
  height: 100%;
  position: relative;
  width: 50%;
  text-align: center;
  top: -600px;
  z-index: 1;
}

#login h1 {
  padding: 20% 0 25px;
}

#register h1 {
  padding: 15% 0 25px;
}

#login h1 {
  color: royalblue;
}

#register h1 {
  color: #3aaf9f;
}

#login p,
#register p {
  font-size: 12px;
  font-weight: 300;
  letter-spacing: 0.3px;
  padding: 20px;
}

#forgot-pass {
  border-bottom: 1px solid #ccc;
  color: #000;
  font-size: 12px;
  font-weight: 500;
  letter-spacing: 0.3px;
  padding: 3px;
  text-decoration: none;
}

#forgot-pass:hover {
    transition: 0.4s;
    text-decoration: underline;       
    -webkit-filter: brightness(75%);
	-moz-filter: brightness(75%);
	-o-filter: brightness(75%);
	-ms-filter: brightness(75%);
	filter: brightness(75%);
}

#cover {
  background: royalblue;
  color: #fff;
  height: 600px;
  margin: 0 0 0 50%;
  position: relative;
  text-align: center;
  transition: margin 0.7s, background 0.5s, display 1s, width 1s;
  width: 50%;
  z-index: 5;
}

#cover h1 {
  padding-top: 38%;
}

#cover p {
  font-weight: 300;
  line-height: 22px;
  padding: 30px 45px 40px;
}

.sign-in {
  display: none;
}

.sub {
  position: relative;
  top: -11px;
}

#cover:target {
  background: #3aaf9f;
  margin: 0;
}

#cover:target .sign-up {
  display: none; 
}

#cover:target .sign-in {
  display: inline-block; 
}

#cover:target .login-div {
  width: 35%;
}

#credit {
  color: #999;
  font-size: 14px;
}

#info {
  background: #eaeaea;
  color: #555;
  padding: 20px;
  text-align: center;
}
#menuToggle
{
  display: block;
  position: relative;
  top: 40px;
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
  z-index: 10002; /* and place it over the hamburger */
  
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
  
  background: #000;
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
  background: #FFFFFF;
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
  width: 120px;
  height: 2000px;
  margin: -100px 0 0 -50px;
  padding: 50px;
  padding-top: 125px;
  
  background: rgb(211,211,211);
  opacity: 0.8;
  list-style-type: none;
  -webkit-font-smoothing: antialiased;
  /* to stop flickering of text in safari */
  
  transform-origin: 0% 0%;
  transform: translate(-100%, 0);
  
  transition: transform 0.5s cubic-bezier(0.77,0.2,0.05,1.0);
}

#menu a {
    text-decoration:none;
    color:#000;
}

#menu a:hover{
    text-decoration:underline;
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
</style>

<link rel="icon" type="image/png" href="logo.png"><body>
    <link href="message.css" rel="stylesheet" id="bootstrap-css">
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bPopup/0.11.0/jquery.bpopup.min.js"></script>
<script>
    $( document ).ready(function() {
    $('#popup_this').bPopup();
});
</script>
<div class="popup popup--icon -success js_success-popup popup--visible" id = "popup_this4321">
  <div class="popup__background"></div>
  <div class="popup__content">
    <h3 class="popup__content__title">
      Successful Registration!
    </h3>
    <p>Your account has been successfully registered!</p>
    <p>
      <button onclick="changeindexz();" style="right:41%;;" class="button b-close button--success" data-for="js_success-popup"><span>CLOSE</span></button>
    </p>
  </div>
</div>
<script>
function changeindexz(){
        document.getElementById("popup_this4321").style.opacity="0";        
        document.getElementById("popup_this4321").style.zIndex=-1;
}
</script>
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
}
</style>

    
    <div class="searchbody">

<div style="max-width:100%;max-height:100%;" id="container">
  
  <!-- Cover Box -->
  <div style="z-index:1000;" id="cover">
      <!-- Sign Up Section -->
      <h1 style="color:white;" class="sign-up">Hello, Friend!</h1>
      <p style="color:white;" class="sign-up">Enter your personal details<br> and start a journey with us</p>
      <a style="color:white;" class="button1 sign-up" href="#" onclick="myFunction()">Sign Up</a>
      <h1 style="color:white" class="sign-in">Welcome Back!</h1>
      <p style="color:white;" class="sign-in">To keep connected with us please<br> login with your personal info</p>
      <br>
      <a class="button1 sub sign-in" href="#" onclick="myFunction1()">Sign In</a>
 
  </div>

  <!-- Login Box -->
  <div style="z-index:999;" id="login">
    <h1>Sign In</h1>
    <a style="cursor:pointer;" id="facebook"><img class="social-login" src="https://image.flaticon.com/icons/png/128/59/59439.png"></a>
    <a style="cursor:pointer;" id="google"><img class="social-login" src="https://image.flaticon.com/icons/png/128/49/49026.png"></a>
    <p>or use your email account:</p>

      <input type="username" id="email1" name="username" placeholder="Email" autocomplete="on" required><br>
      <input type="password"  id="password1" name="password" placeholder="Password" autocomplete="on" required><br>
      <a id="forgot-pass" href="index.php">Forgot your password?</a><br>
      <p id="errormsg1" style="color:red"></p>
      <input class="submit-btn" id="loginbtn" type="submit" value="Sign In">
  </div>
  
  <!-- Register Box -->
  <div style="z-index:999;" id="register">
    <h1>Create Account</h1>
    <a style="cursor:pointer;" id="facebook1"><img class="social-login" src="https://image.flaticon.com/icons/png/128/59/59439.png"></a>
    <a style="cursor:pointer;" id="google1"><img class="social-login" src="https://image.flaticon.com/icons/png/128/49/49026.png"></a>
    <p>or use your email for registration:</p>
      <input type="email" placeholder="E-mail" name="email" id="email" autocomplete="off" required><br>
      <input type="password" placeholder="Password" name="password" id="password" autocomplete="off" required><br>
      <input type="password" placeholder="Verify Password" name="txtConfirmPassword" id="txtConfirmPassword" onChange="isPasswordMatch();" autocomplete="off" required><br>
      <input type="text" autocomplete="off" class="login__input name" name = "answer1" id="answer1" placeholder="Your First Name" required/></br>
      <input type="text" autocomplete="off" class="login__input name" name = "answer2" id="answer2" placeholder="Your Last Name" required/></br>
      <p id="errormsg" style="color:red"></p>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
$("#email1").keyup(function(event) {
    if (event.keyCode === 13) {
        $("#loginbtn").click();
    }
});
$("#password1").keyup(function(event) {
    if (event.keyCode === 13) {
        $("#loginbtn").click();
    }
});
var main1 = function(){
  $("#question1").change(function(){
    var a = $('#question1 option:selected').val();
    $("#question2 option[value="+a+"]").hide().siblings().show();
  });
}
var main3 = function(){
  $("#question2").change(function(){
    var a = $('#question2 option:selected').val();
    $("#question1 option[value="+a+"]").hide().siblings().show();
  });
}
$(document).ready(main1);
$(document).ready(main3);
</script>
<input id="signupform" class="submit-btn" type="submit" value="Sign Up">
  </div>
  
</div> <!-- END Container -->
  </div>
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
        <li data-menuanchor="fourthPage"><a href="#contact">CONTACT</a></li>
        <li data-menuanchor="secondPage"><a href="#about">ABOUT</a></li>
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


</body>
<script src="https://www.gstatic.com/firebasejs/7.14.6/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.14.6/firebase-analytics.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.14.6/firebase-firestore.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.14.6/firebase-auth.js"></script>
<script>
$("#email").keyup(function(event) {
    if (event.keyCode === 13) {
        $("#signupform").click();
    }
});
$("#password").keyup(function(event) {
    if (event.keyCode === 13) {
        $("#signuform").click();
    }
});
$("#txtConfirmPassword").keyup(function(event) {
    if (event.keyCode === 13) {
        $("#signupform").click();
    }
});
$("#answer1").keyup(function(event) {
    if (event.keyCode === 13) {
        $("#signupform").click();
    }
});
$("#answer2").keyup(function(event) {
    if (event.keyCode === 13) {
        $("#signupform").click();
    }
});
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
</script>
<script>
		$('#signupform').on('click', function() {
        var email = document.getElementById('email').value;
        var password = document.getElementById('password').value;
        var txtConfirmPassword = document.getElementById('txtConfirmPassword').value;
        var answer1 = document.getElementById('answer1').value;
        var answer2 = document.getElementById('answer2').value;
			$.ajax({
				url: "register.php",
				type: "POST",
				data: {
					email:email,
					password: password,
					txtConfirmPassword: txtConfirmPassword,
					answer1: answer1,
					answer2: answer2
				},
				cache: false,
				success: function(dataResult){
					var dataResult = JSON.parse(dataResult);
					if(dataResult.statusCode==200){
                      document.getElementById("errormsg").innerText = dataResult.msg;
					} else{
var lst = [];
var name1 = "yes";
var emp_str = "";


var db = firebase.firestore();
var uid = "";
firebase.auth().createUserWithEmailAndPassword(email, password).catch(function(error) {}).then(function(userData){
uid = userData.user.uid;
var correct = true;
userData.user.sendEmailVerification();
db.collection("users").doc(email).set({
         appointments:[],
         email: email,
         calEmail:"",
         firstName:answer1,
         lastName:answer2,
         setPrefs:true,
         subjects:[],
         tutor: false,
         uid:uid,
         stripe_id:"",
         accntType:"fibonia",
         newsletter:false,
         update_classes:[],
         firstlogin:false,
         img: "https://www.work.fibonia.com/1/html/img.png",
         transactionHistory:[]
     });
     parent.location.href = "https://www.fibonia.com/successreg.php";
    }, function(error) {
    })
					}
					
				}
			});
	});
	
$('#loginbtn').on('click', function() {
        var email = document.getElementById('email1').value;
        var password = document.getElementById('password1').value;
var db = firebase.firestore(); 
firebase.auth().signInWithEmailAndPassword(email, password).then(function(){
        if (firebase.auth().currentUser.emailVerified){
        var email = document.getElementById('email1').value;
        var password = document.getElementById('password1').value;
			$.ajax({
				url: "Facebook/authentication1.php",
				type: "POST",
				data: {
					email:email,
					password: password
				},
				cache: false,
				success: function(dataResult){
					var dataResult = JSON.parse(dataResult);
					if(dataResult.statusCode==200){
					    parent.location.href = "https://www.fibonia.com/home.php";
					} else{}}});
        }else{
            document.getElementById("errormsg1").innerText = "Please verify your email before signing in!";
        }
}).catch(function(error) {
  document.getElementById("errormsg1").innerText = "Your username/password entered is wrong! Please try again";
})
})

$('#google1').on('click', function() {
var provider = new firebase.auth.GoogleAuthProvider();
firebase.auth().signInWithPopup(provider).then(function(result) {
  var token = result.credential.accessToken;
  var user = result.user;
db = firebase.firestore();
var docRef = db.collection("users").doc(user["email"]);
docRef.get().then(function(doc) {
    if (doc.exists) {
        if (doc.data()["accntType"] == "google"){
			$.ajax({
				url: "google1/authenticate.php",
				type: "POST",
				data: {
					email:user["email"]
				},
				cache: false,
				success: function(dataResult){
					var dataResult = JSON.parse(dataResult);
					if(dataResult.statusCode==200){
					    parent.location.href = "https://www.fibonia.com/home.php";
					} else{}}});} else if (doc.data()["accntType"] == "facebook"){
			$.ajax({
				url: "face1/authenticate.php",
				type: "POST",
				data: {
					email:user["email"]
				},
				cache: false,
				success: function(dataResult){
					var dataResult = JSON.parse(dataResult);
					if(dataResult.statusCode==200){
					    parent.location.href = "https://www.fibonia.com/home.php";
					} else{}}});
					}else if (doc.data()["accntType"] == "fibonia"){
					    document.getElementById("errormsg").innerText = "Please login using your Email and Password!";
					}
    } else {
  var name = user["displayName"].split(" ");
  var answer1 = name[0];
  var answer2 = name[1];
  var db = firebase.firestore();
  db.collection("users").doc(user["email"]).set({
         appointments:[],
         email: user["email"],
         calEmail:"",
         firstName:answer1,
         lastName:answer2,
         subjects:[],
         tutor: false,
         uid:user["email"],
         stripe_id:"",
         accntType:"google",
         newsletter:false,
         update_classes:[],
         firstlogin:false,
         img: user["photoURL"],
         transactionHistory:[]
     });
			$.ajax({
				url: "google1/authenticate.php",
				type: "POST",
				data: {
					email:user["email"]
				},
				cache: false,
				success: function(dataResult){
					var dataResult = JSON.parse(dataResult);
					if(dataResult.statusCode==200){
					    parent.location.href = "https://www.fibonia.com/home.php";
					} else{}}});   
    }
})
}).catch(function(error) {
  document.getElementById("errormsg").innerText = "";
  var errorCode = error.code;
  var errorMessage = error.message;
  var email = error.email;
  var credential = error.credential;
  document.getElementById("errormsg").innerText = error.message;
});
})


$('#google').on('click', function() {
var provider = new firebase.auth.GoogleAuthProvider();
firebase.auth().signInWithPopup(provider).then(function(result) {
  var token = result.credential.accessToken;
  var user = result.user;
db = firebase.firestore();
var docRef = db.collection("users").doc(user["email"]);
docRef.get().then(function(doc) {
    if (doc.exists) {
        if (doc.data()["accntType"] == "google"){
			$.ajax({
				url: "google1/authenticate.php",
				type: "POST",
				data: {
					email:user["email"]
				},
				cache: false,
				success: function(dataResult){
					var dataResult = JSON.parse(dataResult);
					if(dataResult.statusCode==200){
					    parent.location.href = "https://www.fibonia.com/home.php";
					} else{}}});} else if (doc.data()["accntType"] == "facebook"){
			$.ajax({
				url: "face1/authenticate.php",
				type: "POST",
				data: {
					email:user["email"]
				},
				cache: false,
				success: function(dataResult){
					var dataResult = JSON.parse(dataResult);
					if(dataResult.statusCode==200){
					    parent.location.href = "https://www.fibonia.com/home.php";
					} else{}}});
					}else if (doc.data()["accntType"] == "fibonia"){
					    document.getElementById("errormsg1").innerText = "Please login using your Email and Password!";
					}
    } else {
  var name = user["displayName"].split(" ");
  var answer1 = name[0];
  var answer2 = name[1];
  var db = firebase.firestore();
  db.collection("users").doc(user["email"]).set({
         appointments:[],
         email: user["email"],
         calEmail:"",
         firstName:answer1,
         lastName:answer2,
         subjects:[],
         tutor: false,
         uid:user["email"],
         stripe_id:"",
         accntType:"google",
         newsletter:false,
         update_classes:[],
         firstlogin:false,
         img: user["photoURL"],
         transactionHistory:[]
     });
			$.ajax({
				url: "google1/authenticate.php",
				type: "POST",
				data: {
					email:user["email"]
				},
				cache: false,
				success: function(dataResult){
					var dataResult = JSON.parse(dataResult);
					if(dataResult.statusCode==200){
					    parent.location.href = "https://www.fibonia.com/home.php";
					} else{}}});   
    }
})
}).catch(function(error) {
  document.getElementById("errormsg1").innerText = "";
  var errorCode = error.code;
  var errorMessage = error.message;
  var email = error.email;
  var credential = error.credential;
  document.getElementById("errormsg1").innerText = error.message;
});
})


$('#facebook1').on('click', function() {
var provider = new firebase.auth.FacebookAuthProvider();
firebase.auth().signInWithPopup(provider).then(function(result) {
  var token = result.credential.accessToken;
  var user = result.user;
db = firebase.firestore();
var docRef = db.collection("users").doc(user["email"]);
docRef.get().then(function(doc) {
    if (doc.exists) {
        if (doc.data()["accntType"] == "google"){
			$.ajax({
				url: "google1/authenticate.php",
				type: "POST",
				data: {
					email:user["email"]
				},
				cache: false,
				success: function(dataResult){
					var dataResult = JSON.parse(dataResult);
					if(dataResult.statusCode==200){
					    parent.location.href = "https://www.fibonia.com/home.php";
					} else{}}});} else if (doc.data()["accntType"] == "facebook"){
			$.ajax({
				url: "face1/authenticate.php",
				type: "POST",
				data: {
					email:user["email"]
				},
				cache: false,
				success: function(dataResult){
					var dataResult = JSON.parse(dataResult);
					if(dataResult.statusCode==200){
					    parent.location.href = "https://www.fibonia.com/home.php";
					} else{}}});
					}else if (doc.data()["accntType"] == "fibonia"){
					    document.getElementById("errormsg").innerText = "Please login using your Email and Password!";
					}
    } else {
  var name = user["displayName"].split(" ");
  var answer1 = name[0];
  var answer2 = name[1];
  var db = firebase.firestore();
  db.collection("users").doc(user["email"]).set({
         appointments:[],
         email: user["email"],
         calEmail:"",
         firstName:answer1,
         lastName:answer2,
         subjects:[],
         tutor: false,
         uid:user["email"],
         stripe_id:"",
         accntType:"facebook",
         newsletter:false,
         update_classes:[],
         firstlogin:false,
         img: user["photoURL"],
         transactionHistory:[]
     });
			$.ajax({
				url: "face1/authenticate.php",
				type: "POST",
				data: {
					email:user["email"]
				},
				cache: false,
				success: function(dataResult){
					var dataResult = JSON.parse(dataResult);
					if(dataResult.statusCode==200){
					    parent.location.href = "https://www.fibonia.com/home.php";
					} else{}}});   
    }
})
}).catch(function(error) {
  document.getElementById("errormsg").innerText = "";
  var errorCode = error.code;
  var errorMessage = error.message;
  var email = error.email;
  var credential = error.credential;
  document.getElementById("errormsg").innerText = error.message;
});
})


$('#facebook').on('click', function() {
var provider = new firebase.auth.FacebookAuthProvider();
firebase.auth().signInWithPopup(provider).then(function(result) {
  var token = result.credential.accessToken;
  var user = result.user;
db = firebase.firestore();
var docRef = db.collection("users").doc(user["email"]);
docRef.get().then(function(doc) {
    if (doc.exists) {
        if (doc.data()["accntType"] == "google"){
			$.ajax({
				url: "google1/authenticate.php",
				type: "POST",
				data: {
					email:user["email"]
				},
				cache: false,
				success: function(dataResult){
					var dataResult = JSON.parse(dataResult);
					if(dataResult.statusCode==200){
					    parent.location.href = "https://www.fibonia.com/home.php";
					} else{}}});} else if (doc.data()["accntType"] == "facebook"){
			$.ajax({
				url: "face1/authenticate.php",
				type: "POST",
				data: {
					email:user["email"]
				},
				cache: false,
				success: function(dataResult){
					var dataResult = JSON.parse(dataResult);
					if(dataResult.statusCode==200){
					    parent.location.href = "https://www.fibonia.com/home.php";
					} else{}}});
					}else if (doc.data()["accntType"] == "fibonia"){
					    document.getElementById("errormsg1").innerText = "Please login using your Email and Password!";
					}
    } else {
  var name = user["displayName"].split(" ");
  var answer1 = name[0];
  var answer2 = name[1];
  var db = firebase.firestore();
  db.collection("users").doc(user["email"]).set({
         appointments:[],
         email: user["email"],
         calEmail:"",
         firstName:answer1,
         lastName:answer2,
         subjects:[],
         tutor: false,
         uid:user["email"],
         stripe_id:"",
         accntType:"facebook",
         newsletter:false,
         update_classes:[],
         firstlogin:false,
         img: user["photoURL"],
         transactionHistory:[]
     });
			$.ajax({
				url: "face1/authenticate.php",
				type: "POST",
				data: {
					email:user["email"]
				},
				cache: false,
				success: function(dataResult){
					var dataResult = JSON.parse(dataResult);
					if(dataResult.statusCode==200){
					    parent.location.href = "https://www.fibonia.com/home.php";
					} else{}}});   
    }
})
}).catch(function(error) {
  document.getElementById("errormsg1").innerText = "";
  var errorCode = error.code;
  var errorMessage = error.message;
  var email = error.email;
  var credential = error.credential;
  document.getElementById("errormsg1").innerText = error.message;
});
})
</script>
</html>