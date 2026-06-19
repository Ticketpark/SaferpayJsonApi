<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\TypeDeclaration\Rector\Property\TypedPropertyFromAssignsRector;
use Rector\ValueObject\PhpVersion;

return RectorConfig::configure()
    ->withPaths([
        __DIR__ . '/lib',
        __DIR__ . '/tests',
    ])
    ->withPhpVersion(PhpVersion::PHP_83)
    ->withImportNames(importShortClasses: false, removeUnusedImports: true)
    ->withPreparedSets(typeDeclarations: true)
    ->withRules([
        TypedPropertyFromAssignsRector::class,
    ]);
