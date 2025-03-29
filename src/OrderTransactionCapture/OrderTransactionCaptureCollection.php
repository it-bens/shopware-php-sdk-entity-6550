<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\OrderTransactionCapture;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<OrderTransactionCaptureEntity>
 */
class OrderTransactionCaptureCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return OrderTransactionCaptureEntity::class;
    }
}
