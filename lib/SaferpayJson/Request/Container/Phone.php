<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

use JMS\Serializer\Annotation\SerializedName;

final class Phone
{
    /**
     * @var string|null
     * @SerializedName("Main")
     */
    private $main;

    /**
     * @var string|null
     * @SerializedName("Mobile")
     */
    private $mobile;

    /**
     * @var string|null
     * @SerializedName("Work")
     */
    private $work;

    public function getMain(): ?string
    {
        return $this->main;
    }

    public function setMain(?string $main): self
    {
        $this->main = $main;

        return $this;
    }

    public function getMobile(): ?string
    {
        return $this->mobile;
    }

    public function setMobile(?string $mobile): self
    {
        $this->mobile = $mobile;

        return $this;
    }

    public function getWork(): ?string
    {
        return $this->work;
    }

    public function setWork(?string $work): self
    {
        $this->work = $work;

        return $this;
    }
}
