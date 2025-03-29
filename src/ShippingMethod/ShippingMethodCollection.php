<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\ShippingMethod;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<ShippingMethodEntity>
 */
class ShippingMethodCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return ShippingMethodEntity::class;
    }
}
