<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

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
     * @Type("DateTime<'Y-m-d'>")
     */
    private ?\DateTime$dateOfBirth = null;

    /**
     * @var string|null
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

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function getCompany(): ?string
    {
        return $this->company;
    }

    public function getGender(): ?string
    {
        return $this->gender;
    }

    public function getStreet(): ?string
    {
        return $this->street;
    }

    public function getZip(): ?string
    {
        return $this->zip;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function getDateOfBirth(): ?\DateTime
    {
        return $this->dateOfBirth;
    }

    public function getStreet2(): ?string
    {
        return $this->street2;
    }

    public function getCountrySubdivisionCode(): ?string
    {
        return $this->countrySubdivisionCode;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function getVatNumber(): ?string
    {
        return $this->vatNumber;
    }
}
