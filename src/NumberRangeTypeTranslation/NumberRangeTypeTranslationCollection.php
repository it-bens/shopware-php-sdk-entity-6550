<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\NumberRangeTypeTranslation;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<NumberRangeTypeTranslationEntity>
 */
class NumberRangeTypeTranslationCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return NumberRangeTypeTranslationEntity::class;
    }
}
