<?php declare(strict_types=1);

use Ticketpark\SaferpayJson\Request\Exception\SaferpayErrorException;
use Ticketpark\SaferpayJson\Request\RequestConfig;
use Ticketpark\SaferpayJson\Request\SecureCardData\AliasDeleteRequest;

require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/../credentials.php';

// An alias id you received after inserting (see example-alias-insert-assert.php)

$aliasId = 'xxx';

// -----------------------------
// Step 1:
// Prepare the assert request
// See https://saferpay.github.io/jsonapi/#Payment_v1_Alias_Update

$requestConfig = new RequestConfig(
    $apiKey,
    $apiSecret,
    $customerId,
    true
);

// -----------------------------
// Step 2:
// Create the request with required data

$assertRequest = new AliasDeleteRequest(
    $requestConfig,
    $aliasId
);

// -----------------------------
// Step 3:
// Execute and check for successful response

try {
    $response = $assertRequest->execute();
} catch (SaferpayErrorException $e) {
    die ($e->getErrorResponse()->getErrorMessage());
}

echo "The alias has successfully been deleted.<br>\n";

// Note that no error is returned if the provided alias id did not exist.
// This is by design by the Saferpay API.