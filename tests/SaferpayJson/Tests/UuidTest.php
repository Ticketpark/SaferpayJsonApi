<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Tests;

use PHPUnit\Framework\TestCase;
use Ticketpark\SaferpayJson\Uuid;

class UuidTest extends TestCase
{
    public function testV4MatchesUuidFormat(): void
    {
        $uuid = Uuid::v4();

        $this->assertMatchesRegularExpression(
            '/^[0-9a-f]{8}-[0-9a-f]{4}-4[0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$/i',
            $uuid,
        );
    }

    public function testV4GeneratesUniqueValues(): void
    {
        $this->assertNotSame(Uuid::v4(), Uuid::v4());
    }
}
