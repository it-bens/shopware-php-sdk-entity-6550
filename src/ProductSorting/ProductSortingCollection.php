<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\ProductSorting;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<ProductSortingEntity>
 */
class ProductSortingCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return ProductSortingEntity::class;
    }
}
