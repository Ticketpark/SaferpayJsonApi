<?php

namespace Ticketpark\SaferpayJson\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class BankAccount
{
    /**
     * @var string
     * @SerializedName("Iban")
     * @Type("string")
     */
    protected $iban;

    /**
     * @var string
     * @SerializedName("HolderName")
     * @Type("string")
     */
    protected $holderName;

    /**
     * @var string
     * @SerializedName("BIC")
     * @Type("string")
     */
    protected $bic;

    /**
     * @var string
     * @SerializedName("BankName")
     * @Type("string")
     */
    protected $bankName;

    /**
     * @var string
     * @SerializedName("CountryCode")
     * @Type("string")
     */
    protected $countryCode;

    /**
     * @return string
     */
    public function getIban()
    {
        return $this->iban;
    }

    /**
     * @param string $iban
     * @return BankAccount
     */
    public function setIban($iban)
    {
        $this->iban = $iban;
        return $this;
    }

    /**
     * @return string
     */
    public function getHolderName()
    {
        return $this->holderName;
    }

    /**
     * @param string $holderName
     * @return BankAccount
     */
    public function setHolderName($holderName)
    {
        $this->holderName = $holderName;

        return $this;
    }

    /**
     * @return string
     */
    public function getBic()
    {
        return $this->bic;
    }

    /**
     * @param string $bic
     * @return BankAccount
     */
    public function setBic($bic)
    {
        $this->bic = $bic;

        return $this;
    }

    /**
     * @return string
     */
    public function getBankName()
    {
        return $this->bankName;
    }

    /**
     * @param string $bankName
     * @return BankAccount
     */
    public function setBankName($bankName)
    {
        $this->bankName = $bankName;

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
     * @return BankAccount
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;

        return $this;
    }
}