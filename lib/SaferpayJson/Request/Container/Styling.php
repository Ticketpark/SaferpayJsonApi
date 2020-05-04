<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

use JMS\Serializer\Annotation\SerializedName;

final class Styling
{
    const THEME_DEFAULT = 'DEFAULT';
    const THEME_SIX = 'SIX';
    const THEME_NONE = 'NONE';

    /**
     * @var string|null
     * @SerializedName("CssUrl")
     */
    private $cssUrl;

    /**
     * @var bool|null
     * @SerializedName("ContentSecurityEnabled")
     */
    private $contentSecurityEnabled;

    /**
     * @var string|null
     * @SerializedName("Theme")
     */
    private $theme;

    public function getCssUrl(): ?string
    {
        return $this->cssUrl;
    }

    /**
     * @deprecated This feature will be removed in one of the next versions of the Saferpay API
     * Consider using payment page config (PPConfig) or Saferpay Fields instead.
     */
    public function setCssUrl(?string $cssUrl): self
    {
        $this->cssUrl = $cssUrl;

        return $this;
    }

    public function isContentSecurityEnabled(): ?bool
    {
        return $this->contentSecurityEnabled;
    }

    public function setContentSecurityEnabled(?bool $contentSecurityEnabled): self
    {
        $this->contentSecurityEnabled = $contentSecurityEnabled;

        return $this;
    }

    public function getTheme(): ?string
    {
        return $this->theme;
    }

    public function setTheme(?string $theme): self
    {
        $this->theme = $theme;

        return $this;
    }
}
