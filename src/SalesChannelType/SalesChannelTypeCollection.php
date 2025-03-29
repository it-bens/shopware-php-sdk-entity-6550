<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\SalesChannelType;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<SalesChannelTypeEntity>
 */
class SalesChannelTypeCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return SalesChannelTypeEntity::class;
    }
}
