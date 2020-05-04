<?php declare(strict_types=1);

use Ticketpark\SaferpayJson\Request\Exception\SaferpayErrorException;
use Ticketpark\SaferpayJson\Request\Container;
use Ticketpark\SaferpayJson\Request\RequestConfig;
use Ticketpark\SaferpayJson\Request\Transaction\RefundRequest;

require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/../credentials.php';

// A capture id you receive with a successful capture request (see ../PaymentPage/example-capture.php)

$captureId = 'xxx';

// -----------------------------
// Step 1:
// Prepare the refund request
// http://saferpay.github.io/jsonapi/#Payment_v1_Transaction_Refund

$requestConfig = new RequestConfig(
    $apiKey,
    $apiSecret,
    $customerId,
    true
);

$captureReference = (new Container\CaptureReference())
    ->setCaptureId($captureId);

$amount = new Container\Amount(
    2000,
    'CHF'
);

$refund = new Container\Refund($amount);

// -----------------------------
// Step 2:
// Create the request with required data

$refundRequest = new RefundRequest(
    $requestConfig,
    $refund,
    $captureReference
);

// -----------------------------
// Step 3:
// Execute and check for successful response

try {
    $response = $refundRequest->execute();
} catch (SaferpayErrorException $e) {
    die ($e->getErrorResponse()->getErrorMessage());
}

echo 'The transaction has successfully been refunded! Transaction-ID: ' . $response->getTransaction()->getId();

