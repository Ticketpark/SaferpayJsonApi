<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response\Container;

use JMS\Serializer\Annotation\SerializedName;
use Ticketpark\SaferpayJson\Response\Enum\CheckResultStatus;

final class CheckResult
{
    #[SerializedName('Result')]
    private ?CheckResultStatus $result = null;

    #[SerializedName('Message')]
    private ?string $message = null;

    #[SerializedName('Authentication')]
    private ?HolderAuthentication $authentication = null;

    public function getResult(): ?CheckResultStatus
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
