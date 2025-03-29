<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\NumberRangeState;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<NumberRangeStateEntity>
 */
class NumberRangeStateCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return NumberRangeStateEntity::class;
    }
}
