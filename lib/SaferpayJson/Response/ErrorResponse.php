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
    protected $behaviour;

    /**
     * @var string
     * @SerializedName("ErrorName")
     * @Type("string")
     */
    protected $errorName;

    /**
     * @var string
     * @SerializedName("ErrorMessage")
     * @Type("string")
     */
    protected $errorMessage;

    /**
     * @var string|null
     * @SerializedName("TransactionId")
     * @Type("string")
     */
    protected $transactionId;

    /**
     * @var array
     * @SerializedName("ErrorDetail")
     * @Type("array")
     */
    protected $errorDetail = [];

    /**
     * @var string|null
     * @SerializedName("ProcessorName")
     * @Type("string")
     */
    protected $processorName;

    /**
     * @var string|null
     * @SerializedName("ProcessorResult")
     * @Type("string")
     */
    protected $processorResult;

    /**
     * @var string|null
     * @SerializedName("ProcessorMessage")
     * @Type("string")
     */
    protected $processorMessage;

    public function getBehaviour(): string
    {
        return $this->behaviour;
    }

    public function setBehaviour(string $behaviour): self
    {
        $this->behaviour = $behaviour;

        return $this;
    }

    public function getErrorName(): string
    {
        return $this->errorName;
    }

    public function setErrorName(string $errorName): self
    {
        $this->errorName = $errorName;

        return $this;
    }

    public function getErrorMessage(): string
    {
        return $this->errorMessage;
    }

    public function setErrorMessage(string $errorMessage): self
    {
        $this->errorMessage = $errorMessage;

        return $this;
    }

    public function getTransactionId(): ?string
    {
        return $this->transactionId;
    }

    public function setTransactionId(string $transactionId): self
    {
        $this->transactionId = $transactionId;

        return $this;
    }

    public function getErrorDetail(): array
    {
        return $this->errorDetail;
    }

    public function setErrorDetail(array $errorDetail): self
    {
        $this->errorDetail = $errorDetail;

        return $this;
    }

    public function getProcessorName(): ?string
    {
        return $this->processorName;
    }

    public function setProcessorName(string $processorName): self
    {
        $this->processorName = $processorName;

        return $this;
    }

    public function getProcessorResult(): ?string
    {
        return $this->processorResult;
    }

    public function setProcessorResult(string $processorResult): self
    {
        $this->processorResult = $processorResult;

        return $this;
    }

    public function getProcessorMessage(): ?string
    {
        return $this->processorMessage;
    }

    public function setProcessorMessage(string $processorMessage): self
    {
        $this->processorMessage = $processorMessage;

        return $this;
    }
}
