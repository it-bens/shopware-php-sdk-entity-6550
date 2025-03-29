<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\PromotionSetgroupRule;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\PromotionSetgroup\PromotionSetgroupEntity;
use ITB\ShopwareSdkEntity\Rule\RuleEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class PromotionSetgroupRuleEntity extends Entity
{
    public ?RuleEntity $rule = null;

    public ?string $ruleId = null;

    public ?PromotionSetgroupEntity $setgroup = null;

    public ?string $setgroupId = null;
}
