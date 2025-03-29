<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\LandingPageSalesChannel;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<LandingPageSalesChannelEntity>
 */
class LandingPageSalesChannelCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return LandingPageSalesChannelEntity::class;
    }
}
