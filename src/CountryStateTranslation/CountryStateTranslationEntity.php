<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\CountryStateTranslation;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\CountryState\CountryStateEntity;
use ITB\ShopwareSdkEntity\Language\LanguageEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class CountryStateTranslationEntity extends Entity
{
    public ?CountryStateEntity $countryState = null;

    public ?string $countryStateId = null;

    public ?LanguageEntity $language = null;

    public ?string $languageId = null;

    public ?string $name = null;
}
