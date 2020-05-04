<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

final class PaymentMethodsOptions
{
    /**
     * @var Alipay|null
     * @SerializedName("Alipay")
     */
    private $alipay;

    /**
     * @var Ideal|null
     * @SerializedName("Ideal")
     */
    private $ideal;

    public function getAlipay(): ?Alipay
    {
        return $this->alipay;
    }

    public function setAlipay(?Alipay $alipay): self
    {
        $this->alipay = $alipay;

        return $this;
    }

    public function getIdeal(): ?Ideal
    {
        return $this->ideal;
    }

    public function setIdeal(?Ideal $ideal): self
    {
        $this->ideal = $ideal;

        return $this;
    }
}
