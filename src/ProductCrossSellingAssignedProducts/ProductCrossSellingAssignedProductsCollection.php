<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\ProductCrossSellingAssignedProducts;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<ProductCrossSellingAssignedProductsEntity>
 */
class ProductCrossSellingAssignedProductsCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return ProductCrossSellingAssignedProductsEntity::class;
    }
}
