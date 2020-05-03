<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

final class Error
{
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

    public function getErrorName(): ?string
    {
        return $this->errorName;
    }

    public function setErrorName(?string $errorName): self
    {
        $this->errorName = $errorName;

        return $this;
    }

    public function getErrorMessage(): ?string
    {
        return $this->errorMessage;
    }

    public function setErrorMessage(?string $errorMessage): self
    {
        $this->errorMessage = $errorMessage;

        return $this;
    }
}
