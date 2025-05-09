<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\NumberRangeTranslation;

use ITB\ShopwareSdkDataCore\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @extends EntityCollection<NumberRangeTranslationEntity>
 */
class NumberRangeTranslationCollection extends EntityCollection
{
    #[\Override]
    public function getExpectedClass(): string
    {
        return NumberRangeTranslationEntity::class;
    }
}
