<?php

use \Ticketpark\SaferpayJson\Request;
use \Ticketpark\SaferpayJson\PaymentPageRequest;
use \Ticketpark\SaferpayJson\Response\ErrorResponse;

require_once 'vendor/autoload.php';

// Common test data according to
// https://www.six-payment-services.com/en/site/saferpay-support/testaccount.html

$customerId = '401860';
$apiKey     = 'API_401860_81002685';
$apiSecret  = 'C-y*bv8346Ze5-T8';
$terminalId = '17795278';

// Step 1:
// Initialize the payment page
// See https://test.saferpay.com/jsonapihelp/#Payment_v1_PaymentPage_Initialize

$requestHeader = (new Request\RequestHeader())
    ->setCustomerId($customerId)
    ->setRequestId(uniqid());

$amount = (new Request\Amount())
    ->setCurrencyCode('CHF')
    ->setValue(5000); // amount in cents

$payment = (new Request\Payment())
    ->setAmount($amount)
    ->setOrderId('12839')
    ->setDescription('Order No. 12839');

$address = (new Request\Address())
    ->setFirstName('Alex')
    ->setLastName('Tschäppät')
    ->setStreet('Marktgasse 1')
    ->setZip('3000')
    ->setCity('Bern')
    ->setCountryCode('CH');

$payer = (new Request\Payer())
    ->setLanguageCode('en')
    ->setBillingAddress($address);

$returnUrls = (new Request\ReturnUrls())
    ->setSuccess('http://www.mysite.ch/success?orderId=12839')
    ->setFail('http://www.mysite.ch/fail')
    ->setAbort('http://www.mysite.ch/abort');

$notification = (new Request\Notification())
    ->setNotifyUrl('https://www.mysite.ch/notification');

$response = (new PaymentPageRequest($apiKey, $apiSecret))
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
// https://www.six-payment-services.com/de/site/saferpay-support/testaccount/Saferpay_Testdaten.html