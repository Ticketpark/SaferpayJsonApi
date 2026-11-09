<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

use JMS\Serializer\Annotation\SerializedName;
use Ticketpark\SaferpayJson\Request\Enum\KlarnaShippingType;
use Ticketpark\SaferpayJson\Request\Enum\KlarnaShippingTypeAttribute;

final class Klarna
{
    #[SerializedName('Attachment')]
    private ?Attachment $attachment = null;

    #[SerializedName('ShippingCarrier')]
    private ?string $shippingCarrier = null;

    #[SerializedName('ShippingType')]
    private ?KlarnaShippingType $shippingType = null;

    #[SerializedName('ShippingTypeAttribute')]
    private ?KlarnaShippingTypeAttribute $shippingTypeAttribute = null;

    public function getAttachment(): ?Attachment
    {
        return $this->attachment;
    }

    public function setAttachment(?Attachment $attachment): self
    {
        $this->attachment = $attachment;

        return $this;
    }

    public function getShippingCarrier(): ?string
    {
        return $this->shippingCarrier;
    }

    public function setShippingCarrier(?string $shippingCarrier): self
    {
        $this->shippingCarrier = $shippingCarrier;

        return $this;
    }

    public function getShippingType(): ?KlarnaShippingType
    {
        return $this->shippingType;
    }

    public function setShippingType(?KlarnaShippingType $shippingType): self
    {
        $this->shippingType = $shippingType;

        return $this;
    }

    public function getShippingTypeAttribute(): ?KlarnaShippingTypeAttribute
    {
        return $this->shippingTypeAttribute;
    }

    public function setShippingTypeAttribute(?KlarnaShippingTypeAttribute $shippingTypeAttribute): self
    {
        $this->shippingTypeAttribute = $shippingTypeAttribute;

        return $this;
    }
}
