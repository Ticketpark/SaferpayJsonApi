<?php

use \Ticketpark\SaferpayJson\Container;
use \Ticketpark\SaferpayJson\Message\ErrorResponse;
use \Ticketpark\SaferpayJson\Transaction\AuthorizeDirectRequest;

require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/../credentials.php';

// Step 1:
// Prepare the authorize direct request
// http://saferpay.github.io/jsonapi/#Payment_v1_Transaction_AuthorizeDirect

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

$card = (new Container\Card())
    ->setNumber('9030101052000008')
    ->setExpYear(2025)
    ->setExpMonth(10)
    ->setHolderName('Johnny Cash');

$paymentMeans = (new Container\PaymentMeans())
    ->setCard($card);

$response = (new AuthorizeDirectRequest($apiKey, $apiSecret))
    ->setRequestHeader($requestHeader)
    ->setTerminalId($terminalId)
    ->setPayment($payment)
    ->setPaymentMeans($paymentMeans)
    ->execute();

// Step 2:
// Check for successful response

if ($response instanceof ErrorResponse) {
    die($response->getErrorMessage());
}

// Step 3:
// Save the response token, you will need it later to verify the payment
echo 'Succesful payment. Status: ' . $response->getTransaction()->getStatus() . "<br>\n";
echo 'Payment id: ' . $response->getTransaction()->getId() . "<br>\n";
