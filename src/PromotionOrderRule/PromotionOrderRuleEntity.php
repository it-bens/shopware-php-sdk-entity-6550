<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\PromotionOrderRule;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\Promotion\PromotionEntity;
use ITB\ShopwareSdkEntity\Rule\RuleEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class PromotionOrderRuleEntity extends Entity
{
    public ?PromotionEntity $promotion = null;

    public ?string $promotionId = null;

    public ?RuleEntity $rule = null;

    public ?string $ruleId = null;
}
