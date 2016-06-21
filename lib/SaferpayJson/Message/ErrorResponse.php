<?php

namespace Ticketpark\SaferpayJson\Message;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class ErrorResponse extends Response
{
    /**
     * @var string
     * @SerializedName("Behaviour")
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
     * @var string
     * @SerializedName("TransactionId")
     * @Type("string")
     */
    protected $transactionId;

    /**
     * @var array
     * @SerializedName("ErrorDetail")
     * @Type("array")
     */
    protected $errorDetail;

    /**
     * @var string
     * @SerializedName("ProcessorName")
     * @Type("string")
     */
    protected $processorName;

    /**
     * @var string
     * @SerializedName("ProcessorResult")
     * @Type("string")
     */
    protected $processorResult;

    /**
     * @var string
     * @SerializedName("ProcessorMessage")
     * @Type("string")
     */
    protected $processorMessage;

    /**
     * @return string
     */
    public function getBehaviour()
    {
        return $this->behaviour;
    }

    /**
     * @param string $behaviour
     * @return ErrorResponse
     */
    public function setBehaviour($behaviour)
    {
        $this->behaviour = $behaviour;

        return $this;
    }

    /**
     * @return string
     */
    public function getErrorName()
    {
        return $this->errorName;
    }

    /**
     * @param string $errorName
     * @return ErrorResponse
     */
    public function setErrorName($errorName)
    {
        $this->errorName = $errorName;

        return $this;
    }

    /**
     * @return string
     */
    public function getErrorMessage()
    {
        return $this->errorMessage;
    }

    /**
     * @param string $errorMessage
     * @return ErrorResponse
     */
    public function setErrorMessage($errorMessage)
    {
        $this->errorMessage = $errorMessage;

        return $this;
    }

    /**
     * @return string
     */
    public function getTransactionId()
    {
        return $this->transactionId;
    }

    /**
     * @param string $transactionId
     * @return ErrorResponse
     */
    public function setTransactionId($transactionId)
    {
        $this->transactionId = $transactionId;

        return $this;
    }

    /**
     * @return array
     */
    public function getErrorDetail()
    {
        return $this->errorDetail;
    }

    /**
     * @param array $errorDetail
     * @return ErrorResponse
     */
    public function setErrorDetail(array $errorDetail)
    {
        $this->errorDetail = $errorDetail;

        return $this;
    }

    /**
     * @return string
     */
    public function getProcessorName()
    {
        return $this->processorName;
    }

    /**
     * @param string $processorName
     * @return ErrorResponse
     */
    public function setProcessorName($processorName)
    {
        $this->processorName = $processorName;

        return $this;
    }

    /**
     * @return string
     */
    public function getProcessorResult()
    {
        return $this->processorResult;
    }

    /**
     * @param string $processorResult
     * @return ErrorResponse
     */
    public function setProcessorResult($processorResult)
    {
        $this->processorResult = $processorResult;

        return $this;
    }

    /**
     * @return string
     */
    public function getProcessorMessage()
    {
        return $this->processorMessage;
    }

    /**
     * @param string $processorMessage
     * @return ErrorResponse
     */
    public function setProcessorMessage($processorMessage)
    {
        $this->processorMessage = $processorMessage;

        return $this;
    }
}