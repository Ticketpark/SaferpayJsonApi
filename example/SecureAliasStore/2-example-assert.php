<?php

use \Ticketpark\SaferpayJson\Container;
use Ticketpark\SaferpayJson\SecureAliasStore\AssertInsertRequest;
use \Ticketpark\SaferpayJson\Message\ErrorResponse;

require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/../credentials.php';

// A token you received after initializing an insert (see 1-example-insert.php)

$token = 'xxx';

// Step 1:
// Prepare the assert request
// See https://saferpay.github.io/jsonapi/1.2/#Payment_v1_Alias_AssertInsert

$requestHeader = (new Container\RequestHeader())
    ->setCustomerId($customerId)
    ->setRequestId(uniqid());

$response = (new AssertInsertRequest($apiKey, $apiSecret))
    ->setRequestHeader($requestHeader)
    ->setToken($token)
    ->execute();

// Step 2:
// Check for successful response

if ($response instanceof ErrorResponse) {
    die($response->getErrorMessage());
}

echo 'The insert has been successful! Insert alias: ' . $response->getAlias()->getId();
