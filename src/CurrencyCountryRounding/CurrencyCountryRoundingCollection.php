<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\CurrencyCountryRounding;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<CurrencyCountryRoundingEntity>
 */
class CurrencyCountryRoundingCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return CurrencyCountryRoundingEntity::class;
    }
}
