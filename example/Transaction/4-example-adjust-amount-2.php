<?php

use \Ticketpark\SaferpayJson\Container;
use \Ticketpark\SaferpayJson\Message\ErrorResponse;
use \Ticketpark\SaferpayJson\Transaction\AdjustAmountRequest;
use \Ticketpark\SaferpayJson\Transaction\InitializeRequest;

require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/../credentials.php';

// A token you received after initializing a transaction (see 4-example-adjust-amount-1.php)

$token = 'xxx';

// Step 1:
// Prepare the adjust amount request
// http://saferpay.github.io/jsonapi/#Payment_v1_Transaction_AdjustAmount

$requestHeader = (new Container\RequestHeader())
    ->setCustomerId($customerId)
    ->setRequestId(uniqid());

$amount = (new Container\Amount())
    ->setCurrencyCode('CHF')
    ->setValue(6000); // new amount in cents

$response = (new AdjustAmountRequest($apiKey, $apiSecret))
    ->setRequestHeader($requestHeader)
    ->setToken($token)
    ->setAmount($amount)
    ->execute();


// Step 2:
// Check for successful response

if ($response instanceof ErrorResponse) {
    die($response->getErrorName().': '.$response->getErrorMessage());
}

echo "The amount has successfully been changed for payment<br>\n";