<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

final class HolderAuthentication
{
    const RESULT_OK = 'OK';
    const RESULT_NOT_SUPPORTED = 'NOT_SUPPORTED';

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
     * @var string|null
     * @SerializedName("Xid")
     * @Type("string")
     */
    private $xid;

    public function getResult(): ?string
    {
        return $this->result;
    }

    public function setResult(?string $result): self
    {
        $this->result = $result;

        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(?string $message): self
    {
        $this->message = $message;

        return $this;
    }

    public function getXid(): ?string
    {
        return $this->xid;
    }

    public function setXid(?string $xid): self
    {
        $this->xid = $xid;

        return $this;
    }
}
