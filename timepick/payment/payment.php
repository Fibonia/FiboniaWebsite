<?php 
session_start();
use MrShan0\PHPFirestore\FirestoreClient;
require 'vendor/autoload.php';
// Include configuration file  
$itemName = "Class Payment"; 
$itemNumber = "ClassPay";
require_once 'stripe-php/init.php'; 
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
if ($_SESSION["code"] == substr($var[0]["uniqid"],30,10)){
    $time = $var[0]["time"];
    $email = $var[0]["tutorEmail"];
    $class = $var[0]["classname"];
    $tutoremail = $var[0]["tutorEmail"];
    $ourval = 1;
    $uniqid3 = substr($var[0]["uniqid"],40,10);
    $uid = $var[0]["uid"];
    $studentemail = $var[0]["studentEmail"];
    break;
}
$counter5 += 1;
}
$counter += 1;
}
}catch (\Throwable $t){
}

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
 
$payment_id = $statusMsg = ''; 
$ordStatus = 'error'; 
$itemPrice = $_SESSION['item_price'];

if(!empty($_POST['paymentid'])){ 


     
    // Include Stripe PHP library 
    require_once 'stripe-php/init.php'; 
     
    // Set API key 
    \Stripe\Stripe::setApiKey(STRIPE_API_KEY); 
     

     
    if(empty($api_error)){  
         
        // Convert price to cents 
        $itemPriceCents = ($itemPrice*100); 
        $itemtaxCents = 0.1*$itemPrice*100;
         
        // Charge a credit or a debit card 
        try {  
if ($_POST["tutorid"] == NULL){

$itemprc = $itemPriceCents+$itemtaxCents;

$charge = \Stripe\PaymentIntent::create([
    'amount' => $itemprc,
    'currency' => $currency,
    'customer' => $_POST['customerid'],
    'payment_method' => $_POST['paymentid'],
    'error_on_requires_action' => true,
    'confirm' => true,
  ]);

$itemPriceDoll = $itemPriceCents/100;

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
db.collection("tutors").doc("'.$tutoremail.'").get().then(function(doc) {
    if (doc.exists) {
    var venmo_balance = doc.data()["venmo_balance"];
    var itemprice = '.$itemPriceDoll.';
    venmo_balance = venmo_balance + itemprice;
    db.collection("tutors").doc("'.$tutoremail.'").update({"venmo_balance": venmo_balance}).then(function() {});
    }});</script>';
    
} else{

$charge = \Stripe\PaymentIntent::create([
    'amount' => $itemPriceCents,
    'currency' => $currency,
    'customer' => $_POST['customerid'],
    'payment_method' => $_POST['paymentid'],
    'application_fee_amount' => $itemtaxCents,
    'transfer_data' => ['destination' => $_POST["tutorid"],],
    'error_on_requires_action' => true,
    'confirm' => true,
  ]);
  
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
var db = firebase.firestore();</script>';

}
        }catch(Exception $e) {  
            $api_error = $e->getMessage();  
        } 
         
        if(empty($api_error) && $charge){ 
         
            // Retrieve charge details 
            $chargeJson = $charge->jsonSerialize(); 
         
            // Check whether the charge is successful 
            if($chargeJson['status'] == 'succeeded'){ 
                // Transaction details  
                $transactionID = $chargeJson['id']; 
                $paidAmount = $chargeJson['amount']; 
                $paidAmount = ($paidAmount/100); 
                $paidCurrency = $chargeJson['currency']; 
                $payment_status = $chargeJson['status']; 
                // Include database connection file  
                echo '
                <script>
db.collection("tutors").doc("'.$tutoremail.'").get().then(function(doc) {
    if (doc.exists) {
    var i;
    for (i = 0; doc.data()["appointments"][i]["uid"] != "'.$uid.'"; i++) {
    }
    var appt = doc.data()["appointments"];
    appt[i]["txn_id"] = "'.$transactionID.'";
    db.collection("tutors").doc("'.$tutoremail.'").update({"appointments": appt}).then(function() {});
    }});
db.collection("users").doc("'.$studentemail.'").get().then(function(doc) {
    if (doc.exists) {
    var i;
    for (i = 0; doc.data()["appointments"][i]["uid"] != "'.$uid.'"; i++) {
    }
    var appt = doc.data()["appointments"];
    appt[i]["txn_id"] = "'.$transactionID.'";
        db.collection("users").doc("'.$studentemail.'").update({"appointments": appt}).then(function() {});
    }});
db.collection("'.$class.'").doc("'.$tutoremail.'").get().then(function(doc) {
    if (doc.exists) {
    var i;
    for (i = 0; doc.data()["appointments"][i]["uid"] != "'.$uid.'"; i++) {
    }
    var appt = doc.data()["appointments"];
    appt[i]["txn_id"] = "'.$transactionID.'";
        db.collection("'.$class.'").doc("'.$tutoremail.'").update({"appointments": appt}).then(function() {});
    }});</script>
                
                
                ';
                

                

                // If the order is successful 
                if($payment_status == 'succeeded'){ 
                    $ordStatus = 'success'; 
                    $statusMsg = 'Your Payment has been Successful!'; 
                $name = "";
$payment_id = $transactionID;





echo '<script>var timezone_offset_minutes = new Date().getTimezoneOffset();timezone_offset_minutes = timezone_offset_minutes == 0 ? 0 : -timezone_offset_minutes;document.cookie = "daud="+timezone_offset_minutes;</script>';
$timezone_offset_minutes = $_COOKIE['daud'];
$ourstr = $timezone_offset_minutes."minutes";
$date1 = date('D, M j, Y \a\t g:ia', strtotime($ourstr, strtotime($_SESSION["sdate1"])));
if ($tdate2 == NULL){
$date = date('D, M j, Y \a\t g:ia', strtotime($ourstr, strtotime($_SESSION["sdate1"])));
} else{
$date = date('D, M j, Y \a\t g:ia', strtotime($ourstr, strtotime($tdate1)));
}




$someuniqid1 = uniqid();
$someuniqid2 = uniqid();
$someuniqid3 = uniqid();
$someuniqid = $someuniqid1.$someuniqid2.$someuniqid3;


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
$mail->addAddress($_SESSION['tutoremail']);
$mail->isHTML(true);
$output = "Good News! You will be tutoring for a student in class ".$_SESSION['class']." from ".$_SESSION['date1']." to ".$_SESSION['date2']."! You may now chat with the student to prepare for the tutoring, if need be.";

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
$mail->addAddress($_SESSION['studentemail']);
$mail->isHTML(true);
$output = "Good News! You will be receiving tutoring in class ".$_SESSION['class']." from ".$_SESSION['date1']." to ".$_SESSION['date2'].", as you had requested.<br>";
$output .= 'To chat with your tutor for this class, please click <a href="'.$_SESSION['redirectpage'].'">here</a>';
$body = $output; 
$mail->Subject = 'Tutor Request - Fibonia Team';
$mail->Body    = $body;
if(!$mail->send()) {} else {};

$notif1 = "No";
$null = "Paid";


                }else{ 
                    $statusMsg = "Your Payment has Failed!"; 
                } 
            }else{ 
                $statusMsg = "Transaction has been failed!"; 
            } 
        }else{ 
            $statusMsg = "Charge creation failed! $api_error"; 
        } 
    }else{  
        $statusMsg = "Invalid card details! $api_error";  
    } 
}else{ 
    $statusMsg = "Error on form submission."; 
} 
if ($payment_status == "succeeded"){
    $redirecturl = "https://www.fibonia.com";
    $buttonmsg = "Go back to Home page";
}else{
    $redirecturl = "index.php?code=".$_SESSION['uniqid2'];
    $buttonmsg = "Back to Payment Page";
}

?>
<link rel="stylesheet" href="css/style.css">
<head><title>
Payment | Fibonia</title>   
<link rel="icon" type="image/png" href="logo.png">
</head>
<div class="container">
    <div class="status">
        <?php if(!empty($payment_id)){ ?>
            <h1 class="<?php echo $ordStatus; ?>"><?php echo $statusMsg; ?></h1>
            <h4>Payment Information</h4>
            <p><b>Reference Number:</b> <?php echo $payment_id; ?></p>
            <p><b>Transaction ID:</b> <?php echo $transactionID; ?></p>
            <p><b>Paid Amount:</b> <?php echo $paidAmount.' '.$paidCurrency; ?></p>
            <p><b>Payment Status:</b> <?php echo $payment_status; ?></p>
			
            <h4>Product Information</h4>
            <p><b>Name:</b> <?php echo $itemName; ?></p>
            <p><b>Price:</b> <?php echo $itemPrice.' '.$currency; ?></p>
        <?php }else{ ?>
            <h1 class="error">Your Payment has Failed</h1>
        <?php } ?>
    </div>
    <?php echo '<a href="'.$redirecturl.'" class="btn-link">'.$buttonmsg.'</a>'; ?>
</div>