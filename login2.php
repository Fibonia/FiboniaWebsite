<?php
require_once 'google1/config.php';
if(isset($_SESSION['userData'])){
	header('location: view.php');
}
$loginURL="";
$authUrl = $googleClient->createAuthUrl();
$loginURL = filter_var($authUrl, FILTER_SANITIZE_URL);

require_once 'face1/config.php';
if(isset($_SESSION['userData'])){
	header('location: view.php');
}
$loginURL1 = $helper->getLoginUrl($redirectURL, $fbPermissions);
if (isset($_GET['state'])) {
    $helper->getPersistentDataHandler()->set('state', $_GET['state']);
}
?>
<!DOCTYPE html>
<html>
<title>Sign In | Fibonia</title>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<div class="load">
  <hr/><hr/><hr/><hr/>
</div>

<link rel="icon" type="image/png" href="logo.png"><body><script type='text/javascript' data-cfasync='false'>window.purechatApi = { l: [], t: [], on: function () { this.l.push(arguments); } }; (function () { var done = false; var script = document.createElement('script'); script.async = true; script.type = 'text/javascript'; script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript'; document.getElementsByTagName('HEAD').item(0).appendChild(script); script.onreadystatechange = script.onload = function (e) { if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) { var w = new PCWidget({c: '572a0b6b-4be8-43b0-b0ad-f1c8e6254bf5', f: true }); done = true; } }; })();</script>
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
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<scrip src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="login.js"></script>
<script type="text/javascript" src= "redirect.js"></script>
<script
  src="https://code.jquery.com/jquery-2.0.2.js"
  integrity="sha256-0u0HIBCKddsNUySLqONjMmWAZMQYlxTRbA8RfvtCAW0="
  crossorigin="anonymous"></script>
<!------ Include the above in your HEAD tag ---------->


<!DOCTYPE html><html class=''>
<link rel="stylesheet" type="text/css" href="login.css" />
	<head>
                <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
		<meta charset="utf-8">
		<title>Register</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<link rel="icon" type="image/png" href="logo.png"><body><script type='text/javascript' data-cfasync='false'>window.purechatApi = { l: [], t: [], on: function () { this.l.push(arguments); } }; (function () { var done = false; var script = document.createElement('script'); script.async = true; script.type = 'text/javascript'; script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript'; document.getElementsByTagName('HEAD').item(0).appendChild(script); script.onreadystatechange = script.onload = function (e) { if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) { var w = new PCWidget({c: '572a0b6b-4be8-43b0-b0ad-f1c8e6254bf5', f: true }); done = true; } }; })();</script>
<div class="cont">
  <div class="demo">
    <div class="login">
      <div class="login__check"></div>
      <div class="login__form">
        <div class="login__row">
        <div id="mySidenav4" class="sidenav">
  	   <a align = "center" id="projects2">via Website</a>
	</div>

        <form action="Facebook/authentication1.php" method="post" autocomplete="off">


          <svg class="login__icon name svg-icon" viewBox="0 0 20 20">
            <path d="M0,20 a10,8 0 0,1 20,0z M10,0 a4,4 0 0,1 0,8 a4,4 0 0,1 0,-8" />
          </svg>
          
          <input type="submit" class="login__submit1" value="via Social Media">
          <input type="text" class="login__input name" name="username" placeholder="Username" id="username" autocomplete="off" required/>
        </div>
        <div class="login__row">
          <svg class="login__icon pass svg-icon" viewBox="0 0 20 20">
            <path d="M0,20 20,20 20,8 0,8z M10,13 10,16z M4,8 a6,8 0 0,1 12,0" />
          </svg>
          <input type="password"class="login__input pass" name="password" placeholder="Password" id="password" autocomplete="off" required/>
        </div>
        <input type="submit" href="login.php" class="login__submit" value="Login">
        <p class="login__signup">Don't have an account? &nbsp;<a href="register.html" target="_self">Sign up</a></p>
        <h1>or</h1>
        <p class="login__signup">Forgot Password? &nbsp;<a href="index.php" target="_self">Click here</a></p>
        </form>
      </div>
    </div>
        <div class="app">
      <div class="app__top">        

        <div class="login__check"></div>
  
    <div class="login__form1">
        <div id="mySidenav5" class="sidenav">
   	   <a id="projects3">via Social Media</a>
	</div>
        <a href = "login.php"><input type="submit" class="login__submit2" value="via Website"></a>
        <a href = "<? echo $loginURL1; ?>
"><input type="submit" class="login__submit3" value="&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Login using Facebook"></a>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
        
        <a href = "<? echo $loginURL; ?>"><input type="submit" class="login__submit4" value="&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Login using Google"></a>
        <h1>or</h1>
<a target="_blank" class="icon-link icon-link--google">
  <img src="https://upload.wikimedia.org/wikipedia/commons/f/fb/Google-plus-circle-icon-png.png">
</a>
<a target="_blank" class="icon-link icon-link--fb">
  <img src="https://i1.wp.com/regionweek.com/wp-content/uploads/2018/10/1ST-OCT-FB-LOGO.png?ssl=1">
</a>
        
        
</div>
    </div>
      </div>
      </form>
    </div>
  </div>
</div>
    </div>
  </div>
</div>

<nav role="navigation">
  <div id="menuToggle">
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


<a href="https://www.facebook.com/yakubyan" target="_blank" class="icon-link">
  <img src="https://translatorswithoutborders.org/wp-content/uploads/2016/01/Facebook_logo-7.png">
</a>
<a href="https://twitter.com/search?q=sub%202%20pewds&src=typd" target="_blank" class="icon-link icon-link--twitter">
  <img src="https://cdn1.iconfinder.com/data/icons/logotypes/32/twitter-128.png">
</a>
<a href="https://www.instagram.com/abyac_999/" target="_blank" class="icon-link icon-link--ig">
  <img src="https://assets.stickpng.com/thumbs/580b57fcd9996e24bc43c521.png">
</a>
