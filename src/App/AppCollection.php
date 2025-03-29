<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\App;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<AppEntity>
 */
class AppCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return AppEntity::class;
    }
}
