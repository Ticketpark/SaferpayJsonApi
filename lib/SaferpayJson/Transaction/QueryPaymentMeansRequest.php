<?php

namespace Ticketpark\SaferpayJson\Transaction;

use JMS\Serializer\Annotation\SerializedName;
use Ticketpark\SaferpayJson\Container\ReturnUrls;
use Ticketpark\SaferpayJson\Message\Request;

class QueryPaymentMeansRequest extends Request
{
    const API_PATH = '/Payment/v1/Transaction/QueryPaymentMeans';

    const RESPONSE_CLASS = 'Ticketpark\SaferpayJson\Transaction\QueryPaymentMeansResponse';

    /**
     * @var string
     * @SerializedName("Token")
     */
    protected $token;

    /**
     * @var Ticketpark\SaferpayJson\Container\ReturnUrls
     * @SerializedName("ReturnUrls")
     */
    protected $returnUrls;

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
     * @return Ticketpark\SaferpayJson\Container\ReturnUrls
     */
    public function getReturnUrls()
    {
        return $this->returnUrls;
    }

    /**
     * @param Ticketpark\SaferpayJson\Container\ReturnUrls $returnUrls
     * @return QueryPaymentMeansRequest
     */
    public function setReturnUrls(ReturnUrls $returnUrls)
    {
        $this->returnUrls = $returnUrls;

        return $this;
    }
}