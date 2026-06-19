<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\SecureCardData;

use JMS\Serializer\Annotation\SerializedName;
use Ticketpark\SaferpayJson\Request\Container\UpdateAlias;
use Ticketpark\SaferpayJson\Request\Container\UpdatePaymentMeans;
use Ticketpark\SaferpayJson\Request\Request;
use Ticketpark\SaferpayJson\Request\RequestCommonsTrait;
use Ticketpark\SaferpayJson\Request\RequestConfig;
use Ticketpark\SaferpayJson\Response\SecureCardData\AliasUpdateResponse;

final class AliasUpdateRequest extends Request
{
    use RequestCommonsTrait;
    public const string API_PATH = '/Payment/v1/Alias/Update';
    public const string RESPONSE_CLASS = AliasUpdateResponse::class;

    public function __construct(
        RequestConfig $requestConfig,
        #[SerializedName('UpdateAlias')]
        private readonly UpdateAlias $updateAlias,
        #[SerializedName('UpdatePaymentMeans')]
        private readonly UpdatePaymentMeans $updatePaymentMeans,
    ) {
        parent::__construct($requestConfig);
    }

    public function getUpdateAlias(): UpdateAlias
    {
        return $this->updateAlias;
    }

    public function getUpdatePaymentMeans(): UpdatePaymentMeans
    {
        return $this->updatePaymentMeans;
    }

    #[\Override]
    public function execute(): AliasUpdateResponse
    {
        /** @var AliasUpdateResponse $response */
        $response = $this->doExecute();

        return $response;
    }
}
