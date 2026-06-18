<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

use JMS\Serializer\Annotation\SerializedName;

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

    public const ADDRESS_SOURCE_NONE = 'NONE';
    public const ADDRESS_SOURCE_SAFERPAY = 'SAFERPAY';
    public const ADDRESS_SOURCE_PREFER_PAYMENTMETHOD = 'PREFER_PAYMENTMETHOD';

    /** @var list<string>|null */
    #[SerializedName('MandatoryFields')]
    private ?array $mandatoryFields = [];

    public function __construct(
        #[SerializedName('AddressSource')]
        private readonly string $addressSource,
    ) {
    }

    public function getAddressSource(): string
    {
        return $this->addressSource;
    }

    /** @return list<string>|null */
    public function getMandatoryFields(): ?array
    {
        return $this->mandatoryFields;
    }

    /** @param list<string>|null $mandatoryFields */
    public function setMandatoryFields(?array $mandatoryFields): self
    {
        $this->mandatoryFields = $mandatoryFields;

        return $this;
    }
}
