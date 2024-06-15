<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

use JMS\Serializer\Annotation\SerializedName;

final class Address
{
    public const GENDER_MALE = 'MALE';
    public const GENDER_FEMALE = 'FEMALE';
    public const GENDER_DIVERSE = 'DIVERSE';
    public const GENDER_COMPANY = 'COMPANY';

    /**
     * @SerializedName("FirstName")
     */
    private ?string $firstName = null;

    /**
     * @SerializedName("LastName")
     */
    private ?string $lastName = null;

    /**
     * @SerializedName("Company")
     */
    private ?string $company = null;

    /**
     * @SerializedName("Gender")
     */
    private ?string $gender = null;

    /**
     * @SerializedName("Street")
     */
    private ?string $street = null;

    /**
     * @SerializedName("Zip")
     */
    private ?string $zip = null;

    /**
     * @SerializedName("City")
     */
    private ?string $city = null;

    /**
     * @SerializedName("CountryCode")
     */
    private ?string $countryCode = null;

    /**
     * @SerializedName("Email")
     */
    private ?string $email = null;

    /**
     * @SerializedName("DateOfBirth")
     */
    private ?\DateTime $dateOfBirth = null;

    /**
     * @SerializedName("LegalForm")
     */
    private ?string $legalForm = null;

    /**
     * @SerializedName("Street2")
     */
    private ?string $street2 = null;

    /**
     * @SerializedName("CountrySubdivisionCode")
     */
    private ?string $countrySubdivisionCode = null;

    /**
     * @SerializedName("Phone")
     */
    private ?string $phone = null;

    /**
     * @SerializedName("VatNumber")
     */
    private ?string $vatNumber = null;

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(?string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(?string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getCompany(): ?string
    {
        return $this->company;
    }

    public function setCompany(?string $company): self
    {
        $this->company = $company;

        return $this;
    }

    public function getGender(): ?string
    {
        return $this->gender;
    }

    public function setGender(?string $gender): self
    {
        $this->gender = $gender;

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

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(?string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }

    public function setCountryCode(?string $countryCode): self
    {
        $this->countryCode = $countryCode;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getDateOfBirth(): ?\DateTime
    {
        return $this->dateOfBirth;
    }

    public function setDateOfBirth(?\DateTime $dateOfBirth): self
    {
        $this->dateOfBirth = $dateOfBirth;

        return $this;
    }

    public function getLegalForm(): ?string
    {
        return $this->legalForm;
    }

    public function setLegalForm(?string $legalForm): self
    {
        $this->legalForm = $legalForm;

        return $this;
    }

    public function getStreet2(): ?string
    {
        return $this->street2;
    }

    public function setStreet2(?string $street2): self
    {
        $this->street2 = $street2;

        return $this;
    }

    public function getCountrySubdivisionCode(): ?string
    {
        return $this->countrySubdivisionCode;
    }

    public function setCountrySubdivisionCode(?string $countrySubdivisionCode): self
    {
        $this->countrySubdivisionCode = $countrySubdivisionCode;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    public function getVatNumber(): ?string
    {
        return $this->vatNumber;
    }

    public function setVatNumber(?string $vatNumber): self
    {
        $this->vatNumber = $vatNumber;

        return $this;
    }
}
