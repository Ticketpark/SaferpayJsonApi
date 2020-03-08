<?php

use \Ticketpark\SaferpayJson\Container;
use Ticketpark\SaferpayJson\SecureAliasStore\DeleteRequest;
use \Ticketpark\SaferpayJson\Message\ErrorResponse;

require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/../credentials.php';

// An alias you received for an insert (see 3-example-insert-direct.php)

$aliasId = 'xxx';

// Step 1:
// Prepare the delete request
// https://saferpay.github.io/jsonapi/1.2/#Payment_v1_Alias_Delete

$requestHeader = (new Container\RequestHeader())
    ->setCustomerId($customerId)
    ->setRequestId(uniqid());

$response = (new DeleteRequest($apiKey, $apiSecret))
    ->setRequestHeader($requestHeader)
    ->setAliasId($aliasId)
    ->execute();

// Step 2:
// Check for successful response

if ($response instanceof ErrorResponse) {
    die($response->getErrorMessage());
}

// Step 2:
// Check for successful response

if ($response instanceof ErrorResponse) {
    die($response->getErrorMessage());
}


// Step 3:
// You are done!

echo 'The alias has successfully been deleted';
