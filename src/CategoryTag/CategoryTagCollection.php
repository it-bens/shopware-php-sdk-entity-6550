<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\CategoryTag;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<CategoryTagEntity>
 */
class CategoryTagCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return CategoryTagEntity::class;
    }
}
