<?php
if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) && $_SERVER['REQUEST_METHOD']==='POST'){
$fname = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent=" From: $fname \n Email: $email \n Message: $message";
$recipient = "info@fibonia.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader);
echo 'Success! Your email has been sent!';
}
?>