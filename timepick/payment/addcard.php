<?php
session_start();
require_once 'stripe-php/init.php';

$stripe = new \Stripe\StripeClient(
  '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'
);

\Stripe\Stripe::setApiKey('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');
if ($_POST['stripeid'] != 0){
$payment_method = \Stripe\PaymentMethod::retrieve($_POST['resultid']);
$payment_method->attach(['customer' => $_POST['stripeid']]);
$stripe_id = "";
}else{
$customer = \Stripe\Customer::create([
  'payment_method' => $_POST['resultid'],
]);
$stripe_id = $customer->id;
}
echo json_encode(array("statusCode"=>200,"stripeid"=>$stripe_id,"email"=>$_POST['email']));
?>

