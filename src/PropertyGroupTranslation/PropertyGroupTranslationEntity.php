<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\PropertyGroupTranslation;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\Language\LanguageEntity;
use ITB\ShopwareSdkEntity\PropertyGroup\PropertyGroupEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class PropertyGroupTranslationEntity extends Entity
{
    public ?string $description = null;

    public ?LanguageEntity $language = null;

    public ?string $languageId = null;

    public ?string $name = null;

    public ?int $position = null;

    public ?PropertyGroupEntity $propertyGroup = null;

    public ?string $propertyGroupId = null;
}
