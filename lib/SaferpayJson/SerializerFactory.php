<?php

declare(strict_types=1);

namespace Ticketpark\SaferpayJson;

use Doctrine\Common\Annotations\AnnotationRegistry;
use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\SerializerInterface;

final class SerializerFactory
{
    private static ?SerializerInterface $serializer = null;

    public static function get(): SerializerInterface
    {
        if (null === self::$serializer) {
            // Support for doctrine/annotations 1.x
            // @phpstan-ignore-next-line
            if (method_exists(AnnotationRegistry::class, 'registerLoader')) {
                // @phpstan-ignore-next-line
                AnnotationRegistry::registerLoader('class_exists');
            }

            self::$serializer = SerializerBuilder::create()->build();
        }

        return self::$serializer;
    }
}
