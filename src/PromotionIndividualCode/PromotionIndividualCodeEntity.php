<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\PromotionIndividualCode;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\Promotion\PromotionEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class PromotionIndividualCodeEntity extends Entity
{
    public ?string $code = null;

    public ?array $payload = null;

    public ?PromotionEntity $promotion = null;

    public ?string $promotionId = null;
}
