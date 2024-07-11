<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

final class PayerProfile
{
    public const GENDER_MALE = "MALE";
    public const GENDER_FEMALE = "FEMALE";
    public const GENDER_DIVERSE = "DIVERSE";
    public const GENDER_COMPANY = "COMPANY";

    /**
     * @SerializedName("HasAccount")
     */
    private ?bool $hasAccount = null;

    /**
     * @SerializedName("HasPassword")
     */
    private ?bool $hasPassword = null;

    /**
     * @SerializedName("PasswordForgotten")
     */
    private ?bool $passwordForgotten = null;

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
     * @SerializedName("DateOfBirth")
     */
    private ?string $dateOfBirth = null;

    /**
     * @SerializedName("LastLoginDate")
     * @Type("DateTime<'Y-m-d\TH:i:s.uT'>")
     */
    private ?\DateTime $lastLoginDate = null;

    /**
     * @SerializedName("Gender")
     */
    private ?string $gender = null;

    /**
     * @SerializedName("CreationDate")
     * @Type("DateTime<'Y-m-d\TH:i:s.uT'>")
     */
    private ?\DateTime $creationDate = null;

    /**
     * @SerializedName("PasswordLastChangeDate")
     * @Type("DateTime<'Y-m-d\TH:i:s.uT'>")
     */
    private ?\DateTime $passwordLastChangeDate = null;

    /**
     * @SerializedName("Email")
     */
    private ?string $email = null;

    /**
     * @SerializedName("SecondaryEmail")
     */
    private ?string $secondaryEmail = null;

    /**
     * @SerializedName("Phone")
     */
    private ?Phone $phone = null;

    public function getHasAccount(): ?bool
    {
        return $this->hasAccount;
    }

    public function setHasAccount(?bool $hasAccount): self
    {
        $this->hasAccount = $hasAccount;

        return $this;
    }

    public function getHasPassword(): ?bool
    {
        return $this->hasPassword;
    }

    public function setHasPassword(?bool $hasPassword): self
    {
        $this->hasPassword = $hasPassword;

        return $this;
    }

    public function getPasswordForgotten(): ?bool
    {
        return $this->passwordForgotten;
    }

    public function setPasswordForgotten(?bool $passwordForgotten): self
    {
        $this->passwordForgotten = $passwordForgotten;

        return $this;
    }

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

    public function getDateOfBirth(): ?string
    {
        return $this->dateOfBirth;
    }

    public function setDateOfBirth(?string $dateOfBirth): self
    {
        $this->dateOfBirth = $dateOfBirth;

        return $this;
    }

    public function getLastLoginDate(): ?\DateTime
    {
        return $this->lastLoginDate;
    }

    public function setLastLoginDate(?\DateTime $lastLoginDate): self
    {
        $this->lastLoginDate = $lastLoginDate;

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

    public function getCreationDate(): ?\DateTime
    {
        return $this->creationDate;
    }

    public function setCreationDate(?\DateTime $creationDate): self
    {
        $this->creationDate = $creationDate;

        return $this;
    }

    public function getPasswordLastChangeDate(): ?\DateTime
    {
        return $this->passwordLastChangeDate;
    }

    public function setPasswordLastChangeDate(?\DateTime $passwordLastChangeDate): self
    {
        $this->passwordLastChangeDate = $passwordLastChangeDate;

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

    public function getSecondaryEmail(): ?string
    {
        return $this->secondaryEmail;
    }

    public function setSecondaryEmail(?string $secondaryEmail): self
    {
        $this->secondaryEmail = $secondaryEmail;

        return $this;
    }

    public function getPhone(): ?Phone
    {
        return $this->phone;
    }

    public function setPhone(?Phone $phone): self
    {
        $this->phone = $phone;

        return $this;
    }
}
