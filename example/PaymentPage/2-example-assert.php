<?php

use \Ticketpark\SaferpayJson\Container;
use \Ticketpark\SaferpayJson\PaymentPage\AssertRequest;
use \Ticketpark\SaferpayJson\Message\ErrorResponse;

require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/../credentials.php';

// A token you received after initializing a payment page (see 1-example-assert.php)

$token = 'xxx';

// Step 1:
// Prepare the assert request
// See http://saferpay.github.io/jsonapi/1.2/#Payment_v1_PaymentPage_Assert

$requestHeader = (new Container\RequestHeader())
    ->setCustomerId($customerId)
    ->setRequestId(uniqid());

$response = (new AssertRequest($apiKey, $apiSecret))
    ->setRequestHeader($requestHeader)
    ->setToken($token)
    ->execute();

// Step 2:
// Check for successful response

if ($response instanceof ErrorResponse) {
    die($response->getErrorMessage());
}

echo 'The transaction has been successful! Transaction id: ' . $response->getTransaction()->getId();

// Step 3:
// Capture the transaction to get the cash flowing.
// See ../Transaction/1-example-capture.php
