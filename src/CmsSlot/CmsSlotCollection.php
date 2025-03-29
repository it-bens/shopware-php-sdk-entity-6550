<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\CmsSlot;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<CmsSlotEntity>
 */
class CmsSlotCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return CmsSlotEntity::class;
    }
}
