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
     * @SerializedName("Risk")
     */
    private ?Risk $risk = null;

    /**
     * @SerializedName("Behavior")
     */
    private ?string $behaviour = null;

    /**
     * @SerializedName("ErrorName")
     */
    private ?string $errorName = null;

    /**
     * @SerializedName("ErrorMessage")
     */
    private ?string $errorMessage = null;

    /**
     * @SerializedName("TransactionId")
     */
    private ?string $transactionId = null;

    /**
     * @SerializedName("ErrorDetail")
     * @Type("array")
     */
    private array $errorDetail = [];

    /**
     * @SerializedName("ProcessorName")
     */
    private ?string $processorName = null;

    /**
     * @SerializedName("ProcessorResult")
     */
    private ?string $processorResult = null;

    /**
     * @SerializedName("ProcessorMessage")
     */
    private ?string $processorMessage = null;

    /**
     * @SerializedName("PayerMessage")
     */
    private ?string $payerMessage = null;

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
