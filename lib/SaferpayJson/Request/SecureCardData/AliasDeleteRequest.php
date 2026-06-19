<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\SecureCardData;

use JMS\Serializer\Annotation\SerializedName;
use Ticketpark\SaferpayJson\Request\Request;
use Ticketpark\SaferpayJson\Request\RequestCommonsTrait;
use Ticketpark\SaferpayJson\Request\RequestConfig;
use Ticketpark\SaferpayJson\Response\SecureCardData\AliasDeleteResponse;

final class AliasDeleteRequest extends Request
{
    use RequestCommonsTrait;
    public const string API_PATH = '/Payment/v1/Alias/Delete';
    public const string RESPONSE_CLASS = AliasDeleteResponse::class;

    public function __construct(
        RequestConfig $requestConfig,
        #[SerializedName('AliasId')]
        private readonly string $aliasId,
    ) {
        parent::__construct($requestConfig);
    }

    public function getAliasId(): string
    {
        return $this->aliasId;
    }

    #[\Override]
    public function execute(): AliasDeleteResponse
    {
        /** @var AliasDeleteResponse $response */
        $response = $this->doExecute();

        return $response;
    }
}
