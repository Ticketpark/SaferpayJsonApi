<?php

namespace Ticketpark\SaferpayJson\PaymentPage;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use Ticketpark\SaferpayJson\Message\Response;

class InitializeResponse extends Response
{
    /**
     * @var string
     * @SerializedName("Token")
     * @Type("string")
     */
    protected $token;

    /**
     * @var \DateTime
     * @SerializedName("Expiration")
     * @Type("string")
     */
    protected $expiration;

    /**
     * @var string
     * @SerializedName("RedirectUrl")
     * @Type("string")
     */
    protected $redirectUrl;

    /**
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @param string $token
     * @return PaymentPageResponse
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
     * @return PaymentPageResponse
     */
    public function setExpiration($expiration)
    {
        $this->expiration = $expiration;

        return $this;
    }

    /**
     * @return string
     */
    public function getRedirectUrl()
    {
        return $this->redirectUrl;
    }

    /**
     * @param string $redirectUrl
     * @return PaymentPageResponse
     */
    public function setRedirectUrl($redirectUrl)
    {
        $this->redirectUrl = $redirectUrl;

        return $this;
    }
}