<?php
require_once('vendor/autoload.php');
try{
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
} catch(Stripe_CardError $e) {
  // Since it's a decline, Stripe_CardError will be caught
  $body = $e->getJsonBody();
  $error = $e->getMessage();
} catch (Stripe_InvalidRequestError $e) {
  $error = $e->getMessage();
  // Invalid parameters were supplied to Stripe's API
} catch (Stripe_AuthenticationError $e) {
   $error = $e->getMessage();
  // Authentication with Stripe's API failed
  // (maybe you changed API keys recently)
} catch (Stripe_ApiConnectionError $e) {
   $error = $e->getMessage();
  // Network communication with Stripe failed
} catch (Stripe_Error $e) {
   $error = $e->getMessage();
  // Display a very generic error to the user, and maybe send
  // yourself an email
} catch (Exception $e) {
  $error = $e->getMessage();
  
  // Something else happened, completely unrelated to Stripe
}