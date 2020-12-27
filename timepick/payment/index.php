<?php
session_start();
$url = $_SERVER['REQUEST_URI'];


use MrShan0\PHPFirestore\FirestoreClient;
require 'vendor/autoload.php';
function unvar_dump($str) {
    if (strpos($str, "\n") === false) {
        //Add new lines:
        $regex = array(
            '#(\\[.*?\\]=>)#',
            '#(string\\(|int\\(|float\\(|array\\(|NULL|object\\(|})#',
        );
        $str = preg_replace($regex, "\n\\1", $str);
        $str = trim($str);
    }
    $regex = array(
        '#^\\040*NULL\\040*$#m',
        '#^\\s*array\\((.*?)\\)\\s*{\\s*$#m',
        '#^\\s*string\\((.*?)\\)\\s*(.*?)$#m',
        '#^\\s*int\\((.*?)\\)\\s*$#m',
        '#^\\s*bool\\(true\\)\\s*$#m',
        '#^\\s*bool\\(false\\)\\s*$#m',
        '#^\\s*float\\((.*?)\\)\\s*$#m',
        '#^\\s*\[(\\d+)\\]\\s*=>\\s*$#m',
        '#\\s*?\\r?\\n\\s*#m',
    );
    $replace = array(
        'N',
        'a:\\1:{',
        's:\\1:\\2',
        'i:\\1',
        'b:1',
        'b:0',
        'd:\\1',
        'i:\\1',
        ';'
    );
    $serialized = preg_replace($regex, $replace, $str);
    $func = create_function(
        '$match', 
        'return "s:".strlen($match[1]).":\\"".$match[1]."\\"";'
    );
    $serialized = preg_replace_callback(
        '#\\s*\\["(.*?)"\\]\\s*=>#', 
        $func,
        $serialized
    );
    $func = create_function(
        '$match', 
        'return "O:".strlen($match[1]).":\\"".$match[1]."\\":".$match[2].":{";'
    );
    $serialized = preg_replace_callback(
        '#object\\((.*?)\\).*?\\((\\d+)\\)\\s*{\\s*;#', 
        $func, 
        $serialized
    );
    $serialized = preg_replace(
        array('#};#', '#{;#'), 
        array('}', '{'), 
        $serialized
    );

    return unserialize($serialized);
}
$_SESSION['uniqid2'] = $_GET["code"];
if (strpos($url, 'code') === false){
header("Location: https://www.fibonia.com/response.php?email=error&code=error");
exit();
}
$code_key = $_GET['code'];
$_SESSION["code"] = $_GET['code'];
$itemName = "Class Payment"; 
$itemNumber = "ClassPay";

$firestoreClient =  new FirestoreClient('fibonia-83e34','AIzaSyDCl5yDLEEmgH3Sn-qH-rb8PVT0dLQFAWU', ['database' => '(default)',]);
$collections = $firestoreClient->listDocuments("tutors", ['pageSize' => 1000000]);
$counter = 0;
try{
while ($collections["documents"][$counter]->get('appointments') != NULL){
$counter5 = 0;
while ($collections["documents"][$counter]->get('appointments')[$counter5] != NULL){
$var = $collections["documents"][$counter]->get('appointments')[$counter5];
$array = (array) $var;
ob_start();
var_dump($array);
$array = ob_get_clean();
$array1 = substr($array, 0, -3);
$arraynew = substr($array1, 71, strlen($array1));
$var = unvar_dump($arraynew);
if ($code_key == substr($var[0]["uniqid"],30,10)){
    $time = $var[0]["time"];
    $email = $var[0]["tutorEmail"];
    $class = $var[0]["classname"];
    $tutoremail = $var[0]["tutorEmail"];
    $ourval = 1;
    $uniqid3 = substr($var[0]["uniqid"],40,10);
    $studentemail = $var[0]["studentEmail"];
    break;
}
$counter5 += 1;
}
$counter += 1;
}
}catch (\Throwable $t){
}


$firestoreClient =  new FirestoreClient('fibonia-83e34','AIzaSyDCl5yDLEEmgH3Sn-qH-rb8PVT0dLQFAWU', ['database' => '(default)',]);
$collections = $firestoreClient->listDocuments($class, ['pageSize' => 1000000]);
$counter = 0;
try{
while ($collections["documents"][$counter]->get('calEmail') != NULL){
if ($collections["documents"][$counter]->get('calEmail') == $tutoremail){
    $price = floatval($collections["documents"][$counter]->get('price'));
    break;
}else{
    $counter+=1;
}
}
}catch (\Throwable $t){
}

