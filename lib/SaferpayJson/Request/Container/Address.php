<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

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
     */
    private $firstName;

    /**
     * @var string|null
     * @SerializedName("LastName")
     */
    private $lastName;

    /**
     * @var string|null
     * @SerializedName("Company")
     */
    private $company;

    /**
     * @var string|null
     * @SerializedName("Gender")
     */
    private $gender;

    /**
     * @var string|null
     * @SerializedName("Street")
     */
    private $street;

    /**
     * @var string|null
     * @SerializedName("Zip")
     */
    private $zip;

    /**
     * @var string|null
     * @SerializedName("City")
     */
    private $city;

    /**
     * @var string|null
     * @SerializedName("CountryCode")
     */
    private $countryCode;

    /**
     * @var string|null
     * @SerializedName("Email")
     */
    private $email;

    /**
     * @var \DateTime|null
     * @SerializedName("DateOfBirth")
     */
    private $dateOfBirth;

    /**
     * @var string|null
     * @SerializedName("LegalForm")
     */
    private $legalForm;

    /**
     * @var string|null
     * @SerializedName("Street2")
     */
    private $street2;

    /**
     * @var string|null
     * @SerializedName("CountrySubdivisionCode")
     */
    private $countrySubdivisionCode;

    /**
     * @var string|null
     * @SerializedName("Phone")
     */
    private $phone;

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
}
