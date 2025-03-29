<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\ThemeTranslation;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\Language\LanguageEntity;
use ITB\ShopwareSdkEntity\Theme\ThemeEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class ThemeTranslationEntity extends Entity
{
    public ?string $description = null;

    public ?array $helpTexts = null;

    public ?array $labels = null;

    public ?LanguageEntity $language = null;

    public ?string $languageId = null;

    public ?ThemeEntity $theme = null;

    public ?string $themeId = null;
}
