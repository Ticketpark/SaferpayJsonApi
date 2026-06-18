<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

use JMS\Serializer\Annotation\SerializedName;
use Ticketpark\SaferpayJson\Enum\AddressFormMandatoryField;
use Ticketpark\SaferpayJson\Enum\AddressSource;

final class AddressForm
{
    /** @var list<AddressFormMandatoryField>|null */
    #[SerializedName('MandatoryFields')]
    private ?array $mandatoryFields = [];

    public function __construct(
        #[SerializedName('AddressSource')]
        private readonly AddressSource $addressSource,
    ) {
    }

    public function getAddressSource(): AddressSource
    {
        return $this->addressSource;
    }

    /** @return list<AddressFormMandatoryField>|null */
    public function getMandatoryFields(): ?array
    {
        return $this->mandatoryFields;
    }

    /** @param list<AddressFormMandatoryField>|null $mandatoryFields */
    public function setMandatoryFields(?array $mandatoryFields): self
    {
        $this->mandatoryFields = $mandatoryFields;

        return $this;
    }
}
