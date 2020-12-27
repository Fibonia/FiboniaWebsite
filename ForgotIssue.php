<?php
include('db.php');
error_reporting(E_ALL ^ E_WARNING); 
error_reporting(0);

if(isset($_POST["email"]) && (!empty($_POST["email"]))){
$email = $_POST["email"];
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
$email = filter_var($email, FILTER_VALIDATE_EMAIL);
if (!$email) {
   $error .=header('Location: ForgotEmail.php');
   }else{
   $sel_query = "SELECT * FROM `accounts` WHERE email='".$email."'";
   $results = mysqli_query($con,$sel_query);
   $row = mysqli_num_rows($results);
   if ($row==""){
   $error = header('Location: ForgotInvalid.php');
   }
  }
   if($error!=""){
   echo "<div class='error'>".$error."</div>
   <br /><a href='javascript:history.go(-1)'>Go Back</a>";
   }else{
   $expFormat = mktime(
   date("H"), date("i"), date("s"), date("m") ,date("d")+1, date("Y")
   );
   $expDate = date("Y-m-d H:i:s",$expFormat);
   $key = md5(2418*2+$email);
   $addKey = substr(md5(uniqid(rand(),1)),3,10);
   $key = $key . $addKey;
mysqli_query($con,
"INSERT INTO `password_reset_temp` (`email`, `key`, `expDate`)
VALUES ('".$email."', '".$key."', '".$expDate."');");
$output='<p>Dear user,</p>';
$output.='<p>Please click on the following link to reset your password.</p>';
$output.='<p>-------------------------------------------------------------</p>';
$output.='<p><a href="https://www.fibonia.com/reset-password.php?key='.$key.'&email='.$email.'&action=reset" target="_blank">
https://www.fibonia.com/reset-password.php?key='.$key.'&email='.$email.'&action=reset</a></p>';		
$output.='<p>-------------------------------------------------------------</p>';
$output.='<p>Please be sure to copy the entire link into your browser.
The link will expire after 1 day for security reason.</p>';
$output.='<p>If you did not request this forgotten password email, no action 
is needed, your password will not be reset. However, you may want to log into 
your account and change your security password as someone may have guessed it.</p>';   	
$output.='<p>Thanks,</p>';
$output.='<p>Fibonia Team</p>';
$body = $output; 
$subject = "Password Recovery - fibonia.com";

$email_to = $email;
require("PHPMailer/PHPMailerAutoload.php");
$mail = new PHPMailer(true);
$mail->IsSMTP();
$mail->Host = "mail.fibonia.com"; // Enter your host here
$mail->SMTPAuth = true;
$mail->Username = "info@fibonia.com"; // Enter your email here
$mail->Password = "Mamagan999"; //Enter your password here
$mail->Port = 25;
$mail->IsHTML(true);
$mail->From = "info@fibonia.com";
$mail->FromName = "Fibonia Team";
$mail->Sender = $fromserver;
$mail->Subject = $subject;
$mail->Body = $body;
$mail->AddAddress($email_to);
if(!$mail->Send()){
header('Location: ForgotIssue.php');
}else{
header('Location: ForgotSuccess.php');
	}
   }
}else{
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
    <link href="message.css" rel="stylesheet" id="bootstrap-css">
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
      E-mail Issue!
    </h3>
    <p>E-mail could not be sent! Please try again</p>
    <p>
      <button class="button b-close button--error" data-for="js_error-popup"><span>CLOSE</span></button>
    </p>
  </div>
</div>
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
      <p class="sign-up">Enter your email address and <br>we'll send you a link to reset your password.</p>
      <a class="button1 sign-up" href="login.php" onclick="myFunction5()">&#8592; Go Back</a>
      <h1 class="sign-in">Welcome Back!</h1>
      <p class="sign-in">To keep connected with us please<br> login with your personal info</p>
      <br>
      <a class="button1 sub sign-in" href="#" onclick="myFunction3()">Sign In</a>
 
  </div>

  <!-- Login Box -->
  <div id="login">
    <h1>Reset Password</h1>

    <p>Enter your email account:</p>
<form action="" method="post" name="reset" autocomplete="on">
      <input type="text" name="email" placeholder="E-mail" autocomplete="off" required><br>
      <input type="text" name="email1" placeholder="Confirm E-mail" autocomplete="off" required><br>
      <input class="submit-btn" href="login.php" type="submit" value="Send reset link">
    </form>
  </div>
  

</div> <!-- END Container -->

</body>
</html>
<?php } ?>