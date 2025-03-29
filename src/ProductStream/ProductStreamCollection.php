<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\ProductStream;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<ProductStreamEntity>
 */
class ProductStreamCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return ProductStreamEntity::class;
    }
}
