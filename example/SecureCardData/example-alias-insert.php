<?php declare(strict_types=1);

use Ticketpark\SaferpayJson\Request\Exception\SaferpayErrorException;
use Ticketpark\SaferpayJson\Request\Container;
use Ticketpark\SaferpayJson\Request\SecureCardData\AliasInsertRequest;
use Ticketpark\SaferpayJson\Request\RequestConfig;

require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/../credentials.php';

// -----------------------------
// Step 1:
// Prepare the insert request
// See https://saferpay.github.io/jsonapi/#Payment_v1_Alias_Insert

$requestConfig = new RequestConfig(
    $apiKey,
    $apiSecret,
    $customerId,
    true
);

$registerAlias = new Container\RegisterAlias(
    Container\RegisterAlias::ID_GENERATOR_RANDOM
);

$returnUrls = new Container\ReturnUrls(
    'http://www.mysite.ch/success',
    'http://www.mysite.ch/fail'
);

// -----------------------------
// Step 2:
// Create the request with required data

$insertRequest = new AliasInsertRequest(
    $requestConfig,
    $registerAlias,
    AliasInsertRequest::TYPE_CARD,
    $returnUrls
);

// -----------------------------
// Step 3:
// Execute and check for successful response

try {
    $response = $insertRequest->execute();
} catch (SaferpayErrorException $e) {
    die ($e->getErrorResponse()->getErrorMessage());
}

// -----------------------------
// Step 4:
// Save the response token, you will need it later to verify the payment (see step 7)
echo 'Payment token: ' . $response->getToken() . "<br>\n";

// -----------------------------
// Step 5:
// Redirect to the payment page
echo 'Redirect to: ' . $response->getRedirect()->getRedirectUrl() ."<br>\n";

// -----------------------------
// Step 6:
// Fill in test payment page. For dummy credit card numbers see
// https://saferpay.github.io/sndbx/paymentmeans.html

// -----------------------------
// Step 7:
// On success page and notification url, assert that the payment has been successful.
// -> see example-alias-insert-assert.php
