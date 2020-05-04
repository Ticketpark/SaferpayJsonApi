<?php declare(strict_types=1);

use Ticketpark\SaferpayJson\Request\Exception\SaferpayErrorException;
use Ticketpark\SaferpayJson\Request\RequestConfig;
use Ticketpark\SaferpayJson\Request\SecureCardData\AliasAssertInsertRequest;

require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/../credentials.php';

// A token you received after initializing an insert (see example-alias-insert.php)

$token = 'xxx';

// -----------------------------
// Step 1:
// Prepare the assert request
// See https://saferpay.github.io/jsonapi/#Payment_v1_Alias_AssertInsert

$requestConfig = new RequestConfig(
    $apiKey,
    $apiSecret,
    $customerId,
    true
);

// -----------------------------
// Step 2:
// Create the request with required data

$assertRequest = new AliasAssertInsertRequest(
    $requestConfig,
    $token
);

// -----------------------------
// Step 3:
// Execute and check for successful response

try {
$response = $assertRequest->execute();
} catch (SaferpayErrorException $e) {
    die ($e->getErrorResponse()->getErrorMessage());
}

echo 'The insert has been successful! Alias id: ' . $response->getAlias()->getId()."<br>\n";
