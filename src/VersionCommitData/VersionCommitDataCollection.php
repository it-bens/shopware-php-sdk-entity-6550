<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\VersionCommitData;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<VersionCommitDataEntity>
 */
class VersionCommitDataCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return VersionCommitDataEntity::class;
    }
}
