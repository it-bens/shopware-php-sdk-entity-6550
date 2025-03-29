<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\NumberRangeSalesChannel;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<NumberRangeSalesChannelEntity>
 */
class NumberRangeSalesChannelCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return NumberRangeSalesChannelEntity::class;
    }
}
