<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\PromotionSalesChannel;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\Promotion\PromotionEntity;
use ITB\ShopwareSdkEntity\SalesChannel\SalesChannelEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class PromotionSalesChannelEntity extends Entity
{
    public ?int $priority = null;

    public ?PromotionEntity $promotion = null;

    public ?string $promotionId = null;

    public ?SalesChannelEntity $salesChannel = null;

    public ?string $salesChannelId = null;
}
