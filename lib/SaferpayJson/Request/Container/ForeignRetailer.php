<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

use JMS\Serializer\Annotation\SerializedName;

final class ForeignRetailer
{
    #[SerializedName('City')]
    private ?string $city = null;

    #[SerializedName('Name')]
    private ?string $name = null;

    #[SerializedName('Street')]
    private ?string $street = null;

    #[SerializedName('Zip')]
    private ?string $zip = null;

    public function __construct(
        #[SerializedName('CountryCode')]
        private readonly string $countryCode,
    ) {
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(?string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getCountryCode(): string
    {
        return $this->countryCode;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getStreet(): ?string
    {
        return $this->street;
    }

    public function setStreet(?string $street): self
    {
        $this->street = $street;

        return $this;
    }

    public function getZip(): ?string
    {
        return $this->zip;
    }

    public function setZip(?string $zip): self
    {
        $this->zip = $zip;

        return $this;
    }
}
