<?php
/**
 * Created by PhpStorm.
 * User: thomasm
 * Date: 04.07.2016
 * Time: 16:38
 */

namespace Ticketpark\SaferpayJson\SecureAliasStore;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use Ticketpark\SaferpayJson\PaymentPage\AssertResponse;

class AssertInsertResponse extends AssertResponse
{
    /**
     * @var \Ticketpark\SaferpayJson\Container\Alias
     * @SerializedName("Alias")
     * @Type("Ticketpark\SaferpayJson\Container\Alias")
     */
    protected $alias=null;



    /**
     * @return \Ticketpark\SaferpayJson\Container\Alias
     */
    public function getAlias()
    {
        return $this->alias;
    }

    public function setAlias($alias)
    {
        $this->alias = $alias;
    }
}