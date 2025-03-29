<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\ProductProperty;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<ProductPropertyEntity>
 */
class ProductPropertyCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return ProductPropertyEntity::class;
    }
}
