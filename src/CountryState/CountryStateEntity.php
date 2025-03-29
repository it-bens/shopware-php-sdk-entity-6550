<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\CountryState;

use ITB\ShopwareSdkDataCore\Entity\Entity;
use ITB\ShopwareSdkEntity\Country\CountryEntity;
use ITB\ShopwareSdkEntity\CountryStateTranslation\CountryStateTranslationCollection;
use ITB\ShopwareSdkEntity\CustomerAddress\CustomerAddressCollection;
use ITB\ShopwareSdkEntity\OrderAddress\OrderAddressCollection;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class CountryStateEntity extends Entity
{
    public ?bool $active = null;

    public ?CountryEntity $country = null;

    public ?string $countryId = null;

    public ?CustomerAddressCollection $customerAddresses = null;

    public ?string $name = null;

    public ?OrderAddressCollection $orderAddresses = null;

    public ?int $position = null;

    public ?string $shortCode = null;

    public ?CountryStateTranslationCollection $translations = null;
}
