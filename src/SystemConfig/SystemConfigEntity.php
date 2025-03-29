<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\SystemConfig;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\SalesChannel\SalesChannelEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class SystemConfigEntity extends Entity
{
    public ?string $configurationKey = null;

    public ?array $configurationValue = null;

    public ?SalesChannelEntity $salesChannel = null;

    public ?string $salesChannelId = null;
}
