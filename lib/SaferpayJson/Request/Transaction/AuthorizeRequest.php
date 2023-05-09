<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Transaction;

use JMS\Serializer\Annotation\SerializedName;
use Ticketpark\SaferpayJson\Request\Container\RegisterAlias;
use Ticketpark\SaferpayJson\Request\Request;
use Ticketpark\SaferpayJson\Request\RequestCommonsTrait;
use Ticketpark\SaferpayJson\Request\RequestConfig;
use Ticketpark\SaferpayJson\Response\Transaction\AuthorizeResponse;

final class AuthorizeRequest extends Request
{
    use RequestCommonsTrait;
    public const API_PATH = '/Payment/v1/Transaction/Authorize';
    public const RESPONSE_CLASS = AuthorizeResponse::class;

    /**
     * @var string
     * @SerializedName("Token")
     */
    private $token;

    /**
     * @var string|null
     * @SerializedName("Condition")
     */
    private $condition;

    /**
     * @var string|null
     * @SerializedName("VerificationCode")
     */
    private $verificationCode;

    /**
     * @var RegisterAlias|null
     * @SerializedName("RegisterAlias")
     */
    private $registerAlias;

    public function __construct(
        RequestConfig $requestConfig,
        string $token
    ) {
        $this->token = $token;

        parent::__construct($requestConfig);
    }

    public function getToken(): string
    {
        return $this->token;
    }

    public function getCondition(): ?string
    {
        return $this->condition;
    }

    public function getVerificationCode(): ?string
    {
        return $this->verificationCode;
    }

    public function getRegisterAlias(): ?RegisterAlias
    {
        return $this->registerAlias;
    }

    public function setCondition(?string $condition): self
    {
        $this->condition = $condition;

        return $this;
    }

    public function setVerificationCode(?string $verificationCode): self
    {
        $this->verificationCode = $verificationCode;

        return $this;
    }

    public function setRegisterAlias(?RegisterAlias $registerAlias): self
    {
        $this->registerAlias = $registerAlias;

        return $this;
    }

    public function execute(): AuthorizeResponse
    {
        /** @var AuthorizeResponse $response */
        $response = $this->doExecute();

        return $response;
    }
}
