<?php declare(strict_types=1);

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
}
