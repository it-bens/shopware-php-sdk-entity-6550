<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\Currency;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<CurrencyEntity>
 */
class CurrencyCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return CurrencyEntity::class;
    }
}
