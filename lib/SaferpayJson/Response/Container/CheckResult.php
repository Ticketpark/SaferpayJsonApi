<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

final class CheckResult
{
    /**
     * @var string|null
     * @SerializedName("Result")
     * @Type("string")
     */
    private $result;

    /**
     * @var string|null
     * @SerializedName("Message")
     * @Type("string")
     */
    private $message;

    /**
     * @var HolderAuthentication|null
     * @SerializedName("Authentication")
     * @Type("Ticketpark\SaferpayJson\Response\Container\HolderAuthentication")
     */
    private $authentication;

    public function getResult(): ?string
    {
        return $this->result;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function getAuthentication(): ?HolderAuthentication
    {
        return $this->authentication;
    }
}
