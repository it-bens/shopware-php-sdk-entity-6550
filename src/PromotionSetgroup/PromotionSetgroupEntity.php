<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\PromotionSetgroup;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\Promotion\PromotionEntity;
use ITB\ShopwareSdkEntity\Rule\RuleCollection;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class PromotionSetgroupEntity extends Entity
{
    public ?string $packagerKey = null;

    public ?PromotionEntity $promotion = null;

    public ?string $promotionId = null;

    public ?RuleCollection $setGroupRules = null;

    public ?string $sorterKey = null;

    public ?float $value = null;
}
