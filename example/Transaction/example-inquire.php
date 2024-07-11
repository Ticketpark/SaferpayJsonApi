<?php declare(strict_types=1);

use Ticketpark\SaferpayJson\Request\Exception\SaferpayErrorException;
use Ticketpark\SaferpayJson\Request\Container;
use Ticketpark\SaferpayJson\Request\RequestConfig;
use Ticketpark\SaferpayJson\Request\Transaction\InquireRequest;

require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/../credentials.php';

// A transaction id you received with a successful assert request (see ../PaymentPage/example-assert.php)

$transactionId = 'xxx';

// -----------------------------
// Step 1:
// Prepare the capture request
// https://saferpay.github.io/jsonapi/#Payment_v1_Transaction_Inquire

$requestConfig = new RequestConfig(
    $apiKey,
    $apiSecret,
    $customerId,
    true
);

$transactionReference = (new Container\TransactionReference())
    ->setTransactionId($transactionId);

// -----------------------------
// Step 2:
// Create the request with required data

$captureRequest = new InquireRequest(
    $requestConfig,
    $transactionReference
);

// -----------------------------
// Step 3:
// Execute and check for successful response

try {
    $response = $captureRequest->execute();
} catch (SaferpayErrorException $e) {
    die ($e->getErrorResponse()->getErrorMessage());
}

echo 'The information of this transaction has been fetched. Transaction type: ' . $response->getTransaction()->getType()."\n";
