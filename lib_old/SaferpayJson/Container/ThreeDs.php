<?php

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

    /**
     * @return boolean
     */
    public function isAuthenticated()
    {
        return $this->authenticated;
    }

    /**
     * @param boolean $authenticated
     * @return ThreeDs
     */
    public function setAuthenticated($authenticated)
    {
        $this->authenticated = $authenticated;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isLiabilityShift()
    {
        return $this->liabilityShift;
    }

    /**
     * @param boolean $liabilityShift
     * @return ThreeDs
     */
    public function setLiabilityShift($liabilityShift)
    {
        $this->liabilityShift = $liabilityShift;

        return $this;
    }

    /**
     * @return string
     */
    public function getXid()
    {
        return $this->xid;
    }

    /**
     * @param string $xid
     * @return ThreeDs
     */
    public function setXid($xid)
    {
        $this->xid = $xid;

        return $this;
    }

    /**
     * @return string
     */
    public function getVerificationValue()
    {
        return $this->verificationValue;
    }

    /**
     * @param string $verificationValue
     * @return ThreeDs
     */
    public function setVerificationValue($verificationValue)
    {
        $this->verificationValue = $verificationValue;

        return $this;
    }
}