<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

final class Twint
{
    #[SerializedName('CertificateExpirationDate')]
    #[Type("DateTimeInterface<'Y-m-d\TH:i:s.uT'>")]
    private ?\DateTimeInterface $certificateExpirationDate = null;

    public function getCertificateExpirationDate(): ?\DateTimeInterface
    {
        return $this->certificateExpirationDate;
    }

    public function setCertificateExpirationDate(?\DateTimeInterface $certificateExpirationDate): self
    {
        $this->certificateExpirationDate = $certificateExpirationDate;

        return $this;
    }
}
