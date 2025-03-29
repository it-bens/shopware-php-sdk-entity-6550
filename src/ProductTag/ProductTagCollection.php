<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\ProductTag;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<ProductTagEntity>
 */
class ProductTagCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return ProductTagEntity::class;
    }
}
