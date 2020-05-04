<?php declare(strict_types=1);

use Ticketpark\SaferpayJson\Request\Exception\SaferpayErrorException;
use Ticketpark\SaferpayJson\Request\Container;
use Ticketpark\SaferpayJson\Request\SecureCardData\AliasInsertDirectRequest;
use Ticketpark\SaferpayJson\Request\RequestConfig;

require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/../credentials.php';

// -----------------------------
// Step 1:
// Prepare the insert request
// See https://saferpay.github.io/jsonapi/#Payment_v1_Alias_InsertDirect

$requestConfig = new RequestConfig(
    $apiKey,
    $apiSecret,
    $customerId,
    true
);

$registerAlias = new Container\RegisterAlias(
    Container\RegisterAlias::ID_GENERATOR_RANDOM
);

$card = (new Container\Card())
    ->setNumber('9030003150000007') // Dummy from https://saferpay.github.io/sndbx/paymentmeans.html
    ->setExpMonth(8)
    ->setExpYear(2025)
    ->setHolderName('Max Mustermann');

$paymentMeans = (new Container\PaymentMeans())
    ->setCard($card);

// -----------------------------
// Step 2:
// Create the request with required data

$insertRequest = new AliasInsertDirectRequest(
    $requestConfig,
    $registerAlias,
    $paymentMeans
);

// -----------------------------
// Step 3:
// Execute and check for successful response

try {
    $response = $insertRequest->execute();
} catch (SaferpayErrorException $e) {
    die ($e->getErrorResponse()->getErrorMessage());
}

echo 'The insert has been successful! Alias id: ' . $response->getAlias()->getId()."<br>\n";

