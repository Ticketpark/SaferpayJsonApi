<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

final class Dcc
{
    /**
     * @var Amount|null
     * @SerializedName("PayerAmount")
     * @Type("Ticketpark\SaferpayJson\Response\Container\Amount")
     */
    private $payerAmount;

    public function getPayerAmount(): ?Amount
    {
        return $this->payerAmount;
    }
}