$firestoreClient =  new FirestoreClient('fibonia-83e34','AIzaSyDCl5yDLEEmgH3Sn-qH-rb8PVT0dLQFAWU', ['database' => '(default)',]);
$collections = $firestoreClient->listDocuments("users", ['pageSize' => 1000000]);
$counter = 0;
try{
while ($collections["documents"][$counter]->get('email') != NULL){
if ($collections["documents"][$counter]->get('email') == $studentemail){
    $stripe_id = $collections["documents"][$counter]->get('stripe_id');
    break;
}else{
    $counter+=1;
}
}
}catch (\Throwable $t){
}


$time = explode(" ",$time);
$month  = date_parse($time[1])["month"];
if ($month <= 9){
    $month = "0".$month;
}
$ourtime1 = $time[3][0].$time[3][1].":".$time[3][2].$time[3][3];
$sdate1 = "2020-".$month."-".$time[2]."T".$ourtime1;
$ourtime2 = $time[count($time)-1][0].$time[count($time)-1][1].":".$time[count($time)-1][2].$time[count($time)-1][3];
$sdate2 = "2020-".$month."-".$time[2]."T".$ourtime2;
$date1 = strtotime($sdate1);
$date2 = strtotime($sdate2)+3600;
$diff = $date2 - $date1;
$minutes = $diff/60;
$rate = $minutes/60;
$itemPrice = $price*$rate; 
$currency = "USD"; 
define('STRIPE_API_KEY', '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'); 
define('STRIPE_PUBLISHABLE_KEY', 'pk_live_MWSXfRNcKD5h89THVll1lzG200e0D3Mwdb'); 
 
if ($itemPrice <= 0 ){

if ($ourval == 0){
header("Location: https://www.fibonia.com/response.php?email=error&code=error");
exit();
}else{
$ourpaymentredirect = "https://www.fibonia.com/1/html/pair.php?code=".$uniqid3."&email=".$tutoremail;
$_SESSION['redirectpage'] = $ourpaymentredirect;
$_SESSION['uniqid2'] = $_GET['code'];

echo '<script>var timezone_offset_minutes = new Date().getTimezoneOffset();timezone_offset_minutes = timezone_offset_minutes == 0 ? 0 : -timezone_offset_minutes;document.cookie = "daud="+timezone_offset_minutes;</script>';
$timezone_offset_minutes = $_COOKIE['daud'];
$ourstr = $timezone_offset_minutes."minutes";

$date1 = date('D, M j, Y \a\t g:ia', strtotime($ourstr, strtotime($tdate1)));
$date2 = date('D, M j, Y \a\t g:ia', strtotime($ourstr, strtotime($tdate2)));
    
require 'PHPMailer/PHPMailerAutoload.php';
$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = 'mail.fibonia.com';  
$mail->SMTPAuth = true;
$mail->Username = 'appointments@fibonia.com';
$mail->Password = 'GloriousCeiling!#%';
$mail->SMTPSecure = 'tls';                  
$mail->Port = 25;
$mail->setFrom('appointments@fibonia.com', 'Fibonia Team');
$mail->addAddress($tutoremail);
$mail->isHTML(true);
$output = "Good News! You will be tutoring for a student in class ".$class." from ".$date1." to ".$date2."! The student will message you when they get the chance.";
$body = $output; 
$mail->Subject = 'Tutor Request - Fibonia Team';
$mail->Body    = $body;
if(!$mail->send()) {} else {};

$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = 'mail.fibonia.com';  
$mail->SMTPAuth = true;
$mail->Username = 'appointments@fibonia.com';
$mail->Password = 'GloriousCeiling!#%';
$mail->SMTPSecure = 'tls';                  
$mail->Port = 25;
$mail->setFrom('appointments@fibonia.com', 'Fibonia Team');
$mail->addAddress($studentemail);
$mail->isHTML(true);
$output = "Good News! You will be receiving tutoring in class ".$class." from ".$date1." to ".$date2.", as you had requested.<br>";
$output .= 'To chat with your tutor for this class, please click <a href="'.$_SESSION['redirectpage'].'">here</a>';
$body = $output; 
$mail->Subject = 'Tutor Request - Fibonia Team';
$mail->Body    = $body;
if(!$mail->send()) {} else {};

$notif1 = "No";
$null = "Paid";

$redirecturlpg = "Location: https://www.fibonia.com/1/html/pair.php?code=".$uniqid3;
header($redirecturlpg);
exit();

}
}else{


$firestoreClient =  new FirestoreClient('fibonia-83e34','AIzaSyDCl5yDLEEmgH3Sn-qH-rb8PVT0dLQFAWU', ['database' => '(default)',]);
$collections = $firestoreClient->listDocuments('users', ['pageSize' => 1000000]);
$counter = 0;
try{
while ($collections["documents"][$counter]->get('email') != NULL){
if ($collections["documents"][$counter]->get('email') == $studentemail){
    $stripe_id = $collections["documents"][$counter]->get('stripe_id');
    break;
}else{
}
$counter += 1;
}
}catch (\Throwable $t){
}



echo '<script>var timezone_offset_minutes = new Date().getTimezoneOffset();timezone_offset_minutes = timezone_offset_minutes == 0 ? 0 : -timezone_offset_minutes;document.cookie = "daud="+timezone_offset_minutes;</script>';
$timezone_offset_minutes = $_COOKIE['daud'];
$ourstr = $timezone_offset_minutes."minutes";
if ($tdate1 == NULL && $tdate2 == NULL){
$date1 = date('D, M j, Y \a\t g:ia', strtotime($ourstr, strtotime($sdate1)));
$date2 = date('D, M j, Y \a\t g:ia', strtotime($ourstr, strtotime($sdate2)));
}

$_SESSION['studentemail'] = $studentemail;
$_SESSION['tutoremail'] = $tutoremail;
$_SESSION['date1'] = $date1;
$_SESSION['date2'] = $date2;
$_SESSION['class'] = $class;
}
$itemPrice1 = $itemPrice;
$itemPrice = $itemPrice1 + 0.1*$itemPrice1;
$_SESSION['item_price'] = $itemPrice;

