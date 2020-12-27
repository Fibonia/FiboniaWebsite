<?php
session_start();
$url = $_SERVER['REQUEST_URI'];

if (strpos($url, 'code') === false){
header("Location: https://www.fibonia.com/response.php?email=error&code=error");
exit();
}
$code_key = $_GET['code'];
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'abelo999_abelo';
$DATABASE_PASS = 'Mamagan9';
$DATABASE_NAME = 'abelo999_phplogin';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
$stmt = $con->prepare('SELECT uniqid3 FROM requests WHERE uniqid2 = ?');
$stmt->bind_param('s', $_GET['code']);
$stmt->execute();
$stmt->bind_result($ouruniqid3);
$stmt->fetch();
$stmt->close();
$ourpaymentredirect = "https://www.fibonia.com/1/html/pair.php?code=".$ouruniqid3;
$_SESSION['redirectpage'] = $ourpaymentredirect;
$_SESSION['uniqid2'] = $_GET['code'];
 
require_once 'config.php'; 
if ($itemPrice <= 0 ){
$accept = "Accepted";
$unread = "Yes";
$notifmsg = "accepted";
$stmt = $con->prepare('SELECT COUNT(studentid),studentid,tutorid,type,sdate1,sdate2,tdate1,tdate2,class,uniqid3 FROM requests WHERE uniqid2 = ?');
$stmt->bind_param('s', $_GET['code']);
$stmt->execute();
$stmt->bind_result($ourval,$studentid,$tutorid,$type,$sdate1,$sdate2,$tdate1,$tdate2,$class,$uniqid3);
$stmt->fetch();
$stmt->close();






if ($ourval == 0){
header("Location: https://www.fibonia.com/response.php?email=error&code=error");
exit();
}else{
$stmt = $con->prepare('SELECT email FROM tutoraccounts WHERE id = ?');
$stmt->bind_param('s', $tutorid);
$stmt->execute();
$stmt->bind_result($tutoremail);
$stmt->fetch();
$stmt->close();
if ($type=="fibonia"){
$stmt = $con->prepare('SELECT email FROM accounts WHERE id = ?');
$stmt->bind_param('s', $studentid);
$stmt->execute();
$stmt->bind_result($studentemail);
$stmt->fetch();
$stmt->close();
}else if ($type == "facebook"){
$stmt = $con->prepare('SELECT email_id FROM usersdata1 WHERE oauthid = ?');
$stmt->bind_param('s', $studentid);
$stmt->execute();
$stmt->bind_result($studentemail);
$stmt->fetch();
$stmt->close();
}else if ($type == "google"){
$stmt = $con->prepare('SELECT email_id FROM usersdata WHERE oauthid = ?');
$stmt->bind_param('s', $studentid);
$stmt->execute();
$stmt->bind_result($studentemail);
$stmt->fetch();
$stmt->close();
}

echo '<script>var timezone_offset_minutes = new Date().getTimezoneOffset();timezone_offset_minutes = timezone_offset_minutes == 0 ? 0 : -timezone_offset_minutes;document.cookie = "daud="+timezone_offset_minutes;</script>';
$timezone_offset_minutes = $_COOKIE['daud'];
$ourstr = $timezone_offset_minutes."minutes";


if ($tdate1 == NULL && $tdate2 == NULL){
$date1 = date('D, M j, Y \a\t g:ia', strtotime($ourstr, strtotime($sdate1)));
$date2 = date('D, M j, Y \a\t g:ia', strtotime($ourstr, strtotime($sdate2)));
    
}
else{
$date1 = date('D, M j, Y \a\t g:ia', strtotime($ourstr, strtotime($tdate1)));
$date2 = date('D, M j, Y \a\t g:ia', strtotime($ourstr, strtotime($tdate2)));
    
}
require 'PHPMailer/PHPMailerAutoload.php';
$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = 'mail.fibonia.com';  
$mail->SMTPAuth = true;
$mail->Username = 'info@fibonia.com';
$mail->Password = 'Mamagan999';
$mail->SMTPSecure = 'tls';                  
$mail->Port = 25;
$mail->setFrom('info@fibonia.com', 'Fibonia Team');
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
$mail->Username = 'info@fibonia.com';
$mail->Password = 'Mamagan999';
$mail->SMTPSecure = 'tls';                  
$mail->Port = 25;
$mail->setFrom('info@fibonia.com', 'Fibonia Team');
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
$stmt = $conn->prepare('UPDATE requests SET readnotifstudent = ?,studentmsg = ? WHERE uniqid2 = ?');
$stmt->bind_param('sss',$notif1,$null,$_SESSION['uniqid2']);
$stmt->execute();
$stmt->close();
$redirecturlpg = "Location: https://www.fibonia.com/1/html/pair.php?code=".$uniqid3;
header($redirecturlpg);
exit();

}
}else{
$stmt = $con->prepare('SELECT email FROM tutoraccounts WHERE id = ?');
$stmt->bind_param('s', $tutorid);
$stmt->execute();
$stmt->bind_result($tutoremail);
$stmt->fetch();
$stmt->close();
if ($type=="fibonia"){
$stmt = $con->prepare('SELECT email FROM accounts WHERE id = ?');
$stmt->bind_param('s', $studentid);
$stmt->execute();
$stmt->bind_result($studentemail);
$stmt->fetch();
$stmt->close();
}else if ($type == "facebook"){
$stmt = $con->prepare('SELECT email_id FROM usersdata1 WHERE oauthid = ?');
$stmt->bind_param('s', $studentid);
$stmt->execute();
$stmt->bind_result($studentemail);
$stmt->fetch();
$stmt->close();
}else if ($type == "google"){
$stmt = $con->prepare('SELECT email_id FROM usersdata WHERE oauthid = ?');
$stmt->bind_param('s', $studentid);
$stmt->execute();
$stmt->bind_result($studentemail);
$stmt->fetch();
$stmt->close();
}

if ($tdate1 == NULL && $tdate2 == NULL){
$date1 = date('D, M j, Y \a\t g:ia', strtotime($ourstr, strtotime($sdate1)));
$date2 = date('D, M j, Y \a\t g:ia', strtotime($ourstr, strtotime($sdate2)));
    
}
else{
$date1 = date('D, M j, Y \a\t g:ia', strtotime($ourstr, strtotime($tdate1)));
$date2 = date('D, M j, Y \a\t g:ia', strtotime($ourstr, strtotime($tdate2)));
    
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
?>
<link rel="stylesheet" href="css/style.css">
<div class="panel"><div class="panel-heading">
        <h3 class="panel-title">Charge <?php echo '$'.$itemPrice; ?> with Fibonia</h3>
        <p><b>Item Name:</b> <?php echo $itemName; ?></p>
        <p><b>Price:</b> <?php echo '$'.$itemPrice1.' '.$currency; ?></p>
        <p><b>Service Fee:</b><?php echo '$'.$itemPrice1*0.1.' '.$currency; ?></p>
        <p><b>Total Price:</b><?php echo '$'.$itemPrice.' '.$currency; ?></p>
    </div>
    <div class="panel-body">
        <div id="paymentResponse"></div>
        <form action="payment.php" method="POST" id="paymentFrm">
            <div class="form-group">
                <label>NAME</label>
                <input type="text" name="name" id="name" class="field" placeholder="Enter name" required="" autofocus="">
            </div>
            <div class="form-group">
                <label>EMAIL</label>
                <input type="email" name="email" id="email" class="field" placeholder="Enter email" required="">
            </div>
            <div class="form-group">
                <label>CARD NUMBER</label>
                <div id="card_number" class="field" style="width:92%;"></div>
            </div>
            <div class="row">
                <div class="left">
                    <div class="form-group">
                        <label>EXPIRY DATE</label>
                        <div id="card_expiry" class="field"></div>
                    </div>
                </div>
                <div class="right">
                    <div class="form-group">
                        <label>CVC CODE</label>
                        <div id="card_cvc" class="field"></div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-success" id="payBtn">Submit Payment</button>
        </form>
    </div>
</div>

<script src="https://js.stripe.com/v3/"></script>
<script>
var stripe = Stripe('<?php echo STRIPE_PUBLISHABLE_KEY; ?>');
var elements = stripe.elements();
var style = {
    base: {
        fontWeight: 400,
        fontFamily: 'Roboto, Open Sans, Segoe UI, sans-serif',
        fontSize: '16px',
        lineHeight: '1.4',
        color: '#555',
        backgroundColor: '#fff',
        '::placeholder': {
            color: '#888',
        },
    },
    invalid: {
        color: '#eb1c26',
    }
};

var cardElement = elements.create('cardNumber', {
    style: style
});
cardElement.mount('#card_number');

var exp = elements.create('cardExpiry', {
    'style': style
});
exp.mount('#card_expiry');

var cvc = elements.create('cardCvc', {
    'style': style
});
cvc.mount('#card_cvc');

var resultContainer = document.getElementById('paymentResponse');
cardElement.addEventListener('change', function(event) {
    if (event.error) {
        resultContainer.innerHTML = '<p>'+event.error.message+'</p>';
    } else {
        resultContainer.innerHTML = '';
    }
});

var form = document.getElementById('paymentFrm');
form.addEventListener('submit', function(e) {
    e.preventDefault();
    createToken();
});

function createToken() {
    stripe.createToken(cardElement).then(function(result) {
        if (result.error) {
            resultContainer.innerHTML = '<p>'+result.error.message+'</p>';
        } else {
            stripeTokenHandler(result.token);
        }
    });
}

function stripeTokenHandler(token) {
    var hiddenInput = document.createElement('input');
    hiddenInput.setAttribute('type', 'hidden');
    hiddenInput.setAttribute('name', 'stripeToken');
    hiddenInput.setAttribute('value', token.id);
    form.appendChild(hiddenInput);
    form.submit();
}
</script>