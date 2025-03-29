<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\OrderLineItem;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<OrderLineItemEntity>
 */
class OrderLineItemCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return OrderLineItemEntity::class;
    }
}
