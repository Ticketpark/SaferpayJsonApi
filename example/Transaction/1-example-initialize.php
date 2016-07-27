<?php

use \Ticketpark\SaferpayJson\Container;
use \Ticketpark\SaferpayJson\Message\ErrorResponse;
use \Ticketpark\SaferpayJson\Transaction\InitializeRequest;

require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/../credentials.php';

// Step 1:
// Prepare the initialize request
// http://saferpay.github.io/jsonapi/#Payment_v1_Transaction_Initialize

$requestHeader = (new Container\RequestHeader())
    ->setCustomerId($customerId)
    ->setRequestId(uniqid());

$amount = (new Container\Amount())
    ->setCurrencyCode('CHF')
    ->setValue(5000); // amount in cents

$payment = (new Container\Payment())
    ->setAmount($amount)
    ->setOrderId('12839')
    ->setDescription('Order No. 12839');

$returnUrls = (new Container\ReturnUrls())
    ->setSuccess('http://www.mysite.ch/success?orderId=12839')
    ->setFail('http://www.mysite.ch/fail')
    ->setAbort('http://www.mysite.ch/abort');

$response = (new InitializeRequest($apiKey, $apiSecret))
    ->setRequestHeader($requestHeader)
    ->setTerminalId($terminalId)
    ->setPayment($payment)
    ->setReturnUrls($returnUrls)
    ->execute();

// Step 2:
// Check for successful response

if ($response instanceof ErrorResponse) {
    die($response->getErrorMessage());
}

// Step 3:
// Save the response token, you will need it later to verify the payment
echo 'Payment token: ' . $response->getToken() . "<br>\n";

// Step 4:
// Redirect to security check, if necessary
echo 'Redirect required? ' . ($response->isRedirectRequired() ? "yes" : "no") . "<br>\n";
echo 'Redirect to: ' . $response->getRedirect()->getRedirectUrl() ."<br>\n";

// Step 5:
// On success page, authorize the transaction
// -> see 2-example-authorize.php