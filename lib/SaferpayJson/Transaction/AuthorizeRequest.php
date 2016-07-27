<?php

namespace Ticketpark\SaferpayJson\Transaction;

use JMS\Serializer\Annotation\SerializedName;
use Ticketpark\SaferpayJson\Container\Payer;
use Ticketpark\SaferpayJson\Container\Payment;
use Ticketpark\SaferpayJson\Container\PaymentMeans;
use Ticketpark\SaferpayJson\Container\RegisterAlias;
use Ticketpark\SaferpayJson\Container\ReturnUrls;
use Ticketpark\SaferpayJson\Container\Styling;
use Ticketpark\SaferpayJson\Container\Wallet;
use Ticketpark\SaferpayJson\Message\Request;

class AuthorizeRequest extends Request
{
    const API_PATH = '/Payment/v1/Transaction/Authorize';

    const RESPONSE_CLASS = 'Ticketpark\SaferpayJson\Transaction\AuthorizeResponse';

    /**
     * @var string
     * @SerializedName("Token")
     */
    protected $token;

    /**
     * @var string
     * @SerializedName("Condition")
     */
    protected $condition;

    /**
     * @var string
     * @SerializedName("VerificationCode")
     */
    protected $verificationCode;

    /**
     * @var Ticketpark\SaferpayJson\Container\RegisterAlias
     * @SerializedName("RegisterAlias")
     */
    protected $registerAlias;

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
     * @return string
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * @param string $condition
     * @return AuthorizeRequest
     */
    public function setCondition($condition)
    {
        $this->condition = $condition;

        return $this;
    }

    /**
     * @return string
     */
    public function getVerificationCode()
    {
        return $this->verificationCode;
    }

    /**
     * @param string $verificationCode
     * @return AuthorizeRequest
     */
    public function setVerificationCode($verificationCode)
    {
        $this->verificationCode = $verificationCode;

        return $this;
    }

    /**
     * @return Ticketpark\SaferpayJson\Container\RegisterAlias
     */
    public function getRegisterAlias()
    {
        return $this->registerAlias;
    }

    /**
     * @param Ticketpark\SaferpayJson\Container\RegisterAlias $registerAlias
     * @return AuthorizeRequest
     */
    public function setRegisterAlias(RegisterAlias $registerAlias)
    {
        $this->registerAlias = $registerAlias;

        return $this;
    }
}