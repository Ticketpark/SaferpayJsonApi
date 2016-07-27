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

class InsertRequest extends Request
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
    const RESPONSE_CLASS = 'Ticketpark\SaferpayJson\SecureAliasStore\InsertResponse';
    


    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return InsertRequest
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
     * @return InsertRequest
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
     * @return InsertRequest
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
     * @return InsertRequest
     */
    public function setNotification(Notification $notification)
    {
        $this->notification = $notification;

        return $this;
    }

}