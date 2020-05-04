# Contributing to this library

🎉  Thanks for being interested in contributing to this library!

## Basics

* Follow [Symfony coding standards](http://symfony.com/doc/current/contributing/code/standards.html)
* Write useful commit messages
* Be nice and respect others

## Technical guidelines

### Request containers

* Put mandatory properties into the constructor
* No setters for data which is set in constructor

Note that some data seems to be mandatory, but is not marked as such in the Saferpay docs. We strictly follow the
information in the Saferpay docs and keep all data optional unless Saferpay explicity marks
it as mandatory.

### Response containers

* No constructors
* No setters
* All properties are optional

Even though in the Saferpay doc some data is marked as mandatory in responses, we keep them all optional in this
library because it is not in our control whether this data will actually be provided or not.

