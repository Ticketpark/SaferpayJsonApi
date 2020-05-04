<?php declare(strict_types=1);

use Ticketpark\SaferpayJson\Request\Exception\SaferpayErrorException;
use Ticketpark\SaferpayJson\Request\Container;
use Ticketpark\SaferpayJson\Request\Transaction\AuthorizeReferencedRequest;
use Ticketpark\SaferpayJson\Request\RequestConfig;

require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/../credentials.php';

// ID of an existing captured transaction flagged as recurring.

$transactionId = 'xxx';

// -----------------------------
// Step 1:
// Prepare the recurring payment request
// See https://saferpay.github.io/jsonapi/#Payment_v1_Transaction_AuthorizeReferenced

$requestConfig = new RequestConfig(
    $apiKey,
    $apiSecret,
    $customerId,
    true
);

$amount = new Container\Amount(
    5000,  // amount in cents
    'CHF'
);

$payment = new Container\Payment($amount);

$transactionReference = (new Container\TransactionReference())
    ->setTransactionId($transactionId);

// -----------------------------
// Step 2:
// Create the request with required data

$authorizeReferencedRequest = new AuthorizeReferencedRequest(
    $requestConfig,
    $terminalId,
    $payment,
    $transactionReference
);

// -----------------------------
// Step 3:
// Execute and check for successful response

try {
$response = $authorizeReferencedRequest->execute();
} catch (SaferpayErrorException $e) {
    die ($e->getErrorResponse()->getErrorMessage());
}

print sprintf(
    "Transaction ID: %s, Status: %s, via %s (%s)",
    $response->getTransaction()->getId(),
    $response->getTransaction()->getStatus(),
    $response->getPaymentMeans()->getBrand()->getName(),
    $response->getPaymentMeans()->getDisplayText()
). "\n";

// Recurring payment transactions still need to be captured.
// see: example-capture.php
