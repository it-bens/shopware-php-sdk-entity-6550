<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\NumberRange;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<NumberRangeEntity>
 */
class NumberRangeCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return NumberRangeEntity::class;
    }
}
