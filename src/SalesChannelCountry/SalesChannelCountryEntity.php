<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\SalesChannelCountry;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\Country\CountryEntity;
use ITB\ShopwareSdkEntity\SalesChannel\SalesChannelEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class SalesChannelCountryEntity extends Entity
{
    public ?CountryEntity $country = null;

    public ?string $countryId = null;

    public ?SalesChannelEntity $salesChannel = null;

    public ?string $salesChannelId = null;
}
