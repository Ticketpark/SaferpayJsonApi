<?php

use \Ticketpark\SaferpayJson\Container;
use Ticketpark\SaferpayJson\SecureAliasStore\InsertRequest;
use \Ticketpark\SaferpayJson\Message\ErrorResponse;

require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/../credentials.php';

// Step 1:
// Prepare the assert request
// See https://saferpay.github.io/jsonapi/1.2/#Payment_v1_Alias_Insert

$requestHeader = (new Container\RequestHeader())
    ->setCustomerId($customerId)
    ->setRequestId(uniqid());

$returnUrls = (new Container\ReturnUrls())
    ->setSuccess('http://www.mysite.ch/success')
    ->setFail('http://www.mysite.ch/fail')
    ->setAbort('http://www.mysite.ch/abort');

$response = (new InsertRequest($apiKey, $apiSecret))
    ->setRequestHeader($requestHeader)
    ->setRegisterAlias(new Container\RegisterAlias())
    ->setType('CARD')
    ->setReturnUrls($returnUrls)
    ->execute();

// Step 2:
// Check for successful response

if ($response instanceof ErrorResponse) {
    die($response->getErrorMessage());
}

// Step 3:
// Save the response token, you will need it later to verify the insert
echo 'Insert token: ' . $response->getToken() . "<br>\n";

// Step 4:
// Redirect to the payment page
echo 'Redirect to: ' . $response->getRedirectUrl() ."<br>\n";

// Step 5:
// Fill in test payment page. For dummy credit card numbers see
// https://saferpay.github.io/sndbx/paymentmeans.html

// Step 6:
// On success page, assert the data has successfully been inserted
// -> see 2-example-assert.php