$floorprice = floor($itemPrice);
$digitprice = ($itemPrice - $floorprice)*100;

require_once 'stripe-php/init.php'; 

$stripe = new \Stripe\StripeClient(
  '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'
);

if ($stripe_id == NULL){
    $payment_methods = [];
}else{
$payment_methods = $stripe->paymentMethods->all([
    'customer' => $stripe_id,
  'type' => 'card',
]);}
$count = 0;
?>
<head>
<title>Payment | Fibonia</title>   
<link rel="icon" type="image/png" href="logo.png">
<script src="https://js.stripe.com/v3/"></script></head>
<input type="hidden" id="stripe" value="<?php echo $stripe_id; ?>">
<input type="hidden" id="type" value="<?php echo $type; ?>">
<input type="hidden" id="studentemail" value="<?php echo $studentemail; ?>">
<input type="hidden" id="uniqid" value="<?php echo $_GET['code']; ?>">
<div class="my-wallet">
<div class="loading"></div><!-- /.loading -->
<div id="addload"></div>
<div class="add-account-modal add-account-modal1">
<div class="overlay"></div><!-- /.overlay -->
<div class="account1 account new-account">
<div id="card-element"></div>
<div id="card-errors" role="alert"></div>
<button onclick="addload();" id="submit">+ Add Card</button>



		</div><!-- /.account -->
		
	</div><!-- /.add-account-modal -->
	
	<div class="my-wallet-sidebar">
		
		<h1 class="my-wallet-title">My Wallet <div class="add-account">&#43;</div></h1><!-- /.my-wallet__title -->
		<div class="active-account"></div><!-- /.active-account -->
		
		<div class="accounts-container">
			<?php while ($payment_methods["data"][$count] != ""){
			if ($payment_methods["data"][$count]["card"]["brand"] == "Visa"){
			    $someword = "visa";
			}elseif ($payment_methods["data"][$count]["card"]["brand"] == "American Express"){
			    $someword = "amex";
			}elseif ($payment_methods["data"][$count]["card"]["brand"] == "MasterCard"){
			    $someword = "mastercard";
			}else{
			    $someword = "unknown";
			}
			echo'<div class="account" data-account="'.$count.'"> <div class="account-card-type is-'.$someword.'"></div><div class="account-number">**** **** **** '.$payment_methods["data"][$count]["card"]["last4"].'</div><div class="account-expiration">Valid Thru: '.$payment_methods["data"][$count]["card"]["exp_month"].'/'.substr($payment_methods["data"][$count]["card"]["exp_year"],-2).'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a style="color:red;font-size:35px;text-decoration:none;" href="deletecard.php?card='.$payment_methods["data"][$count]["id"].'&code='.$_GET["code"].'">&#128465;</a></div></div>'; $count += 1;}  ?>

		</div><!-- /.accounts-container -->
	
	</div><!-- /.my-wallet__sidebar -->
	
