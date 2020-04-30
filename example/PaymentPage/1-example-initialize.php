<?php declare(strict_types=1);

use Ticketpark\SaferpayJson\Request\PaymentPage\InitializeRequest;
use Ticketpark\SaferpayJson\Request\RequestConfig;
use Ticketpark\SaferpayJson\Container;
use Ticketpark\SaferpayJson\Response\ErrorResponse;

require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/../credentials.php';


// Step 1:
// Initialize the payment page
// See https://saferpay.github.io/jsonapi/#Payment_v1_PaymentPage_Initialize

$requestConfig = new RequestConfig(
    $apiKey,
    $apiSecret,
    $customerId,
    true
);

$amount = new Container\Amount(
    5000, // amount in cents
    'CHF'
);

$payment = new Container\Payment(
    $amount,
    'Order No. 12839'
);

$returnUrls = new Container\ReturnUrls(
    'http://www.mysite.ch/success?orderId=12839',
    'http://www.mysite.ch/fail',
    'http://www.mysite.ch/abort'
);

// Step 2:
// Execute the request

$initializeRequest = new InitializeRequest(
    $requestConfig,
    $terminalId,
    $payment,
    $returnUrls
);

$response = $initializeRequest->execute();

// Step 3:
// Check for successful response
if ($response instanceof ErrorResponse) {
    die($response->getErrorMessage());
}

// Step 4:
// Save the response token, you will need it later to verify the payment
echo 'Payment token: ' . $response->getToken() . "<br>\n";

// Step 5:
// Redirect to the payment page
echo 'Redirect to: ' . $response->getRedirectUrl() ."<br>\n";

// Step 6:
// Fill in test payment page. For dummy credit card numbers see
// https://saferpay.github.io/sndbx/paymentmeans.html

// Step 7:
// On success page and notification url, assert the payment has been successful.
// -> see 2-example-assert.php
