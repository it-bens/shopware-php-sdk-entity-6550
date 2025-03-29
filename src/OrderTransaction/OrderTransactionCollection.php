<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\OrderTransaction;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<OrderTransactionEntity>
 */
class OrderTransactionCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return OrderTransactionEntity::class;
    }
}
