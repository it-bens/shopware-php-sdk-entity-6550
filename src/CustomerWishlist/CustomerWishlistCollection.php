<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\CustomerWishlist;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<CustomerWishlistEntity>
 */
class CustomerWishlistCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return CustomerWishlistEntity::class;
    }
}
