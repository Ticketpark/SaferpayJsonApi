<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\SecureAliasStore;

use JMS\Serializer\Annotation\SerializedName;
use Ticketpark\SaferpayJson\Message\Request;

class AssertInsertRequest extends Request
{
    const API_PATH = '/Payment/v1/Alias/AssertInsert';

    const RESPONSE_CLASS = AssertInsertResponse::class;

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
