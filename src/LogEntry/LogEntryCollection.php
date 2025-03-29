<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\LogEntry;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<LogEntryEntity>
 */
class LogEntryCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return LogEntryEntity::class;
    }
}
