<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\LocaleTranslation;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\Language\LanguageEntity;
use ITB\ShopwareSdkEntity\Locale\LocaleEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class LocaleTranslationEntity extends Entity
{
    public ?LanguageEntity $language = null;

    public ?string $languageId = null;

    public ?LocaleEntity $locale = null;

    public ?string $localeId = null;

    public ?string $name = null;

    public ?string $territory = null;
}
