<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

final class Address
{
    const GENDER_MALE = 'MALE';
    const GENDER_FEMALE = 'FEMALE';
    const GENDER_DIVERSE = 'DIVERSE';
    const GENDER_COMPANY = 'COMPANY';

    /**
     * @var string|null
     * @SerializedName("FirstName")
     * @Type("string")
     */
    private $firstName;

    /**
     * @var string|null
     * @SerializedName("LastName")
     * @Type("string")
     */
    private $lastName;

    /**
     * @var string|null
     * @SerializedName("Company")
     * @Type("string")
     */
    private $company;

    /**
     * @var string|null
     * @SerializedName("Gender")
     * @Type("string")
     */
    private $gender;

    /**
     * @var string|null
     * @SerializedName("Street")
     * @Type("string")
     */
    private $street;

    /**
     * @var string|null
     * @SerializedName("Zip")
     * @Type("string")
     */
    private $zip;

    /**
     * @var string|null
     * @SerializedName("City")
     * @Type("string")
     */
    private $city;

    /**
     * @var string|null
     * @SerializedName("CountryCode")
     * @Type("string")
     */
    private $countryCode;

    /**
     * @var string|null
     * @SerializedName("Email")
     * @Type("string")
     */
    private $email;

    /**
     * @var \DateTime|null
     * @SerializedName("DateOfBirth")
     * @Type("string")
     */
    private $dateOfBirth;

    /**
     * @var string|null
     * @SerializedName("LegalForm")
     * @Type("string")
     */
    private $legalForm;

    /**
     * @var string|null
     * @SerializedName("Street2")
     * @Type("string")
     */
    private $street2;

    /**
     * @var string|null
     * @SerializedName("CountrySubdivisionCode")
     * @Type("string")
     */
    private $countrySubdivisionCode;

    /**
     * @var string|null
     * @SerializedName("Phone")
     * @Type("string")
     */
    private $phone;

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

    public function getLegalForm(): ?string
    {
        return $this->legalForm;
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
}
