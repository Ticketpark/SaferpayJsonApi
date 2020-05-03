<?php declare(strict_types=1);

use Ticketpark\SaferpayJson\Request\RequestConfig;
use Ticketpark\SaferpayJson\Request\SecureCardData\AliasAssertInsertRequest;
use \Ticketpark\SaferpayJson\Response\ErrorResponse;

require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/../credentials.php';

// A token you received after initializing an insert (see example-alias-insert.php)

$token = '2kt8aodsr4c3spuy6rsqilwk3';

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

$response = $assertRequest->execute();

if ($response instanceof ErrorResponse) {
    die($response->getErrorMessage());
}

echo 'The insert has been successful! Insert alias: ' . $response->getAlias()->getId()."<br>\n";
