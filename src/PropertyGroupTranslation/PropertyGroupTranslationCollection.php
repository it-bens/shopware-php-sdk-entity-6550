<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\PropertyGroupTranslation;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<PropertyGroupTranslationEntity>
 */
class PropertyGroupTranslationCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return PropertyGroupTranslationEntity::class;
    }
}
