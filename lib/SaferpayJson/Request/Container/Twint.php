<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

final class Twint
{
    /**
     * @var \DateTime|null
     * @SerializedName("CertificateExpirationDate")
     * @Type("DateTime<'Y-m-d\TH:i:s.uT'>")
     */
    private $certificateExpirationDate;

    public function getCertificateExpirationDate(): ?\DateTime
    {
        return $this->certificateExpirationDate;
    }

    public function setCertificateExpirationDate(?\DateTime $certificateExpirationDate): self
    {
        $this->certificateExpirationDate = $certificateExpirationDate;

        return $this;
    }
}
