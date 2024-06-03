<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

final class SchemeToken
{
    /**
     * @var string
     * @SerializedName("Number")
     * @Type("string")
     */
    private $number;

    /**
     * @var int
     * @SerializedName("ExpMonth")
     * @Type("integer")
     */
    private $expMonth;

    /**
     * @var int
     * @SerializedName("ExpYear")
     * @Type("integer")
     */
    private $expYear;

    /**
     * @var string
     * @SerializedName("AuthValue")
     * @Type("string")
     */
    private $authValue;

    /**
     * @var string|null
     * @SerializedName("Eci")
     */
    private $eci;

    public function __construct(string $number, int $expMonth, int $expYear, string $authValue)
    {
        $this->number = $number;
        $this->expMonth = $expMonth;
        $this->expYear = $expYear;
        $this->authValue = $authValue;
    }

    public function getNumber(): string
    {
        return $this->number;
    }

    public function getExpMonth(): int
    {
        return $this->expMonth;
    }

    public function getExpYear(): int
    {
        return $this->expYear;
    }

    public function getAuthValue(): string
    {
        return $this->authValue;
    }

    public function getEci(): ?string
    {
        return $this->eci;
    }

    public function setEci(?string $eci): self
    {
        $this->eci = $eci;
        return $this;
    }
}
