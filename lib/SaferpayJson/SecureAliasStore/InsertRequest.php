<?php

namespace Ticketpark\SaferpayJson\SecureAliasStore;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use Ticketpark\SaferpayJson\Container\Notification;
use Ticketpark\SaferpayJson\Container\RegisterAlias;
use Ticketpark\SaferpayJson\Container\ReturnUrls;
use Ticketpark\SaferpayJson\Message\Request;

class InsertRequest extends Request
{
    const API_PATH = '/Payment/v1/Alias/Insert';

    const RESPONSE_CLASS = 'Ticketpark\SaferpayJson\SecureAliasStore\InsertResponse';

    /**
     * @var \Ticketpark\SaferpayJson\Container\RegisterAlias
     * @SerializedName("RegisterAlias")
     */
    protected $registerAlias;

    /**
     * @var string
     * @SerializedName("Type")
     * @Type("string")
     */
    protected $type;

    /**
     * @var \Ticketpark\SaferpayJson\Container\ReturnUrls
     * @SerializedName("ReturnUrls")
     */
    protected $returnUrls;

    /**
     * @var \Ticketpark\SaferpayJson\Container\Styling
     * @SerializedName("Styling")
     */
    protected $styling;

    /**
     * @var string
     * @SerializedName("LanguageCode")
     * @Type("string")
     */
    protected $languageCode;

    /**
     * @var \Ticketpark\SaferpayJson\Container\Check
     * @SerializedName("Check")
     */
    protected $check;

    /**
     * @return string
     */
    public function getRegisterAlias()
    {
        return $this->registerAlias;
    }

    /**
     * @param string $registerAlias
     * @return AliasInsertRequest
     */
    public function setRegisterAlias(RegisterAlias $registerAlias)
    {
        $this->registerAlias = $registerAlias;

        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return AliasInsertRequest
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return \Ticketpark\SaferpayJson\Container\ReturnUrls
     */
    public function getReturnUrls()
    {
        return $this->returnUrls;
    }

    /**
     * @param \Ticketpark\SaferpayJson\Container\ReturnUrls $returnUrls
     * @return AliasInsertRequest
     */
    public function setReturnUrls(ReturnUrls $returnUrls)
    {
        $this->returnUrls = $returnUrls;

        return $this;
    }
}