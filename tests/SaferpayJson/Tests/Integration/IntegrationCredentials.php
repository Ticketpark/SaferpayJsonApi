<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Tests\Integration;

final readonly class IntegrationCredentials
{
    public function __construct(
        public string $apiKey,
        public string $apiSecret,
        public string $customerId,
        public string $terminalId,
    ) {
    }

    public static function tryLoad(): ?self
    {
        $path = dirname(__DIR__, 4).'/example/credentials.php';

        if (!is_file($path)) {
            return null;
        }

        $apiKey = '';
        $apiSecret = '';
        $customerId = '';
        $terminalId = '';

        require $path;

        if ('' === $apiKey || '' === $apiSecret || '' === $customerId || '' === $terminalId) {
            return null;
        }

        return new self($apiKey, $apiSecret, $customerId, $terminalId);
    }
}
