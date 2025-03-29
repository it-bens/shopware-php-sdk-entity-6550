<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\NumberRangeTypeTranslation;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\Language\LanguageEntity;
use ITB\ShopwareSdkEntity\NumberRangeType\NumberRangeTypeEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class NumberRangeTypeTranslationEntity extends Entity
{
    public ?LanguageEntity $language = null;

    public ?string $languageId = null;

    public ?NumberRangeTypeEntity $numberRangeType = null;

    public ?string $numberRangeTypeId = null;

    public ?string $typeName = null;
}
