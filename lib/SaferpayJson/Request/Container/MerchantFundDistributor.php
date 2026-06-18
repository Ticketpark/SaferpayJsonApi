<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

use JMS\Serializer\Annotation\SerializedName;

final class MerchantFundDistributor
{
    #[SerializedName('ForeignRetailer')]
    private ?ForeignRetailer $foreignRetailer = null;

    public function getForeignRetailer(): ?ForeignRetailer
    {
        return $this->foreignRetailer;
    }

    public function setForeignRetailer(?ForeignRetailer $foreignRetailer): self
    {
        $this->foreignRetailer = $foreignRetailer;

        return $this;
    }
}
