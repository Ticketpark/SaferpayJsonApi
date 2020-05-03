<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Container;

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
     * @SerializedName("VerificationValue")
     * @Type("string")
     */
    private $verificationValue;

    public function isAuthenticated(): ?bool
    {
        return $this->authenticated;
    }

    public function setAuthenticated(?bool $authenticated): self
    {
        $this->authenticated = $authenticated;

        return $this;
    }

    public function isLiabilityShift(): ?bool
    {
        return $this->liabilityShift;
    }

    public function setLiabilityShift(?bool $liabilityShift): self
    {
        $this->liabilityShift = $liabilityShift;

        return $this;
    }

    public function getXid(): ?string
    {
        return $this->xid;
    }

    public function setXid(?string $xid): self
    {
        $this->xid = $xid;

        return $this;
    }

    public function getVerificationValue(): ?string
    {
        return $this->verificationValue;
    }

    public function setVerificationValue(?string $verificationValue): self
    {
        $this->verificationValue = $verificationValue;

        return $this;
    }
}
