<?php

namespace Ticketpark\SaferpayJson\PaymentPage;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use Ticketpark\SaferpayJson\Response\Response;

class InitalizeResponse extends Response
{
    /**
     * @var string
     * @SerializedName("Transaction")
     * @Type("string")
     */
    protected $transaction;

    /**
     * @var \DateTime
     * @SerializedName("PaymentMeans")
     * @Type("string")
     */
    protected $paymentMeans;

    /**
     * @var string
     * @SerializedName("Payer")
     * @Type("string")
     */
    protected $payer;

    /**
     * @var string
     * @SerializedName("RegistrationResult")
     * @Type("string")
     */
    protected $registrationResult;

    /**
     * @var string
     * @SerializedName("ThreeDs")
     * @Type("string")
     */
    protected $threeDs;

    /**
     * @var string
     * @SerializedName("DCC")
     * @Type("string")
     */
    protected $dcc;
}