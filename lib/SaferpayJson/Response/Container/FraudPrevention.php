<?php
/**
 * @copyright Copyright (c) 2022 Biceps
 */

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