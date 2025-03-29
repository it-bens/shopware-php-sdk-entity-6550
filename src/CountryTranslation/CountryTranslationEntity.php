<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\CountryTranslation;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\Country\CountryEntity;
use ITB\ShopwareSdkEntity\Language\LanguageEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class CountryTranslationEntity extends Entity
{
    public ?array $addressFormat = null;

    public ?CountryEntity $country = null;

    public ?string $countryId = null;

    public ?LanguageEntity $language = null;

    public ?string $languageId = null;

    public ?string $name = null;
}
