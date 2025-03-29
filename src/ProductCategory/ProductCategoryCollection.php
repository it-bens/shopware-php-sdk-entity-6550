<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\ProductCategory;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<ProductCategoryEntity>
 */
class ProductCategoryCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return ProductCategoryEntity::class;
    }
}
