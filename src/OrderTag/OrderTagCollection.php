<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\OrderTag;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<OrderTagEntity>
 */
class OrderTagCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return OrderTagEntity::class;
    }
}
