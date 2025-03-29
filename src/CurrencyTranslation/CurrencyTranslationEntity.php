<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\CurrencyTranslation;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\Currency\CurrencyEntity;
use ITB\ShopwareSdkEntity\Language\LanguageEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class CurrencyTranslationEntity extends Entity
{
    public ?CurrencyEntity $currency = null;

    public ?string $currencyId = null;

    public ?LanguageEntity $language = null;

    public ?string $languageId = null;

    public ?string $name = null;

    public ?string $shortName = null;
}
