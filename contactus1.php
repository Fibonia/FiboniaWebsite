<?php
if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) && $_SERVER['REQUEST_METHOD']==='POST'){
$fname = $_POST['name'];
$sname = $_POST['name0'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$formcontent=" From: $fname $sname \n Phone: $phone \n Email: $email \n Message: $message";
$recipient = "info@fibonia.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo '<script>window.location.href = "SuccessContact.html";</script>';
}
?>