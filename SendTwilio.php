<?php 
 
// Get the PHP helper library from twilio.com/docs/php/install 

error_reporting(E_ALL);
require_once 'vendor/autoload.php'; // Loads the library 
 
use Twilio\Rest\Client; 
 
$account_sid = 'ACc48d4404b685a570116d3a9ba905a8f3'; 
$auth_token = 'd61e923d0244dc1828c4d76ad509eb7b'; 
$client = new Client($account_sid, $auth_token); 
 
$client->messages->create(
"+14129600170",
 array( 
        'From' => "+16693335665",
	'Body' => "Hello from Vraj Soni CS643 Fall 2017"        
  ));

?>