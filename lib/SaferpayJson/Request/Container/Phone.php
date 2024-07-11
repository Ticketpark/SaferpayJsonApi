<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

use JMS\Serializer\Annotation\SerializedName;

final class Phone
{
    /**
     * @SerializedName("Main")
     */
    private ?string $main = null;

    /**
     * @SerializedName("Mobile")
     */
    private ?string $mobile = null;

    /**
     * @SerializedName("Work")
     */
    private ?string $work = null;

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
