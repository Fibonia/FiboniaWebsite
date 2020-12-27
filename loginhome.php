<html>
<head>
    <base target="_parent" />
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
        document.getElementById("close123").style.opacity="0";
        document.getElementById("close123").style.zIndex=-1;
    document.getElementById('cover').setAttribute('style', 'margin:0 0 0 0%');
      var c = document.getElementsByClassName("sign-up");
  for (var i=0; i<c.length; i++) {c[i].style.display = "none";}
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
         document.getElementById("close123").style.opacity="1";        
        document.getElementById("close123").style.zIndex=10;
}
</script>
<title>Login | Fibonia</title>
</head>
<style>
@import url('https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900');

* {
  margin: 0;
  padding: 0;
}

html{
    overflow:hidden;
    width:100%;
    height:100%;
}

body {
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
  cursor:pointer;
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
  background: royalblue;
}

#register .submit-btn {
  background: royalblue;
  margin-top:10px;
}

#container {
  background: #fff;
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
  top: -590px;
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
  color: royalblue;
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
  background: royalblue;
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
.closebtn{
    color:black;
    transition:1s;
}    transition:1s;

}
</style>

<link rel="icon" type="image/png" href="logo.png"><body>













<div style="-webkit-transform:scale(0.9);max-width:100%;max-height:100%;" id="container">


  <!-- Cover Box -->
  <div id="cover">
                      <div style="display:inline;margin:94%; font-size:1.5rem;" id="close123">
  <button style="cursor:pointer;font-size:1.3rem;background:rgb(0,0,0,0);border:none;" class="closebtn" onclick="parent.login1(); parent.move1(); ">&#x2717;</button>
  </div>
      <!-- Sign Up Section -->
      <h1 class="sign-up">Hello, Friend!</h1>
      <p class="sign-up">Enter your personal details<br> and start a journey with us</p>
      <a class="button sign-up" onclick="myFunction()">Sign Up</a>
      <h1 class="sign-in">Welcome Back!</h1>
      <p class="sign-in">To keep connected with us please<br> login with your personal info</p>
      <br>
      <a class="button sub sign-in" onclick="myFunction1()">Sign In</a>
  </div>

  <!-- Login Box -->
  <div id="login">
    <h1>Sign In</h1>

      <input type="username" id="email1" name="username" placeholder="Email" autocomplete="on" required><br>
      <input type="password"  id="password1" name="password" placeholder="Password" autocomplete="on" required><br>
      <a id="forgot-pass" href="index.php">Forgot your password?</a><br>
      <p id="errormsg1" style="color:red"></p>
      <input class="submit-btn" id="loginbtn" type="submit" value="Sign In">
  </div>

  <!-- Register Box -->
  <div id="register">
                <div style="display:inline;margin:94%; font-size:1.5rem;" id="close">
  <button style="cursor:pointer;font-size:1.3rem;background:rgb(0,0,0,0);border:none;" class="closebtn" onclick="parent.login1(); parent.move1(); ">&#x2717;</button>
  </div>
    <h1>Create Account</h1>
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
<style>
.wrapper,.s12 {
  z-index:100;
	text-align: center;
	position: relative;
	height: 80px;
	font-size: 0;
	top: 50%;
	transform: translateY(-50%);
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

</style>
<input id="signupform" class="submit-btn" type="submit" value="Sign Up">
  </div>
  
</div></div></div></div>

</body>
<script src="https://www.gstatic.com/firebasejs/7.18.0/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.18.0/firebase-analytics.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.18.0/firebase-firestore.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.18.0/firebase-auth.js"></script>
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
					     document.getElementById("errormsg").style.color = "red";
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
         subjects:[],
         tutor: false,
         uid:uid,
         stripe_id:dataResult.stripeid,
         accntType:"fibonia",
         newsletter:false,
         update_classes:[],
         firstlogin:false,
         img: "https://www.work.fibonia.com/1/html/img.png",
         transactionHistory:[]
     });
     document.getElementById("errormsg").style.color = "green";
     document.getElementById("errormsg").innerText = "Your account has been successfully registered! Please verify your email.";
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