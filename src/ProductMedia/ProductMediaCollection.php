<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\ProductMedia;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<ProductMediaEntity>
 */
class ProductMediaCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return ProductMediaEntity::class;
    }
}
