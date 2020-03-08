<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class Address
{
    /**
     * @var string
     * @SerializedName("FirstName")
     * @Type("string")
     */
    protected $firstName;

    /**
     * @var string
     * @SerializedName("LastName")
     * @Type("string")
     */
    protected $lastName;

    /**
     * @var \DateTime
     * @SerializedName("DateOfBirth")
     * @Type("string")
     */
    protected $dateOfBirth;

    /**
     * @var string
     * @SerializedName("Company")
     * @Type("string")
     */
    protected $company;

    /**
     * @var string
     * @SerializedName("Gender")
     * @Type("string")
     */
    protected $gender;

    /**
     * @var string
     * @SerializedName("LegalForm")
     * @Type("string")
     */
    protected $legalForm;

    /**
     * @var string
     * @SerializedName("Street")
     * @Type("string")
     */
    protected $street;

    /**
     * @var string
     * @SerializedName("Street2")
     * @Type("string")
     */
    protected $street2;

    /**
     * @var string
     * @SerializedName("Zip")
     * @Type("string")
     */
    protected $zip;

    /**
     * @var string
     * @SerializedName("City")
     * @Type("string")
     */
    protected $city;

    /**
     * @var string
     * @SerializedName("CountrySubdivisionCode")
     * @Type("string")
     */
    protected $countrySubdivisionCode;

    /**
     * @var string
     * @SerializedName("CountryCode")
     * @Type("string")
     */
    protected $countryCode;

    /**
     * @var string
     * @SerializedName("Phone")
     * @Type("string")
     */
    protected $phone;

    /**
     * @var string
     * @SerializedName("Email")
     * @Type("string")
     */
    protected $email;

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getDateOfBirth(): \DateTime
    {
        return $this->dateOfBirth;
    }

    public function setDateOfBirth(\DateTime $dateOfBirth): self
    {
        $this->dateOfBirth = $dateOfBirth;

        return $this;
    }

    public function getCompany(): string
    {
        return $this->company;
    }

    public function setCompany(string $company): self
    {
        $this->company = $company;

        return $this;
    }

    public function getGender(): string
    {
        return $this->gender;
    }

    public function setGender(string $gender): self
    {
        $this->gender = $gender;

        return $this;
    }

    public function getLegalForm(): string
    {
        return $this->legalForm;
    }

    public function setLegalForm(string $legalForm): self
    {
        $this->legalForm = $legalForm;

        return $this;
    }

    public function getStreet(): string
    {
        return $this->street;
    }

    public function setStreet(string $street): self
    {
        $this->street = $street;

        return $this;
    }

    public function getStreet2(): string
    {
        return $this->street2;
    }

    public function setStreet2(string $street2): self
    {
        $this->street2 = $street2;

        return $this;
    }

    public function getZip(): string
    {
        return $this->zip;
    }

    public function setZip(string $zip): self
    {
        $this->zip = $zip;

        return $this;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getCountrySubdivisionCode(): string
    {
        return $this->countrySubdivisionCode;
    }

    public function setCountrySubdivisionCode(string $countrySubdivisionCode): self
    {
        $this->countrySubdivisionCode = $countrySubdivisionCode;

        return $this;
    }

    public function getCountryCode(): string
    {
        return $this->countryCode;
    }

    public function setCountryCode(string $countryCode): self
    {
        $this->countryCode = $countryCode;

        return $this;
    }

    public function getPhone(): string
    {
        return $this->phone;
    }

    public function setPhone(string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }
}
