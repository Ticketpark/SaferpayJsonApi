<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

use JMS\Serializer\Annotation\SerializedName;
use Ticketpark\SaferpayJson\Enum\StylingTheme;

final class Styling
{
    #[SerializedName('CssUrl')]
    private ?string $cssUrl = null;

    #[SerializedName('ContentSecurityEnabled')]
    private ?bool $contentSecurityEnabled = null;

    #[SerializedName('Theme')]
    private ?StylingTheme $theme = null;

    public function getCssUrl(): ?string
    {
        return $this->cssUrl;
    }

    /**
     * @deprecated this feature will be removed in one of the next versions of the Saferpay API
     * Consider using payment page config (PPConfig) or Saferpay Fields instead
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

    public function getTheme(): ?StylingTheme
    {
        return $this->theme;
    }

    public function setTheme(?StylingTheme $theme): self
    {
        $this->theme = $theme;

        return $this;
    }
}
