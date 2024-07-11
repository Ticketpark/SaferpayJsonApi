<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response\Container;

use JMS\Serializer\Annotation\SerializedName;

final class ThreeDs
{
    /**
     * @SerializedName("Authenticated")
     */
    private ?bool $authenticated = null;

    /**
     * @SerializedName("LiabilityShift")
     */
    private ?bool $liabilityShift = null;

    /**
     * @SerializedName("Xid")
     */
    private ?string $xid = null;

    /**
     * @SerializedName("Version")
     */
    private ?string $version = null;

    /**
     * @SerializedName("AuthenticationType")
     */
    private ?string $authenticationType = null;

    public function isAuthenticated(): ?bool
    {
        return $this->authenticated;
    }

    public function isLiabilityShift(): ?bool
    {
        return $this->liabilityShift;
    }

    public function getXid(): ?string
    {
        return $this->xid;
    }

    public function getVersion(): ?string
    {
        return $this->version;
    }

    public function getAuthenticationType(): ?string
    {
        return $this->authenticationType;
    }
}
