<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\RuleCondition;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\AppScriptCondition\AppScriptConditionEntity;
use ITB\ShopwareSdkEntity\Rule\RuleEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class RuleConditionEntity extends Entity
{
    public ?AppScriptConditionEntity $appScriptCondition = null;

    public ?RuleConditionCollection $children = null;

    public ?RuleConditionEntity $parent = null;

    public ?string $parentId = null;

    public ?int $position = null;

    public ?RuleEntity $rule = null;

    public ?string $ruleId = null;

    public ?string $scriptId = null;

    public ?string $type = null;

    public ?array $value = null;
}
