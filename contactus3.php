<?php
$fname = $_POST['your-name'];
$sname = $_POST['last-name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$formcontent=" From: $fname $sname \n Phone: $phone \n Email: $email \n Message: $message";
$recipient = "info@fibonia.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
header('Location: https://www.fibonia.com/redirect#contact');
?>