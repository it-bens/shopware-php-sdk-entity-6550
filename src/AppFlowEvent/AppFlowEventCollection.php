<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\AppFlowEvent;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<AppFlowEventEntity>
 */
class AppFlowEventCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return AppFlowEventEntity::class;
    }
}
