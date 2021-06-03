# SaferpayJsonApi

[![Build Status](https://github.com/Ticketpark/SaferpayJsonApi/actions/workflows/tests.yml/badge.svg)](https://github.com/Ticketpark/SaferpayJsonApi/actions)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/ticketpark/saferpayjsonapi/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/ticketpark/saferpayjsonapi/?branch=master)


A php library to use the [Saferpay Json API](http://saferpay.github.io/jsonapi/).

## Installation

Add the library in your composer.json:

```
composer require ticketpark/saferpay-json-api
```

## Usage
In order to perform a payment as you would typically do it in an online shop, you need to handle the following steps:

1. Initialize the payment page (see [/example/PaymentPage/example-initialize.php](/example/PaymentPage/example-initialize.php))
2. Redirect the user to the payment page and let them enter their payment data
3. Assert that the payment was successfully done (see [/example/PaymentPage/example-assert.php](/example/PaymentPage/example-assert.php))
4. Capture the payment to make it final (see [/example/Transaction/example-capture.php](/example/Transaction/example-capture.php))

Have a look at the [example folder](/example) for more.

## Documentation

Find the most current documentation of the Saferpay JSON API here:<br>
https://saferpay.github.io/jsonapi/

This library is currently based on v1.18 of the Saferpay JSON API.

## Contribution
You are [welcome to contribute](/.github/contributing.md) to this repo.