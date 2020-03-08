<?php

use \Ticketpark\SaferpayJson\Container;
use \Ticketpark\SaferpayJson\Message\ErrorResponse;
use \Ticketpark\SaferpayJson\Transaction\RefundRequest;

require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/../credentials.php';

// A transactionid you received with a successful assert request (see ../PaymentPage/2-example-assert.php)

$transactionId = 'xxx';

// Step 1:
// Prepare the refund request
// https://saferpay.github.io/jsonapi/1.2/#Payment_v1_Transaction_Refund

$requestHeader = (new Container\RequestHeader())
    ->setCustomerId($customerId)
    ->setRequestId(uniqid());

$transactionReference = (new Container\TransactionReference())
    ->setTransactionId($transactionId);

$amount = (new Container\Amount())
    ->setCurrencyCode('CHF')
    ->setValue(5000); // amount in cents

$refund = (new Container\Refund())
    ->setAmount($amount);

$response = (new RefundRequest($apiKey, $apiSecret))
    ->setRequestHeader($requestHeader)
    ->setTransactionReference($transactionReference)
    ->setRefund($refund)
    ->execute();

// Step 2:
// Check for successful response

/** @var \Ticketpark\SaferpayJson\Transaction\RefundResponse */
if ($response instanceof ErrorResponse) {
    die($response->getErrorMessage());
}

echo 'The transaction has successfully been refunded! Transaction-ID: ' . $response->getTransaction()->getId();
