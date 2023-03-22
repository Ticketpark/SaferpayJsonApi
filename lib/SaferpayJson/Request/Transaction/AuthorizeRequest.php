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

    public function setCondition(?string $condition): void
    {
        $this->condition = $condition;
    }

    public function setVerificationCode(?string $verificationCode): void
    {
        $this->verificationCode = $verificationCode;
    }

    public function setRegisterAlias(?RegisterAlias $registerAlias): void
    {
        $this->registerAlias = $registerAlias;
    }
    public function execute(): AuthorizeResponse
    {
        /** @var AuthorizeResponse $response */
        $response = $this->doExecute();

        return $response;
    }
}
