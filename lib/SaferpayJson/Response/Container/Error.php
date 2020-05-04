<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response\Container;

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

    public function getErrorMessage(): ?string
    {
        return $this->errorMessage;
    }
}
