<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\NumberRange;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\NumberRangeSalesChannel\NumberRangeSalesChannelCollection;
use ITB\ShopwareSdkEntity\NumberRangeState\NumberRangeStateEntity;
use ITB\ShopwareSdkEntity\NumberRangeTranslation\NumberRangeTranslationCollection;
use ITB\ShopwareSdkEntity\NumberRangeType\NumberRangeTypeEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class NumberRangeEntity extends Entity
{
    public ?string $description = null;

    public ?bool $global = null;

    public ?string $name = null;

    public ?NumberRangeSalesChannelCollection $numberRangeSalesChannels = null;

    public ?string $pattern = null;

    public ?int $start = null;

    public ?NumberRangeStateEntity $state = null;

    public ?NumberRangeTranslationCollection $translations = null;

    public ?NumberRangeTypeEntity $type = null;

    public ?string $typeId = null;
}
