<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response\Container;

use JMS\Serializer\Annotation\SerializedName;

final class AuthenticationResult
{
    public const AUTHENTICATION_TYPE_STRONG_CUSTOMER_AUTHENTICATION = 'STRONG_CUSTOMER_AUTHENTICATION';
    public const AUTHENTICATION_TYPE_FRICTIONLESS = 'FRICTIONLESS';
    public const AUTHENTICATION_TYPE_ATTEMPT = 'ATTEMPT';
    public const AUTHENTICATION_TYPE_UNSPECIFIED = 'UNSPECIFIED';
    public const AUTHENTICATION_TYPE_NONE = 'NONE';

    #[SerializedName('Authenticated')]
    private ?bool $authenticated = null;

    #[SerializedName('AuthenticationType')]
    private ?string $authenticationType = null;

    #[SerializedName('Message')]
    private ?string $message = null;

    public function isAuthenticated(): ?bool
    {
        return $this->authenticated;
    }

    public function getAuthenticationType(): ?string
    {
        return $this->authenticationType;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }
}
