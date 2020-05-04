<?php declare(strict_types=1);

use Ticketpark\SaferpayJson\Request\Exception\SaferpayErrorException;
use Ticketpark\SaferpayJson\Request\PaymentPage\InitializeRequest;
use Ticketpark\SaferpayJson\Request\RequestConfig;
use Ticketpark\SaferpayJson\Request\Container;

require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/../credentials.php';

// -----------------------------
// Step 1:
// Initialize the required payment page data
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

$payment = new Container\Payment($amount);
$payment->setDescription('Order No. 12839');

$returnUrls = new Container\ReturnUrls(
    'http://www.mysite.ch/success?orderId=12839',
    'http://www.mysite.ch/fail'
);

// -----------------------------
// Step 2:
// Create the request with required data

$initializeRequest = new InitializeRequest(
    $requestConfig,
    $terminalId,
    $payment,
    $returnUrls
);

// Note: More data can be provided to InitializeRequest with setters,
// for example: $initializeRequest->setPayer()
// See Saferpay documentation for available options.

// -----------------------------
// Step 3:
// Execute and check for successful response

try {
    $response = $initializeRequest->execute();
} catch (SaferpayErrorException $e) {
    die ($e->getErrorResponse()->getErrorMessage());
}

// -----------------------------
// Step 4:
// Save the response token, you will need it later to verify the payment (see step 7)
echo 'Payment token: ' . $response->getToken() . "<br>\n";

// -----------------------------
// Step 5:
// Redirect to the payment page
echo 'Redirect to: ' . $response->getRedirectUrl() ."<br>\n";

// -----------------------------
// Step 6:
// Fill in test payment page. For dummy credit card numbers see
// https://saferpay.github.io/sndbx/paymentmeans.html

// -----------------------------
// Step 7:
// On success page and notification url, assert that the payment has been successful.
// -> see example-assert.php
