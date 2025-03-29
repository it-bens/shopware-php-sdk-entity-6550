<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\ProductVisibility;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<ProductVisibilityEntity>
 */
class ProductVisibilityCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return ProductVisibilityEntity::class;
    }
}
