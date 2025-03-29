<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\PromotionSalesChannel;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<PromotionSalesChannelEntity>
 */
class PromotionSalesChannelCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return PromotionSalesChannelEntity::class;
    }
}
