<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\LandingPageSalesChannel;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\LandingPage\LandingPageEntity;
use ITB\ShopwareSdkEntity\SalesChannel\SalesChannelEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class LandingPageSalesChannelEntity extends Entity
{
    public ?LandingPageEntity $landingPage = null;

    public ?string $landingPageId = null;

    public ?string $landingPageVersionId = null;

    public ?SalesChannelEntity $salesChannel = null;

    public ?string $salesChannelId = null;
}
