<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

final class PayerProfile
{
    /**
     * @var bool|null
     * @SerializedName("HasAccount")
     */
    private $hasAccount;

    /**
     * @var bool|null
     * @SerializedName("HasPassword")
     */
    private $hasPassword;

    /**
     * @var bool|null
     * @SerializedName("PasswordForgotten")
     */
    private $passwordForgotten;

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
     * @SerializedName("DateOfBirth")
     */
    private $dateOfBirth;

    /**
     * @var \DateTime|null
     * @SerializedName("LastLoginDate")
     * @Type("DateTime<'Y-m-d\TH:i:s.uT'>")
     */
    private $lastLoginDate;

    /**
     * @var string|null
     * @SerializedName("Gender")
     */
    private $gender;

    /**
     * @var \DateTime|null
     * @SerializedName("CreationDate")
     * @Type("DateTime<'Y-m-d\TH:i:s.uT'>")
     */
    private $creationDate;

    /**
     * @var \DateTime|null
     * @SerializedName("PasswordLastChangeDate")
     * @Type("DateTime<'Y-m-d\TH:i:s.uT'>")
     */
    private $passwordLastChangeDate;

    /**
     * @var string|null
     * @SerializedName("Email")
     */
    private $email;

    /**
     * @var string|null
     * @SerializedName("SecondaryEmail")
     */
    private $secondaryEmail;

    /**
     * @var Phone|null
     * @SerializedName("Phone")
     */
    private $phone;

    /**
     * @return bool|null
     */
    public function getHasAccount(): ?bool
    {
        return $this->hasAccount;
    }

    /**
     * @param bool|null $hasAccount
     * @return PayerProfile
     */
    public function setHasAccount(?bool $hasAccount): self
    {
        $this->hasAccount = $hasAccount;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getHasPassword(): ?bool
    {
        return $this->hasPassword;
    }

    /**
     * @param bool|null $hasPassword
     * @return PayerProfile
     */
    public function setHasPassword(?bool $hasPassword): self
    {
        $this->hasPassword = $hasPassword;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getPasswordForgotten(): ?bool
    {
        return $this->passwordForgotten;
    }

    /**
     * @param bool|null $passwordForgotten
     * @return PayerProfile
     */
    public function setPasswordForgotten(?bool $passwordForgotten): self
    {
        $this->passwordForgotten = $passwordForgotten;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    /**
     * @param string|null $firstName
     * @return PayerProfile
     */
    public function setFirstName(?string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    /**
     * @param string|null $lastName
     * @return PayerProfile
     */
    public function setLastName(?string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCompany(): ?string
    {
        return $this->company;
    }

    /**
     * @param string|null $company
     * @return PayerProfile
     */
    public function setCompany(?string $company): self
    {
        $this->company = $company;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDateOfBirth(): ?string
    {
        return $this->dateOfBirth;
    }

    /**
     * @param string|null $dateOfBirth
     * @return PayerProfile
     */
    public function setDateOfBirth(?string $dateOfBirth): self
    {
        $this->dateOfBirth = $dateOfBirth;

        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getLastLoginDate(): ?\DateTime
    {
        return $this->lastLoginDate;
    }

    /**
     * @param \DateTime|null $lastLoginDate
     * @return PayerProfile
     */
    public function setLastLoginDate(?\DateTime $lastLoginDate): self
    {
        $this->lastLoginDate = $lastLoginDate;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getGender(): ?string
    {
        return $this->gender;
    }

    /**
     * @param string|null $gender
     * @return PayerProfile
     */
    public function setGender(?string $gender): self
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getCreationDate(): ?\DateTime
    {
        return $this->creationDate;
    }

    /**
     * @param \DateTime|null $creationDate
     * @return PayerProfile
     */
    public function setCreationDate(?\DateTime $creationDate): self
    {
        $this->creationDate = $creationDate;

        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getPasswordLastChangeDate(): ?\DateTime
    {
        return $this->passwordLastChangeDate;
    }

    /**
     * @param \DateTime|null $passwordLastChangeDate
     * @return PayerProfile
     */
    public function setPasswordLastChangeDate(?\DateTime $passwordLastChangeDate): self
    {
        $this->passwordLastChangeDate = $passwordLastChangeDate;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param string|null $email
     * @return PayerProfile
     */
    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getSecondaryEmail(): ?string
    {
        return $this->secondaryEmail;
    }

    /**
     * @param string|null $secondaryEmail
     * @return PayerProfile
     */
    public function setSecondaryEmail(?string $secondaryEmail): self
    {
        $this->secondaryEmail = $secondaryEmail;

        return $this;
    }

    /**
     * @return Phone|null
     */
    public function getPhone(): ?Phone
    {
        return $this->phone;
    }

    /**
     * @param Phone|null $phone
     * @return PayerProfile
     */
    public function setPhone(?Phone $phone): self
    {
        $this->phone = $phone;

        return $this;
    }
}
