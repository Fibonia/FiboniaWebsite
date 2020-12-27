<?php
include('db.php');
if (isset($_GET["key"]) && isset($_GET["email"]) && isset($_GET["action"]) 
&& ($_GET["action"]=="reset") && !isset($_POST["action"])){
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
  if ($expDate >= $curDate){
  ?>
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
<script
  src="https://code.jquery.com/jquery-2.0.2.js"
  integrity="sha256-0u0HIBCKddsNUySLqONjMmWAZMQYlxTRbA8RfvtCAW0="
  crossorigin="anonymous"></script>
<!------ Include the above in your HEAD tag ---------->

<title>Reset | Fibonia</title>
<!DOCTYPE html><html class=''>
<link rel="stylesheet" type="text/css" href="login1.css" />
	<head>
                <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
		<meta charset="utf-8">
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
	</div>
        <form action="" method="post" name = "update" autocomplete="off">
          <svg class="login__icon name svg-icon" viewBox="0 0 20 20">
            <path d="M0,20 a10,8 0 0,1 20,0z M10,0 a4,4 0 0,1 0,8 a4,4 0 0,1 0,-8" />
          </svg>
            <input type="hidden" name="action" value="update" />
          <input type="password" class="login__input name" name="pass1" id = "pass1" placeholder="New Password" autocomplete="off" required/>
        </div>
        <div class="login__row">
          <svg class="login__icon pass svg-icon" viewBox="0 0 20 20">
            <path d="M0,20 20,20 20,8 0,8z M10,13 10,16z M4,8 a6,8 0 0,1 12,0" />
          </svg>
          <input type="password"class="login__input pass" name="pass2" id = "pass2" onChange="isPasswordMatch();" placeholder="Confirm Password" autocomplete="off" required/>
        </div>
                <div id="divCheckPassword"></div>

          <input type="hidden" name="email" value="<?php echo $email;?>"/>
        <input type="submit" class="login__submit" value="Reset">
        </form>
      </div>
    </div>
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

<script>
    function isPasswordMatch() {
    var password = $("#pass1").val();
    var confirmPassword = $("#pass2").val();
    if (password != confirmPassword) $("#divCheckPassword").html("Passwords do not match!");
    else $("#divCheckPassword").html("Passwords match!");
}
$(document).ready(function () {
    $("#pass2").keyup(isPasswordMatch);
});
</script>
<?php
}else{
$error .= header('location: ResetExpired.php');
            }
      }
if($error!=""){
  echo "<div class='error'>".$error."</div><br />";
  }			
}


if(isset($_POST["email"]) && isset($_POST["action"]) &&
 ($_POST["action"]=="update")){
$error="";
$pass1 = mysqli_real_escape_string($con,$_POST["pass1"]);
$pass2 = mysqli_real_escape_string($con,$_POST["pass2"]);
$email = $_POST["email"];
$curDate = date("Y-m-d H:i:s");
if ($pass1!=$pass2){
header('location: ResetPassword.php');
exit();
  }
  if($error!=""){
echo "<div class='error'>".$error."</div><br />";
}else{
	$pass1 = password_hash($pass1, PASSWORD_DEFAULT);
$stmt = $con->prepare('UPDATE accounts SET password = ? WHERE email = ?');
$stmt->bind_param('ss',$pass1,$email);
$stmt->execute();
$stmt->close();
$stmt = $con->prepare('DELETE FROM password_reset_temp WHERE email = ?');
$stmt->bind_param('s', $email);
$stmt->execute();
$stmt->close();
header('location: ResetSuccess.php');
	  }		
}
?>