<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\Version;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<VersionEntity>
 */
class VersionCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return VersionEntity::class;
    }
}
