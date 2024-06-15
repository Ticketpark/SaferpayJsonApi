<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response\Container;

use JMS\Serializer\Annotation\SerializedName;

final class RegistrationResult
{
    /**
     * @SerializedName("Success")
     */
    private ?bool $success = null;

    /**
     * @SerializedName("Alias")
     */
    private ?Alias $alias = null;

    /**
     * @SerializedName("Error")
     */
    private ?Error $error = null;

    /**
     * @SerializedName("AuthenticationResult")
     */
    private ?AuthenticationResult $authenticationResult = null;

    public function isSuccess(): ?bool
    {
        return $this->success;
    }

    public function getAlias(): ?Alias
    {
        return $this->alias;
    }

    public function getError(): ?Error
    {
        return $this->error;
    }

    public function getAuthenticationResult(): ?AuthenticationResult
    {
        return $this->authenticationResult;
    }
}
