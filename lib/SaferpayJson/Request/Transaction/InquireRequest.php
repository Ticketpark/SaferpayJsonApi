<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Transaction;

use JMS\Serializer\Annotation\SerializedName;
use Ticketpark\SaferpayJson\Request\Container\TransactionReference;
use Ticketpark\SaferpayJson\Request\Request;
use Ticketpark\SaferpayJson\Request\RequestCommonsTrait;
use Ticketpark\SaferpayJson\Request\RequestConfig;
use Ticketpark\SaferpayJson\Response\Transaction\InquireResponse;

final class InquireRequest extends Request
{
    use RequestCommonsTrait;
    public const API_PATH = '/Payment/v1/Transaction/Inquire';
    public const RESPONSE_CLASS = InquireResponse::class;

    /**
     * @var TransactionReference
     * @SerializedName("TransactionReference")
     */
    private $transactionReference;

    public function __construct(
        RequestConfig $requestConfig,
        TransactionReference $transactionReference
    ) {
        $this->transactionReference = $transactionReference;

        parent::__construct($requestConfig);
    }

    public function getTransactionReference(): TransactionReference
    {
        return $this->transactionReference;
    }

    public function setTransactionReference(TransactionReference $transactionReference): self
    {
        $this->transactionReference = $transactionReference;

        return $this;
    }

    public function execute(): InquireResponse
    {
        /** @var InquireResponse $response */
        $response = $this->doExecute();

        return $response;
    }
}
