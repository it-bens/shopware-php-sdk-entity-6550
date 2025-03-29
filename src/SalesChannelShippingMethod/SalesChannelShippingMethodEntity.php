<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\SalesChannelShippingMethod;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\SalesChannel\SalesChannelEntity;
use ITB\ShopwareSdkEntity\ShippingMethod\ShippingMethodEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class SalesChannelShippingMethodEntity extends Entity
{
    public ?SalesChannelEntity $salesChannel = null;

    public ?string $salesChannelId = null;

    public ?ShippingMethodEntity $shippingMethod = null;

    public ?string $shippingMethodId = null;
}
