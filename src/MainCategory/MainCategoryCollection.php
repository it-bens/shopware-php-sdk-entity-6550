<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\MainCategory;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<MainCategoryEntity>
 */
class MainCategoryCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return MainCategoryEntity::class;
    }
}
