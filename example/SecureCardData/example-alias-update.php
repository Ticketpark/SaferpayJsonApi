<?php declare(strict_types=1);

use Ticketpark\SaferpayJson\Container;
use Ticketpark\SaferpayJson\Request\RequestConfig;
use Ticketpark\SaferpayJson\Request\SecureCardData\AliasUpdateRequest;
use Ticketpark\SaferpayJson\Response\ErrorResponse;

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

$updateAlias = new Container\UpdateAlias($aliasId);

$card = (new Container\Card())
    ->setExpMonth(6)
    ->setExpYear(2028);

$updatePaymentMeans = new Container\UpdatePaymentMeans($card);

// -----------------------------
// Step 2:
// Create the request with required data

$assertRequest = new AliasUpdateRequest(
    $requestConfig,
    $updateAlias,
    $updatePaymentMeans
);

// -----------------------------
// Step 3:
// Execute and check for successful response

$response = $assertRequest->execute();

if ($response instanceof ErrorResponse) {
    die($response->getErrorMessage());
}

echo 'The update has been successful! Alias id: ' . $response->getAlias()->getId()."<br>\n";
