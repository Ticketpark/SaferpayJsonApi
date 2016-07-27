<?php

use \Ticketpark\SaferpayJson\Container;
use Ticketpark\SaferpayJson\Transaction\AuthorizeRequest;
use \Ticketpark\SaferpayJson\Message\ErrorResponse;

require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/../credentials.php';

// A token you received after initializing a transaction (see 1-example-initialize.php)

$token = 'xxx';

// Step 1:
// Prepare the authorization request
// See http://saferpay.github.io/jsonapi/#Payment_v1_Transaction_Authorize

$requestHeader = (new Container\RequestHeader())
    ->setCustomerId($customerId)
    ->setRequestId(uniqid());

$response = (new AuthorizeRequest($apiKey, $apiSecret))
    ->setRequestHeader($requestHeader)
    ->setToken($token)
    ->execute();

// Step 2:
// Check for successful response

if ($response instanceof ErrorResponse) {
    die($response->getErrorName().': '.$response->getErrorMessage());
}

echo 'The payment means for this transaction was: ' . $response->getPaymentMeans()->getBrand()->getPaymentMethod();

// Step 3:
// Capture the transaction to get the cash flowing.
// See ../Transaction/7-example-capture.php
