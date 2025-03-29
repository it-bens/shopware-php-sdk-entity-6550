<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\CurrencyCountryRounding;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\Country\CountryEntity;
use ITB\ShopwareSdkEntity\Currency\CurrencyEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class CurrencyCountryRoundingEntity extends Entity
{
    public ?CountryEntity $country = null;

    public ?string $countryId = null;

    public ?CurrencyEntity $currency = null;

    public ?string $currencyId = null;

    public ?array $itemRounding = null;

    public ?array $totalRounding = null;
}
