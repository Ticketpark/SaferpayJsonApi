<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class CheckResult
{
    /**
     * @var string
     * @SerializedName("Result")
     * @Type("string")
     */
    protected $result;

    /**
     * @var string
     * @SerializedName("Message")
     * @Type("string")
     */
    protected $message;

    /**
     * @var HolderAuthentication
     * @SerializedName("Authentication")
     * @Type("Ticketpark\SaferpayJson\Container\HolderAuthentication")
     */
    protected $authentication;

    public function getResult(): ?string
    {
        return $this->result;
    }

    public function setResult(string $result): self
    {
        $this->result = $result;

        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(string $message): self
    {
        $this->message = $message;

        return $this;
    }

    public function getAuthentication(): ?HolderAuthentication
    {
        return $this->authentication;
    }

    public function setAuthentication(HolderAuthentication $authentication): self
    {
        $this->authentication = $authentication;

        return $this;
    }
}
