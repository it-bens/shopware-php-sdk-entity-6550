<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\SalesChannelCurrency;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<SalesChannelCurrencyEntity>
 */
class SalesChannelCurrencyCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return SalesChannelCurrencyEntity::class;
    }
}
