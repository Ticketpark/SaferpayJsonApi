<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

final class SchemeToken
{
    public const TOKEN_TYPE_APPLEPAY = "APPLEPAY";
    public const TOKEN_TYPE_GOOGLEPAY = "GOOGLEPAY";
    public const TOKEN_TYPE_SAMSUNGPAY = "SAMSUNGPAY";
    public const TOKEN_TYPE_CLICKTOPAY = "CLICKTOPAY";
    public const TOKEN_TYPE_OTHER = "OTHER";
    public const TOKEN_TYPE_MDES = "MDES";
    public const TOKEN_TYPE_VTS = "VTS";

    /**
     * @SerializedName("Number")
     * @Type("string")
     */
    private string $number;

    /**
     * @SerializedName("ExpMonth")
     * @Type("integer")
     */
    private int $expMonth;

    /**
     * @SerializedName("ExpYear")
     * @Type("integer")
     */
    private int $expYear;

    /**
     * @SerializedName("AuthValue")
     * @Type("string")
     */
    private string $authValue;

    /**
     * @SerializedName("Eci")
     */
    private ?string $eci = null;

    /**
     * @var string
     * @SerializedName("TokenType")
     */
    private $tokenType;

    public function __construct(string $number, int $expMonth, int $expYear, string $authValue, string $tokenType)
    {
        $this->number = $number;
        $this->expMonth = $expMonth;
        $this->expYear = $expYear;
        $this->authValue = $authValue;
        $this->tokenType = $tokenType;
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

    public function getTokenType(): string
    {
        return $this->tokenType;
    }
}
