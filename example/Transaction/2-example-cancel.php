<?php

use \Ticketpark\SaferpayJson\Container;
use \Ticketpark\SaferpayJson\Message\ErrorResponse;
use \Ticketpark\SaferpayJson\Transaction\CancelRequest;

require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/../credentials.php';

// A transactionid you received with a successful assert request (see ../PaymentPage/2-example-assert.php)

$transactionId = 'xxx';

// Step 1:
// Prepare the cancel request
// https://saferpay.github.io/jsonapi/1.2/#Payment_v1_Transaction_Cancel

$requestHeader = (new Container\RequestHeader())
    ->setCustomerId($customerId)
    ->setRequestId(uniqid());

$transactionReference = (new Container\TransactionReference())
    ->setTransactionId($transactionId);

$response = (new CancelRequest($apiKey, $apiSecret))
    ->setRequestHeader($requestHeader)
    ->setTransactionReference($transactionReference)
    ->execute();

// Step 2:
// Check for successful response

if ($response instanceof ErrorResponse) {
    die($response->getErrorMessage());
}

echo 'The transaction has successfully been canceled! Transaction-ID: ' . $response->getTransactionId();
