<?php
session_start();

if (isset($_SESSION['loggedin']) || isset($_SESSION['userData1']) || isset($_SESSION['userData'])) {
	header('Location: SuccessContactNew.php');
	exit();
}
?>
<title>Contact Us | Fibonia</title>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="default.js"></script>
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
<link href="message1.css" rel="stylesheet" id="bootstrap-css">
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bPopup/0.11.0/jquery.bpopup.min.js"></script>
<script>
    $( document ).ready(function() {
    $('#popup_this').bPopup();
});
</script>
<div class="popup popup--icon -success js_success-popup popup--visible" id = "popup_this">
  <div class="popup__background"></div>
  <div class="popup__content">
    <h3 class="popup__content__title">
      Form Sent Successfully!
    </h3>
    <p>Your account has been successfully registered!</p>
    <p>
      <button class="button b-close button--success" data-for="js_success-popup"><span>CLOSE</span></button>
    </p>
  </div>
</div>
<header>
<nav role="navigation">
                        <div id="menuToggle">
    			 <input type="checkbox" style="left: -7px; top: -7px" />
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
            </div>
		<?php if ($response): ?>
		<p><?php echo $response; ?></p>
		<?php endif; ?>
  
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
</body>