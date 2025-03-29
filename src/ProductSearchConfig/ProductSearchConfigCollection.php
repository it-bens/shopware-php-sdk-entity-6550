<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\ProductSearchConfig;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<ProductSearchConfigEntity>
 */
class ProductSearchConfigCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return ProductSearchConfigEntity::class;
    }
}
