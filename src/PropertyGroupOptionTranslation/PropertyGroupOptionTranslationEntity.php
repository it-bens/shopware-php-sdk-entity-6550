<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\PropertyGroupOptionTranslation;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\Language\LanguageEntity;
use ITB\ShopwareSdkEntity\PropertyGroupOption\PropertyGroupOptionEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class PropertyGroupOptionTranslationEntity extends Entity
{
    public ?LanguageEntity $language = null;

    public ?string $languageId = null;

    public ?string $name = null;

    public ?int $position = null;

    public ?PropertyGroupOptionEntity $propertyGroupOption = null;

    public ?string $propertyGroupOptionId = null;
}
