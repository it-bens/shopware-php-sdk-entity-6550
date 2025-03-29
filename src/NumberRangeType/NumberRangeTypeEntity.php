<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\NumberRangeType;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\NumberRange\NumberRangeCollection;
use ITB\ShopwareSdkEntity\NumberRangeSalesChannel\NumberRangeSalesChannelCollection;
use ITB\ShopwareSdkEntity\NumberRangeTypeTranslation\NumberRangeTypeTranslationCollection;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class NumberRangeTypeEntity extends Entity
{
    public ?bool $global = null;

    public ?NumberRangeCollection $numberRanges = null;

    public ?NumberRangeSalesChannelCollection $numberRangeSalesChannels = null;

    public ?string $technicalName = null;

    public ?NumberRangeTypeTranslationCollection $translations = null;

    public ?string $typeName = null;
}
