<?php
/**
 * @copyright Copyright (c) 2022 Biceps
 */

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

    /**
     * @return string|null
     */
    public function getMain(): ?string
    {
        return $this->main;
    }

    /**
     * @param string|null $main
     * @return Phone
     */
    public function setMain(?string $main): self
    {
        $this->main = $main;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getMobile(): ?string
    {
        return $this->mobile;
    }

    /**
     * @param string|null $mobile
     * @return Phone
     */
    public function setMobile(?string $mobile): self
    {
        $this->mobile = $mobile;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getWork(): ?string
    {
        return $this->work;
    }

    /**
     * @param string|null $work
     * @return Phone
     */
    public function setWork(?string $work): self
    {
        $this->work = $work;

        return $this;
    }
}