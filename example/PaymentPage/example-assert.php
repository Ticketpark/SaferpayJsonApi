<?php declare(strict_types=1);

use Ticketpark\SaferpayJson\Request\RequestConfig;
use Ticketpark\SaferpayJson\Request\PaymentPage\AssertRequest;
use Ticketpark\SaferpayJson\Response\ErrorResponse;

require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/../credentials.php';

// A token you received after initializing a payment page (see example-assert.php)

$token = 'xxx';

// -----------------------------
// Step 1:
// Prepare the assert request
// See http://saferpay.github.io/jsonapi/#Payment_v1_PaymentPage_Assert

$requestConfig = new RequestConfig(
    $apiKey,
    $apiSecret,
    $customerId,
    true
);

// -----------------------------
// Step 2:
// Create the request with required data

$assertRequest = new AssertRequest(
    $requestConfig,
    $token,
);

// -----------------------------
// Step 3:
// Execute and check for successful response

$response = $assertRequest->execute();

if ($response instanceof ErrorResponse) {
    die($response->getErrorMessage());
}

echo 'The transaction has been successful! Transaction id: ' . $response->getTransaction()->getId()."\n";

// -----------------------------
// Step 4:
// Capture the transaction to get the cash flowing.
// See ../Transaction/example-capture.php
