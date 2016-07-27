<?php

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

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     * @return Address
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     * @return Address
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateOfBirth()
    {
        return $this->dateOfBirth;
    }

    /**
     * @param \DateTime $dateOfBirth
     * @return Address
     */
    public function setDateOfBirth($dateOfBirth)
    {
        $this->dateOfBirth = $dateOfBirth;

        return $this;
    }

    /**
     * @return string
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @param string $company
     * @return Address
     */
    public function setCompany($company)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param string $gender
     * @return Address
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * @return string
     */
    public function getLegalForm()
    {
        return $this->legalForm;
    }

    /**
     * @param string $legalForm
     * @return Address
     */
    public function setLegalForm($legalForm)
    {
        $this->legalForm = $legalForm;

        return $this;
    }

    /**
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * @param string $street
     * @return Address
     */
    public function setStreet($street)
    {
        $this->street = $street;

        return $this;
    }

    /**
     * @return string
     */
    public function getStreet2()
    {
        return $this->street2;
    }

    /**
     * @param string $street2
     * @return Address
     */
    public function setStreet2($street2)
    {
        $this->street2 = $street2;

        return $this;
    }

    /**
     * @return string
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * @param string $zip
     * @return Address
     */
    public function setZip($zip)
    {
        $this->zip = $zip;

        return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     * @return Address
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * @return string
     */
    public function getCountrySubdivisionCode()
    {
        return $this->countrySubdivisionCode;
    }

    /**
     * @param string $countrySubdivisionCode
     * @return Address
     */
    public function setCountrySubdivisionCode($countrySubdivisionCode)
    {
        $this->countrySubdivisionCode = $countrySubdivisionCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * @param string $countryCode
     * @return Address
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     * @return Address
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return Address
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }
}