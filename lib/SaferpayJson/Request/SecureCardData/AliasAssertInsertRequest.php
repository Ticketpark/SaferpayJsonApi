<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\SecureCardData;

use JMS\Serializer\Annotation\SerializedName;
use Ticketpark\SaferpayJson\Request\Request;
use Ticketpark\SaferpayJson\Request\RequestCommonsTrait;
use Ticketpark\SaferpayJson\Request\RequestConfig;
use Ticketpark\SaferpayJson\Response\SecureCardData\AliasAssertInsertResponse;

final class AliasAssertInsertRequest extends Request
{
    use RequestCommonsTrait;
    public const API_PATH = '/Payment/v1/Alias/AssertInsert';
    public const RESPONSE_CLASS = AliasAssertInsertResponse::class;

    /**
     * @SerializedName("Token")
     */
    private string $token;

    public function __construct(RequestConfig $requestConfig, string $token)
    {
        $this->token = $token;

        parent::__construct($requestConfig);
    }

    public function getToken(): string
    {
        return $this->token;
    }

    public function setToken(string $token): self
    {
        $this->token = $token;

        return $this;
    }

    public function execute(): AliasAssertInsertResponse
    {
        /** @var AliasAssertInsertResponse $response */
        $response = $this->doExecute();

        return $response;
    }
}
