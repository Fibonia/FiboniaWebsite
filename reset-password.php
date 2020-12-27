<?php
include('db.php');
if (isset($_GET["key"]) && isset($_GET["email"]) && isset($_GET["action"]) 
&& ($_GET["action"]=="reset")){
  $key = $_GET["key"];
  $email = $_GET["email"];
  $curDate = date("Y-m-d H:i:s");
$stmt = $con->prepare('SELECT expDate FROM password_reset_temp WHERE key = ? AND email = ?');
$stmt->bind_param('ss', $key,$email);
$stmt->execute();
$stmt->bind_result($expDate);
$stmt->fetch();
$stmt->close();
  if ($expDate==""){
  $error .= header('location: ResetExpired.php');
	}else{
  if ($expDate >= $curDate){}else{

$error .= header('location: ResetExpired.php');
            }
      }
if($error!=""){
  echo "<div class='error'>".$error."</div><br />";
  }			
}
  ?>
<html>
<head>
<script>
$(document).ready(function () {
    $("#txtConfirmPassword").keyup(isPasswordMatch);
});


function myFunction() {
    document.getElementById('cover').setAttribute('style', 'margin:0 0 0 0%');
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

.button {
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

.button:hover{
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
  background: #3aa7b1;
}

#register .submit-btn {
  background: #3aaf9f;
  margin-top:10px;
}

#container {
  background: #ededed;
  border-radius: 10px;
  height: 600px;
  margin: 5% auto;
  overflow: hidden;
  width: 1000px;
}

.social-login {
  border: 1px solid #ccc;
  border-radius: 50px;
  height: 15px;
  padding: 10px;
  width: 15px;
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
  top: -600px;
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
  padding: 3% 0 25px;
}

#login h1 {
  color: #3aa7b1;
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
  background: #3aa7b1;
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
    <nav role="navigation">
  <div class = "fade-in" id="menuToggle">
    <input type="checkbox" />
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
<div id="container">
  
  <!-- Cover Box -->
  <div id="cover">
      <!-- Sign Up Section -->
      <h1 class="sign-up">Hello, Friend!</h1>
      <p class="sign-up">Enter your password and <br>we'll change your password right away!</p>
      <a class="button sign-up" href="login.php" onclick="myFunction5()">&#8592; Go Back</a>
      <h1 class="sign-in">Welcome Back!</h1>
      <p class="sign-in">To keep connected with us please<br> login with your personal info</p>
      <br>
      <a class="button sub sign-in" href="#" onclick="myFunction3()">Sign In</a>
 
  </div>

  <!-- Login Box -->
  <div id="login">
    <h1>Reset Password</h1>

    <p>Enter your email account:</p>
<form method="post" autocomplete="off">
      <input type="password" name="pass1" id="pass1" placeholder="New Password" autocomplete="off" required><br>
      <input type="password" name="pass2" id="pass2" placeholder="Confirm Password" autocomplete="off" required><br>
                <input type="hidden" id="email" name="email" value="<?php echo $email;?>"/>
      <input id="submit-btn" class="submit-btn" type="button" value="Reset">
    </form>
  </div>
  

</div> <!-- END Container -->



</body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.14.6/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.14.6/firebase-analytics.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.14.6/firebase-firestore.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.14.6/firebase-auth.js"></script>
<script>
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
$(document).ready(function() {
	$('#submit-btn').on('click', function() {
		var pass1 = $('#pass1').val();
		var pass2 = $('#pass2').val();
		var email = $('#email').val();

					$.ajax({
				url: "reset-password2.php",
				type: "POST",
				data: {
					email: email,
					pass1: pass1,
					pass2: pass2
				},
				cache: false,
				success: function(dataResult){
					var dataResult = JSON.parse(dataResult);
					if (dataResult.statusCode==200){
const db = firebase.firestore(); 
firebase.auth().sendPasswordResetEmail(email);
window.location.replace("ResetSuccess.php");


					} else{
                             window.location.replace("ResetPassword.php");
					}
					
				}
			});
	});})
</script>
