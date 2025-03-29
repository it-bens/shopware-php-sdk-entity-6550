<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\UnitTranslation;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\Language\LanguageEntity;
use ITB\ShopwareSdkEntity\Unit\UnitEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class UnitTranslationEntity extends Entity
{
    public ?LanguageEntity $language = null;

    public ?string $languageId = null;

    public ?string $name = null;

    public ?string $shortCode = null;

    public ?UnitEntity $unit = null;

    public ?string $unitId = null;
}
