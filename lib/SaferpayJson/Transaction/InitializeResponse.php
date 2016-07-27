<?php

namespace Ticketpark\SaferpayJson\Transaction;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use Ticketpark\SaferpayJson\Container\Invoice;
use Ticketpark\SaferpayJson\Container\Redirect;
use Ticketpark\SaferpayJson\Message\Response;

class InitializeResponse extends Response
{
    /**
     * @var string
     * @SerializedName("TransactionId")
     * @Type("string")
     */
    protected $transactionId;

    /**
     * @var string
     * @SerializedName("Token")
     * @Type("string")
     */
    protected $token;

    /**
     * @var \DateTime
     * @SerializedName("Expiration")
     * @Type("DateTime<'Y-m-d\TH:i:s.uO'>")
     */
    protected $expiration;

    /**
     * @var bool
     * @SerializedName("LiabilityShift")
     * @Type("boolean")
     */
    protected $liabilityShift;

    /**
     * @var bool
     * @SerializedName("RedirectRequired")
     * @Type("boolean")
     */
    protected $redirectRequired;

    /**
     * @var Ticketpark\SaferpayJson\Container\Redirect
     * @SerializedName("Redirect")
     * @Type("Ticketpark\SaferpayJson\Container\Redirect")
     */
    protected $redirect;

    /**
     * @return string
     */
    public function getTransactionId()
    {
        return $this->transactionId;
    }

    /**
     * @param string $transactionId
     * @return InitializeResponse
     */
    public function setTransactionId($transactionId)
    {
        $this->transactionId = $transactionId;

        return $this;
    }

    /**
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @param string $token
     * @return InitializeResponse
     */
    public function setToken($token)
    {
        $this->token = $token;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getExpiration()
    {
        return $this->expiration;
    }

    /**
     * @param \DateTime $expiration
     * @return InitializeResponse
     */
    public function setExpiration(\DateTime $expiration)
    {
        $this->expiration = $expiration;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isLiabilityShift()
    {
        return $this->liabilityShift;
    }

    /**
     * @param boolean $liabilityShift
     * @return InitializeResponse
     */
    public function setLiabilityShift($liabilityShift)
    {
        $this->liabilityShift = $liabilityShift;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isRedirectRequired()
    {
        return $this->redirectRequired;
    }

    /**
     * @param boolean $redirectRequired
     * @return InitializeResponse
     */
    public function setRedirectRequired($redirectRequired)
    {
        $this->redirectRequired = $redirectRequired;

        return $this;
    }

    /**
     * @return Ticketpark\SaferpayJson\Container\Redirect
     */
    public function getRedirect()
    {
        return $this->redirect;
    }

    /**
     * @param Ticketpark\SaferpayJson\Container\Redirect $redirect
     * @return InitializeResponse
     */
    public function setRedirect(Redirect $redirect)
    {
        $this->redirect = $redirect;

        return $this;
    }
}