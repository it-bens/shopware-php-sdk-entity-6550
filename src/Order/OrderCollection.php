<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\Order;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<OrderEntity>
 */
class OrderCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return OrderEntity::class;
    }
}
