<?php

namespace Ticketpark\SaferpayJson\Transaction;

use JMS\Serializer\Annotation\SerializedName;
use Ticketpark\SaferpayJson\Container\Amount;
use Ticketpark\SaferpayJson\Message\Request;

class AdjustAmountRequest extends Request
{
    const API_PATH = '/Payment/v1/Transaction/AdjustAmount';

    const RESPONSE_CLASS = 'Ticketpark\SaferpayJson\Transaction\AdjustAmountResponse';

    /**
     * @var string
     * @SerializedName("Token")
     */
    protected $token;

    /**
     * @var Ticketpark\SaferpayJson\Container\Amount
     * @SerializedName("Amount")
     */
    protected $amount;

    /**
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @param string $token
     * @return AuthorizeRequest
     */
    public function setToken($token)
    {
        $this->token = $token;

        return $this;
    }

    /**
     * @return Ticketpark\SaferpayJson\Container\Amount
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param Ticketpark\SaferpayJson\Container\Amount $amount
     * @return AdjustAmountRequest
     */
    public function setAmount(Amount $amount)
    {
        $this->amount = $amount;

        return $this;
    }
}