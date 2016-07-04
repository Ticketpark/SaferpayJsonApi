<?php
/**
 * Created by PhpStorm.
 * User: thomasm
 * Date: 04.07.2016
 * Time: 16:37
 */

namespace Ticketpark\SaferpayJson\SecureAliasStore;


use Ticketpark\SaferpayJson\PaymentPage\AssertRequest;

class AliasInsertAssertRequest extends AssertRequest
{

    const API_PATH = '/Payment/v1/Alias/AssertInsert';
    const RESPONSE_CLASS = 'Ticketpark\SaferpayJson\SecureAliasStore\AliasInsertAssertResponse';
}