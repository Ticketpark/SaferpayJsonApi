<?php declare(strict_types=1);

use Ticketpark\SaferpayJson\Request\Exception\SaferpayErrorException;
use Ticketpark\SaferpayJson\Request\RequestConfig;
use Ticketpark\SaferpayJson\Request\Transaction\AuthorizeRequest;

require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/../credentials.php';

// A token you received after initializing a transaction (see example-initialize.php)

$token = 'xxx';

// -----------------------------
// Step 1:
// Prepare the authorize request
// See https://saferpay.github.io/jsonapi/#Payment_v1_Transaction_Authorize

$requestConfig = new RequestConfig(
    $apiKey,
    $apiSecret,
    $customerId,
    true
);

// This library also supports retry requests.
// For more information on how and when Saferpay allows them, see
// https://docs.saferpay.com/home/integration-guide/licences-and-interfaces/error-handling

# $requestConfig->setRequestId($requestId); // $responseOfPreviousTry->getRequestHeader()->getRequestId();
# $requestConfig->setRetryIndicator($retryIndicator); // a number between 0 and 9

// -----------------------------
// Step 2:
// Create the request with required data

$authorizeRequest = new AuthorizeRequest(
    $requestConfig,
    $token,
);

// -----------------------------
// Step 3:
// Execute and check for successful response

try {
    $response = $authorizeRequest->execute();
} catch (SaferpayErrorException $e) {
    die ($e->getErrorResponse()->getErrorMessage());
}

echo 'The transaction has been successful! Transaction id: ' . $response->getTransaction()->getId()."\n";

// -----------------------------
// Step 4:
// Capture the transaction to get the cash flowing.
// see: example-capture.php
