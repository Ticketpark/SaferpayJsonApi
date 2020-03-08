<?php

use \Ticketpark\SaferpayJson\PaymentPage\InitializeRequest;
use \Ticketpark\SaferpayJson\Container;
use \Ticketpark\SaferpayJson\Message\ErrorResponse;

require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/../credentials.php';

// Step 1:
// Initialize the payment page
// See https://saferpay.github.io/jsonapi/1.2/#Payment_v1_PaymentPage_Initialize

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

$address = (new Container\Address())
    ->setFirstName('Alex')
    ->setLastName('Tschäppät')
    ->setStreet('Marktgasse 1')
    ->setZip('3000')
    ->setCity('Bern')
    ->setCountryCode('CH');

$payer = (new Container\Payer())
    ->setLanguageCode('en')
    ->setBillingAddress($address);

$returnUrls = (new Container\ReturnUrls())
    ->setSuccess('http://www.mysite.ch/success?orderId=12839')
    ->setFail('http://www.mysite.ch/fail')
    ->setAbort('http://www.mysite.ch/abort');

$notification = (new Container\Notification())
    ->setNotifyUrl('https://www.mysite.ch/notification');

$response = (new InitializeRequest($apiKey, $apiSecret))
    ->setRequestHeader($requestHeader)
    ->setPayment($payment)
    ->setTerminalId($terminalId)
    ->setReturnUrls($returnUrls)
    ->setNotification($notification)
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
// Redirect to the payment page
echo 'Redirect to: ' . $response->getRedirectUrl() ."<br>\n";

// Step 5:
// Fill in test payment page. For dummy credit card numbers see
// https://saferpay.github.io/sndbx/paymentmeans.html

// Step 6:
// On success page and notification url, assert the payment has been successful.
// -> see 2-example-assert.php