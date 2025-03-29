<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\CmsPageTranslation;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<CmsPageTranslationEntity>
 */
class CmsPageTranslationCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return CmsPageTranslationEntity::class;
    }
}
