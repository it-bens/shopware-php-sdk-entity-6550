<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\TaxRuleTypeTranslation;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\Language\LanguageEntity;
use ITB\ShopwareSdkEntity\TaxRuleType\TaxRuleTypeEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class TaxRuleTypeTranslationEntity extends Entity
{
    public ?LanguageEntity $language = null;

    public ?string $languageId = null;

    public ?TaxRuleTypeEntity $taxRuleType = null;

    public ?string $taxRuleTypeId = null;

    public ?string $typeName = null;
}
