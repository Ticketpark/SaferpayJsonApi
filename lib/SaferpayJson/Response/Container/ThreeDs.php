<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response\Container;

use JMS\Serializer\Annotation\SerializedName;
use Ticketpark\SaferpayJson\Response\Enum\AuthenticationType;

final class ThreeDs
{
    #[SerializedName('Authenticated')]
    private ?bool $authenticated = null;

    #[SerializedName('Xid')]
    private ?string $xid = null;

    #[SerializedName('Version')]
    private ?string $version = null;

    #[SerializedName('AuthenticationType')]
    private ?AuthenticationType $authenticationType = null;

    public function isAuthenticated(): ?bool
    {
        return $this->authenticated;
    }

    public function getXid(): ?string
    {
        return $this->xid;
    }

    public function getVersion(): ?string
    {
        return $this->version;
    }

    public function getAuthenticationType(): ?AuthenticationType
    {
        return $this->authenticationType;
    }
}
