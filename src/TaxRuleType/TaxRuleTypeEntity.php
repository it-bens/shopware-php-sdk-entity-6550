<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\TaxRuleType;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\TaxRule\TaxRuleCollection;
use ITB\ShopwareSdkEntity\TaxRuleTypeTranslation\TaxRuleTypeTranslationCollection;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class TaxRuleTypeEntity extends Entity
{
    public ?int $position = null;

    public ?TaxRuleCollection $rules = null;

    public ?string $technicalName = null;

    public ?TaxRuleTypeTranslationCollection $translations = null;

    public ?string $typeName = null;
}
