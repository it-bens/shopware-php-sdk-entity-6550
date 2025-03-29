<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\CountryTranslation;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<CountryTranslationEntity>
 */
class CountryTranslationCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return CountryTranslationEntity::class;
    }
}
