# SaferpayJsonApi

[![Build Status](https://travis-ci.org/Ticketpark/SaferpayJsonApi.svg?branch=master)](https://travis-ci.org/Ticketpark/SaferpayJsonApi)

A php library to use the [Saferpay Json API](http://saferpay.github.io/jsonapi/).

## Installation

Add the library in your composer.json:

```
composer require ticketpark/saferpay-json-api
```

## Usage
In order to perform a payment as you would typically do it in an online shop, you need to perform the following steps:

1. Initialize the payment page (see [/example/PaymentPage/example-initialize.php](/example/PaymentPage/example-initialize.php))
2. Redirect the user to the payment page and let them enter their payment data.
3. Assert that the payment was successfully done (see [/example/PaymentPage/example-assert.php](/example/PaymentPage/example-assert.php))
4. Capture the payment to make it final (see [/example/Transaction/example-capture.php](/example/Transaction/example-capture.php))

Have a look at the [example folder](/example) for more.

## Documentation

Find the most current documentation of the Saferpay JSON API here:<br>
https://saferpay.github.io/jsonapi/

This library is currently based on v1.17 of the Saferpay JSON API.

## Contribution
You are welcome to contribute to this repo.

* Follow [Symfony coding standards](http://symfony.com/doc/current/contributing/code/standards.html)
* Write useful commit messages
* Be nice and respect others

## History

* v3 added more major refactoring and based on Saferpay API v1.17
* v2.3 added support for PHP 7.4
* v2 added type-hints with major refactoring and required PHP 7.3
* v1 was the initial version of this library based on PHP 5.6 and the Saferpay API v1.2