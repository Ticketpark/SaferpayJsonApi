<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use Ticketpark\SaferpayJson\Response\Container\Risk;

class ErrorResponse extends Response
{
    public const BEHAVIOUR_DO_NOT_RETRY = 'DO_NOT_RETRY';
    public const BEHAVIOUR_OTHER_MEANS = 'OTHER_MEANS';
    public const BEHAVIOUR_RETRY = 'RETRY';
    public const BEHAVIOUR_RETRY_LATER = 'RETRY_LATER';

    /**
     * @var Risk|null
     * @SerializedName("Risk")
     * @Type("Ticketpark\SaferpayJson\Response\Container\Risk")
     */
    private $risk;

    /**
     * @var string|null
     * @SerializedName("Behavior")
     * @Type("string")
     */
    private $behaviour;

    /**
     * @var string|null
     * @SerializedName("ErrorName")
     * @Type("string")
     */
    private $errorName;

    /**
     * @var string|null
     * @SerializedName("ErrorMessage")
     * @Type("string")
     */
    private $errorMessage;

    /**
     * @var string|null
     * @SerializedName("TransactionId")
     * @Type("string")
     */
    private $transactionId;

    /**
     * @var array|null
     * @SerializedName("ErrorDetail")
     * @Type("array")
     */
    private $errorDetail = [];

    /**
     * @var string|null
     * @SerializedName("ProcessorName")
     * @Type("string")
     */
    private $processorName;

    /**
     * @var string|null
     * @SerializedName("ProcessorResult")
     * @Type("string")
     */
    private $processorResult;

    /**
     * @var string|null
     * @SerializedName("ProcessorMessage")
     * @Type("string")
     */
    private $processorMessage;

    /**
     * @var string|null
     * @SerializedName("PayerMessage")
     * @Type("string")
     */
    private $payerMessage;

    public function getRisk(): ?Risk
    {
        return $this->risk;
    }

    public function getBehaviour(): ?string
    {
        return $this->behaviour;
    }

    public function getErrorName(): ?string
    {
        return $this->errorName;
    }

    public function getErrorMessage(): ?string
    {
        return $this->errorMessage;
    }

    public function getTransactionId(): ?string
    {
        return $this->transactionId;
    }

    public function getErrorDetail(): ?array
    {
        return $this->errorDetail;
    }

    public function getProcessorName(): ?string
    {
        return $this->processorName;
    }

    public function getProcessorResult(): ?string
    {
        return $this->processorResult;
    }

    public function getProcessorMessage(): ?string
    {
        return $this->processorMessage;
    }

    public function getPayerMessage(): ?string
    {
        return $this->payerMessage;
    }
}
