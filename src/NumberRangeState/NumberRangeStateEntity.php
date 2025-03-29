<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\NumberRangeState;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\NumberRange\NumberRangeEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class NumberRangeStateEntity extends Entity
{
    public ?int $lastValue = null;

    public ?NumberRangeEntity $numberRange = null;

    public ?string $numberRangeId = null;
}
