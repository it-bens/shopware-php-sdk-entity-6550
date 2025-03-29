<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\Flow;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<FlowEntity>
 */
class FlowCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return FlowEntity::class;
    }
}
