<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Transaction;

use JMS\Serializer\Annotation\SerializedName;
use Ticketpark\SaferpayJson\Request\Container\RegisterAlias;
use Ticketpark\SaferpayJson\Request\Enum\ThreeDsCondition;
use Ticketpark\SaferpayJson\Request\Request;
use Ticketpark\SaferpayJson\Request\RequestCommonsTrait;
use Ticketpark\SaferpayJson\Request\RequestConfig;
use Ticketpark\SaferpayJson\Response\Transaction\AuthorizeResponse;

final class AuthorizeRequest extends Request
{
    use RequestCommonsTrait;
    public const string API_PATH = '/Payment/v1/Transaction/Authorize';
    public const string RESPONSE_CLASS = AuthorizeResponse::class;

    #[SerializedName('Condition')]
    private ?ThreeDsCondition $condition = null;

    #[SerializedName('VerificationCode')]
    private ?string $verificationCode = null;

    #[SerializedName('RegisterAlias')]
    private ?RegisterAlias $registerAlias = null;

    public function __construct(
        RequestConfig $requestConfig,
        #[SerializedName('Token')]
        private readonly string $token,
    ) {
        parent::__construct($requestConfig);
    }

    public function getToken(): string
    {
        return $this->token;
    }

    public function getCondition(): ?ThreeDsCondition
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

    public function setCondition(?ThreeDsCondition $condition): self
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

    #[\Override]
    public function execute(): AuthorizeResponse
    {
        /** @var AuthorizeResponse $response */
        $response = $this->doExecute();

        return $response;
    }
}
