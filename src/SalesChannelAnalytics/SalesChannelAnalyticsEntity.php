<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\SalesChannelAnalytics;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\SalesChannel\SalesChannelEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class SalesChannelAnalyticsEntity extends Entity
{
    public ?bool $active = null;

    public ?bool $anonymizeIp = null;

    public ?SalesChannelEntity $salesChannel = null;

    public ?string $trackingId = null;

    public ?bool $trackOrders = null;
}
