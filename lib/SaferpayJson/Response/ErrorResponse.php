<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class ErrorResponse extends Response
{
    /**
     * @var string
     * @SerializedName("Behavior")
     * @Type("string")
     */
    private $behaviour;

    /**
     * @var string
     * @SerializedName("ErrorName")
     * @Type("string")
     */
    private $errorName;

    /**
     * @var string
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
     * @var array
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
     * @var string
     * @SerializedName("ProcessorMessage")
     * @Type("string")
     */
    private $processorMessage;

    public function getBehaviour(): string
    {
        return $this->behaviour;
    }

    public function getErrorName(): string
    {
        return $this->errorName;
    }

    public function getErrorMessage(): string
    {
        return $this->errorMessage;
    }

    public function getTransactionId(): ?string
    {
        return $this->transactionId;
    }

    public function getErrorDetail(): array
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
}
