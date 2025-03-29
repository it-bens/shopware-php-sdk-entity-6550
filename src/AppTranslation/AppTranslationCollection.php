<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\AppTranslation;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<AppTranslationEntity>
 */
class AppTranslationCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return AppTranslationEntity::class;
    }
}
