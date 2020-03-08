<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\PaymentPage;

use JMS\Serializer\Annotation\SerializedName;
use Ticketpark\SaferpayJson\Message\Request;

class AssertRequest extends Request
{
    const API_PATH = '/Payment/v1/PaymentPage/Assert';

    const RESPONSE_CLASS = AssertResponse::class;

    /**
     * @var string
     * @SerializedName("Token")
     */
    protected $token;

    public function getToken(): string
    {
        return $this->token;
    }

    public function setToken(string $token): self
    {
        $this->token = $token;

        return $this;
    }
}
