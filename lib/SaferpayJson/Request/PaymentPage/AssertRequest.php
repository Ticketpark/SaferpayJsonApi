<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\PaymentPage;

use JMS\Serializer\Annotation\SerializedName;
use Ticketpark\SaferpayJson\Request\Request;
use Ticketpark\SaferpayJson\Request\RequestCommonsTrait;
use Ticketpark\SaferpayJson\Request\RequestConfig;
use Ticketpark\SaferpayJson\Response\PaymentPage\AssertResponse;

final class AssertRequest extends Request
{
    use RequestCommonsTrait;
    public const API_PATH = '/Payment/v1/PaymentPage/Assert';
    public const RESPONSE_CLASS = AssertResponse::class;

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

    public function execute(): AssertResponse
    {
        /** @var AssertResponse $response */
        $response = $this->doExecute();

        return $response;
    }
}
