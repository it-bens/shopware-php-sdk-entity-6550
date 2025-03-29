<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\ProductPrice;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<ProductPriceEntity>
 */
class ProductPriceCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return ProductPriceEntity::class;
    }
}
