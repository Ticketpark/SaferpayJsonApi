<?php

namespace Ticketpark\SaferpayJson\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use Ticketpark\SaferpayJson\Container\Alias;
use Ticketpark\SaferpayJson\Container\Error;

class RegistrationResult
{
    /**
     * @var bool
     * @SerializedName("Success")
     * @Type("boolean")
     */
    protected $success;

    /**
     * @var Ticketpark\SaferpayJson\Container\Alias
     * @SerializedName("Alias")
     * @Type("Ticketpark\SaferpayJson\Container\Alias")
     */
    protected $alias;

    /**
     * @var Ticketpark\SaferpayJson\Container\Error
     * @SerializedName("Error")
     * @Type("Ticketpark\SaferpayJson\Container\Error")
     */
    protected $error;

    /**
     * @return boolean
     */
    public function isSuccess()
    {
        return $this->success;
    }

    /**
     * @param boolean $success
     * @return RegistrationResult
     */
    public function setSuccess($success)
    {
        $this->success = $success;
        return $this;
    }

    /**
     * @return Ticketpark\SaferpayJson\Container\Alias
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * @param Ticketpark\SaferpayJson\Container\Alias $alias
     * @return RegistrationResult
     */
    public function setAlias(Alias $alias)
    {
        $this->alias = $alias;

        return $this;
    }

    /**
     * @return Ticketpark\SaferpayJson\Container\Error
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * @param Ticketpark\SaferpayJson\Container\Error $error
     * @return RegistrationResult
     */
    public function setError(Error $error)
    {
        $this->error = $error;

        return $this;
    }
}