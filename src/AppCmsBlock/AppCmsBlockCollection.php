<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\AppCmsBlock;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<AppCmsBlockEntity>
 */
class AppCmsBlockCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return AppCmsBlockEntity::class;
    }
}
