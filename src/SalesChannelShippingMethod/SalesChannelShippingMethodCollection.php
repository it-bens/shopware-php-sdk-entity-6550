<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\SalesChannelShippingMethod;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<SalesChannelShippingMethodEntity>
 */
class SalesChannelShippingMethodCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return SalesChannelShippingMethodEntity::class;
    }
}
