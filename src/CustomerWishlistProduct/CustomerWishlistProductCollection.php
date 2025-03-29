<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\CustomerWishlistProduct;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<CustomerWishlistProductEntity>
 */
class CustomerWishlistProductCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return CustomerWishlistProductEntity::class;
    }
}
