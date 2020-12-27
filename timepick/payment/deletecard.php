<?php
session_start();
require_once 'stripe-php/init.php'; 

$stripe = new \Stripe\StripeClient(
  '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'
);
$stripe->paymentMethods->detach(
  $_GET['card'],
  []
);

echo '<script>window.location.href = "index.php?code='.$_GET["code"].'";</script>';
?>