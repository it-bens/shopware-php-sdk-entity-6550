<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\NumberRangeTranslation;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\Language\LanguageEntity;
use ITB\ShopwareSdkEntity\NumberRange\NumberRangeEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class NumberRangeTranslationEntity extends Entity
{
    public ?string $description = null;

    public ?LanguageEntity $language = null;

    public ?string $languageId = null;

    public ?string $name = null;

    public ?NumberRangeEntity $numberRange = null;

    public ?string $numberRangeId = null;
}
