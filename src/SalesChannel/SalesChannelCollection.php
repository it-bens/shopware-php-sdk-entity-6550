<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\SalesChannel;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<SalesChannelEntity>
 */
class SalesChannelCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return SalesChannelEntity::class;
    }
}
