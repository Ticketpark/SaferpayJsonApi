<?php

use Ticketpark\SaferpayJson\Container;
use Ticketpark\SaferpayJson\Message\ErrorResponse;
use Ticketpark\SaferpayJson\PaymentPage\AuthorizeReferencedRequest;
use Ticketpark\SaferpayJson\PaymentPage\AuthorizeReferencedResponse;

require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/../credentials.php';

// ID of an existing captured transaction flagged as recurring. eg: $payment->setRecurring(new Recurring(true))
$transactionId = 'xx';

// Step 1:
// Prepare the recurring paymen request
// See https://saferpay.github.io/jsonapi/1.2/#Payment_v1_Transaction_AuthorizeReferenced

$requestHeader = (new Container\RequestHeader())
    ->setCustomerId($customerId)
    ->setRequestId(uniqid());

$amount = (new Container\Amount())
    ->setCurrencyCode('CHF')
    ->setValue(5000); // amount in cents

$response = (new AuthorizeReferencedRequest($apiKey, $apiSecret, true))
    ->setRequestHeader($requestHeader)
    ->setPayment((new Container\Payment())->setAmount($amount))
    ->setTransactionReference((new Container\TransactionReference())->setTransactionId($transactionId))
    ->setTerminalId($terminalId)
    ->execute();

// Step 2:
// Check for successful response

if ($response instanceof ErrorResponse) {
    die($response->getErrorMessage());
}

/** @var AuthorizeReferencedResponse $response */
echo sprintf("Transaction ID: %s, Status: %s, via %s (%s)",
    $response->getTransaction()->getId(),
    $response->getTransaction()->getStatus(),
    $response->getPaymentMeans()->getBrand()->getName(),
    $response->getPaymentMeans()->getDisplayText()
);

// Recurring payment transactions still need to be captured.
// see: Transaction/1-example-capture.php
