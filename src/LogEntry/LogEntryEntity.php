<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\LogEntry;

use ITB\ShopwareSdkDataCore\Entity\Entity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class LogEntryEntity extends Entity
{
    public ?string $channel = null;

    public ?array $context = null;

    public ?array $extra = null;

    public ?int $level = null;

    public ?string $message = null;
}
