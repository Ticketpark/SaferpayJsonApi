<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response\Container;

use JMS\Serializer\Annotation\SerializedName;
use Ticketpark\SaferpayJson\Response\Enum\HolderAuthenticationResult;

final class HolderAuthentication
{
    #[SerializedName('Result')]
    private ?HolderAuthenticationResult $result = null;

    #[SerializedName('Message')]
    private ?string $message = null;

    #[SerializedName('Xid')]
    private ?string $xid = null;

    public function getResult(): ?HolderAuthenticationResult
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
