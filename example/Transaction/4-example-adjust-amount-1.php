<?php

use \Ticketpark\SaferpayJson\Container;
use \Ticketpark\SaferpayJson\Message\ErrorResponse;
use \Ticketpark\SaferpayJson\Transaction\AdjustAmountRequest;
use \Ticketpark\SaferpayJson\Transaction\InitializeRequest;

require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/../credentials.php';

// Step 1:
// Prepare the initialize request - this is just like 1-example-initialize.php
// but required a MasterPass wallet to be used.
// http://saferpay.github.io/jsonapi/#Payment_v1_Transaction_Initialize
// http://saferpay.github.io/jsonapi/#Payment_v1_Transaction_AdjustAmount

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

$wallet = (new Container\Wallet())
    ->setEnableAmountAdjustment(true);

$response = (new InitializeRequest($apiKey, $apiSecret))
    ->setRequestHeader($requestHeader)
    ->setTerminalId($terminalId)
    ->setWallet($wallet)
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
// Fill in test wallet page. For dummy credit card numbers see
// https://www.six-payment-services.com/de/site/saferpay-support/testaccount/Saferpay_Testdaten.html
echo 'Redirect required? ' . ($response->isRedirectRequired() ? "yes" : "no") . "<br>\n";
echo 'Redirect to: ' . $response->getRedirect()->getRedirectUrl() ."<br>\n";

// Step 5:
// Change the amount.
// See 4-example-adjust-amount-2.php