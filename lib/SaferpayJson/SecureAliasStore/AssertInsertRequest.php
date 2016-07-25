<?php

namespace Ticketpark\SaferpayJson\SecureAliasStore;

use Ticketpark\SaferpayJson\PaymentPage\AssertRequest;

class AssertInsertRequest extends AssertRequest
{
    const API_PATH = '/Payment/v1/Alias/AssertInsert';

    const RESPONSE_CLASS = 'Ticketpark\SaferpayJson\SecureAliasStore\AssertInsertResponse';
}