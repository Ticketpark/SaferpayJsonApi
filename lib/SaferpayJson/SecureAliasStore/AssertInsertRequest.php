<?php

namespace Ticketpark\SaferpayJson\SecureAliasStore;

use JMS\Serializer\Annotation\SerializedName;
use Ticketpark\SaferpayJson\Message\Request;

class AssertInsertRequest extends Request
{
    const API_PATH = '/Payment/v1/Alias/AssertInsert';

    const RESPONSE_CLASS = 'Ticketpark\SaferpayJson\SecureAliasStore\AssertInsertResponse';

    /**
     * @var string
     * @SerializedName("Token")
     */
    protected $token;

    /**
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @param string $token
     * @return AssertInsertRequest
     */
    public function setToken($token)
    {
        $this->token = $token;

        return $this;
    }
}