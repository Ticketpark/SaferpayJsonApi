<?php
/**
 * Created by PhpStorm.
 * User: thomasm
 * Date: 04.07.2016
 * Time: 15:23
 */

namespace Ticketpark\SaferpayJson\SecureAliasStore;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use Ticketpark\SaferpayJson\Container\Notification;
use Ticketpark\SaferpayJson\Container\RegisterAlias;
use Ticketpark\SaferpayJson\Container\ReturnUrls;
use Ticketpark\SaferpayJson\Message\Request;

class AliasInsertRequest extends Request
{

    /**
     * Possible values: CARD, BANK_ACCOUNT, POSTFINANCE.
     *
     * @var string
     * @SerializedName("Type")
     * @Type("string")
     */
    protected $type=null;

    /**
     * @var \Ticketpark\SaferpayJson\Container\RegisterAlias
     * @SerializedName("RegisterAlias")
     */
    protected $registerAlias=null;

    /**
     * @var \Ticketpark\SaferpayJson\Container\ReturnUrls
     * @SerializedName("ReturnUrls")
     */
    protected $returnUrls;

    /**
     * @var \Ticketpark\SaferpayJson\Container\Notification
     * @SerializedName("Notification")
     */
    protected $notification;

    const API_PATH = '/Payment/v1/Alias/Insert';
    const RESPONSE_CLASS = 'Ticketpark\SaferpayJson\SecureAliasStore\AliasInsertResponse';
    


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
    public function setRegisterAlias($registerAlias)
    {
        $this->registerAlias = $registerAlias;

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


    /**
     * @return \Ticketpark\SaferpayJson\Container\Notification
     */
    public function getNotification()
    {
        return $this->notification;
    }

    /**
     * @param \Ticketpark\SaferpayJson\Container\Notification $notification
     * @return AliasInsertRequest
     */
    public function setNotification(Notification $notification)
    {
        $this->notification = $notification;

        return $this;
    }

}