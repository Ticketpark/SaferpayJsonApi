<?php

namespace Ticketpark\SaferpayJson\PaymentPage;

use JMS\Serializer\Annotation\SerializedName;
use Ticketpark\SaferpayJson\Request\Notification;
use Ticketpark\SaferpayJson\Request\Payer;
use Ticketpark\SaferpayJson\Request\Payment;
use Ticketpark\SaferpayJson\Request\ReturnUrls;
use Ticketpark\SaferpayJson\Request\Request;

class AssertRequest extends Request
{
    const API_PATH = '/Payment/v1/PaymentPage/Assert';

    const RESPONSE_CLASS = 'Ticketpark\SaferpayJson\PaymentPage\AssertResponse';

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
     * @return AssertRequest
     */
    public function setToken($token)
    {
        $this->token = $token;

        return $this;
    }
}