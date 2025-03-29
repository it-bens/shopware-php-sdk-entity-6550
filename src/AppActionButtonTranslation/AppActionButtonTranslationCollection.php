<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\AppActionButtonTranslation;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<AppActionButtonTranslationEntity>
 */
class AppActionButtonTranslationCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return AppActionButtonTranslationEntity::class;
    }
}
