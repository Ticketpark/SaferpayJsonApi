<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response\Container;

use JMS\Serializer\Annotation\SerializedName;

final class HolderAuthentication
{
    public const RESULT_OK = 'OK';
    public const RESULT_NOT_SUPPORTED = 'NOT_SUPPORTED';

    /**
     * @SerializedName("Result")
     */
    private ?string $result = null;

    /**
     * @SerializedName("Message")
     */
    private ?string $message = null;

    /**
     * @SerializedName("Xid")
     */
    private ?string $xid = null;

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
