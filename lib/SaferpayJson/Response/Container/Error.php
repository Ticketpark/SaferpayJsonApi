<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response\Container;

use JMS\Serializer\Annotation\SerializedName;

final class Error
{
    /**
     * @SerializedName("ErrorName")
     */
    private ?string $errorName = null;

    /**
     * @SerializedName("ErrorMessage")
     */
    private ?string $errorMessage = null;

    public function getErrorName(): ?string
    {
        return $this->errorName;
    }

    public function getErrorMessage(): ?string
    {
        return $this->errorMessage;
    }
}
