<?php

use \Ticketpark\SaferpayJson\Container;
use \Ticketpark\SaferpayJson\PaymentPage\AssertRequest;
use \Ticketpark\SaferpayJson\Message\ErrorResponse;

require_once __DIR__ . '/../../vendor/autoload.php';

// Common test data according to
// https://www.six-payment-services.com/en/site/saferpay-support/testaccount.html

$customerId = '401860';
$apiKey     = 'API_401860_80003225';
$apiSecret  = 'C-y*bv8346Ze5-T8';

// A token you received after initializing a payment page (see 1-example-assert.php)

$token = 'xxx';

// Step 1:
// Prepare the assert request
// See http://saferpay.github.io/jsonapi/#Payment_v1_PaymentPage_Assert

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
