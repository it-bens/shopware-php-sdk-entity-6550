<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\OrderCustomer;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<OrderCustomerEntity>
 */
class OrderCustomerCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return OrderCustomerEntity::class;
    }
}
