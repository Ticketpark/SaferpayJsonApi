<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response\Container;

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

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function getXid(): ?string
    {
        return $this->xid;
    }
}
