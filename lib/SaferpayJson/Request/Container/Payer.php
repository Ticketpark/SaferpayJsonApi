<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

use JMS\Serializer\Annotation\SerializedName;

final class Payer
{
    #[SerializedName('AcceptHeader')]
    private ?string $acceptHeader = null;

    #[SerializedName('BillingAddress')]
    private ?Address $billingAddress = null;

    #[SerializedName('ColorDepth')]
    private ?string $colorDepth = null;

    #[SerializedName('DeliveryAddress')]
    private ?Address $deliveryAddress = null;

    #[SerializedName('Id')]
    private ?string $id = null;

    #[SerializedName('IpAddress')]
    private ?string $ipAddress = null;

    #[SerializedName('Ipv6Address')]
    private ?string $ipv6Address = null;

    #[SerializedName('JavaEnabled')]
    private ?bool $javaEnabled = null;

    #[SerializedName('JavaScriptEnabled')]
    private ?bool $javaScriptEnabled = null;

    #[SerializedName('LanguageCode')]
    private ?string $languageCode = null;

    #[SerializedName('ScreenHeight')]
    private ?int $screenHeight = null;

    #[SerializedName('ScreenWidth')]
    private ?int $screenWidth = null;

    #[SerializedName('TimeZoneOffsetMinutes')]
    private ?int $timeZoneOffsetMinutes = null;

    #[SerializedName('UserAgent')]
    private ?string $userAgent = null;

    public function getAcceptHeader(): ?string
    {
        return $this->acceptHeader;
    }

    public function setAcceptHeader(?string $acceptHeader): self
    {
        $this->acceptHeader = $acceptHeader;

        return $this;
    }

    public function getBillingAddress(): ?Address
    {
        return $this->billingAddress;
    }

    public function setBillingAddress(?Address $billingAddress): self
    {
        $this->billingAddress = $billingAddress;

        return $this;
    }

    public function getColorDepth(): ?string
    {
        return $this->colorDepth;
    }

    public function setColorDepth(?string $colorDepth): self
    {
        $this->colorDepth = $colorDepth;

        return $this;
    }

    public function getDeliveryAddress(): ?Address
    {
        return $this->deliveryAddress;
    }

    public function setDeliveryAddress(?Address $deliveryAddress): self
    {
        $this->deliveryAddress = $deliveryAddress;

        return $this;
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getIpAddress(): ?string
    {
        return $this->ipAddress;
    }

    public function setIpAddress(?string $ipAddress): self
    {
        $this->ipAddress = $ipAddress;

        return $this;
    }

    public function getIpv6Address(): ?string
    {
        return $this->ipv6Address;
    }

    public function setIpv6Address(?string $ipv6Address): self
    {
        $this->ipv6Address = $ipv6Address;

        return $this;
    }

    public function isJavaEnabled(): ?bool
    {
        return $this->javaEnabled;
    }

    public function setJavaEnabled(?bool $javaEnabled): self
    {
        $this->javaEnabled = $javaEnabled;

        return $this;
    }

    public function isJavaScriptEnabled(): ?bool
    {
        return $this->javaScriptEnabled;
    }

    public function setJavaScriptEnabled(?bool $javaScriptEnabled): self
    {
        $this->javaScriptEnabled = $javaScriptEnabled;

        return $this;
    }

    public function getLanguageCode(): ?string
    {
        return $this->languageCode;
    }

    public function setLanguageCode(?string $languageCode): self
    {
        $this->languageCode = $languageCode;

        return $this;
    }

    public function getScreenHeight(): ?int
    {
        return $this->screenHeight;
    }

    public function setScreenHeight(?int $screenHeight): self
    {
        $this->screenHeight = $screenHeight;

        return $this;
    }

    public function getScreenWidth(): ?int
    {
        return $this->screenWidth;
    }

    public function setScreenWidth(?int $screenWidth): self
    {
        $this->screenWidth = $screenWidth;

        return $this;
    }

    public function getTimeZoneOffsetMinutes(): ?int
    {
        return $this->timeZoneOffsetMinutes;
    }

    public function setTimeZoneOffsetMinutes(?int $timeZoneOffsetMinutes): self
    {
        $this->timeZoneOffsetMinutes = $timeZoneOffsetMinutes;

        return $this;
    }

    public function getUserAgent(): ?string
    {
        return $this->userAgent;
    }

    public function setUserAgent(?string $userAgent): self
    {
        $this->userAgent = $userAgent;

        return $this;
    }
}
