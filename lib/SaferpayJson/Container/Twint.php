<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class Twint
{
    /**
     * @var \DateTime
     * @SerializedName("CertificateExpirationDate")
     * @Type("DateTime")
     */
    protected $certificateExpirationDate;

    public function getCertificateExpirationDate(): ?\DateTime
    {
        return $this->certificateExpirationDate;
    }

    public function setCertificateExpirationDate(\DateTime $certificateExpirationDate): self
    {
        $this->certificateExpirationDate = $certificateExpirationDate;

        return $this;
    }
}
