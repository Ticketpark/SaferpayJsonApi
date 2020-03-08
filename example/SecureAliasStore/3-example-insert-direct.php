<?php

use \Ticketpark\SaferpayJson\Container;
use Ticketpark\SaferpayJson\SecureAliasStore\InsertDirectRequest;
use \Ticketpark\SaferpayJson\Message\ErrorResponse;

require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/../credentials.php';

// Step 1:
// Prepare the insert direct request
// See https://saferpay.github.io/jsonapi/1.2/#Payment_v1_Alias_InsertDirect

$requestHeader = (new Container\RequestHeader())
    ->setCustomerId($customerId)
    ->setRequestId(uniqid());

$card = (new Container\Card())
    ->setNumber('9030101052000008')
    ->setExpYear(2025)
    ->setExpMonth(10)
    ->setHolderName('Johnny Cash');

$paymentMeans = (new Container\PaymentMeans())
    ->setCard($card);

$response = (new InsertDirectRequest($apiKey, $apiSecret))
    ->setRequestHeader($requestHeader)
    ->setRegisterAlias(new Container\RegisterAlias())
    ->setPaymentMeans($paymentMeans)
    ->execute();

// Step 2:
// Check for successful response

if ($response instanceof ErrorResponse) {
    die($response->getErrorMessage());
}

// Step 3:
// You are done!

echo 'The insert has been successful! Insert alias: ' . $response->getAlias()->getId() . "<br>\n";
