<?php

namespace Ticketpark\SaferpayJson\Container;

use JMS\Serializer\Annotation\SerializedName;

class Notification
{
    /**
     * @var string
     * @SerializedName("MerchantEmail")
     */
    protected $merchantEmail;

    /**
     * @var string
     * @SerializedName("PayerEmail")
     */
    protected $payerEmail;

    /**
     * @var string
     * @SerializedName("NotifyUrl")
     */
    protected $notifyUrl;

    /**
     * @return string
     */
    public function getMerchantEmail()
    {
        return $this->merchantEmail;
    }

    /**
     * @param string $merchantEmail
     * @return Notification
     */
    public function setMerchantEmail($merchantEmail)
    {
        $this->merchantEmail = $merchantEmail;

        return $this;
    }

    /**
     * @return string
     */
    public function getPayerEmail()
    {
        return $this->payerEmail;
    }

    /**
     * @param string $payerEmail
     * @return Notification
     */
    public function setPayerEmail($payerEmail)
    {
        $this->payerEmail = $payerEmail;

        return $this;
    }

    /**
     * @return string
     */
    public function getNotifyUrl()
    {
        return $this->notifyUrl;
    }

    /**
     * @param string $notifyUrl
     * @return Notification
     */
    public function setNotifyUrl($notifyUrl)
    {
        $this->notifyUrl = $notifyUrl;

        return $this;
    }
}