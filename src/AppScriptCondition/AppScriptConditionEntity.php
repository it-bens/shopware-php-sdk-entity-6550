<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\AppScriptCondition;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\App\AppEntity;
use ITB\ShopwareSdkEntity\AppScriptConditionTranslation\AppScriptConditionTranslationCollection;
use ITB\ShopwareSdkEntity\RuleCondition\RuleConditionCollection;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class AppScriptConditionEntity extends Entity
{
    public ?bool $active = null;

    public ?AppEntity $app = null;

    public ?string $appId = null;

    public ?array $config = null;

    public ?string $constraints = null;

    public ?string $group = null;

    public ?string $identifier = null;

    public ?string $name = null;

    public ?RuleConditionCollection $ruleConditions = null;

    public ?string $script = null;

    public ?AppScriptConditionTranslationCollection $translations = null;
}
