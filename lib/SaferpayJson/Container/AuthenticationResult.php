<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class AuthenticationResult
{
    const RESULT_OK = 'OK';
    const RESULT_NOT_SUPPORTED = 'NOT_SUPPORTED';

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
}
