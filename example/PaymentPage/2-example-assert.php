<?php

use \Ticketpark\SaferpayJson\Container;
use \Ticketpark\SaferpayJson\PaymentPage\AssertRequest;
use \Ticketpark\SaferpayJson\Message\ErrorResponse;

require_once 'vendor/autoload.php';

// Common test data according to
// https://www.six-payment-services.com/en/site/saferpay-support/testaccount.html

$customerId = '401860';
$apiKey     = 'API_401860_81002685';
$apiSecret  = 'C-y*bv8346Ze5-T8';

// Step 1:
// Prepare the assert request
// See https://test.saferpay.com/jsonapihelp/#Payment_v1_PaymentPage_Assert

$requestHeader = (new Container\RequestHeader())
    ->setCustomerId($customerId)
    ->setRequestId(uniqid());

$response = (new AssertRequest($apiKey, $apiSecret))
    ->setRequestHeader($requestHeader)
    ->setToken('99101mhdvzzsdwjskr3qcwuwo')
    ->execute();

// Step 2:
// Check for successful response

if ($response instanceof ErrorResponse) {
    die($response->getErrorMessage());
}

echo 'The transaction has been successful! Current status: ' . $response->getTransaction()->getStatus();


