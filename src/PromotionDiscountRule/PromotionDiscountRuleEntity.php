<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\PromotionDiscountRule;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\PromotionDiscount\PromotionDiscountEntity;
use ITB\ShopwareSdkEntity\Rule\RuleEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class PromotionDiscountRuleEntity extends Entity
{
    public ?PromotionDiscountEntity $discount = null;

    public ?string $discountId = null;

    public ?RuleEntity $rule = null;

    public ?string $ruleId = null;
}
