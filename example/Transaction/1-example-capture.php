<?php declare(strict_types=1);

use Ticketpark\SaferpayJson\Container;
use Ticketpark\SaferpayJson\Request\RequestConfig;
use Ticketpark\SaferpayJson\Request\Transaction\CaptureRequest;
use Ticketpark\SaferpayJson\Response\ErrorResponse;

require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/../credentials.php';

// A transaction id you received with a successful assert request (see ../PaymentPage/2-example-assert.php)

$transactionId = 'xxx';

// -----------------------------
// Step 1:
// Prepare the capture request
// https://saferpay.github.io/jsonapi/1.2/#Payment_v1_Transaction_Capture

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

$captureRequest = new CaptureRequest(
    $requestConfig,
    $transactionReference
);

// -----------------------------
// Step 3:
// Execute and check for successful response

$response = $captureRequest->execute();

if ($response instanceof ErrorResponse) {
    die($response->getErrorMessage());
}

echo 'The transaction has successfully been captured! Capture-Id: ' . $response->getCaptureId();

// You have now fully completed a successful payment :)