<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\AppScriptConditionTranslation;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\AppScriptCondition\AppScriptConditionEntity;
use ITB\ShopwareSdkEntity\Language\LanguageEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class AppScriptConditionTranslationEntity extends Entity
{
    public ?AppScriptConditionEntity $appScriptCondition = null;

    public ?string $appScriptConditionId = null;

    public ?LanguageEntity $language = null;

    public ?string $languageId = null;

    public ?string $name = null;
}
