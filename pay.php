<?php
require_once('vendor/autoload.php');

$stripe = new \Stripe\StripeClient(
  'sk_test_51IThxYKrcRlhxv1kitQYprRAKmqr3eje2YW4kQ003JSm2wsYMXa9VOlyyOecHMFkYZO6p70yLcfp5S698NhdpimB00tYnUnDQN'
);
$result=$stripe->tokens->create([
  'card' => [
    'number' => '4242424242424242',
    'exp_month' => 3,
    'exp_year' => 2022,
    'cvc' => '314',
  ],
]);

$token = $result['id'];
$customer=$stripe->customers->create([
	'name'=>'yudhbir2 singh',
	'email'=>'yudhbir@test2.com',
 	// 'address' => [
  //       'line1' => '510 Townsend St',
  //       'postal_code' => '98140',
  //       'city' => 'San Francisco',
  //       'state' => 'CA',
  //       'country' => 'US',
  //   ],
]);
$stripe->customers->createSource(
    $customer->id,
    ['source' => $token]
);
$result_charge=$stripe->charges->create([
	'customer'=>$customer->id,	
  'amount' => 3000,
  'currency' => 'usd',
  // 'source' => $token,
  'description' => 'My First Test Charge (created for API docs)',  
]);

echo "<pre>";print_r($result_charge);echo"</pre>";