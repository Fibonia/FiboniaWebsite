<?php
session_start();
require_once 'stripe-php/init.php'; 

$stripe = new \Stripe\StripeClient(
  'sk_test_DMiK1oNbmgPE0SxC69vLO489007v8m0JWJ'
);
$payment_methods = $stripe->customers->allSources(
  'cus_HOIwF2sSxnRa66',
  ['object' => 'card', 'limit' => 3]
);

$count = 0;
while ($payment_methods["data"][$count] != ""){
echo $payment_methods["data"][$count]["last4"];
$count += 1;
}
?>