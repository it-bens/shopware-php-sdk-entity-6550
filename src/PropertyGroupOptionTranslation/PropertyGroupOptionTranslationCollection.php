<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\PropertyGroupOptionTranslation;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<PropertyGroupOptionTranslationEntity>
 */
class PropertyGroupOptionTranslationCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return PropertyGroupOptionTranslationEntity::class;
    }
}
