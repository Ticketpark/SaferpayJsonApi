<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Transaction;

use JMS\Serializer\Annotation\SerializedName;
use Ticketpark\SaferpayJson\Request\Container\TransactionReference;
use Ticketpark\SaferpayJson\Request\Request;
use Ticketpark\SaferpayJson\Request\RequestCommonsTrait;
use Ticketpark\SaferpayJson\Request\RequestConfig;
use Ticketpark\SaferpayJson\Response\Transaction\CancelResponse;

final class CancelRequest extends Request
{
    use RequestCommonsTrait;
    public const string API_PATH = '/Payment/v1/Transaction/Cancel';
    public const string RESPONSE_CLASS = CancelResponse::class;

    public function __construct(
        RequestConfig $requestConfig,
        #[SerializedName('TransactionReference')]
        private readonly TransactionReference $transactionReference,
    ) {
        parent::__construct($requestConfig);
    }

    public function getTransactionReference(): TransactionReference
    {
        return $this->transactionReference;
    }

    #[\Override]
    public function execute(): CancelResponse
    {
        /** @var CancelResponse $response */
        $response = $this->doExecute();

        return $response;
    }
}
