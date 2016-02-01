<?php

use \Ticketpark\SaferpayJson\Container;
use \Ticketpark\SaferpayJson\Message\ErrorResponse;
use \Ticketpark\SaferpayJson\Transaction\CaptureRequest;

require_once 'vendor/autoload.php';

// Common test data according to
// https://www.six-payment-services.com/en/site/saferpay-support/testaccount.html

$customerId = '401860';
$apiKey     = 'API_401860_81002685';
$apiSecret  = 'C-y*bv8346Ze5-T8';

// A transactionid you received with a successful payment (see ../PaymentPage/2-example-assert.php)

$transactionId = 'xxx';

// Step 1:
// Prepare the capture request
// https://test.saferpay.com/jsonapihelp/#Payment_v1_Transaction_Capture

$requestHeader = (new Container\RequestHeader())
    ->setCustomerId($customerId)
    ->setRequestId(uniqid());

$transactionReference = (new Container\TransactionReference())
    ->setTransactionId($transactionId);

$response = (new CaptureRequest($apiKey, $apiSecret))
    ->setRequestHeader($requestHeader)
    ->setTransactionReference($transactionReference)
    ->execute();

// Step 2:
// Check for successful response

if ($response instanceof ErrorResponse) {
    die($response->getErrorMessage());
}

echo 'The transaction has successfully been captured! Transaction-ID: ' . $response->getTransactionId();
