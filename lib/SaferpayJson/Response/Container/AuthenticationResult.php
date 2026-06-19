<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response\Container;

use JMS\Serializer\Annotation\SerializedName;
use Ticketpark\SaferpayJson\Response\Enum\AuthenticationType;

final class AuthenticationResult
{
    #[SerializedName('Authenticated')]
    private ?bool $authenticated = null;

    #[SerializedName('AuthenticationType')]
    private ?AuthenticationType $authenticationType = null;

    #[SerializedName('Message')]
    private ?string $message = null;

    public function isAuthenticated(): ?bool
    {
        return $this->authenticated;
    }

    public function getAuthenticationType(): ?AuthenticationType
    {
        return $this->authenticationType;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }
}
