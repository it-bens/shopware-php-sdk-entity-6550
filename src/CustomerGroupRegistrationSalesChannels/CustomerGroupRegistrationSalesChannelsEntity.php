<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\CustomerGroupRegistrationSalesChannels;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\CustomerGroup\CustomerGroupEntity;
use ITB\ShopwareSdkEntity\SalesChannel\SalesChannelEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class CustomerGroupRegistrationSalesChannelsEntity extends Entity
{
    public ?CustomerGroupEntity $customerGroup = null;

    public ?string $customerGroupId = null;

    public ?SalesChannelEntity $salesChannel = null;

    public ?string $salesChannelId = null;
}
