<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\DeliveryTime;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<DeliveryTimeEntity>
 */
class DeliveryTimeCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return DeliveryTimeEntity::class;
    }
}
