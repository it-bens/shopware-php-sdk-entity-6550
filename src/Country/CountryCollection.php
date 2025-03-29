<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\Country;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<CountryEntity>
 */
class CountryCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return CountryEntity::class;
    }
}
