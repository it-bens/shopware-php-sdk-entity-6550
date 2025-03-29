<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\Category;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<CategoryEntity>
 */
class CategoryCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return CategoryEntity::class;
    }
}
