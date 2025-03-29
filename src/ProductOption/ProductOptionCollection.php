<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\ProductOption;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<ProductOptionEntity>
 */
class ProductOptionCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return ProductOptionEntity::class;
    }
}
