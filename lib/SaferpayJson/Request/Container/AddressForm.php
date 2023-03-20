<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

final class AddressForm
{
    public const MANDATORY_FIELD_CITY = 'CITY';
    public const MANDATORY_FIELD_COMPANY = 'COMPANY';
    public const MANDATORY_FIELD_COUNTRY = 'COUNTRY';
    public const MANDATORY_FIELD_EMAIL = 'EMAIL';
    public const MANDATORY_FIELD_FIRSTNAME = 'FIRSTNAME';
    public const MANDATORY_FIELD_LASTNAME = 'LASTNAME';
    public const MANDATORY_FIELD_PHONE = 'PHONE';
    public const MANDATORY_FIELD_SALUTATION = 'SALUTATION';
    public const MANDATORY_FIELD_STATE = 'STATE';
    public const MANDATORY_FIELD_STREET = 'STREET';
    public const MANDATORY_FIELD_ZIP = 'ZIP';

    /**
     * @var bool
     * @SerializedName("Display")
     */
    private $display;

    /**
     * @var array<string>|null
     * @SerializedName("MandatoryFields")
     */
    private $mandatoryFields = [];

    public function __construct(bool $display)
    {
        $this->display = $display;
    }

    public function isDisplay(): bool
    {
        return $this->display;
    }

    public function getMandatoryFields(): ?array
    {
        return $this->mandatoryFields;
    }

    public function setMandatoryFields(?array $mandatoryFields): self
    {
        $this->mandatoryFields = $mandatoryFields;

        return $this;
    }
}
