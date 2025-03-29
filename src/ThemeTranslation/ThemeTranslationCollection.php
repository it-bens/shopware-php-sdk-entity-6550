<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\ThemeTranslation;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<ThemeTranslationEntity>
 */
class ThemeTranslationCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return ThemeTranslationEntity::class;
    }
}
