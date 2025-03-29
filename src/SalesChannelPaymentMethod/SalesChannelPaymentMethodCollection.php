<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\SalesChannelPaymentMethod;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<SalesChannelPaymentMethodEntity>
 */
class SalesChannelPaymentMethodCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return SalesChannelPaymentMethodEntity::class;
    }
}
