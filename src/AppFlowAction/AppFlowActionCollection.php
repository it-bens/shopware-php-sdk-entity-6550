<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\AppFlowAction;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<AppFlowActionEntity>
 */
class AppFlowActionCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return AppFlowActionEntity::class;
    }
}
