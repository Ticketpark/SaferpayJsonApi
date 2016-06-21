<?php

namespace Ticketpark\SaferpayJson\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class Error
{
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
     * @return string
     */
    public function getErrorName()
    {
        return $this->errorName;
    }

    /**
     * @param string $errorName
     * @return Alias
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
     * @return Alias
     */
    public function setErrorMessage($errorMessage)
    {
        $this->errorMessage = $errorMessage;

        return $this;
    }
}