<div class="account-details-container">
<div class="transaction-history-placeholder">Choose an Account</div>
<form action="payment.php" method="POST" id="paymentFrm">
<input type="hidden" id="customerid" name="customerid" value="<?php echo $stripe_id ?>"><input type="hidden" name="email" id="email" value="<?php echo $studentemail ?>"><input type="hidden" name="paymentid" id="paymentid" value="<?php echo $payment_methods["data"][0]["id"] ?>">
<div class="account-details" data-account="0">
<div class="account-balance">Payment Due
<div class="value-unit">$<?php echo $floorprice; ?>.<sup class="value-subunit"><?php echo $digitprice; ?></sup><!-- /.subunit --></div><!-- /.unit --></div><!-- /.account-balance --><div class="transaction-history"><div onclick="this.parentNode.submit();" class="transaction" data-transaction-type="debit"><div class="transaction-details"><div class="transaction-merchant">Fibonia.com</div>
<div class="transaction-date">Tutor for <?php echo $class;?> - <?php echo $date1;?></div></div><!-- /.transaction-details --><div class="transaction-amount">
<div class="value-unit">$<?php echo $floorprice; ?>.<sup class="value-subunit"><?php echo $digitprice; ?></sup><br></br><div class="submissionbtn"><button onclick="addload();" type="submit">Submit Payment</button></div><!-- /.subunit --></div><!-- /.unit --></div><!-- /.transaction-amount --></div><!-- /.transaction --></div><!-- /.transaction-history --></div><!-- /.account-details --><!-- /.my-wallet__account-details -->
</form>
<?php
if ($count > 0){
$count -= 1;}
while ($count != 0){




    echo '
<script src="https://www.gstatic.com/firebasejs/7.14.6/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.14.6/firebase-analytics.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.14.6/firebase-firestore.js"></script>
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
var db = firebase.firestore();
db.collection("users").doc("'.$studentemail.'").get().then(function(doc) {
    if (doc.exists) {
    var i;
    for (i = 0; !doc.data()["appointments"][i]["uid"].includes("'.$_GET["code"].'"); i++) {
    }
    var tutoremail = doc.data()["appointments"][i]["tutorEmail"];
    }});
db.collection("users").doc(tutoremail).get().then(function(doc) {
    if (doc.exists){
        var tutor_stripe_id = doc.data()["stripe_id"];
    }
}</script>

<form action="payment.php" method="POST" id="paymentFrm">
<input type="hidden" name="paymentid" id="paymentid" value="'.$payment_methods["data"][$count]["id"].'"><input type="hidden" id="tutorid" name="tutorid" value=""><input type="hidden" id="tutoremail" name="tutoremail" value=""><input type="hidden" id="customerid" name="customerid" value="'.$stripe_id.'"><input type="hidden" name="email" id="email" value="'.$studentemail.'"><div class="account-details" data-account="'.$count.'">

<script src="https://www.gstatic.com/firebasejs/7.14.6/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.14.6/firebase-analytics.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.14.6/firebase-firestore.js"></script>
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
var db = firebase.firestore();
db.collection("users").doc("'.$studentemail.'").get().then(function(doc) {
    if (doc.exists) {
    var i;
    for (i = 0; !doc.data()["appointments"][i]["uid"].includes("'.$_GET["code"].'"); i++) {
    }
    var tutoremail = doc.data()["appointments"][i]["tutorEmail"];
    }});
db.collection("users").doc(tutoremail).get().then(function(doc) {
    if (doc.exists){
        var tutor_stripe_id = doc.data()["stripe_id"];
    }
}
document.getElementById("tutorid").value = tutor_stripe_id;
document.getElementById("tutoremail").value = tutoremail;
</script>


<div class="account-balance">Payment Due
<div class="value-unit">$'.$floorprice.'.<sup class="value-subunit">'.$digitprice.'</sup><!-- /.subunit --></div><!-- /.unit --></div><!-- /.account-balance --><div class="transaction-history"><div onclick="this.parentNode.submit();" class="transaction" data-transaction-type="debit"><div class="transaction-details"><div class="transaction-merchant">Fibonia.com</div>
<div class="transaction-date">Tutor for '.$class.' - '.$date1.'</div></div><!-- /.transaction-details --><div class="transaction-amount">
<div class="value-unit">$'.$floorprice.'.<sup class="value-subunit">'.$digitprice.'</sup><br></br><div class="submissionbtn"><button onclick="addload();" type="submit">Submit Payment</button></div><!-- /.subunit --></div><!-- /.unit --></div><!-- /.transaction-amount --></div><!-- /.transaction --></div><!-- /.transaction-history --></div><!-- /.account-details --></div><!-- /.my-wallet__account-details -->';$count-=1;
}
?>

<script>
function addload(){
    setTimeout(() => {
}, 500);
    document.getElementById('addload').innerHTML = '<div class="loading1"></div>';
}
</script>
<script src="https://www.gstatic.com/firebasejs/7.14.6/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.14.6/firebase-analytics.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.14.6/firebase-firestore.js"></script>
</div>

</div><!-- /.my-wallet -->
<script>
var stripe = Stripe('pk_live_MWSXfRNcKD5h89THVll1lzG200e0D3Mwdb');
var elements = stripe.elements();
var style = {
  base: {
    color: "#32325d",
  }
};
var card = elements.create("card", { style: style });
card.mount("#card-element");
var cardButton = document.getElementById('submit');

cardButton.addEventListener('click', function(ev) {
   
  stripe.createPaymentMethod({
      type: 'card',
      card: card,      

    }
  ).then(function(result) {
      
    if (result.error) {
        document.getElementById("popup_this10").style.opacity="1";        
        document.getElementById("popup_this10").style.zIndex=10000;
    } else {
      var resultid = result.paymentMethod.id;
      var stripeid = $('#stripe').val();
      var type = $('#type').val();
      var email = $('#studentemail').val();
      var uniqid = $('#uniqid').val();

			$.ajax({
				url: "addcard.php",
				type: "POST",
				data: {
					resultid:resultid,
					stripeid:stripeid,
					type:type,
					email:email
				},
				cache: false,
				success: function(dataResult){
					var dataResult = JSON.parse(dataResult);
					if(dataResult.statusCode==200){
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
var db = firebase.firestore();
if (dataResult.stripeid == ""){
    
}else{
db.collection("users").doc(email).update({"stripe_id": dataResult.stripeid});
window.location.href = 'index.php?code='.concat(uniqid);   
}
					}
					
				}
			});
    }
  });
});

</script>
<link href="message3.css" rel="stylesheet" id="bootstrap-css">
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bPopup/0.11.0/jquery.bpopup.min.js"></script>
<div class="popup popup--icon -error js_error-popup popup--visible" id = "popup_this10">
  <div class="popup__background"></div>
  <div class="popup__content">
    <h3 class="popup__content__title">
      Error!
    </h3>
    <p>There was an error adding your card! Try again</p>
    <p>
      <button onclick="changeZIndex();" class="button b-close button--error" data-for="js_error-popup"><span>CLOSE</span></button>
    </p>
  </div>
</div>
<script>
function changeZIndex() {
        document.getElementById("popup_this10").style.opacity="0";        
        document.getElementById("popup_this10").style.zIndex=-1;
}</script>
<style>

@import url(https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,400|Roboto);
*, *:before, *:after {
    box-sizing: border-box;
}
.account1{
    background-color: #fff;
    border: 2px solid #e1e1e1;
    border-radius: 4px;
    font-family: "Roboto", sans-serif;
    height: 50px !important;
    margin-bottom: 30px;
    padding: 15px;
    width: 250px;
}

.add-account-modal1 button {
    background-color: Royalblue;
    border-radius: 4px;
    border: 4px;
    color: #fff;
    float: right;
    font-size: 14px;
    padding: 5px 10px;
    position: relative;
    top: 30px !important;
    right: -20px;
}

.submissionbtn button {
    background-color: Royalblue;
    border-radius: 4px;
    border: 4px;
    color: #fff;
    float: right;
    font-size: 14px;
    padding: 5px 10px;
    position: relative;
    width:170%;
    top: 30px !important;
    right: -20px;
}

.submissionbtn button:hover {
    background-color: #ffb31a;
    cursor: pointer;
    transition:2s;
}

.submissionbtn button:focus {
    outline: none;
}

body {
    background-color: white;
    color: #444751;
}

.my-wallet {
    -webkit-transform: translate3d(-50%, -50%, 0);
    -moz-transform: translate3d(-50%, -50%, 0);
    -ms-transform: translate3d(-50%, -50%, 0);
    -o-transform: translate3d(-50%, -50%, 0);
    transform: translate3d(-50%, -50%, 0);
    background-color: #fff;
    border-radius: 6px;
    box-shadow: 0 6px 20px Royalblue;
    font-family: "Open Sans", sans-serif;
    height: 700px;
    left: 50%;
    overflow: hidden;
    position: absolute;
    top: 50%;
    width: 880px;
}

.my-wallet-sidebar {
    background-color: #f2f2f2;
    color: #707584;
    float: left;
    height: 100%;
    padding: 50px;
    width: 360px;
}

.my-wallet-title {
    font-size: 24px;
    font-weight: normal;
    margin: 0 0 50px 0;
}

.my-wallet-title .add-account {
    -webkit-transition: color 200ms;
    -moz-transition: color 200ms;
    transition: color 200ms;
    color: #b2b2b2;
    float: right;
    font-size: 48px;
    line-height: 20px;
    position: relative;
}

.my-wallet-title .add-account:hover {
    color: #707584;
    cursor: pointer;
}

.loading {
    -webkit-animation: load 500ms ease forwards;
    -moz-animation: load 500ms ease forwards;
    animation: load 500ms ease forwards;
    -webkit-animation-delay: 2s;
    -moz-animation-delay: 2s;
    animation-delay: 2s;
    position: absolute;
    width: 100%;
    height: 100%;
    background: #fff url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/83141/ripple.svg") center no-repeat;
    z-index: 9999999;
}

.loading1 {
    -webkit-animation: load 9500ms ease forwards;
    -moz-animation: load 9500ms ease forwards;
    animation: load 9500ms ease forwards;
    -webkit-animation-delay: 2s;
    -moz-animation-delay: 2s;
    animation-delay: 2s;
    position: absolute;
    width: 100%;
    height: 100%;
    background: #fff url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/83141/ripple.svg") center no-repeat;
    z-index: 9999999;
}

.accounts-container {
    bottom: 50px;
    left: 50px;
    height: 330px;
    position: absolute;
}

.active-account {
    border: 4px solid #8393ca;
    border-radius: 4px;
    height: 180px;
    position: relative;
    width: 250px;
    z-index: 1;
}

.account, .my-wallet-sidebar .account, .add-account-modal .account {
    background-color: #fff;
    border: 2px solid #e1e1e1;
    border-radius: 4px;
    font-family: "Roboto", sans-serif;
    height: 180px;
    margin-bottom: 30px;
    padding: 15px;
    width: 250px;
}

.account-card-type {
    height: 44px;
    margin-bottom: 20px;
    width: 64px;
}

.account-card-type.is-visa {
    background: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/83141/visa-card.svg") center no-repeat;
}

.account-card-type.is-amex {
    background: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/83141/amex-card.svg") center no-repeat;
}

.account-card-type.is-mastercard {
    background: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/83141/mastercard.svg") center no-repeat;
}

.account-card-type.is-unknoqn {
    background: url("https://cdn3.iconfinder.com/data/icons/modifiers-essential/48/v-18-512.png") center no-repeat;
}

.account-number {
    letter-spacing: 0.09em;
    border: none;
    font-family: "Roboto", sans-serif;
    font-size: 20px;
    outline: none;
}


.account-numbe {
    letter-spacing: 0.09em;
    border: none;
    font-family: "Roboto", sans-serif;
    font-size: 20px;
    outline: none;
}
.account-expiration {
    border: none;
    bottom: 15px;
    color: #b2b2b2;
    font-size: 16px;
    left: 15px;
    outline: none;
    position: absolute;
}

.my-wallet-sidebar .account {
    -webkit-transition: top 500ms ease, -webkit-transform 200ms ease;
    -moz-transition: top 500ms ease, -moz-transform 200ms ease;
    transition: top 500ms ease, transform 200ms ease;
    position: absolute;
    top: 0;
    will-change: transform, top;
}

.my-wallet-sidebar .is-selected.account {
    top: -186px !important;
}

.my-wallet-sidebar .account:hover:not(.is-selected) {
    -webkit-transform: translateY(-30px);
    -moz-transform: translateY(-30px);
    -ms-transform: translateY(-30px);
    -o-transform: translateY(-30px);
    transform: translateY(-30px);
    cursor: pointer;
}

.my-wallet-sidebar .account:hover:not(.is-selected).is-stationary {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
}

.account-details-container {
    font-family: "Open Sans", sans-serif;
    height: 100%;
    overflow: hidden;
    padding: 50px;
    position: relative;
}

.account-details {
    -webkit-transition: -webkit-transform 500ms ease, opacity 200ms ease;
    -moz-transition: -moz-transform 500ms ease, opacity 200ms ease;
    transition: transform 500ms ease, opacity 200ms ease;
    -webkit-transform: translateX(110%);
    -moz-transform: translateX(110%);
    -ms-transform: translateX(110%);
    -o-transform: translateX(110%);
    transform: translateX(110%);
    opacity: 0;
    position: absolute;
    top: 50px;
    width: 420px;
}

.account-details.is-selected {
    -webkit-transition: -webkit-transform 500ms ease, opacity 200ms 200ms ease;
    -moz-transition: -moz-transform 500ms ease, opacity 200ms 200ms ease;
    transition: transform 500ms ease, opacity 200ms 200ms ease;
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
    opacity: 1;
}

.transaction-history-placeholder {
    -webkit-transform: translate3d(-50%, -50%, 0);
    -moz-transform: translate3d(-50%, -50%, 0);
    -ms-transform: translate3d(-50%, -50%, 0);
    -o-transform: translate3d(-50%, -50%, 0);
    transform: translate3d(-50%, -50%, 0);
    -webkit-transition: opacity 200ms ease;
    -moz-transition: opacity 200ms ease;
    transition: opacity 200ms ease;
    color: #b2b2b2;
    font-size: 24px;
    font-style: italic;
    font-weight: normal;
    left: 50%;
    opacity: 1;
    position: absolute;
    top: 50%;
}

.transaction-history-placeholder.is-hidden {
    opacity: 0;
}

.value-unit {
    color: #444751;
    font-size: 36px;
    font-weight: bold;
    position: relative;
}

.value-subunit {
    font-size: 0.6em;
    left: -0.5em;
    position: relative;
    top: 0.1em;
}

.account-balance {
    letter-spacing: 0.025em;
    border-bottom: 1px solid #b2b2b2;
    color: #707584;
    font-size: 24px;
    padding-bottom: 60px;
}

.account-balance .value-unit {
    float: right;
    right: -0.25em;
    top: -0.2em;
}

.transaction-history {
    height: 510px;
    overflow: hidden;
    overflow-y: scroll;
    padding-right: 30px;
    width: 450px;
}

.transaction {
    display: table;
    padding: 50px 0 0 38px;
    position: relative;
    width: 100%;
}

.transaction-details {
    display: table-cell;
    width: 80%;
}

.transaction-amount {
    display: table-cell;
    vertical-align: middle;
    text-align: right;
}

.transaction-amount .value-unit {
    font-size: 18px;
    font-weight: normal;
}

.transaction-merchant {
    font-size: 18px;
    font-weight: 600;
    margin-bottom: 5px;
}

.transaction-date {
    color: #b2b2b2;
    font-size: 14px;
}

.transaction:before {
    border-radius: 100%;
    border: 2px solid #e1e1e1;
    content: ' ';
    display: block;
    font-size: 14px;
    font-weight: bold;
    left: 0;
    line-height: 16px;
    height: 20px;
    position: absolute;
    text-align: center;
    top: 65px;
    width: 20px;
}

.transaction[data-transaction-type="debit"]:before {
    content: '\2013';
    line-height: 14px;
}

.transaction[data-transaction-type="debit"] .value-unit {
    color: #8393ca;
}

.transaction[data-transaction-type="credit"]:before {
    content: '\002B';
}

.transaction[data-transaction-type="credit"] .value-unit {
    color: #66cc33;
}

.add-account-modal {
    visibility: hidden;
}

.add-account-modal .overlay {
    -webkit-transition: opacity 200ms ease;
    -moz-transition: opacity 200ms ease;
    transition: opacity 200ms ease;
    background: white;
    height: 100%;
    opacity: 0;
    position: absolute;
    width: 100%;
    z-index: 9000;
}

.add-account-modal .account {
    -webkit-transform: translate3d(-50%, -30%, 0);
    -moz-transform: translate3d(-50%, -30%, 0);
    -ms-transform: translate3d(-50%, -30%, 0);
    -o-transform: translate3d(-50%, -30%, 0);
    transform: translate3d(-50%, -30%, 0);
    -webkit-transition: all 300ms ease;
    -moz-transition: all 300ms ease;
    transition: all 300ms ease;
    border-color: Royalblue;
    left: 50%;
    opacity: 0;
    position: absolute;
    top: 50%;
    will-change: transform, opacity;
    z-index: 9001;
}

.add-account-modal .account-card-type {
    border-radius: 5px;
    float: left;
    margin-left: 12px;
}

.add-account-modal .account-card-type.is-visa {
    margin-left: 0;
}

.add-account-modal .account-card-type:hover {
    border: 3px solid white;
    cursor: pointer;
}

.add-account-modal .account-card-type.is-selected {
    border: 3px solid white;
}

.add-account-modal .account-number .account-numbe{
    letter-spacing: 0.03em;
}

.add-account-modal .account-expiration {
    color: #444751;
}

.add-account-modal .has-error.account {
    -webkit-animation: error 300ms ease forwards;
    -moz-animation: error 300ms ease forwards;
    animation: error 300ms ease forwards;
}

.add-account-modal button {
    background-color: Royalblue;
    border-radius: 4px;
    border: 4px;
    color: #fff;
    float: right;
    font-size: 14px;
    padding: 5px 10px;
    position: relative;
    top: 60px;
    right: -20px;
}

.add-account-modal button:hover {
    background-color: #ffb31a;
    cursor: pointer;
}

.add-account-modal button:focus {
    outline: none;
}

.add-account-modal.is-visible {
    visibility: visible;
}

.add-account-modal.is-visible .account {
    -webkit-transform: translate3d(-50%, -50%, 0);
    -moz-transform: translate3d(-50%, -50%, 0);
    -ms-transform: translate3d(-50%, -50%, 0);
    -o-transform: translate3d(-50%, -50%, 0);
    transform: translate3d(-50%, -50%, 0);
    opacity: 1;
}

.add-account-modal.is-visible .overlay {
    opacity: 0.8;
}

.temp-account {
    color: #b2b2b2;
    font-size: 24px;
    font-style: italic;
    padding: 50px 0;
    text-align: center;
}

@-webkit-keyframes load {
    from {
        visibility: visible;
        opacity: 1;
    }
    to {
        visibility: hidden;
        opacity: 0;
    }
}

@-moz-keyframes load {
    from {
        visibility: visible;
        opacity: 1;
    }
    to {
        visibility: hidden;
        opacity: 0;
    }
}

@keyframes load {
    from {
        visibility: visible;
        opacity: 1;
    }
    to {
        visibility: hidden;
        opacity: 0;
    }
}

@-webkit-keyframes error {
    0% {
        margin-left: 0;
    }
    33% {
        margin-left: 30px;
    }
    66% {
        margin-left: -30px;
    }
    100% {
        margin-left: 0;
    }
}

@-moz-keyframes error {
    0% {
        margin-left: 0;
    }
    33% {
        margin-left: 30px;
    }
    66% {
        margin-left: -30px;
    }
    100% {
        margin-left: 0;
    }
}

@keyframes error {
    0% {
        margin-left: 0;
    }
    33% {
        margin-left: 30px;
    }
    66% {
        margin-left: -30px;
    }
    100% {
        margin-left: 0;
    }
}

</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/83141/jquery.maskedinput.min.js"></script>
<script>
(function($) {
	$(document).ready(function() {

		// Card Shuffle 
		function sortCards() {
			var cards = $('.account:not(.is-selected)', '.my-wallet-sidebar'),
				i = 0;
			
			$('.is-stationary').removeClass('is-stationary');
			
			cards.each(function(i) {
				var index = i;

				$(this).css({
					'top': (180 / (cards.length-1)) * index + 'px'
				});
				
				i++;
				
				if( cards.length === i || cards.length <= 2 ) {
					$(this).addClass('is-stationary');
				}
			});// END each
		}
		
		sortCards();
	
		// Set active account
		$(document).on('click','.my-wallet-sidebar .account:not(.is-selected)', function() {
			var card = $(this),
				account = $('[data-account="' + $(this).attr('data-account') +'"]'),
				selected = $('.is-selected'),
				placeholder = $('.transaction-history-placeholder');
			
			account.addClass('is-selected'); 
			placeholder.addClass('is-hidden');
			selected.removeClass('is-selected');
			setTimeout( sortCards, 10);
		});
		
		// Add Account
		$('.account-number').mask('9999 9999 9999 9999', {placeholder:'**** **** **** ****'});
		$('.account-numbe').mask('999', {placeholder:'***'});
		$.mask.definitions['a']='';
		$('.account-expiration').mask('Valid Thru: 99/99');
		
		// Modal
		$('.add-account').on('click', function() {
			$('.add-account-modal').addClass('is-visible');
		});
		function addAccount() {
			var accountNum = $('input.account-number').val(),
			    accountCVC = $('input.account-numbe').val(),
				accountExp = $('input.account-expiration').val(),
				cardType = $('.account-card-type.is-selected').attr('data-card-type'),
				accountsContainer = $('.accounts-container'),
				html,
				htmlHistory;
			
			html = '<div class="account" data-account="' + accountNum.substr(15) + '">'
				 + '<div class="account-card-type ' + cardType + '"></div>'
				 + '<div class="account-number">**** **** **** ' + accountNum.substr(15) + '</div>'
				 + '<div class="account-expiration">' + accountExp + '</div>'
				 + '</div><!-- /.account -->'; 
			
			htmlHistory = '<div class="account-details" data-account="' + accountNum.substr(15) + '"><div class="account-balance">Current Balance<div class="value-unit">$0.<sup class="value-subunit">00</sup><!-- /.subunit --></div><!-- /.unit --></div><!-- /.account-balance --><div class="temp-account">Pending New Account</div></div><!-- /.account --></div><!-- /.account-details -->';
			
			if( accountNum != '' && accountExp != '' ) {
				accountsContainer.append(html);
				$('.account-details-container').append(htmlHistory);
				$('input.account-number, input.account-expiration').val('');
				$('.add-account-modal').removeClass('is-visible');
			} else {
				$('.new-account').addClass('has-error');
				setTimeout( function() {
					$('.new-account').removeClass('has-error');
				}, 400);
			}
		}

		
		// Close modal on overlay click
		$('.add-account-modal .overlay').on('click', function () {
			$('.add-account-modal').removeClass('is-visible');
		});
		
		// Select card type
		$('.new-account .account-card-type').on('click',function() {
			$('.account-card-type.is-selected').removeClass('is-selected');
			$(this).addClass('is-selected');
		});
		
	});
})(jQuery);
</script>