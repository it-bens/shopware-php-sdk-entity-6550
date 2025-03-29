<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\VersionCommit;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<VersionCommitEntity>
 */
class VersionCommitCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return VersionCommitEntity::class;
    }
}
