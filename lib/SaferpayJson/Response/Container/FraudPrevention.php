<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response\Container;

use JMS\Serializer\Annotation\SerializedName;

final class FraudPrevention
{
    const APPROVED = 'APPROVED';
    const MANUAL_REVIEW = 'MANUAL_REVIEW';

    /**
     * @var string|null
     * @SerializedName("Result")
     */
    private $result;

    /**
     * @return string|null
     */
    public function getResult(): ?string
    {
        return $this->result;
    }
}
