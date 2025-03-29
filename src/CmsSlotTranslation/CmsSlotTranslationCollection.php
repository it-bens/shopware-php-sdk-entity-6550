<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\CmsSlotTranslation;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<CmsSlotTranslationEntity>
 */
class CmsSlotTranslationCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return CmsSlotTranslationEntity::class;
    }
}
