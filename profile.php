<?php
session_start();
if (!isset($_SESSION['loggedin']) && !isset($_SESSION['userData']) && !isset($_SESSION['userData1']) && !isset($_SESSION['guestlog'])) {
	header('Location: https://www.fibonia.com/fib.php');
	exit();
}
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'abelo999_abelo';
$DATABASE_PASS = 'Mamagan9';
$DATABASE_NAME = 'abelo999_phplogin';

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());
}
function username() {
    if (isset($_SESSION['loggedin'])) {
    return $_SESSION['name'];
} elseif (isset($_SESSION['userData'])) {
    return $_SESSION['userData']['email_id'];
} elseif (isset($_SESSION['guestlog'])) {
    return $_SESSION['guestuname'];
}else {
    return $_SESSION['userData1']['email_id'];
}
}

$stmt = $con->prepare('SELECT password, email FROM accounts WHERE id = ?');
$stmt->bind_param('s', $_SESSION['id']);
$stmt->execute();
$stmt->bind_result($password, $email);
$stmt->fetch();
$stmt->close();
    if (isset($_SESSION['userData'])) {
    $email = $_SESSION['userData']['email_id'];
} elseif (isset($_SESSION['userData1'])) {
    $email = $_SESSION['userData1']['email_id'];
} 
?>
<link href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" rel="stylesheet" id="bootstrap-css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<html>
<title>Profile | Fibonia</title>
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
<link rel="icon" type="image/png" href="logo.png"><body><script type='text/javascript' data-cfasync='false'>window.purechatApi = { l: [], t: [], on: function () { this.l.push(arguments); } }; (function () { var done = false; var script = document.createElement('script'); script.async = true; script.type = 'text/javascript'; script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript'; document.getElementsByTagName('HEAD').item(0).appendChild(script); script.onreadystatechange = script.onload = function (e) { if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) { var w = new PCWidget({c: '572a0b6b-4be8-43b0-b0ad-f1c8e6254bf5', f: true }); done = true; } }; })();</script>
<div class="container">
  <div id="logo"><h1 class="logo">Fibonia</h1>
    <div class="CTA">
      <h1>Get $10</h1>
      </div>
  </div>
  <div class="leftbox">
    <nav1>
      <a id="profile" class="active"><i class="fa fa-user"></i></a>
      <a id="payment"><i class="fa fa-credit-card"></i></a>
      <a id="subscription"><i class="fa fa-tv"></i></a>
      <a id="privacy"><i class="fa fa-tasks"></i></a>
      <a id="settings"><i class="fa fa-cog"></i></a>
    </nav1>
  </div>
  <div class="rightbox">
    <div class="profile">
      <h1>Personal Info</h1>
      <h2>Username</h2>
      <p><?= username() ?><button class="btn">update</button></p>
      <h2>Birthday</h2>
      <p>October 13</p>
      <h2>Gender</h2>
      <p>Male</p>
      <h2>Email</h2>
      <p><?= $email ?><button class="btn">update</button></p>
      <h2>Password </h2>
      <p>••••••••<button class="btn">Change</button></p>
    </div>
    
    <div class="payment noshow">
      <h1>Payment Info</h1>
      <h2>Payment Method</h2>
      <p>Mastercard •••• •••• •••• 0000 <button class="btn">update</button></p>
      <h2>Billing Address</h2>
      <p>2401 Durant Avenue, Berkeley <button class="btn">change</button></p>
      <h2>Zipcode</h2>
      <p>94704</p>
      <h2>Billing History</h2>
      <p>2019<button class="btn">view</button></p>
      <h2>Redeem Gift Subscription </h2>
      <p><input type="text" placeholder="Enter Gift Code"></input> <button class="btn">Redeem</button></p>
    </div>

    <div class="subscription noshow">
      <h1>Your Subscription</h1>
      <h2>Payment Date (MM-DD-YY)</h2>
      <p>10-07-2019 <button class="btn">pay now</button></p>
      <h2>Your Next Charge</h2>
      <p>$129.48<span> includes tax</span></p>
      <h2>Fibonia Plan</h2>
      <p>Limited Commercials <button class="btn">change plan</button></p>
      <h2>Add-ons</h2>
      <p>None <button class="btn">manage</button></p>
      <h2>Monthly Recurring Total </h2>
      <p>$4.99/month</p>
    </div>

    <div class="privacy noshow">
      <h1>Privacy Settings</h1>
      <h2>Manage Email Notifications<button class="btn">manage</button></h2>
      <p></p>
      <h2>Manage Privacy Settings<button class="btn">manage</button></h2>
      <p></p>
      <h2>View Terms of Use <button class="btn">view</button></h2>
      <p></p>
      <h2>Personalize Ad Experience <button class="btn">update</button></h2>
      <p></p>
      <h2>Protect Your Account <button class="btn">protect</button></h2>
      <p></p>
    </div>
 <div class="settings noshow">
      <h1>Account Settings</h1>
      <h2>Sync Watchlist to My Stuff<button class="btn">sync</button></h2>
      <p></p>
      <h2>Hold Your Subscription<button class="btn">hold</button></h2>
      <p></p>
      <h2>Cancel Your Subscription <button class="btn">cancel</button></h2>
      <p></p>
      <h2>Your Devices <button class="btn">Manage Devices</button></h2>
      <p></p>
      <h2>Referrals <button class="btn">get $10</button></h2>
   <p></p>
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
      <a href="home.php"><li>Home</li></a>
      <a href="offersnew.php"><li>Top Offers</li></a>
      <a href="aboutusnew.php"><li>About</li></a>
      <a href="contactusnew.php"><li>Contact Us</li></a>
      <a href="newsletternew.php"><li>Newsletter</li></a>
      <a href="phonepagenew.php"><li>iOS/Android</li></a>
      <a href="faqnew.php"><li>Privacy</li></a>
      <a href="privacynew.php"><li>FAQ</li></a>
      <a href="termsnew.php"><li>Terms</li></a>
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
<a href="home.php" target="_self" class="icon-link sign-link fade-in" style = "color: white">Go Back</a>
<a href="logout.php" target="_self" class="icon-link profile-link fade-in" style = "color: white">Sign Out</a>
</body>
</html>
<style>
@import url("https://fonts.googleapis.com/css?family=Nunito:400,900|Montserrat|Roboto");
html { overflow-x: hidden; 
	overflow-y: hidden;	
}

body {
   transform: scale(1.6);
}
body {
    background: linear-gradient(to right, #3FB6A8, #7ED386);
}


#menu a
{
  color: #000;
  font-size: 0.3rem;
  transition: color 0.3s ease;
  text-decoration: none;
  padding: 10px;
  z-index: 1000000000000000000000000000000002;
}

#menu a:hover
{
  color: #000;
  text-decoration: underline;
}

#menuToggle
{
  display: block;
  position: relative;
  top: -500px;
  left: 20%;
  
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
  top: default;
  left: default;
  
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
  
  background: #FFFFFF;
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
  width: 100px;
  height: 2000px;
  margin: -100px 0 0 -50px;
  padding: 50px;
  padding-top: 90px;
  
  background: rgb(211,211,211);
  opacity: 0.8;
  list-style-type: none;
  -webkit-font-smoothing: antialiased;
  /* to stop flickering of text in safari */
  
  transform-origin: 0% 0%;
  transform: translate(-100%, 0);
  
  transition: transform 0.5s cubic-bezier(0.77,0.2,0.05,1.0);
}

#menu li
{
  padding: -20px -100px;
  font-size: 16px;
white-space: nowrap;
}

#menuToggle input:checked ~ ul
{
  transform: none;
}


.icon-link {
  transition: 0.4s;
  z-index: 1000000000000;
  position: absolute;
  right: 21.5%;
  top: -16%;
  width: 19px;
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
  right: 20%;
  top: -16%;
}
.icon-link--twitter {
  left: auto;
  right: 20%;
  top: -16%;
}
.icon-link--google {
  left: auto;
  right: 23%;
  top: -16%;
}
.icon-link--fb {
  left: auto;
  right: 21%;
  top: -16%;
}

.icon-link--ig {
  left: auto;
  right: 22.9%;
  top: -16%;
}

.sign-link {
  left: auto;
  right: 75.9%;
  top: -13.5%;
font-size: 12px;
white-space: nowrap;
}

.profile-link {
  left: auto;
  right: 72.9%;
  top: -13.5%;
font-size: 12px;
white-space: nowrap;
}

.container {
    background: #FFFFFF;
    width: 640px;
    height: 420px;
    margin: 0 auto;
    position: relative;
    margin-top: 19%;
    box-shadow: 2px 5px 20px rgba(119, 119, 119, 0.5);
}

.logo {
    float: right;
    margin-right: 0px;
    margin-top: 12px;
    font-family: "Nunito Sans", sans-serif;
    color: #3DBB3D;
    font-weight: 900;
    font-size: 1.5em;
    letter-spacing: 1px;
}

.CTA {
    width: 80px;
    height: 40px;
    right: -20px;
    bottom: 0;
    margin-bottom: 90px;
    position: absolute;
    z-index: 1;
    background: #7ED386;
    font-size: 1em;
    transform: rotate(-90deg);
    transition: all .5s ease-in-out;
    cursor: pointer;
}

.CTA h1 {
    color: #FFFFFF;
    margin-top: 10px;
    margin-left: 9px;
}

.CTA:hover {
    background: #3FB6A8;
    transform: scale(1.1);
}

.leftbox {
    float: left;
    top: -5%;
    left: 5%;
    position: absolute;
    width: 15%;
    height: 110%;
    background: #7ED386;
    box-shadow: 3px 3px 10px rgba(119, 119, 119, 0.5);
}

nav a {
    list-style: none;
    padding: 35px;
    color: #FFFFFF;
    font-size: 1.1em;
    display: block;
    transition: all .3s ease-in-out;
}

nav a:hover {
    color: #3FB6A8;

    cursor: pointer;
}

nav a:first-child {
    margin-top: 7px;
}

nav1 a {
    list-style: none;
    padding: 35px;
    color: #FFFFFF;
    font-size: 1.1em;
    display: block;
    transition: all .3s ease-in-out;
}

nav1 a:hover {
    color: #3FB6A8;
    transform: scale(1.2);
    cursor: pointer;
}

nav1 a:first-child {
    margin-top: 7px;
}

.active {
    color: #3FB6A8;
}

.rightbox {
    float: right;
    width: 60%;
    height: 100%;
}

.profile, .payment, .subscription, .privacy, .settings {
    transition: opacity .5s ease-in;
    position: absolute;
    width: 70%;
}

h1 {
    font-family: "Montserrat", sans-serif;
    color: #7ED386;
    font-size: 1em;
    margin-top: 40px;
    margin-bottom: 35px;
}

h2 {
    color: #777777;
    font-family: "Roboto", sans-serif;
    width: 80%;
    text-transform: uppercase;
    font-size: 8px;
    letter-spacing: 1px;
    margin-left: 2px;
}

p {
    border-width: 1px;
    border-style: solid;
    border-image: linear-gradient(to right, #3FB6A8, rgba(126, 211, 134, 0.5)) 1 0%;
    border-top: 0;
    width: 80%;
    font-family: "Montserrat", sans-serif;
    font-size: .7em;
    padding: 7px 0;
    color: #070707;
}

span {
    font-size: .5em;
    color: #777777;
}

.btn {
    float: right;
    font-family: "Roboto", sans-serif;
    text-transform: uppercase;
    font-size: 10px;
    border: none;
    color: #3FB6A8;
}

.btn:hover {
    text-decoration: underline;
    font-weight: 900;
}

input {
    border: 1px solid #dddddd;
    font-family: "Roboto", sans-serif;
    padding: 2px;
    margin: 0;
}

.privacy h2 {
    margin-top: 25px;
}

.settings h2 {
    margin-top: 25px;
}

.noshow {
    opacity: 0;
}

footer {
    position: absolute;
    width: 20%;
    bottom: 0;
    right: -20px;
    text-align: right;
    font-size: 0.8em;
    text-transform: uppercase;
    letter-spacing: 2px;
    font-family: "Roboto", sans-serif;
}

footer p {
    border: none;
    padding: 0;
}

footer a {
    color: #ffffff;
    text-decoration: none;
}

footer a:hover {
    color: #7d7d7d;
}
</style>
<script>
$('nav1 a').click(function(e) {
  e.preventDefault();
  $('nav1 a').removeClass('active');
  $(this).addClass('active');
  if(this.id === !'payment'){
    $('.payment').addClass('noshow');
  }
  else if(this.id === 'payment') {
    $('.payment').removeClass('noshow');
    $('.rightbox').children().not('.payment').addClass('noshow');
  }
  else if (this.id === 'profile') {
    $('.profile').removeClass('noshow');
     $('.rightbox').children().not('.profile').addClass('noshow');
  }
  else if(this.id === 'subscription') {
    $('.subscription').removeClass('noshow');
    $('.rightbox').children().not('.subscription').addClass('noshow');
  }
    else if(this.id === 'privacy') {
    $('.privacy').removeClass('noshow');
    $('.rightbox').children().not('.privacy').addClass('noshow');
  }
  else if(this.id === 'settings') {
    $('.settings').removeClass('noshow');
    $('.rightbox').children().not('.settings').addClass('noshow');
  }
});
</script>