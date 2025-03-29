<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\ShippingMethodTag;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<ShippingMethodTagEntity>
 */
class ShippingMethodTagCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return ShippingMethodTagEntity::class;
    }
}
