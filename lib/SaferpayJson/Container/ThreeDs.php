<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class ThreeDs
{
    /**
     * @var bool
     * @SerializedName("Authenticated")
     * @Type("boolean")
     */
    protected $authenticated;

    /**
     * @var bool
     * @SerializedName("LiabilityShift")
     * @Type("boolean")
     */
    protected $liabilityShift;

    /**
     * @var string
     * @SerializedName("Xid")
     * @Type("string")
     */
    protected $xid;

    /**
     * @var string
     * @SerializedName("VerificationValue")
     * @Type("string")
     */
    protected $verificationValue;

    public function isAuthenticated(): bool
    {
        return $this->authenticated;
    }

    public function setAuthenticated(bool $authenticated): self
    {
        $this->authenticated = $authenticated;

        return $this;
    }

    public function isLiabilityShift(): bool
    {
        return $this->liabilityShift;
    }

    public function setLiabilityShift(bool $liabilityShift): self
    {
        $this->liabilityShift = $liabilityShift;

        return $this;
    }

    public function getXid(): string
    {
        return $this->xid;
    }

    public function setXid(string $xid): self
    {
        $this->xid = $xid;

        return $this;
    }

    public function getVerificationValue(): string
    {
        return $this->verificationValue;
    }

    public function setVerificationValue(string $verificationValue): self
    {
        $this->verificationValue = $verificationValue;

        return $this;
    }
}
