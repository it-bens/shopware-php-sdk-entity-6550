<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\OrderAddress;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<OrderAddressEntity>
 */
class OrderAddressCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return OrderAddressEntity::class;
    }
}
