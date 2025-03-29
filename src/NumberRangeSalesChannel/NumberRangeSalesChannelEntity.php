<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\NumberRangeSalesChannel;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\NumberRange\NumberRangeEntity;
use ITB\ShopwareSdkEntity\NumberRangeType\NumberRangeTypeEntity;
use ITB\ShopwareSdkEntity\SalesChannel\SalesChannelEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class NumberRangeSalesChannelEntity extends Entity
{
    public ?NumberRangeEntity $numberRange = null;

    public ?string $numberRangeId = null;

    public ?NumberRangeTypeEntity $numberRangeType = null;

    public ?string $numberRangeTypeId = null;

    public ?SalesChannelEntity $salesChannel = null;

    public ?string $salesChannelId = null;
}
