<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

final class Address
{
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
