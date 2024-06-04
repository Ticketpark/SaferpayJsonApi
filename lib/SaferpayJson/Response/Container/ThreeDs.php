<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

final class ThreeDs
{
    /**
     * @var bool|null
     * @SerializedName("Authenticated")
     * @Type("boolean")
     */
    private $authenticated;

    /**
     * @var bool|null
     * @SerializedName("LiabilityShift")
     * @Type("boolean")
     */
    private $liabilityShift;

    /**
     * @var string|null
     * @SerializedName("Xid")
     * @Type("string")
     */
    private $xid;

    /**
     * @var string|null
     * @SerializedName("Version")
     * @Type("string")
     */
    private $version;

    /**
     * @var string|null
     * @SerializedName("AuthenticationType")
     * @Type("string")
     */
    private $authenticationType;

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
