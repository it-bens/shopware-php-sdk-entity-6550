<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\NumberRangeType;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<NumberRangeTypeEntity>
 */
class NumberRangeTypeCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return NumberRangeTypeEntity::class;
    }
}
