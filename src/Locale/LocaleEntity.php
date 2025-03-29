<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\Locale;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\Language\LanguageCollection;
use ITB\ShopwareSdkEntity\LocaleTranslation\LocaleTranslationCollection;
use ITB\ShopwareSdkEntity\User\UserCollection;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class LocaleEntity extends Entity
{
    public ?string $code = null;

    public ?LanguageCollection $languages = null;

    public ?string $name = null;

    public ?string $territory = null;

    public ?LocaleTranslationCollection $translations = null;

    public ?UserCollection $users = null;
}
