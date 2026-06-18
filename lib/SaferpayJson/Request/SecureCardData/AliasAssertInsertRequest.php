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
    public const string API_PATH = '/Payment/v1/Alias/AssertInsert';
    public const string RESPONSE_CLASS = AliasAssertInsertResponse::class;

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

    #[\Override]
    public function execute(): AliasAssertInsertResponse
    {
        /** @var AliasAssertInsertResponse $response */
        $response = $this->doExecute();

        return $response;
    }
}
